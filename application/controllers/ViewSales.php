<?php
defined('BASEPATH') or exit('No direct script access allowed');
ini_set("memory_limit", "-1");
class ViewSales extends CI_Controller
{
    var $role_id, $user_id;
    
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('model');
        $this->load->model('supermodel');
    }

    public function index()
    {
       
        $this->load->view('view_sales');
       
    }

    public function getsalesrecord()
    {
       
        $data[] = json_encode($_POST);  
        // echo "<pre>";
        // print_r($data);die();
        $from_date = $_POST['from_date'];
        $to_date = $_POST['to_date'];
        
        $rowno = $_POST['start'];
        $rowperpage = $_POST['length'];
        $search_text = $_POST['search']['value'];   
        $totalData=$this->supermodel->getsalesrecord($from_date,$to_date,$rowno,$rowperpage,$search_text);   
        $count_filtered=$this->supermodel->sale_record_count_filtered($from_date,$to_date,$rowno,$rowperpage,$search_text);
        $count_all = $this->supermodel->sale_record_count_all($from_date,$to_date,$rowno,$rowperpage,$search_text);
        $data_array=array();
       
        foreach($totalData as $category_details_key => $data_row)
        {
          
            $invoice = '<span><a href="'.base_url().'Sales/print_sales1?id='.base64_encode($data_row['id']).'" target="_blank">
            <i class="glyphicon glyphicon-download-alt invoice_view" aria-hidden="true" 
             ></i> </a></span>&nbsp;&nbsp;&nbsp;';

            $services='<span><a href="javascript:void(0);" class="edit_service_data" id="'.$data_row['id'].'"><i class="" ></i>'.$data_row['serviceid'].'</a></span>&nbsp;&nbsp;';
               
            $image_documents='<span><a href="'.base_url()."Sales/doc_gallery?id=".base64_encode($data_row['id']).'" id="'.$data_row['id'].'"><i class="glyphicon glyphicon-th-large" ></i></a></span>&nbsp;&nbsp;';
            $nestedData=array();
                $nestedData[] =   $invoice . $image_documents;
                $nestedData[] = ++$category_details_key;
                $nestedData[] = $data_row['company_name'];
                $nestedData[] = $data_row['sale_date'];
                $nestedData[] = $data_row['client_name'];
                $nestedData[] = $services;
                $nestedData[] = $data_row['subserviceid'];
                $nestedData[] = $data_row['mobile_1'].', '.$data_row['mobile_2'].', '.$data_row['alternate_number'];
                $nestedData[] = $data_row['email_address'].', '.$data_row['alternate_email'];
                $nestedData[] = $data_row['gst_no'];
                $nestedData[] = $data_row['deal_id'];
                $nestedData[] = $data_row['invoice_number'];
                // $nestedData[] = $data_row['primary_caller'];
                // $nestedData[] = $data_row['secondary_caller'];
                // $nestedData[] = $data_row['lead_source'];
                $nestedData[] = $data_row['street'];
                $nestedData[] = $data_row['city'];
                $nestedData[] = $data_row['statename'];
                $nestedData[] = $data_row['pincode'];
                $nestedData[] = $data_row['payment_mode'];
                $nestedData[] = $data_row['deal_amount'];
                $nestedData[] = $data_row['amount_received'];
                $nestedData[] = $data_row['outstanding'];
                $nestedData[] = $data_row['tcs'];
                $nestedData[] = $data_row['govt_fees'];
                $nestedData[] = $data_row['associate_fees'];
                $nestedData[] = $data_row['net_income'];
                $nestedData[] = $data_row['gst_amount'];
                $nestedData[] = $data_row['outstanding_followup_date'];
               
                // $nestedData[] = $data_row['invoice_status'];
                // $nestedData[] = $data_row['invoice_name'];
                // $nestedData[] = $data_row['invoice_type'];
                $nestedData[] = $data_row['govt_fee'];
                $nestedData[] = $data_row['professional_fees'];
                $nestedData[] = $data_row['drafting_proceeding_fees'];
                $nestedData[] = $data_row['drafting_proceeding_professional_fees'];
                $nestedData[] = $data_row['total_professional_amount'];
                $nestedData[] = $data_row['cgst'];
                $nestedData[] = $data_row['sgst'];
                $nestedData[] = $data_row['igst'];
                $nestedData[] = $data_row['round_off'];  
                $nestedData[] = $data_row['remarks'];         
            
                $data_array[] = $nestedData;
              
       }
       
      $output = array(
            "draw" => intval($_POST['draw']),
            "recordsTotal" => intval($count_all),
            "recordsFiltered" => intval($count_filtered),
            "data" => $data_array,
        );
        
        // Output to JSON format
        echo json_encode($output);    
    }
    
  public function doc_gallery()
    {
       
        $sales_id=base64_decode($_GET['id']);
        $get_doc_list = $this->model->selectWhereData('sales',array('id'=>$sales_id),array('image_url'),false);
        $data['doc_list']=explode(',',$get_doc_list[0]['image_url']); 
       
        $this->load->view('doc_gallery',$data);
       
    }
    public function get_brand_details()
    {
         $id = $this->input->post('sales_id');
         // echo '<pre>'; print_r($id); exit;
         $sale_service_brand = $this->model->selectWhereData('sale_service_brand',array('fk_service_id'=>$id),array('*'),false);
            foreach ($sale_service_brand as $sale_service_brand_key => $sale_service_brand_row) {
                $sale_service_brand[$sale_service_brand_key]['sale_service_class'] = $this->model->selectWhereData('sale_service_class',array('fk_sale_id'=>$id,'fk_brand_id'=>$sale_service_brand_row['id'],),array('*'),false);
            }
        // echo '<pre>'; print_r($sale_service_brand); exit;
        $data['sale_service_brand'] = $sale_service_brand;
        echo json_encode($data);
    }
    // only for Rashi and Administrator as of now
    public function sales_info()
    {
      
        $this->load->view('header', array('title' => "Sales Info | " . CRM__NAME, 'active' => "sales"));

        $sales_id = $this->input->get('id');
        $sales_id = doubleval($sales_id);

        $sales = $this->db->query("SELECT * from sales where id='$sales_id'");
        $data['sales'] = $sales ? $sales->row_array() : NULL;
        $data['sales_columns'] = $sales ? $sales->list_fields() : NULL;

        $this->load->view('sales-info', $data);
        $this->load->view('footer');
    }

    public function delete_service()
    {
        $user_id = $_POST['id'];
        if($this->model->updateData('sales', array('status' => '0'), array('id' => $user_id)))
        {
            $response['status']='success';
            $response['error']="It was succesfully deleted";
        }else{
            $response['status']='failure';
            $response['error']="Unsuccesfully!";
        }
        echo json_encode($response);
    }

    public function services_info()
    {
        echo "Sales & Services Ids respectively: {$this->input->get('sales_id')} - {$this->input->get('services_id')}";
        echo "<br>TODO: show deal sales info & services backend works info";
    }

    public function sub_services_info()
    {
        echo "Sales & Sub-Services_id & Services Ids respectively: {$this->input->get('sales_id')} - {$this->input->get('sub_services_id')}- {$this->input->get('services_id')}";
        echo "<br>TODO: show deal sales info & services backend works info";
    }

    public function read_deal($deal_row_id)
    {
        echo "Deal Row Id: {$deal_row_id}";
        echo "<br>TODO: show custom 4 column page here...";
    }

    public function add_deal()
    {
        // FETCH: get all services name only & get sub_services using $this->get_background_data();
        $data['services_list'] = $this->model->getData('services', array('status' => '1'));

        // FETCH: get all services name only & get sub_services using $this->get_background_data();
        $data['sub_services_list'] = $this->model->getData('sub_services', array('status' => '1'));

        // FETCH: get all documents name
        $data['document_list'] = $this->model->getData('document_list', array('status' => '1'));

        // FETCH: get all the payment mode names
        $data['payment_mode'] = $this->model->getData('payment_mode', array('status' => '1'));

        // FETCH: get all the invoice status names
        $data['invoice_status'] = $this->model->getData('invoice_status', array('status' => '1'));

        // FETCH: get all the invoice type names
        $data['invoice_type'] = $this->model->getData('invoice_type', array('status' => '1'));

        // FETCH: get all the invoice type names
        $data['users'] =$this->model->getData('sub_services', array('status' => '1'));

        // FETCH: get all the invoice type names
        $data['clients'] = $this->db->query("SELECT id,client_name,mobile_1 FROM clients ORDER BY client_name ASC")->result();

        // FETCH: get all the invoice type names
        $data['state'] = $this->model->getData('tbl_states');

        // FETCH: get all customer executive  
        $data['customer_executive']  = $this->model->getData('customer_executive', array('status' => '1'));
      
        $this->load->view('add_deal_form', $data);
        
    
    }

    function _check_date($value)
    {
        // input: "30/03/2022"
        // $new_value = date('Y-m-d', strtotime($value));

        if(empty($value))
        {
            $this->form_validation->set_message('_check_date', 'The {field} field is required.');
            return FALSE;
        }

        try
        {
            $date = DateTime::createFromFormat('d/m/Y', $value);
            $ifFalse = $date->format('Y-m-d');
            return TRUE;
        }
        catch (Exception $e)
        {
            // echo $e->getMessage();
            // print_r(DateTime::getLastErrors());
            $this->form_validation->set_message('_check_date', 'The {field} field had error: '. $e->getMessage());
            return FALSE;
        }
    }

    function _check_is_array($value)
    {
        // log_message('ERROR',json_encode($value));

        if($value == null || empty($value))
        {
            $this->form_validation->set_message('_check_is_array', 'The {field} field is required.');
            return FALSE;
        }
        return TRUE;
        // if (is_array($value)) return TRUE;
        // else
        // {
        //     $this->form_validation->set_message('_check_is_array', 'The {field} field must be a collection of selections');
        //     return FALSE;
        // }
    }
    // function email_check($str)
    // {
    //     if (stristr($str,'@uni-email-1.com') !== false) return true;
    //     if (stristr($str,'@uni-email-2.com') !== false) return true;
    //     if (stristr($str,'@uni-email-3.com') !== false) return true;
    //         $this->form_validation->set_message('email_address', 'Please provide an acceptable email address.');
    //         return FALSE;
    // }

 public function getcity()
  {
    $state_id = $this->input->post('city');
    $query = $this->model->getData('tbl_cities', array('state_id' => $state_id));
     $html="<option value=''>Select City</option>";
    foreach ($query as $key => $bdd) {
       $html .= "<option value='".$bdd['name']."'>".$bdd['name']."</option>";
     }
   
     echo json_encode($html);
  }

  public function getpincode()
  {
    $City_id = $this->input->post('city');
    $query = $this->supermodel->getpincode($City_id);
    $html="<option value=''>Select Pincode</option>";
    foreach ($query as $key => $bdd) {
       $html .= "<option value='".$bdd['Pincode']."'>".$bdd['Pincode']."</option>";
     }
     
     echo json_encode($html);
  }

  public function getselectedservices()
  {
    $data=array();
    $array_data=array();
    $html="";
    $service_id=$this->input->post('grp');
   // print_r($service_id);die();
    foreach($service_id[0] as $service_id_key => $service_id_row)
    {
        $service_details = $this->model->selectWhereData('services',array('id'=>$service_id_row,'status'=>'1'),array('id','name','brand_name','class_name'));
        $query = $this->model->selectWhereData('sub_services',array('service_id'=>$service_id_row,'status'=>'1'),array('id','name','service_id'),false);
        if(!empty($query))
        {
            $check=array_merge($data,$query);
           
        }
      if(!empty($check)){
        foreach ($check as $key => $bdd) {
            $html .= "<option value='".$bdd['id'].'_'.$bdd['service_id']."'>".$bdd['name']."</option>";
          }
          
        }+
        $data1[$service_id_key]['service_details']=$service_details;
         
    }   
    if(!empty($html)){
        $data1['html']=$html;
    }
   // print_r($data1);die();
     echo json_encode($data1);
  }

  public function getselectedservices_new()
  {
    $data=array();
    $html="";
    $service_id=$this->input->post('service_id');
        $service_details = $this->model->selectWhereData('services',array('id'=>$service_id,'status'=>'1'),array('id','name','brand_name','class_name'));
        $query = $this->model->selectWhereData('sub_services',array('service_id'=>$service_id,'status'=>'1'),array('id','name','service_id'),false);

        if(!empty($query))
        {
            $check=array_merge($data,$query);
           
        }
      if(!empty($check)){
        foreach ($check as $key => $bdd) {
            $html .= "<option value='".$bdd['id'].'_'.$bdd['service_id']."'>".$bdd['name']."</option>";
          }          
        }
        $data1['service_details']=$service_details; 
    if(!empty($html)){
        $data1['html']=$html;
    }
     echo json_encode($data1);
  }


  public function cal_sale_details()
  {
    $deal_amt = $this->input->post('deal_amt');
    $govt_fees = $this->input->post('govt_fees');
    $associate_fees = $this->input->post('associate_fees');
    $state = $this->input->post('state');
    $outstanding=0;$tcs=0;
    
    if(!empty($deal_amt))
    { $deal_amt=$deal_amt;
    }else{ $deal_amt=0; }

    if(!empty($govt_fees))
    { $govt_fees=$govt_fees;
    }else{ $govt_fees=0; }
   
    if(!empty($associate_fees))
    { $associate_fees=$associate_fees;
    }else{ $associate_fees=0; }

    $professionalwithgst=$deal_amt - $govt_fees;
   
    $gstamt=$professionalwithgst/118;
   
    $final_gstamt=round($gstamt * 18);

    $professinal_amt=$professionalwithgst-$final_gstamt;
    //echo 'deal_amt'.$deal_amt.'govt_fees'.$govt_fees.'associate_fees'.$associate_fees.'  '.'professionalwithgst'.$professionalwithgst.'  '.'gstamt'.$gstamt.' '.'final_gstamt'.$final_gstamt.' '.'professinal_amt'.$professinal_amt;die();
    if($associate_fees != 0)
    {
        $final_net_amount=abs($professinal_amt-$associate_fees);
    }else{
        $final_net_amount=abs($professinal_amt);
    }
    
    if($state == 22)
    {
        $net_income=$final_net_amount + $associate_fees;
        $sum= 100;
        $cgst_amt=(($net_income * 18)/$sum);
        $cgst=$cgst_amt/2;
        $sgst=$cgst;  
        $igst=0;
        $gstround=(int)($cgst + $sgst);
        $final_round_off=number_format($gstround-$cgst-$sgst,2);
       $data=array(
        'outstanding'=>$outstanding,
        'tcs'=>$tcs,
        'associate_fees'=>$associate_fees,
        'final_net_amount'=>$final_net_amount,
        'cgst'=>$cgst,
        'sgst'=>$sgst,
        'igst'=>$igst,
        'final_round_off'=>$final_round_off
       );
    }else if($state != 22 && !empty($state)){
        $net_income=$final_net_amount + $associate_fees;
        $sum= 100;
        $cgst_amt=(($net_income * 18)/$sum);
        $igst=$cgst_amt;
        $cgst=0;
        $sgst=0;

        $gstround=(int)($igst);
        $final_round_off=number_format($gstround-$igst,2);
        $data=array(
            'outstanding'=>$outstanding,
            'tcs'=>$tcs,
            'associate_fees'=>$associate_fees,
            'final_net_amount'=>$final_net_amount,
            'cgst'=>$cgst,
            'sgst'=>$sgst,
            'igst'=>$igst,
            'final_round_off'=>$final_round_off
           );
    }else{
        $data=array(
            'msg'=>'Please Select State',
           );
          // print_r();die();
    }
   
    echo json_encode($data);
  }

  public function cal_tcs_outstanding()
  {
    $deal_amt = $this->input->post('deal_amt');
    $amount_received = $this->input->post('amount_received');
    $outstanding=0;
    
    if($amount_received != 0)
    {
        $tcs=abs($deal_amt-$amount_received);
    }
    $data=array(
    'outstanding'=>$outstanding,
    'tcs'=>$tcs,
    );
    
    echo json_encode($data);
  }

  public function cal_client_details()
  {
    
    $professional_fees = $this->input->post('professional_fees');
    $drafting_proceeding_fees = $this->input->post('drafting_proceeding_fees');
    $drafting_proceeding_professional_fees = $this->input->post('drafting_proceeding_professional_fees');
    $state = $this->input->post('state');
    $total_prof_amt=0;

    if(!empty($professional_fees))
    {
        $professional_fees=$professional_fees;
    }else{
        $professional_fees=0;
    }

    if(!empty($drafting_proceeding_fees))
    {
        $drafting_proceeding_fees=$drafting_proceeding_fees;
    }else{
        $drafting_proceeding_fees=0;
    }

    if(!empty($drafting_proceeding_professional_fees))
    {
        $drafting_proceeding_professional_fees=$drafting_proceeding_professional_fees;
    }else{
        $drafting_proceeding_professional_fees=0;
    }
   
      
        //if state Maharastra
        if($state == 22)
        {
            $total_prof_amt=$professional_fees + $drafting_proceeding_fees + $drafting_proceeding_professional_fees;
            $sum= 100;
            $cgst_amt=(($total_prof_amt * 18)/$sum);
            $cgst=$cgst_amt/2;
            $sgst=$cgst;  
            $igst=0;
            $gstround=(int)($cgst + $sgst);
            $final_round_off=number_format($gstround-$cgst-$sgst,2);
            $data=array(
            'total_prof_amt'=>$total_prof_amt,
            'cgst'=>$cgst,
            'sgst'=>$sgst,
            'igst'=>$igst,
            'final_round_off'=>$final_round_off
           );
        }else if($state != 22){

            $total_prof_amt=$professional_fees + $drafting_proceeding_fees + $drafting_proceeding_professional_fees;
            $data['total_prof_amt']=$total_prof_amt;
            $sum= 100;
            $cgst_amt=(($total_prof_amt * 18)/$sum);
            $igst=$cgst_amt;
            $cgst=0;
            $sgst=0;

            $gstround=(int)($igst);
            $final_round_off=number_format($gstround-$igst,2);
            $data=array(
                'total_prof_amt'=>$total_prof_amt,
                'cgst'=>$cgst,
                'sgst'=>$sgst,
                'igst'=>$igst,
                'final_round_off'=>$final_round_off
               );
        }else{
            $data=array(
                'msg'=>'Please Select State',
               );
        }
    
    echo json_encode($data);
  }

  public function save_deal()
    {   
        //print_r($_FILES['image_files']);
        $this->form_validation->set_rules('sale_date', 'Sale Date', 'trim|required',array('required'=>'This field is required'));
          //$this->form_validation->set_rules('image_files[]', 'Image File', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('deal_id', 'Deal Id', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('invoice_no', 'Invoice No', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('primary_caller', 'Primary Caller', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('secondary_caller', 'Secondary Caller', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('lead_source', 'Lead Source', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('legal_remarks', 'Legal Remark', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('accounts_remarks', 'Account Remark', 'trim|required',array('required'=>'This field is required'));
       
        $this->form_validation->set_rules('company_name', 'Company Name', 'trim|required',array('required'=>'This field is required'));
        //$this->form_validation->set_rules('brand_name', 'Brand Name', 'trim|required|is_unique[sales.brand_name]',array('required'=>'This field is required'));
        //$this->form_validation->set_rules('class_name', 'Class Name', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('client_name', 'Client Name', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('mobile_1', 'Mobile 1', 'trim|required|numeric',array('required'=>'This field is required'));
        //$this->form_validation->set_rules('mobile_2', 'Mobile 2', 'trim|required|numeric',array('required'=>'This field is required'));
        //$this->form_validation->set_rules('alternate_number', 'Alternate Number', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email|encode_php_tags',array('required'=>'This field is required'));
        //$this->form_validation->set_rules('email_address1', 'Alternate Address', 'trim|required|valid_email|encode_php_tags',array('required'=>'This field is required'));
       
        $this->form_validation->set_rules('gst_no', 'GST No.', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('street', 'Street', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('city', 'City', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('state', 'State', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('pincode', 'Pincode', 'trim|required|numeric',array('required'=>'This field is required'));
        $this->form_validation->set_rules('deal_amount', 'Deal Amount', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('amount_received', 'Amount Received', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('outstanding', 'Outstanding', 'trim|required|numeric',array('required'=>'This field is required'));
        $this->form_validation->set_rules('tcs', 'TCS', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('govt_fees', 'GOVT Fees', 'trim|required|numeric',array('required'=>'This field is required'));
        $this->form_validation->set_rules('associate_fees', 'Associate Fees', 'trim|required|numeric',array('required'=>'This field is required'));
        $this->form_validation->set_rules('net_income', 'Net Income', 'trim|required|numeric',array('required'=>'This field is required'));
        $this->form_validation->set_rules('gst_amount', 'GST Amount', 'trim|required|numeric',array('required'=>'This field is required'));
        //$this->form_validation->set_rules('outstanding_followup_date', 'Outstanding Followup Date', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('payment_mode', 'Payment Mode', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('invoice_type', 'Invoice Type', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('govt_fee', 'GOVT Fee', 'trim|required|numeric',array('required'=>'This field is required'));
        $this->form_validation->set_rules('professional_fees', 'Professional Fees', 'trim|required|numeric',array('required'=>'This field is required'));
        $this->form_validation->set_rules('drafting_proceeding_fees', 'Drafting Proceeding Fees', 'trim|required|numeric',array('required'=>'This field is required'));
        $this->form_validation->set_rules('drafting_proceeding_professional_fees', 'Drafting Proceeding Professional Fees', 'trim|required|numeric',array('required'=>'This field is required'));
        $this->form_validation->set_rules('total_professional_amount', 'Total Professional Amount', 'trim|required|numeric',array('required'=>'This field is required'));
        $this->form_validation->set_rules('cgst', 'CGST', 'trim|required|numeric',array('required'=>'This field is required'));
        $this->form_validation->set_rules('sgst', 'SGST', 'trim|required|numeric',array('required'=>'This field is required'));
        $this->form_validation->set_rules('igst', 'IGST', 'trim|required|numeric',array('required'=>'This field is required'));
        $this->form_validation->set_rules('round_off', 'Round Off', 'trim|required|numeric',array('required'=>'This field is required'));
        $this->form_validation->set_rules('invoice_name', 'Invoice Name', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('invoice_status', 'Invoice Status', 'trim|required',array('required'=>'This field is required'));
        // $this->form_validation->set_rules('services[]', 'Services', 'trim|required',array('required'=>'This field is required'));
        // $this->form_validation->set_rules('sub_services[]', 'Sub Services', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required',array('required'=>'This field is required'));
        //$this->form_validation->set_rules('document_list[]', 'Document List', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('industry', 'Industry', 'trim|required',array('required'=>'This field is required'));
        //$this->form_validation->set_rules('commission', 'Commission Fees', 'trim|required',array('required'=>'This field is required'));

   
        if ($this->form_validation->run() == FALSE)
        {
                $response['status'] = 'failure';
                $response['error'] = array(
                    'sale_date' => strip_tags(form_error('sale_date')),           
                    'services' => strip_tags(form_error('services[]')),
                    'sub_services' => strip_tags(form_error('sub_services[]')),
                    //'image_files' => strip_tags(form_error('image_files')),
                    'deal_id' => strip_tags(form_error('deal_id')),
                    'invoice_no' => strip_tags(form_error('invoice_no')),
                    'primary_caller' => strip_tags(form_error('primary_caller')),
                    'secondary_caller' => strip_tags(form_error('secondary_caller')),
                    'lead_source' => strip_tags(form_error('lead_source')),
                    'legal_remarks' => strip_tags(form_error('legal_remarks')),
                    'accounts_remarks' => strip_tags(form_error('accounts_remarks')),
                    'company_name' => strip_tags(form_error('company_name')),
                    //'class_name' => strip_tags(form_error('class_name')),
                    'client_name' => strip_tags(form_error('client_name')),
                    'mobile_1' => strip_tags(form_error('mobile_1')),
                    //'mobile_2' => strip_tags(form_error('mobile_2')),
                    //'alternate_number' => strip_tags(form_error('alternate_number')),
                    'email_address' => strip_tags(form_error('email_address')),
                    //'email_address1' => strip_tags(form_error('email_address1')),
                    'gst_no' => strip_tags(form_error('gst_no')),
                    'street' => strip_tags(form_error('street')),
                    'city' => strip_tags(form_error('city')),

                    'state' => strip_tags(form_error('state')),
                    'pincode' => strip_tags(form_error('pincode')),
                    'deal_amount' => strip_tags(form_error('deal_amount')),
                    'amount_received' => strip_tags(form_error('amount_received')),
                    'outstanding' => strip_tags(form_error('outstanding')),
                    'tcs' => strip_tags(form_error('tcs')),
                    'govt_fees' => strip_tags(form_error('govt_fees')),
                    'associate_fees' => strip_tags(form_error('associate_fees')),
                    'net_income' => strip_tags(form_error('net_income')),
                    'gst_amount' => strip_tags(form_error('gst_amount')),
                    //'outstanding_followup_date' => strip_tags(form_error('outstanding_followup_date')),
                    'payment_mode' => strip_tags(form_error('payment_mode')),
                    'invoice_type' => strip_tags(form_error('invoice_type')),
                    //'brand_name' => strip_tags(form_error('brand_name')),
                    'govt_fee' => strip_tags(form_error('govt_fee')),
                    'professional_fees' => strip_tags(form_error('professional_fees')),
                    'drafting_proceeding_fees' => strip_tags(form_error('drafting_proceeding_fees')),
                    'drafting_proceeding_professional_fees' => strip_tags(form_error('drafting_proceeding_professional_fees')),
                    'total_professional_amount' => strip_tags(form_error('total_professional_amount')),
                    'cgst' => strip_tags(form_error('cgst')),
                    'sgst' => strip_tags(form_error('sgst')),
                    'igst' => strip_tags(form_error('igst')),
                    'round_off' => strip_tags(form_error('round_off')),
                    'invoice_name' => strip_tags(form_error('invoice_name')),
                    'invoice_status' => strip_tags(form_error('invoice_status')),
                    'dob' => strip_tags(form_error('dob')),
                    'industry' => strip_tags(form_error('industry')),
                    //'commission' => strip_tags(form_error('commission')),

                );
              
       }
        else
        {
           $product_gallery=$temp= array();
            $sale_date          = $this->input->post('sale_date');
            $client_name        = $this->input->post('client_name');
            $deal_id            = $this->input->post('deal_id');
            $mobile_1           = $this->input->post('mobile_1');
            $mobile_2           = $this->input->post('mobile_2');
            $alternate_number   = $this->input->post('alternate_number');
            $email_address      = $this->input->post('email_address');
            $email_address1      = $this->input->post('email_address1');
            $street             = $this->input->post('street');
            $city               = $this->input->post('city');
            $state              = $this->input->post('state');
            $pincode            = $this->input->post('pincode');
            //$commission            = $this->input->post('commission');
            $dob            = $this->input->post('dob');
            $industry            = $this->input->post('industry');
            $gst_no             = $this->input->post('gst_no');
            $clients_id         = 0;
            $updated_by         = $this->user_id;
            $invoice_number     = $this->input->post('invoice_number');
            $lead_source        = $this->input->post('lead_source');
            $legal_remarks      = $this->input->post('legal_remarks');
            $accounts_remarks   = $this->input->post('accounts_remarks');
            $company_name       = $this->input->post('company_name');
            //$brand_name         = $this->input->post('brand_name');
            //$class_name         = $this->input->post('class_name');
            $deal_amount        = $this->input->post('deal_amount');
            $amount_received    = $this->input->post('amount_received');
            $outstanding        = $this->input->post('outstanding');
            $tcs                = $this->input->post('tcs');
            $govt_fees          = $this->input->post('govt_fees');
            $associate_fees     = $this->input->post('associate_fees');
            $net_income         = $this->input->post('net_income');
            $gst_amount         = $this->input->post('gst_amount');
            $outstanding_followup_date = $this->input->post('outstanding_followup_date');
            $primary_caller     = $this->input->post('primary_caller');
            $secondary_caller   = $this->input->post('secondary_caller');
            $services           = $this->input->post('services[]');
            $sub_services       = $this->input->post('sub_services[]');
            $document_list      = $this->input->post('document_list[]');
            $payment_mode       = $this->input->post('payment_mode');
            $invoice_type       = $this->input->post('invoice_type');
            $govt_fee           = $this->input->post('govt_fee');
            $professional_fees  = $this->input->post('professional_fees');
            $drafting_proceeding_fees = $this->input->post('drafting_proceeding_fees');
            $drafting_proceeding_professional_fees = $this->input->post('drafting_proceeding_professional_fees');
            $total_professional_amount = $this->input->post('total_professional_amount');
            $cgst               = $this->input->post('cgst');
            $sgst               = $this->input->post('sgst');
            $igst               = $this->input->post('igst');
            $round_off          = $this->input->post('round_off');
            $invoice_name       = $this->input->post('invoice_name');
            $invoice_no      = $this->input->post('invoice_no');
            $invoice_status     = $this->input->post('invoice_status');
          
          
            $sub_services     = $this->input->post('sub_services');
            $image_files     = $this->input->post('image_files[]');
            $sale_date          = date('Y-m-d', strtotime($sale_date));
            if ($this->input->post('outstanding_followup_date') !='') {
                $outstanding_followup_date = $this->input->post('outstanding_followup_date');
              }else{
                $outstanding_followup_date = '';  
              }
            $pdfpath = base_url() . "uploads/invoice/".$deal_id."legal_invoice.pdf";

            $countfiles = count($_FILES['image_files']['name']);
                        for ($i = 0;$i < $countfiles;$i++) {
                            if (!empty($_FILES['image_files']['name'][$i])) {
                                $_FILES['file']['name'] = $_FILES['image_files']['name'][$i];
                                $_FILES['file']['type'] = $_FILES['image_files']['type'][$i];
                                $_FILES['file']['tmp_name'] = $_FILES['image_files']['tmp_name'][$i];
                                $_FILES['file']['error'] = $_FILES['image_files']['error'][$i];
                                $_FILES['file']['size'] = $_FILES['image_files']['size'][$i];
                                $config['remove_spaces'] = TRUE;
                                $config['upload_path'] = './uploads/images/';
                                $config['allowed_types'] = 'jpg|jpeg|png';
                                $config['file_name'] =$_FILES['image_files']['name'][$i];
                                $this->load->library('upload', $config);
                                if ($this->upload->do_upload('file')) {
                                    $uploadData = $this->upload->data();
                                    $filename ='LEG_'.$uploadData['file_name'];
                                    //$product_gallery['img_name'] = $filename;
                                    //$product_gallery1 = './uploads/images/' . $filename;
                                    $product_gallery = 'uploads/images/' . $filename;
                                    array_push($temp,$product_gallery);
                                }
                            }
                        }
           $screenshotimages=implode(',',$temp);

           if(!empty($net_income))
           {
            $matches=$net_income+$associate_fees;
           }
           else{
            $matches=0;
           }
            //echo $matches;die();

            if($govt_fees != $govt_fee)
            {
                $response['status']='failure';
                $response['error']=array('msg' => "Goverment Fees Dose Not Match !");
               
            }else if($total_professional_amount != $matches)
            {
                $response['status']='failure';
                $response['error']=array('msg' => "Net Income Does Not Match with the Professional Amount  !");
            }else{
                $this->db->insert("sales", array(
                    'company_name'          => $company_name,
                    //'brand_name'            => $brand_name,
                    //'class_name'            => $class_name,
                    'sale_date'             => $sale_date,
                    'client_name'           => $client_name,
                    'mobile_1'              => $mobile_1,
                    'mobile_2'              => $mobile_2,
                    'alternate_number'      => $alternate_number,
                    'email_address'         => $email_address,
                    'alternate_email'        => $email_address1,
                    'gst_no'                => $gst_no,
                    'deal_id'               => $deal_id,
                    'invoice_number'        => $invoice_number,
                    'primary_caller'        => $primary_caller,
                    'secondary_caller'      => $secondary_caller,
                    'lead_source'           => $lead_source,
                    'street'                => $street,
                    'city'                  => $city,
                    'state'                 => $state,
                    'pincode'               => $pincode,
                    //'commission'            => $commission,
                    'date_of_birth'         => $dob,
                    'industry'              => $industry,
                    // 'clients_id'            => $client,
                    //'services'          => $services,
                    //'sub_services'          => $sub_services,
                    'payment_mode'          => $payment_mode,
                    //'document_list'          => $document_list,
                    'deal_amount'           => $deal_amount,
                    'amount_received'       => $amount_received,
                    'outstanding'           => $outstanding,
                    'tcs'                   => $tcs,
                    'govt_fees'             => $govt_fees,
                    'associate_fees'        => $associate_fees,
                    'net_income'            => $net_income,
                    'gst_amount'            => $gst_amount,
                    'outstanding_followup_date' => $outstanding_followup_date,
                    'legal_remarks'         => $legal_remarks,
                    'accounts_remarks'      => $accounts_remarks,
                    'invoice_status'        => $invoice_status,
                    'invoice_name'          => $invoice_name,
                    'invoice_number'        =>$invoice_no,
                    'invoice_type'          => $invoice_type,
                    'govt_fee'              => $govt_fee,
                    'professional_fees' => $professional_fees,
                    'drafting_proceeding_fees' => $drafting_proceeding_fees,
                    'drafting_proceeding_professional_fees' => $drafting_proceeding_professional_fees,
                    'total_professional_amount' => $total_professional_amount,
                    'cgst'                  => $cgst,
                    'sgst'                  => $sgst,
                    'igst'                  => $igst,
                    'round_off'             => $round_off,
                    // 'clients_id'            => $clients_id,
                    'updated_by'            => $updated_by,
                    'image_url'             =>$screenshotimages,
                    'pdfpath'               =>$pdfpath,
                    'sale_status'           =>'Verified',
                ));
                //echo $this->db->last_query();die();
                if(!empty($the_insert_id = $this->db->insert_id())){
                    $services =  $this->input->post('services');
        $class_name=$this->input->post('class_name');      

        if(!empty($services))
        {
            foreach ($services as $services_key => $services_row) {
                $curl_data = array(
                    'sales_id' =>$the_insert_id,
                    'services_id'=>$services_row
                );
   
                $this->model->insertData('sales_services',$curl_data);
                $brand_name[$services_row] =  $this->input->post('brand_name_'.$services_row);
                $class_name[$services_row] =  $this->input->post('class_name_'.$services_row);                   
            }
        }
     

        if(!empty($brand_name))
        {
            foreach ($brand_name as $brand_name_key => $brand_name_row) {
                $brands_name  = $brand_name_row;
                $class_name_data = $class_name[$brand_name_key];
                foreach ($brands_name as $brands_name_key => $brands_name_row) {
                    // echo '<pre>'; print_r($brands_name_key);
                    $insert_brand_data = array(
                            'fk_sales_id' =>$the_insert_id,
                            'fk_service_id'=>$brand_name_key,
                            'brand_name'=>$brands_name_row,

                        );

                     $brand_last_inserted_id = $this->model->insertData('sale_service_brand',$insert_brand_data); 
                if(!empty($class_name_data)){
                    foreach ($class_name_data as $class_name_data_key => $class_name_data_row) {
                        $class_name_datas = $class_name_data_row;
                        if($brands_name_key == $class_name_data_key){
                            foreach ($class_name_datas as $class_name_datas_key => $class_name_datas_row) {
                                 $insert_class_data = array(
                                    'fk_sale_id' =>$the_insert_id,
                                    'fk_service_id'=>$brand_name_key,
                                    'fk_brand_id'=>$brand_last_inserted_id,
                                    'class_name'=>$class_name_datas_row

                                );
                            
                                $this->model->insertData('sale_service_class',$insert_class_data);
                            }
                        }
                      
                    }
                    }
                }
        }
        }
       
                    if(!empty($sub_services))
                    {
                        foreach($sub_services as $sub_services_key =>$sub_services_row){
                            $sub_services= explode('_',$sub_services_row);
                       
                            foreach($services as $services_key =>$services_row)
                            {
                                if($sub_services[1]==$services_row)
                                {
                                    $this->db->insert("sales_sub_services", array(
                                        'sales_id'          => $the_insert_id,
                                        'services_id'       => $services_row,
                                        'sub_services_id'   => $sub_services[0]
                                    ));
                                }
                            }
   
                        }
                    }                              
               
                    $response['status']='success';
                    $response['error']=array('msg' => "Sale Report Inserted Successfully !");
                }
                else{
                    $response['status']='failure';
                    $response['error']=array('msg' => "Sale Report Inserted UnSuccessfully !");
                }
               
            }
        }
        //print_r($response);die();
        echo json_encode($response);
      
    }

    
    public function get_sub_services()
    {
        // check request is post
        if (!$this->input->is_ajax_request()) 
        {
            echo (json_encode(array(
                'message' => '<span class="text-danger">Request fail...</span>',
                'status' => false
            )));
            exit();
        }


        if(!is_array($this->input->post('selected_services')))
        {
            echo (json_encode(array(
                'message' => '<span class="text-danger">No Services Selected, please select at least one service...</span>',
                'status' => false
            )));
            exit();
        }

        $string_services = "";
        $selected_services = $this->input->post('selected_services');

        foreach ($selected_services as $serv) $string_services .= "'{$serv}',";
        $string_services = rtrim($string_services, ',');

        // FETCH: get all sub_services based on services selections by user
        $get_sub_services = $this->db->query("SELECT id,name from sub_services where service_id in ({$string_services})")->result_array();

        if ($get_sub_services) {
            echo (json_encode(array(
                'message' => '<span class="text-success">Sub-Subservices successfully build based on Services selections...</span>',
                // 'result' => json_encode(serialize($get_sub_services)),
                'result' => $get_sub_services,
                'status' => true
            )));
            exit();
        } 
        else
        {
            echo (json_encode(array(
                'message' => '<span class="text-danger">No Sub-Services found for all of the selected services...</span>',
                'status' => false
            )));
            exit();
        }
    }

    // ==============upload excel file in Kit item=====================
    public function do_upload()
    {
        $uploadarraydata = array();
               
        error_reporting(0);
        $this->load->library('excel');
        if (!empty($_FILES["file1"]["name"])) {
            $path = $_FILES["file1"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);
            foreach ($object->getWorksheetIterator() as $objWorksheet) {
                
                $highestRow = $objWorksheet->getHighestRow();
                $highestColumn = $objWorksheet->getHighestColumn();
                $img = 0;

                
                for ($i = 2;$i <= $highestRow;$i++) {
                    if (!empty($objWorksheet->getCellByColumnAndRow(1, $i)->getValue()) && ($object->getIndex($objWorksheet) == '0')) {
                            $date=date('m/d/Y', PHPExcel_Shared_Date::ExcelToPHP($objWorksheet->getCellByColumnAndRow(0, $i)->getValue()));    
                            $services= $objWorksheet->getCellByColumnAndRow(1,$i)->getValue();
                            $company_name=$objWorksheet->getCellByColumnAndRow(2,$i)->getValue();
                            $brand_name=$objWorksheet->getCellByColumnAndRow(3,$i)->getValue();
                            $client_name=$objWorksheet->getCellByColumnAndRow(4,$i)->getValue();
                            $mobile_number=$objWorksheet->getCellByColumnAndRow(5,$i)->getValue();
                            $email_id=$objWorksheet->getCellByColumnAndRow(6,$i)->getValue();
                            $gst=$objWorksheet->getCellByColumnAndRow(7,$i)->getValue();
                            $deal_id=$objWorksheet->getCellByColumnAndRow(8,$i)->getValue();
                            $invoice_no=$objWorksheet->getCellByColumnAndRow(9,$i)->getValue();
                            $representative=$objWorksheet->getCellByColumnAndRow(10,$i)->getValue();
                            $source=$objWorksheet->getCellByColumnAndRow(11,$i)->getValue();
                            $city=$objWorksheet->getCellByColumnAndRow(12,$i)->getValue();
                            $state=$objWorksheet->getCellByColumnAndRow(13,$i)->getValue();
                            $mode=$objWorksheet->getCellByColumnAndRow(14,$i)->getValue();
                            $deal_amount=$objWorksheet->getCellByColumnAndRow(15,$i)->getValue();
                            $amount_received=$objWorksheet->getCellByColumnAndRow(16,$i)->getValue();
                            $outstanding=$objWorksheet->getCellByColumnAndRow(17,$i)->getValue();
                            $tcs=$objWorksheet->getCellByColumnAndRow(18,$i)->getValue();
                            $govt_fees=$objWorksheet->getCellByColumnAndRow(19,$i)->getValue();
                            $associate_fees=$objWorksheet->getCellByColumnAndRow(20,$i)->getValue();
                            $net_income=$objWorksheet->getCellByColumnAndRow(21,$i)->getValue();
                            $govt_fee=$objWorksheet->getCellByColumnAndRow(22,$i)->getValue();
                            $professional_fees=$objWorksheet->getCellByColumnAndRow(23,$i)->getValue();
                            $drafting_proceeding_fees=$objWorksheet->getCellByColumnAndRow(24,$i)->getValue();
                            $drafting_proceeding_professional_fees=$objWorksheet->getCellByColumnAndRow(25,$i)->getValue();
                            $total_professional_amount=$objWorksheet->getCellByColumnAndRow(26,$i)->getValue();
                            $cgst=$objWorksheet->getCellByColumnAndRow(27,$i)->getValue();
                            $sgst=$objWorksheet->getCellByColumnAndRow(28,$i)->getValue();
                            $igst=$objWorksheet->getCellByColumnAndRow(29,$i)->getValue();
                            $round_off=$objWorksheet->getCellByColumnAndRow(30,$i)->getValue();
                            $invoice=$objWorksheet->getCellByColumnAndRow(31,$i)->getValue();
                            $legal_remarks=$objWorksheet->getCellByColumnAndRow(32,$i)->getValue();
                            $account=$objWorksheet->getCellByColumnAndRow(33,$i)->getValue();
                            $invoice_mail_status=$objWorksheet->getCellByColumnAndRow(34,$i)->getValue();
                            $gag_recieved=$objWorksheet->getCellByColumnAndRow(35,$i)->getValue();
                            $bifurcation=$objWorksheet->getCellByColumnAndRow(36,$i)->getValue();
                            
                            $state_id=$this->model->selectWhereData('tbl_states',array('name'=>$state),array('id'));
                            $city_id=$this->model->selectWhereData('tbl_cities',array('name'=>$city),array('id'));
                            if($state_id['id'] == 22)
                            {
                                $sum= 100;
                                $cgst_amt=(($total_professional_amount * 18)/$sum);
                                $cgst=$cgst_amt/2;
                                $sgst=$cgst;  
                                $igst=0;
                               
                            }else{
                                $sum= 100;
                                $cgst_amt=(($total_professional_amount * 18)/$sum);
                                $igst=$cgst_amt;
                                $cgst=0;
                                $sgst=0;
                            }

                            $data_user=array(
                                'sale_date'=>$date,
                                'services'=>$services,
                                'company_name'=>$company_name,
                                'brand_name'=>$brand_name,
                                'client_name'=>$client_name,
                                'mobile_1'=>$mobile_number,
                                'email_address'=>$email_id,
                                'gst_no'=>$gst,
                                'deal_id'=>$deal_id,
                                'invoice_number'=>$invoice_no,
                                'primary_caller'=>$representative,
                                //'source'=>$source,
                                'city'=>$city_id['id'],
                                'state'=>$state_id['id'],
                                'payment_mode'=>$mode,
                                'deal_amount'=>$deal_amount,
                                'amount_received'=>$amount_received,
                                'outstanding'=>$outstanding,
                                'tcs'=>$tcs,
                                'govt_fees'=>$govt_fees,
                                'associate_fees'=>$associate_fees,
                                'net_income'=>$net_income,
                                'govt_fee'=>$govt_fee,
                                'professional_fees'=>$professinal_amt,
                                'drafting_proceeding_fees'=>$drafting_proceeding_fees,
                                'drafting_proceeding_professional_fees'=>$drafting_proceeding_professional_fees,
                                'total_professional_amount'=>$total_professional_amount,
                                'cgst'=>$cgst,
                                'sgst'=>$sgst,
                                'igst'=>$igst,
                                'round_off'=>$round_off,
                                'invoice_name'=>$invoice,
                                'legal_remarks'=>$legal_remarks,
                                'account'=>$account,
                                'invoice_mail_status'=>$invoice_mail_status,
                                'gag_recieved'=>$gag_recieved,
                                'bifurcation'=>$bifurcation,
                            );
                            array_push($uploadarraydata, $data_user); 
                    }
                        print_r($data_user);
                      
                        // $this->supermodel->Add_tempdata($uploadarraydata);
                        // $response['status']='success';
                        // $response['error']=count($uploadarraydata).' rows uploaded successfully.';
                        
                    }die();
                    
            }
        }
        else{
            $msg = "Attach file to upload";
            $response['status']='success';
            $response['error']=$msg;
          }           
    }

    public function getbrandclasslst($id)
	{
       $data = $id;
       echo json_encode($data);
	}

    public function getsalesdocimages()
	{
       $sale_id =$this->input->post('id');
       $data=$this->model->selectWhereData('sales',array('id'=>$sale_id),array('image_url'));
       $image_doc=explode(',',$data['image_url']);
       echo json_encode($image_doc);
	}

    public function getsalesrecord1()
    {
        $data[] = json_encode($_POST);  
      
        $id = $_POST['id'];
    
        $rowno = $_GET['start'];
        $rowperpage = $_GET['length'];
        $search_text = $_GET['search']['value']; 
        //echo $search_text;die();
        $totalData=$this->supermodel->get_brandandclass_bysale($id,$rowno,$rowperpage,$search_text);     
        $count_filtered=$this->supermodel->get_brandandclass_count_filtered($id,$rowno,$rowperpage,$search_text);
        $count_all = $this->supermodel->get_brandandclass_countall($id,$rowno,$rowperpage,$search_text);
        $data_array=array();
       
        foreach($totalData as $category_details_key => $data_row)
        {
           
                $nestedData=array();
                $nestedData[] = ++$category_details_key;
                $nestedData[] = $data_row['services'];
                $nestedData[] = $data_row['brand_name'];
                $nestedData[] = $data_row['class_name'];
                $data_array[] = $nestedData;
              
       }
       
      $output = array(
            "draw" => intval($_POST['draw']),
            "recordsTotal" => intval($count_all),
            "recordsFiltered" => intval($count_filtered),
            "data" => $data_array,
        );
        
        // Output to JSON format
        echo json_encode($output);    
    }

    public function get_background_data()
    {
        // check request is post
        if (!$this->input->is_ajax_request()) 
        {
            echo (json_encode(array(
                'message' => '<span class="text-danger">Request fail...</span>',
                'status' => false
            )));
            exit();
        }

        // FETCH: get all users to show in primary caller 1 & 2
        $get_all_users = $this->db->query("SELECT user_id,username from users order by username asc")->result_array();

        if ($get_all_users) {
            echo (json_encode(array(
                'message' => '<span class="text-success">Primary Caller fetched, please selct only one user...</span>',
                'result' => $get_all_users,
                'status' => true
            )));
            exit();
        } 
        else
        {
            echo (json_encode(array(
                'message' => '<span class="text-danger">Sorry!, no Users found!...</span>',
                'status' => false
            )));
            exit();
        }
    }

    function dealid()
    {
        $hello = 1;
        $startDate = date('Y-m-d H:i:s',strtotime('first day of april'));
        //$endDate = date('Y-m-d H:i:s',strtotime('next year, first day of april,'));
        $endDate='2023-04-01 23:00:59';
        $currentdate='2023-04-01 23:00:59';
        //echo $currentdate;die();
        //$date = date('Y-m-d H:i:s');

        $i = 0;
        while ($i < 4) {
            echo "$i";
            $i++;
            if($currentdate == $endDate)
            { 
                $i=0; 
            }
         }
        
        // for ($i=0; $i < 10; $i++) {
        //     echo $hello++; 
        //      if($currentdate == $endDate)
        //     {
        //         $i=0; 
        //     }
        //     echo "<br>";
        // }
       
    }
// Update Sales Details
    public function edit_sales()
    {
        $id = base64_decode($_GET['id']);
        $this->load->model('supermodel');
        $data['services_list'] = $this->model->getData('services', array('status' => '1'));
        $data['sales_data'] = $this->supermodel->edit_sales_data($id);
        $data['sale_service'] = $this->supermodel->get_sale_service($id);
        $sale_service_id =  explode(',',$data['sale_service']['services_id']);
        foreach ($sale_service_id as $sale_service_id_key => $sale_service_id_row) {
                $data['sub_services_list'] = $this->model->getData('sub_services', array('status' => '1','service_id'=>$sale_service_id_row));
        }
        $data['sale_sub_service'] = $this->supermodel->get_sale_sub_service($id);
        $sale_service_brand = $this->model->selectWhereData('sale_service_brand',array('fk_sales_id'=>$id),array('*'),false);
        foreach ($sale_service_brand as $sale_service_brand_key => $sale_service_brand_row) {
                    $sale_service_class = $this->model->selectWhereData('sale_service_class',array('fk_sale_id'=>$id,'fk_brand_id'=>$sale_service_brand_row['id'],),array('*'),false);
                    if(!empty($sale_service_class)){
                         foreach (@$sale_service_class as $sale_service_class_key => $sale_service_class_row) {

                            if($sale_service_brand_row['id']==$sale_service_class_row['fk_brand_id']){
                       
                                $sale_service_brand[$sale_service_brand_key]['class_name'][] = $sale_service_class_row['class_name'];
                                $sale_service_brand[$sale_service_brand_key]['class_name_id'][] = $sale_service_class_row['id'];
                                $sale_service_brand[$sale_service_brand_key]['sale_service_class']  = implode(",",$sale_service_brand[$sale_service_brand_key]['class_name']);
                                $sale_service_brand[$sale_service_brand_key]['sale_service_class_name_id']  = implode(",",$sale_service_brand[$sale_service_brand_key]['class_name_id']);
                            }            
                        }  
                    }                        
             }  
        $data['sale_service_brand'] = $sale_service_brand;
        $data['state'] = $this->model->getData('tbl_states');
        $data['city'] = $this->model->selectWhereData('tbl_cities',array('state_id'=>$data['sales_data']['state']),array('*'),false);
        $data['pincode'] = $this->model->selectWhereData('location',array('city'=>$data['sales_data']['city']),array('*'),false);
        $data['customer_executive']  = $this->model->selectWhereData('customer_executive', array('status' => '1'),array('id','name'),false);
        $data['payment_mode'] = $this->model->getData('payment_mode', array('status' => '1'));
        $data['invoice_status'] = $this->model->getData('invoice_status', array('status' => '1'));
        $data['invoice_type'] = $this->model->getData('invoice_type', array('status' => '1'));
        $data['id']=$id;
        $this->load->view('update_sales',$data);
    }
     function alpha_dash_space($fullname){
        if (! preg_match('/^[a-zA-Z\s]+$/', $fullname)) {
            $this->form_validation->set_message('alpha_dash_space', 'The %s field may only contain alpha characters & White spaces');
            return FALSE;
        } else {
            return TRUE;
        }
    }
    public function update_sales_deal()
    {
       $id = $this->input->post('id');
       $sale_date = $this->input->post('sale_date');
       $client_name = $this->input->post('client_name');
       $deal_id = $this->input->post('deal_id');
       $mobile_1 = $this->input->post('mobile_1');
       $mobile_2 = $this->input->post('mobile_2');
       $alternate_number = $this->input->post('alternate_number');
       $email_address = $this->input->post('email_address');
       $email_address1 = $this->input->post('email_address1');
       $street = $this->input->post('street');
       $state = $this->input->post('state');
       $city = $this->input->post('city');
       $pincode = $this->input->post('pincode');
       $gst_no = $this->input->post('gst_no');
       $dob = $this->input->post('dob');
       $industry = $this->input->post('industry');
       $invoice_no = $this->input->post('invoice_no');
       $lead_source = $this->input->post('lead_source');
       $legal_remarks = $this->input->post('legal_remarks');
       $accounts_remarks = $this->input->post('accounts_remarks');
       $company_name = $this->input->post('company_name');
       $deal_amount = $this->input->post('deal_amount');
       $amount_received = $this->input->post('amount_received');
       $outstanding = $this->input->post('outstanding');
       $tcs = $this->input->post('tcs');
       $govt_fees = $this->input->post('govt_fees');
       $associate_fees = $this->input->post('associate_fees');
       $net_income = $this->input->post('net_income');
       $gst_amount = $this->input->post('gst_amount');
       $outstanding_followup_date = $this->input->post('outstanding_followup_date');
       $primary_caller = $this->input->post('primary_caller');
       $secondary_caller = $this->input->post('secondary_caller');
       $services = $this->input->post('services');
       $payment_mode = $this->input->post('payment_mode');
       $invoice_type = $this->input->post('invoice_type');
       $invoice_status = $this->input->post('invoice_status');
       $invoice_name = $this->input->post('invoice_name');
       $govt_fee = $this->input->post('govt_fee');
       $professional_fees = $this->input->post('professional_fees');
       $drafting_proceeding_fees = $this->input->post('drafting_proceeding_fees');
       $drafting_proceeding_professional_fees = $this->input->post('drafting_proceeding_professional_fees');
       $total_professional_amount = $this->input->post('total_professional_amount');
       $cgst = $this->input->post('cgst');
       $sgst = $this->input->post('sgst');
       $igst = $this->input->post('igst');
       $round_off = $this->input->post('round_off');
       $round_off = $this->input->post('round_off');
       $round_off = $this->input->post('round_off');
       echo '<pre>'; print_r($_POST); exit;
        $this->form_validation->set_rules('sale_date', 'Sales', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('client_name', 'Client Name', 'required|trim|callback_alpha_dash_space', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('deal_id', 'Deal Id', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('mobile_1', 'Mobile No. 1', 'required|trim|numeric|exact_length[10]', array('required' => 'You must provide a %s','numeric' => 'Contact Number should be 10 digit number','exact_length' => 'Contact Number should be 10 digit number',));
        $this->form_validation->set_rules('mobile_2', 'Mobile No. 2', 'required|trim|numeric|exact_length[10]', array('required' => 'You must provide a %s','numeric' => 'Contact Number should be 10 digit number','exact_length' => 'Contact Number should be 10 digit number',));
        $this->form_validation->set_rules('alternate_number', 'Alternate Number', 'required|trim|numeric|exact_length[10]', array('required' => 'You must provide a %s','numeric' => 'Contact Number should be 10 digit number','exact_length' => 'Contact Number should be 10 digit number',));
        $this->form_validation->set_rules('email_address', 'Email Address', 'required|trim|valid_email', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('email_address1', 'Alternate Email Address', 'required|trim|valid_email', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('street', 'Street', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('state', 'State', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('city', 'City', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('pincode', 'Pincode', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('gst_no', 'GST No', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('dob', 'DOB', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('industry', 'Industry', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('invoice_no', 'Invoice Number', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('lead_source', 'Lead Source', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('legal_remarks', 'Legal Remark', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('accounts_remarks', 'Account Remark', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('company_name', 'Company Name', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('deal_amount', 'Deal Amount', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('amount_received', 'Amount Received', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('outstanding', 'Outstanding', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('tcs', 'TCS', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('govt_fees', 'Govt. Fees', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('associate_fees', 'Associate fees', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('net_income', 'Net Income', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('gst_amount', 'GST Amount', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('outstanding_followup_date', 'Outstanding followup date', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('primary_caller', 'Primary Caller', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('secondary_caller', 'Secondary Caller', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('payment_mode', 'Payment Mode', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('invoice_type', 'Invoice Type', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('invoice_status', 'Invoice Status', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('invoice_name', 'Invoice Name', 'required|trim|callback_alpha_dash_space', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('govt_fee', 'GOVT Fee', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('professional_fees', 'Professional Fees', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('drafting_proceeding_fees', 'Drafting / Proceeding Fees', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('drafting_proceeding_professional_fees', 'Drafting / Proceeding / Professional Fees', 'required|trim', array('required' => 'You must provide a %s',));
        $this->form_validation->set_rules('total_professional_amount', 'Total Professional Amount', 'required|trim', array('required' => 'You must provide a %s',));

        // if($state==22){
        //     $this->form_validation->set_rules('cgst', 'CGST', 'required|trim', array('required' => 'You must provide a %s',));
        //     $this->form_validation->set_rules('sgst', 'SGST', 'required|trim', array('required' => 'You must provide a %s',));
        //     $this->form_validation->set_rules('igst', 'IGST', 'trim', array('required' => 'You must provide a %s',));
        // }else{
        //     $this->form_validation->set_rules('cgst', 'CGST', 'trim', array('required' => 'You must provide a %s',));
        //     $this->form_validation->set_rules('sgst', 'SGST', 'trim', array('required' => 'You must provide a %s',));
        //     $this->form_validation->set_rules('igst', 'IGST', 'required|trim', array('required' => 'You must provide a %s',));
        // }
        $this->form_validation->set_rules('round_off', 'Round Off', 'required|trim', array('required' => 'You must provide a %s',));
        if ($this->form_validation->run() == false) {
            $response['status'] = 'failure';
            $response['error'] = array(
                'sale_date' => strip_tags(form_error('sale_date')),
                'client_name' => strip_tags(form_error('client_name')),
                'deal_id' => strip_tags(form_error('deal_id')),
                'mobile_1' => strip_tags(form_error('mobile_1')),
                'mobile_2' => strip_tags(form_error('mobile_2')),
                'alternate_number' => strip_tags(form_error('alternate_number')),
                'email_address' => strip_tags(form_error('email_address')),
                'email_address1' => strip_tags(form_error('email_address1')),
                'street' => strip_tags(form_error('street')),
                'state' => strip_tags(form_error('state')),
                'city' => strip_tags(form_error('city')),
                'pincode' => strip_tags(form_error('pincode')),
                'gst_no' => strip_tags(form_error('gst_no')),
                'dob' => strip_tags(form_error('dob')),
                'industry' => strip_tags(form_error('industry')),
                'invoice_no' => strip_tags(form_error('invoice_no')),
                'lead_source' => strip_tags(form_error('lead_source')),
                'legal_remarks' => strip_tags(form_error('legal_remarks')),
                'accounts_remarks' => strip_tags(form_error('accounts_remarks')),
                'company_name' => strip_tags(form_error('company_name')),
                'deal_amount' => strip_tags(form_error('deal_amount')),
                'amount_received' => strip_tags(form_error('amount_received')),
                'outstanding' => strip_tags(form_error('outstanding')),
                'tcs' => strip_tags(form_error('tcs')),
                'govt_fees' => strip_tags(form_error('govt_fees')),
                'associate_fees' => strip_tags(form_error('associate_fees')),
                'net_income' => strip_tags(form_error('net_income')),
                'gst_amount' => strip_tags(form_error('gst_amount')),
                'outstanding_followup_date' => strip_tags(form_error('outstanding_followup_date')),
                'primary_caller' => strip_tags(form_error('primary_caller')),
                'secondary_caller' => strip_tags(form_error('secondary_caller')),
                'payment_mode' => strip_tags(form_error('payment_mode')),
                'invoice_type' => strip_tags(form_error('invoice_type')),
                'invoice_status' => strip_tags(form_error('invoice_status')),
                'invoice_name' => strip_tags(form_error('invoice_name')),
                'govt_fee' => strip_tags(form_error('govt_fee')),
                'professional_fees' => strip_tags(form_error('professional_fees')),
                'drafting_proceeding_fees' => strip_tags(form_error('drafting_proceeding_fees')),
                'drafting_proceeding_professional_fees' => strip_tags(form_error('drafting_proceeding_professional_fees')),
                'total_professional_amount' => strip_tags(form_error('total_professional_amount')),
                // 'cgst' => strip_tags(form_error('cgst')),
                // 'sgst' => strip_tags(form_error('sgst')),
                // 'igst' => strip_tags(form_error('igst')),
                'round_off' => strip_tags(form_error('round_off')),  
            );
        }else{
            $curl_data = array(
                    'sale_date'=>$sale_date,
                    'client_name'=>$client_name,
                    'deal_id'=> $deal_id,
                    'mobile_1'=> $mobile_1,
                    'mobile_2'=> $mobile_2,
                    'alternate_number'=> $alternate_number,
                    'email_address'=> $email_address,
                    'alternate_email'=> $email_address1,
                    'street'=> $street,
                    'state'=> $state,
                    'city'=> $city,
                    'pincode'=> $pincode,
                    'gst_no'=>$gst_no,
                    'date_of_birth'=>$dob,
                    'industry'=>$industry,
                    'invoice_number'=>$invoice_no,
                    'lead_source'=>$lead_source,
                    'legal_remarks'=>$legal_remarks,
                    'accounts_remarks'=>$accounts_remarks,
                    'company_name'=>$company_name,
                    'deal_amount'=>$deal_amount,
                    'amount_received'=>$amount_received,
                    'outstanding'=>$outstanding,
                    'tcs'=>$tcs,
                    'govt_fees'=>$govt_fees,
                    'associate_fees'=>$associate_fees,
                    'net_income'=>$net_income,
                    'gst_amount'=>$gst_amount,
                    'outstanding_followup_date'=>$outstanding_followup_date,
                    'primary_caller'=>$primary_caller,
                    'secondary_caller'=>$secondary_caller,
                    'payment_mode'=>$payment_mode,
                    'invoice_type'=>$invoice_type,
                    'invoice_status'=>$invoice_status,
                    'invoice_name'=>$invoice_name,
                    'govt_fee'=>$govt_fee,
                    'professional_fees'=>$professional_fees,
                    'drafting_proceeding_fees'=>$drafting_proceeding_fees,
                    'drafting_proceeding_professional_fees'=>$drafting_proceeding_professional_fees,
                    'total_professional_amount'=>$total_professional_amount,
                    'cgst'=>$cgst,
                    'sgst'=>$sgst,
                    'igst'=>$igst,
                    'round_off'=>$round_off,
                );
            // echo '<pre>'; print_r($curl_data); exit;
               $this->model->updateData('sales',$curl_data,array('id'=>$id));
        }

    }
    
}