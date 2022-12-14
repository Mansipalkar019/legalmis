<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sales extends CI_Controller
{
    var $role_id, $user_id;
    
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('model');
        $this->load->model('supermodel');
        if (!$this->session->has_userdata('user_id')) redirect('');

        $this->role_id = intval($this->encryption->decrypt($this->session->userdata('role_id')));
        $this->user_id = intval($this->encryption->decrypt($this->session->userdata('user_id')));
        if ($this->role_id == 1 || $this->role_id == 3); // grant access
        else redirect('');
    }

    public function index()
    {
        if ($this->role_id == 1 || $this->role_id == 3); // grant access
        else redirect('dashboard');
       
        //$data['sales_columns'] = $sales ? $sales->list_fields() : NULL;
        // echo "<pre>";
        // print_r($data);die();
     
        $this->load->view('sales-index');
       
    }

    public function print_sales1()
    {
        if ($this->role_id == 1 || $this->role_id == 3); // grant access
        else redirect('dashboard');
       
        //$data['sales_columns'] = $sales ? $sales->list_fields() : NULL;
        // echo "<pre>";
        // print_r($data);die();
     
        $this->load->view('printinvoice/print_sale_page1');
       
    }

    public function print_sales2()
    {
        if ($this->role_id == 1 || $this->role_id == 3); // grant access
        else redirect('dashboard');
       
        //$data['sales_columns'] = $sales ? $sales->list_fields() : NULL;
        // echo "<pre>";
        // print_r($data);die();
     
        $this->load->view('printinvoice/print_sale_page2');
       
    }

    public function print_sales3()
    {
        if ($this->role_id == 1 || $this->role_id == 3); // grant access
        else redirect('dashboard');
       
        //$data['sales_columns'] = $sales ? $sales->list_fields() : NULL;
        // echo "<pre>";
        // print_r($data);die();
     
        $this->load->view('printinvoice/print_sale_page3');
       
    }

    public function getsalesrecord()
    {
      $totalData=  $this->model->getAllData('sales');
       
       $sql=" SELECT * FROM sales WHERE status='0' ";
       if(!empty($_POST['search']['value']))
       {
            $sql.="WHERE company_name LIKE '%".$_POST['search']['value']."%' or deal_id LIKE '%".$_POST['search']['value']."%'";
       }
       $totalFiltered=$this->model->count_by_query($sql);
       $sql.= " ORDER BY company_name " . $_POST['order'][0]['dir'] . " LIMIT " . $_POST['start'] . " ," . $_POST['length'] . " ";
       $category_details = $this->model->getSqlData($sql);

       $data_array=array();
       foreach($category_details as $category_details_key => $data_row)
       {
        $nestedData=array();

        $edit = '<span><a href="javascript:void(0);" >
        <i class="glyphicon glyphicon-pencil a_category_view" aria-hidden="true" data-toggle="modal"
        data-target="#myModal" id="'.$data_row['id'].'"></i> </a></span>&nbsp;&nbsp;';
        $delete = "<span><a href='#' onclick='delete_sales_report(this," . $data_row['id'] . ")'><i class='glyphicon glyphicon-trash'></i></a></span>";
        $nestedData[] =  $edit . $delete;
        $nestedData[]=++$category_details_key;
        $nestedData[] = $data_row['company_name'];
        $nestedData[] = $data_row['brand_name'];
        $nestedData[] = $data_row['class_name'];
        $nestedData[] = $data_row['sale_date'];
        $nestedData[] = $data_row['client_name'];
        $nestedData[] = $data_row['mobile_1'].', '.$data_row['mobile_2'].', '.$data_row['alternate_number'];
        $nestedData[] = $data_row['email_address'].', '.$data_row['alternate_number'];
        $nestedData[] = $data_row['gst_no'];
        $nestedData[] = $data_row['deal_id'];
        $nestedData[] = $data_row['invoice_number'];
        $nestedData[] = $data_row['primary_caller'];
        $nestedData[] = $data_row['secondary_caller'];
        $nestedData[] = $data_row['lead_source'];
        $nestedData[] = $data_row['street'];
        $nestedData[] = $data_row['city'];
        $nestedData[] = $data_row['state'];
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
        $nestedData[] = $data_row['remarks'];
        $nestedData[] = $data_row['invoice_status'];
        $nestedData[] = $data_row['invoice_name'];
        $nestedData[] = $data_row['invoice_type'];
        $nestedData[] = $data_row['govt_fee'];
        $nestedData[] = $data_row['professional_fees'];
        $nestedData[] = $data_row['drafting_proceeding_fees'];
        $nestedData[] = $data_row['drafting_proceeding_professional_fees'];
        $nestedData[] = $data_row['total_professional_amount'];
        $nestedData[] = $data_row['cgst'];
        $nestedData[] = $data_row['sgst'];
        $nestedData[] = $data_row['igst'];
        $nestedData[] = $data_row['round_off'];
    
       
        $data_array[] = $nestedData;
       }
       $json_data = array("draw" => intval($_POST['draw']), "recordsTotal" => intval($totalData), "recordsFiltered" => intval($totalFiltered), "data" => $data_array);
       //echo "<pre>";
       //print_r($json_data);die();
       echo json_encode($json_data);
    
    }

    // only for Rashi and Administrator as of now
    public function sales_info()
    {
        if ($this->role_id == 1 || $this->role_id == 3); // grant access
        else redirect('dashboard');

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
        if($this->model->updateData('sales', array('status' => '1'), array('id' => $user_id)))
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

    // routed to show custom 4 columns page
    // the grocery_crud url is : http://192.168.0.55/legalmis/sales/index/read/1 
    // & the action button is default grocery_crud View grid action btn 
    // [while we can add our own custom button; but this helps rapid development]
    // REFER: $route['sales/index/read/(:num)'] = 'sales/read-deal/$1';
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
    $html="";
    $service_id=$this->input->post('grp');
    foreach($service_id[0] as $service_id_key => $service_id_row)
    {
        $query = $this->model->selectWhereData('sub_services',array('service_id'=>$service_id_row,'status'=>'0'),array('id','name','service_id'),false);
        $check=array_merge($data,$query);
        // echo "<pre>";
        // print_r($check);
    
        foreach ($check as $key => $bdd) {
            $html .= "<option value='".$bdd['id'].'_'.$bdd['service_id']."'>".$bdd['name']."</option>";
          }
    }   
    //  die();
      
    
  
   
     
     echo json_encode($html);
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
        $gstround=round($cgst + $sgst);
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

        $gstround=round($igst);
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
            $gstround=round($cgst + $sgst);
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

            $gstround=round($igst);
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
      
        $this->form_validation->set_rules('sale_date', 'Sale Date', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('services[]', 'Services', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('sub_services[]', 'Sub Services', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('document_list[]', 'Document List', 'trim|required',array('required'=>'This field is required'));

        $this->form_validation->set_rules('deal_id', 'Deal Id', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('invoice_no', 'Invoice No', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('primary_caller', 'Primary Caller', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('secondary_caller', 'Secondary Caller', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('lead_source', 'Lead Source', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('legal_remarks', 'Legal Remark', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('accounts_remarks', 'Account Remark', 'trim|required',array('required'=>'This field is required'));
        
        $this->form_validation->set_rules('company_name', 'Company Name', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('brand_name', 'Brand Name', 'trim|required|is_unique[sales.brand_name]',array('required'=>'This field is required'));
        $this->form_validation->set_rules('class_name', 'Class Name', 'trim|required',array('required'=>'This field is required'));
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
        $this->form_validation->set_rules('outstanding_followup_date', 'Outstanding Followup Date', 'trim|required',array('required'=>'This field is required'));
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
        $this->form_validation->set_rules('services[]', 'Services', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('sub_services[]', 'Sub Services', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('document_list[]', 'Document List', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('industry', 'Industry', 'trim|required',array('required'=>'This field is required'));
        $this->form_validation->set_rules('commission', 'Commission Fees', 'trim|required',array('required'=>'This field is required'));
 
    
        if ($this->form_validation->run() == FALSE)
        {
                $response['status'] = 'failure';
                $response['error'] = array(
                    'sale_date' => strip_tags(form_error('sale_date')),            
                    'services' => strip_tags(form_error('services[]')),
                    'sub_services' => strip_tags(form_error('sub_services[]')),
                    'document_list' => strip_tags(form_error('document_list[]')),

                    'deal_id' => strip_tags(form_error('deal_id')),
                    'invoice_no' => strip_tags(form_error('invoice_no')),
                    'primary_caller' => strip_tags(form_error('primary_caller')),
                    'secondary_caller' => strip_tags(form_error('secondary_caller')),
                    'lead_source' => strip_tags(form_error('lead_source')),
                    'legal_remarks' => strip_tags(form_error('legal_remarks')),
                    'accounts_remarks' => strip_tags(form_error('accounts_remarks')),
                    'company_name' => strip_tags(form_error('company_name')),
                    'class_name' => strip_tags(form_error('class_name')),
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
                    'outstanding_followup_date' => strip_tags(form_error('outstanding_followup_date')),
                    'payment_mode' => strip_tags(form_error('payment_mode')),
                    'invoice_type' => strip_tags(form_error('invoice_type')),
                    'brand_name' => strip_tags(form_error('brand_name')),
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
                    'commission' => strip_tags(form_error('commission')),

                );
       }
        else
        {
           $product_gallery = array();
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
            $commission            = $this->input->post('commission');
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
            $brand_name         = $this->input->post('brand_name');
            $class_name         = $this->input->post('class_name');
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
            $invoice_status     = $this->input->post('invoice_status');
            $services     = $this->input->post('services');
           
            //$sub_services     = $this->input->post('sub_services');
            
           
           
            // $document_list     = $this->input->post('document_list');
            // $sale_date          = date('Y-m-d', strtotime($sale_date));
            // $outstanding_followup_date = date('Y-m-d', strtotime($outstanding_followup_date));
            
            // $matches=$net_income+$associate_fees;
            // // /echo $matches;die();
            // if($govt_fees != $govt_fee)
            // {
            //     $response['status']='failure';
            //     $response['error']=array('msg' => "Goverment Fees Dose Not Match !");
                
            // }else if($total_professional_amount != $matches)
            // {
            //     $response['status']='failure';
            //     $response['error']=array('msg' => "Net Income Does Not Match with the Professional Amount  !");
            // }else{
                $this->db->insert("sales", array(
                    'company_name'          => $company_name,
                    'brand_name'            => $brand_name,
                    'class_name'            => $class_name,
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
                    'commission'            => $commission,
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
                ));
                //echo $this->db->last_query();die();
                if(!empty($the_insert_id = $this->db->insert_id())){

                    
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
                    
                    // foreach (implode(',',)$this->input->post('services') as $id)
                    // {
                    //     $this->db->insert("sales_services", array(
                    //         'sales_id'      => $the_insert_id,
                    //         'services_id'   => $id
                    //     ));
                    // }
                   
                    // foreach ($this->input->post('document_list') as $id)
                    // {
                    //     $this->db->insert("sales_document_list", array(
                    //         'sales_id'              => $the_insert_id,
                    //         'document_list_id'      => $id
                    //     ));
                    // }
        
                    $response['status']='success';
                    $response['error']=array('msg' => "Sale Report Inserted Successfully !");
                }
                else{
                    $response['status']='failure';
                    $response['error']=array('msg' => "Sale Report Inserted UnSuccessfully !"); 
                }
                
            }
        //}
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

        /*$this->form_validation->set_rules('selected_services', 'Selected Services', 'trim|required');
        if ($this->form_validation->run() == FALSE)
        {
            echo (json_encode(array(
                'message' => '<span class="text-danger">No Services Selected, this is required field...</span>',
                'status' => false
            )));
            exit();
        }*/

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

}