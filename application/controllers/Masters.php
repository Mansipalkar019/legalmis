<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masters extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
        $this->load->model('supermodel');
        date_default_timezone_set('Asia/Kolkata');
    }
    public function index()
    {
        if ($this->session->userdata('superadmin_logged_in')) {
            $this->load->view('masters');
        }else{
            redirect('welcome');
        }
    }
    // ================ Services Module ==============================
    public function addservice()
    {
        $servicename = $this->input->post('servicename');
        $brandname = $this->input->post('brandname');
        $classname = $this->input->post('classname');
        $terms = $this->input->post('terms');
       
        $this->form_validation->set_rules('servicename', 'Service Name', 'required|trim', array('required' => 'You must provide a %s'));
        $this->form_validation->set_rules('terms', 'Terms', 'required|trim', array('required' => 'You must provide a %s'));
        if ($this->form_validation->run() == FALSE) {
                $response['status'] = 'failure';
                $response['error'] = array(
                    'servicename' => strip_tags(form_error('servicename')), 
                    'terms' => strip_tags(form_error('terms'))
                );
            } else {

                if(!empty($brandname)){
                    $brandname = "Yes";
                }else{
                    $brandname = "NA";
                }
                if(!empty($classname)){
                    $classname = "Yes";
                }else{
                    $classname = "NA";
                }
                $check_services_count = $this->model->CountWhereRecord('services', array('name'=>$servicename,'status'=>'1'));
                if ($check_services_count > 0) {
                    $response['status'] = 'failure';
                    $response['error'] = array('servicename' => "Services Name Already Exist...!",);
                } else {
                    $curl_data = array(
                        'name' =>$servicename,
                        'brand_name' => $brandname,
                        'class_name' => $classname,
                        'terms' => $terms,
                    );
                    $this->model->insertData("services",$curl_data);
                    $response['status'] ="success";
                    $response['msg'] ="Service Added Successfully";
                }
            }
            echo json_encode($response);
    }
    public function getallservices()
    {
        $this->load->model('service_model');
        $services_data = $this->service_model->get_datatables();
        $count = $this->service_model->count_all();
        $count_filtered = $this->service_model->count_filtered();
        $data = array();
        $no = @$_POST['start'];
        foreach ($services_data as $services_data_key => $services_data_row) { 

            $edit = '<span><a href="javascript:void(0);" ><i class="glyphicon glyphicon-pencil servies_edit" aria-hidden="true" data-toggle="modal" data-target="#myModal" id="'.$services_data_row['id'].'"></i> </a></span>&nbsp;&nbsp;';
            $delete = "<span id='".$services_data_row['id']."' class='delete_services'><i class='glyphicon glyphicon-trash'></i></span>";

              $no++;
            $row = array();
            $row[] = $no;
            $row[] = $services_data_row['name'];
            $row[] = $services_data_row['brand_name'];
            $row[] = $services_data_row['class_name'];
            $row[] = $services_data_row['terms'];
            $row[] = $edit . $delete;            
            $data[] = $row;
        }
        $output = array("draw" => @$_POST['draw'], "recordsTotal" => $count, "recordsFiltered" => $count_filtered, "data" => $data);
        echo json_encode($output);
    }
    public function get_edit_services_data()
    {
        $id = $this->input->post('id');
        $service_data = $this->model->selectWhereData('services',array('id'=>$id),array('*'));
        $response['service_data'] = $service_data;
        echo json_encode($response);
    }
    public function Update_Service()
    {
        $servicename = $this->input->post('edit_service_name');
        $brandname = $this->input->post('brand');
        $classname = $this->input->post('class');
        $terms = $this->input->post('terms1');
        $id = $this->input->post('serviceid');
        $this->form_validation->set_rules('edit_service_name', 'Service Name', 'required|trim', array('required' => 'You must provide a %s'));
        $this->form_validation->set_rules('terms1', 'Terms', 'required|trim', array('required' => 'You must provide a %s'));
        if ($this->form_validation->run() == FALSE) {
                $response['status'] = 'failure';
                $response['error'] = array(
                    'edit_service_name' => strip_tags(form_error('edit_service_name')), 
                    'terms1' => strip_tags(form_error('terms1'))
                );
            } else {

                if(!empty($brandname)){
                    $brandname = "Yes";
                }else{
                    $brandname = "NA";
                }
                if(!empty($classname)){
                    $classname = "Yes";
                }else{
                    $classname = "NA";
                }
                 $check_services_count = $this->model->CountWhereRecord('services', array('name'=>$servicename,'id !='=>$id,'status'=>'1'));
                if ($check_services_count > 0) {
                    $response['status'] = 'failure';
                    $response['error'] = array('edit_service_name' => "Services Name Already Exist...!",);
                } else {
                    $curl_data = array(
                        'name' =>$servicename,
                        'brand_name' => $brandname,
                        'class_name' => $classname,
                        'terms' => $terms,
                    );
                    $this->model->updateData("services",$curl_data,array('id'=>$id));
                    $response['status'] ="success";
                    $response['msg'] ="Service Updated Successfully";
                }
            }
            echo json_encode($response);
    }
    public function delete_service()
    {
            $id = $this->input->post('id');
            $curl_data = array('status'=>0);
             $this->model->updateData("services",$curl_data,array('id'=>$id));
            $response['status'] = 'success';
            $response['msg'] ="Service Deleted Successfully";
            echo json_encode($response);
    }
    // ======================= Sub-Services Module ==================
    public function subservices()
    {
        if ($this->session->userdata('superadmin_logged_in')) {
            $data['get_service_info']=$this->model->selectWhereData('services',array('status'=>1),array('id','name'),false);
            $this->load->view('services/subservice',$data,array('id'=>'DESC'));
         }else{
            redirect('welcome');
        }
    }
    public function addsubservice()
    {
        $services = $this->input->post('services');
        $sub_service_name = $this->input->post('sub_service_name');
       
        $this->form_validation->set_rules('services', 'Service Name', 'required|trim', array('required' => 'You must provide a %s'));
        $this->form_validation->set_rules('sub_service_name', 'Sub Services Name', 'required|trim', array('required' => 'You must provide a %s'));
        if ($this->form_validation->run() == FALSE) {
                $response['status'] = 'failure';
                $response['error'] = array(
                    'services' => strip_tags(form_error('services')), 
                    'sub_service_name' => strip_tags(form_error('sub_service_name'))
                );
            } else {
                $check_sub_services_count = $this->model->CountWhereRecord('sub_services', array('name'=>$sub_service_name,'status'=>'1'));
                if ($check_sub_services_count > 0) {
                    $response['status'] = 'failure';
                    $response['error'] = array('sub_service_name' => "Sub Services Name Already Exist...!",);
                } else {
                    $curl_data = array(
                        'name' =>$sub_service_name,
                        'service_id' => $services,
                    );
                    $this->model->insertData("sub_services",$curl_data);
                    $response['status'] ="success";
                    $response['msg'] ="Sub Service Added Successfully";
                }
            }
            echo json_encode($response);
    }
    public function getallsubservices()
    {
        $this->load->model('sub_services_model');
        $sub_services_data = $this->sub_services_model->get_datatables();
        $count = $this->sub_services_model->count_all();
        $count_filtered = $this->sub_services_model->count_filtered();
        $data = array();
        $no = @$_POST['start'];
        foreach ($sub_services_data as $sub_services_data_key => $sub_services_data_row) {
            $edit = '<span><a href="javascript:void(0);" ><i class="glyphicon glyphicon-pencil edit_sub_services_data" aria-hidden="true" data-toggle="modal"         data-target="#subserviceModal" id="'.$sub_services_data_row['id'].'"></i> </a></span>&nbsp;&nbsp;';
            $delete = "<span id='".$sub_services_data_row['id']."' class='delete_sub_services' ><i class='glyphicon glyphicon-trash'></i></a></span>";
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $sub_services_data_row['service_name'];
            $row[] = $sub_services_data_row['name'];
            $row[] = $edit . $delete;            
            $data[] = $row;
        }
        $output = array("draw" => @$_POST['draw'], "recordsTotal" => $count, "recordsFiltered" => $count_filtered, "data" => $data);
        echo json_encode($output);
    }
    public function get_sub_services_on_id()
    {
        $id =  $this->input->post('id');
        $sub_service_data = $this->model->selectWhereData('sub_services',array('id'=>$id),array('*'));
        $response['sub_service_details'] = $sub_service_data;
        echo json_encode($response);
    }    
    public function Update_Sub_Service()
    {
        $serviceid = $this->input->post('serviceid');
        $sub_service_name = $this->input->post('edit_name');
        $id = $this->input->post('id');
       
        $this->form_validation->set_rules('serviceid', 'Service Name', 'required|trim', array('required' => 'You must provide a %s'));
        $this->form_validation->set_rules('edit_name', 'Sub Service Name', 'required|trim', array('required' => 'You must provide a %s'));
        if ($this->form_validation->run() == FALSE) {
                $response['status'] = 'failure';
                $response['error'] = array(
                    'serviceid' => strip_tags(form_error('serviceid')), 
                    'edit_name' => strip_tags(form_error('edit_name'))
                );
            } else {
                $check_sub_services_count = $this->model->CountWhereRecord('sub_services', array('name'=>$sub_service_name,'id !='=>$id,'status'=>'1'));
                if ($check_sub_services_count > 0) {
                    $response['status'] = 'failure';
                    $response['error'] = array('edit_name' => "Sub Services Name Already Exist...!",);
                } else {
                    $curl_data = array(
                        'name' =>$sub_service_name,
                        'service_id' => $serviceid,
                    );
                    $this->model->updateData("sub_services",$curl_data,array('id'=>$id));
                    $response['status'] ="success";
                    $response['msg'] ="Sub Service Updated Successfully";
                }
            }
            echo json_encode($response);
    }
    public function delete_sub_service()
    {
        $id = $this->input->post('id');
        $curl_data = array('status'=>0);
         $this->model->updateData("sub_services",$curl_data,array('id'=>$id));
        $response['status'] = 'success';
        $response['msg'] ="Service Deleted Successfully";
        echo json_encode($response);
    }
    // ============================= Documents List ===============
    public function documentlist()
    {
        if ($this->session->userdata('superadmin_logged_in')) {
                $data['get_document_list']=$this->model->selectWhereData('services',array('status'=>1),array('id','name'),false);
              $this->load->view('services/documentlist',$data);
        }else{
            redirect('welcome');
        }        
    }
    public function add_doc()
    {
        $services = $this->input->post('services');
        $document_list = $this->input->post('document_list');
       
        $this->form_validation->set_rules('services', 'Service Name', 'required|trim', array('required' => 'You must provide a %s'));
        $this->form_validation->set_rules('document_list', 'Sub Services Name', 'required|trim', array('required' => 'You must provide a %s'));
        if ($this->form_validation->run() == FALSE) {
                $response['status'] = 'failure';
                $response['error'] = array(
                    'services' => strip_tags(form_error('services')), 
                    'document_list' => strip_tags(form_error('document_list'))
                );
            } else {
                $check_document_list_count = $this->model->CountWhereRecord('document_list', array('name'=>$document_list,'status'=>'1'));
                if ($check_document_list_count > 0) {
                    $response['status'] = 'failure';
                    $response['error'] = array('document_list' => "Name Already Exist...!",);
                } else {
                    $curl_data = array(
                        'name' =>$document_list,
                        'service_id' => $services,
                    );
                    $this->model->insertData("document_list",$curl_data);
                    $response['status'] ="success";
                    $response['msg'] ="Document List Added Successfully";
                }
            }
            echo json_encode($response);
    }
    public function getalldoclist()
    {
        $this->load->model('document_list_model');
        $document_list = $this->document_list_model->get_datatables();
        $count = $this->document_list_model->count_all();
        $count_filtered = $this->document_list_model->count_filtered();
        $data = array();
        $no = @$_POST['start'];
        foreach ($document_list as $document_list_key => $document_list_row) {
            $edit = '<span><a href="javascript:void(0);" >
         <i class="glyphicon glyphicon-pencil edit_document_list" aria-hidden="true" data-toggle="modal"
         data-target="#doclistModal" id="'.$document_list_row['id'].'"></i> </a></span>&nbsp;&nbsp;';
         $delete = "<span id='". $document_list_row['id']."' class='delete_documentlist'><i class='glyphicon glyphicon-trash'></i></a></span>";

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $document_list_row['service_name'];
            $row[] = $document_list_row['name'];
            $row[] = $edit . $delete;            
            $data[] = $row;
        }
        $output = array("draw" => @$_POST['draw'], "recordsTotal" => $count, "recordsFiltered" => $count_filtered, "data" => $data);
        echo json_encode($output);
    }
    public function get_doc_list_on_id()
    {
         $id =  $this->input->post('id');
         $document_list = $this->model->selectWhereData('document_list',array('id'=>$id),array('*'));
         $response['document_list'] = $document_list;
         echo json_encode($response);
    } 
    public function Update_document_list()
    {
        $fk_service_id = $this->input->post('fk_service_id');
        $edit_document_list = $this->input->post('edit_document_list');
        $edit_document_id = $this->input->post('edit_document_id');
       
        $this->form_validation->set_rules('fk_service_id', 'Service Name', 'required|trim', array('required' => 'You must provide a %s'));
        $this->form_validation->set_rules('edit_document_list', 'Sub fk_service_id Name', 'required|trim', array('required' => 'You must provide a %s'));
        if ($this->form_validation->run() == FALSE) {
                $response['status'] = 'failure';
                $response['error'] = array(
                    'fk_service_id' => strip_tags(form_error('fk_service_id')), 
                    'edit_document_list' => strip_tags(form_error('edit_document_list'))
                );
            } else {
                $check_document_list_count = $this->model->CountWhereRecord('document_list', array('name'=>$edit_document_list,'status'=>'1','id !='=>$edit_document_id));
                if ($check_document_list_count > 0) {
                    $response['status'] = 'failure';
                    $response['error'] = array('edit_document_list' => "Name Already Exist...!",);
                } else {
                    $curl_data = array(
                        'name' =>$edit_document_list,
                        'service_id' => $fk_service_id,
                    );
                    $this->model->updateData("document_list",$curl_data,array('id'=>$edit_document_id));
                    $response['status'] ="success";
                    $response['msg'] ="Document List Updated Successfully";
                }
            }
            echo json_encode($response);
    }
 
    public function delete_documentlist()
    {
        $id = $this->input->post('id');
        $curl_data = array('status'=>0);
        $this->model->updateData("document_list",$curl_data,array('id'=>$id));
        $response['status'] = 'success';
        $response['msg'] ="Document List Deleted Successfully";
        echo json_encode($response);
    }

    // ================ Payment Mode =================================
    public function paymentmode()
    {
        if ($this->session->userdata('superadmin_logged_in')) {
                $this->load->view('services/paymentmode');
        }else{
            redirect('welcome');
        }  
    }
    public function add_payment_mode()
    {
        $payment_name = $this->input->post('payment_name');
        $this->form_validation->set_rules('payment_name', 'Name', 'required|trim', array('required' => 'You must provide a %s'));
        if ($this->form_validation->run() == FALSE) {
                $response['status'] = 'failure';
                $response['error'] = array(
                    'payment_name' => strip_tags(form_error('payment_name')), 
                );
            } else {
                $check_payment_name_count = $this->model->CountWhereRecord('payment_mode', array('name'=>$payment_name,'status'=>'1'));
                if ($check_payment_name_count > 0) {
                    $response['status'] = 'failure';
                    $response['error'] = array('payment_name' => "Name Already Exist...!",);
                } else {
                    $curl_data = array(
                        'name' =>$payment_name,
                    );
                    $this->model->insertData("payment_mode",$curl_data);
                    $response['status'] ="success";
                    $response['msg'] ="Payment Mode Added Successfully";
                }
            }
            echo json_encode($response);
    }
    public function getallpaymentmode()
    {
        $this->load->model('payment_model');
        $payment_data = $this->payment_model->get_datatables();
        $count = $this->payment_model->count_all();
        $count_filtered = $this->payment_model->count_filtered();
        $data = array();
        $no = @$_POST['start'];
        foreach ($payment_data as $payment_data_key => $payment_data_row) {
            $edit = '<span><a href="javascript:void(0);" ><i class="glyphicon glyphicon-pencil edit_payment_mode" aria-hidden="true" data-toggle="modal" data-target="#pay_mode_Modal" id="'.$payment_data_row['id'].'"></i> </a></span>&nbsp;&nbsp;';
            $delete = "<span id='".$payment_data_row['id']."' class='delete_payment_mode'><i class='glyphicon glyphicon-trash'></i></a></span>";

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $payment_data_row['name'];
            $row[] = $edit . $delete;            
            $data[] = $row;
        }
        $output = array("draw" => @$_POST['draw'], "recordsTotal" => $count, "recordsFiltered" => $count_filtered, "data" => $data);
        echo json_encode($output);
    }
    public function get_payment_mode_on_id()
    {
        $id = $this->input->post('id');
        $payment_mode=  $this->model->selectWhereData('payment_mode',array('id'=>$id),array('*'));
        $data['payment_mode'] = $payment_mode;
        echo json_encode($data);
    }

    public function Update_payment_mode()
    {
        $edit_payment_id = $this->input->post('edit_payment_id');
        $edit_payment_name = $this->input->post('edit_payment_name');
        $this->form_validation->set_rules('edit_payment_name', 'Name', 'required|trim', array('required' => 'You must provide a %s'));
        if ($this->form_validation->run() == FALSE) {
                $response['status'] = 'failure';
                $response['error'] = array(
                    'edit_payment_name' => strip_tags(form_error('edit_payment_name')), 
                );
            } else {
                $check_edit_payment_name_count = $this->model->CountWhereRecord('payment_mode', array('name'=>$edit_payment_name,'status'=>'1','id !=' => $edit_payment_id));
                if ($check_edit_payment_name_count > 0) {
                    $response['status'] = 'failure';
                    $response['error'] = array('edit_payment_name' => "Name Already Exist...!",);
                } else {
                    $curl_data = array(
                        'name' =>$edit_payment_name,
                    );
                    $this->model->updateData("payment_mode",$curl_data,array('id'=>$edit_payment_id));
                    $response['status'] ="success";
                    $response['msg'] ="Payment Mode Update Successfully";
                }
            }
            echo json_encode($response);
    }

    public function delete_payment_mode()
    {
       $id = $this->input->post('id');
        $curl_data = array('status'=>0);
         $this->model->updateData("payment_mode",$curl_data,array('id'=>$id));
        $response['status'] = 'success';
        $response['msg'] ="Payment Mode Deleted Successfully";
        echo json_encode($response);
    }
    // =========================Invoice Type===========================
    public function invoicetype()
    {
        if ($this->session->userdata('superadmin_logged_in')) {
                $this->load->view('services/invoicetype'); 
        }else{
            redirect('welcome');
        }        
    }
    public function add_invoice_type()
    {
        $invoice_type = $this->input->post('invoice_type');
        $this->form_validation->set_rules('invoice_type', 'Invoice Type', 'required|trim', array('required' => 'You must provide a %s'));
        if ($this->form_validation->run() == FALSE) {
                $response['status'] = 'failure';
                $response['error'] = array(
                    'invoice_type' => strip_tags(form_error('invoice_type')), 
                );
            } else {
                $check_invoice_type_count = $this->model->CountWhereRecord('invoice_type', array('name'=>$invoice_type,'status'=>'1'));
                if ($check_invoice_type_count > 0) {
                    $response['status'] = 'failure';
                    $response['error'] = array('invoice_type' => "Invoice Type Already Exist...!",);
                } else {
                    $curl_data = array(
                        'name' =>$invoice_type,
                    );
                    $this->model->insertData("invoice_type",$curl_data);
                    $response['status'] ="success";
                    $response['msg'] ="Invoice Type Added Successfully";
                }
            }
            echo json_encode($response);
    }
    public function getallinvoicetype()
    {
        $this->load->model('invoice_type_model');
        $invoice_type_data = $this->invoice_type_model->get_datatables();
        $count = $this->invoice_type_model->count_all();
        $count_filtered = $this->invoice_type_model->count_filtered();
        $data = array();
        $no = @$_POST['start'];
        foreach ($invoice_type_data as $invoice_type_data_key => $invoice_type_data_row) {
           $edit = '<span><a href="javascript:void(0);" >
        <i class="glyphicon glyphicon-pencil edit_invoice_type" aria-hidden="true" data-toggle="modal"
        data-target="#invoicetypeModal" id="'.$invoice_type_data_row['id'].'"></i> </a></span>&nbsp;&nbsp;';
        $delete = "<span id='" . $invoice_type_data_row['id']."' class='delete_invoice_type'><i class='glyphicon glyphicon-trash'></i></span>";

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $invoice_type_data_row['name'];
            $row[] = $edit . $delete;            
            $data[] = $row;
        }
        $output = array("draw" => @$_POST['draw'], "recordsTotal" => $count, "recordsFiltered" => $count_filtered, "data" => $data);
        echo json_encode($output);
    }
    public function get_invoice_type_on_id()
    {
        $id = $this->input->post('id');
        $invoice_type=  $this->model->selectWhereData('invoice_type',array('id'=>$id),array('*'));
        $data['invoice_type'] = $invoice_type;
        echo json_encode($data);
    } 
    public function update_invoice_type()
    {
        $edit_invoice_type = $this->input->post('edit_invoice_type');
         $edit_invoice_type_id = $this->input->post('edit_invoice_type_id');
        $this->form_validation->set_rules('edit_invoice_type', 'Invoice Type', 'required|trim', array('required' => 'You must provide a %s'));
        if ($this->form_validation->run() == FALSE) {
                $response['status'] = 'failure';
                $response['error'] = array(
                    'edit_invoice_type' => strip_tags(form_error('edit_invoice_type')), 
                );
            } else {
                $check_edit_invoice_type_count = $this->model->CountWhereRecord('invoice_type', array('name'=>$edit_invoice_type,'status'=>'1','id !='=>$edit_invoice_type_id));
                if ($check_edit_invoice_type_count > 0) {
                    $response['status'] = 'failure';
                    $response['error'] = array('edit_invoice_type' => "Invoice Type Already Exist...!",);
                } else {
                    $curl_data = array(
                        'name' =>$edit_invoice_type,
                    );
                    $this->model->updateData("invoice_type",$curl_data,array('id'=>$edit_invoice_type_id));
                    $response['status'] ="success";
                    $response['msg'] ="Invoice Type Upadted Successfully";
                }
            }
            echo json_encode($response);
    }

    public function delete_invoice_type()
    {
        $id = $this->input->post('id');
        $curl_data = array('status'=>0);
        $this->model->updateData("invoice_type",$curl_data,array('id'=>$id));
        $response['status'] = 'success';
        $response['msg'] ="Invoice Type Deleted Successfully";
        echo json_encode($response);
    }
    //  ===================== Invoice Status===========================
    public function invoicestatus()
    {
        if ($this->session->userdata('superadmin_logged_in')) {
                $this->load->view('services/invoicestatus');   
        }else{
            redirect('welcome');
        }      
    }
    public function add_invoice_status()
    {
        $invoice_status = $this->input->post('invoice_status');
        $this->form_validation->set_rules('invoice_status', 'Invoice Status', 'required|trim', array('required' => 'You must provide a %s'));
        if ($this->form_validation->run() == FALSE) {
                $response['status'] = 'failure';
                $response['error'] = array(
                    'invoice_status' => strip_tags(form_error('invoice_status')), 
                );
            } else {
                $check_invoice_status_count = $this->model->CountWhereRecord('invoice_status', array('name'=>$invoice_status,'status'=>'1'));
                if ($check_invoice_status_count > 0) {
                    $response['status'] = 'failure';
                    $response['error'] = array('invoice_status' => "Invoice Status Already Exist...!",);
                } else {
                    $curl_data = array(
                        'name' =>$invoice_status,
                    );
                    $this->model->insertData("invoice_status",$curl_data);
                    $response['status'] ="success";
                    $response['msg'] ="Invoice Status Added Successfully";
                }
            }
            echo json_encode($response);
    }
    public function getallinvoicestatus()
    {
        $this->load->model('invoice_status_model');
        $invoice_status_data = $this->invoice_status_model->get_datatables();
        $count = $this->invoice_status_model->count_all();
        $count_filtered = $this->invoice_status_model->count_filtered();
        $data = array();
        $no = @$_POST['start'];
        foreach ($invoice_status_data as $invoice_status_data_key => $invoice_status_data_row) {
          $edit = '<span><a href="javascript:void(0);" ><i class="glyphicon glyphicon-pencil edit_payment_status" aria-hidden="true" data-toggle="modal"
        data-target="#invoicestatusModal" id="'.$invoice_status_data_row['id'].'"></i> </a></span>&nbsp;&nbsp;';
        $delete = "<span class='delete_invoice_status' id='".$invoice_status_data_row['id']."'><i class='glyphicon glyphicon-trash'></i></a></span>";

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $invoice_status_data_row['name'];
            $row[] = $edit . $delete;            
            $data[] = $row;
        }
        $output = array("draw" => @$_POST['draw'], "recordsTotal" => $count, "recordsFiltered" => $count_filtered, "data" => $data);
        echo json_encode($output);
    }
    public function get_invoice_status_on_id()
    {
        $id = $this->input->post('id');
        $invoice_status=  $this->model->selectWhereData('invoice_status',array('id'=>$id),array('*'));
        $data['invoice_status'] = $invoice_status;
        echo json_encode($data);
    }
    public function update_invoice_status()
    {
        $edit_invoice_status = $this->input->post('edit_invoice_status');
        $edit_invoice_status_id = $this->input->post('edit_invoice_status_id');
        $this->form_validation->set_rules('edit_invoice_status', 'Invoice Status', 'required|trim', array('required' => 'You must provide a %s'));
        if ($this->form_validation->run() == FALSE) {
                $response['status'] = 'failure';
                $response['error'] = array(
                    'edit_invoice_status' => strip_tags(form_error('edit_invoice_status')), 
                );
            } else {
                $check_edit_invoice_status_count = $this->model->CountWhereRecord('invoice_status', array('name'=>$edit_invoice_status,'status'=>'1','id'=>$edit_invoice_status_id));
                if ($check_edit_invoice_status_count > 0) {
                    $response['status'] = 'failure';
                    $response['error'] = array('edit_invoice_status' => "Invoice Status Already Exist...!",);
                } else {
                    $curl_data = array(
                        'name' =>$edit_invoice_status,
                    );
                    $this->model->updateData("invoice_status",$curl_data,array('id'=>$edit_invoice_status_id));
                    $response['status'] ="success";
                    $response['msg'] ="Invoice Status Updated Successfully";
                }
            }
            echo json_encode($response);
    }

    public function delete_invoice_status()
    {
      $id = $this->input->post('id');
        $curl_data = array('status'=>0);
        $this->model->updateData("invoice_status",$curl_data,array('id'=>$id));
        $response['status'] = 'success';
        $response['msg'] ="Invoice Status Deleted Successfully";
        echo json_encode($response);
    }
  //  ===================== Customer Executive =======================
    public function cust_executive()
    {
        if ($this->session->userdata('superadmin_logged_in')) {
            $this->load->view('services/cust_executive');
        }else{
            redirect('welcome');
        } 
    }
    public function add_customer_executive()
    {
        $cust_executive = $this->input->post('cust_executive');
        $this->form_validation->set_rules('cust_executive', 'Customer Executive Name', 'required|trim|alpha', array('required' => 'You must provide a %s'));
        if ($this->form_validation->run() == FALSE) {
                $response['status'] = 'failure';
                $response['error'] = array(
                    'cust_executive' => strip_tags(form_error('cust_executive')), 
                );
            } else {
                $check_cust_executive_count = $this->model->CountWhereRecord('customer_executive', array('name'=>$cust_executive,'status'=>'1'));
                if ($check_cust_executive_count > 0) {
                    $response['status'] = 'failure';
                    $response['error'] = array('cust_executive' => "Customer Executive Already Exist...!",);
                } else {
                    $curl_data = array(
                        'name' =>$cust_executive,
                    );
                    $this->model->insertData("customer_executive",$curl_data);
                    $response['status'] ="success";
                    $response['msg'] ="Customer Executive Added Successfully";
                }
            }
            echo json_encode($response);
    }
    public function getallcust_exec()
    {
         $this->load->model('customer_executive_model');
        $customer_executive_data = $this->customer_executive_model->get_datatables();
        $count = $this->customer_executive_model->count_all();
        $count_filtered = $this->customer_executive_model->count_filtered();
        $data = array();
        $no = @$_POST['start'];
        foreach ($customer_executive_data as $customer_executive_data_key => $customer_executive_data_row) {
            $edit = '<span><a href="javascript:void(0);" ><i class="glyphicon glyphicon-pencil edit_customer_executive" aria-hidden="true" data-toggle="modal" data-target="#cust_execModal" id="'.$customer_executive_data_row['id'].'"></i> </a></span>&nbsp;&nbsp;';
            $delete = "<span id='" . $customer_executive_data_row['id'] . "' class='delete_customer_executive'><i class='glyphicon glyphicon-trash'></i></a></span>";
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $customer_executive_data_row['name'];
            $row[] = $edit . $delete;            
            $data[] = $row;
        }
        $output = array("draw" => @$_POST['draw'], "recordsTotal" => $count, "recordsFiltered" => $count_filtered, "data" => $data);
        echo json_encode($output);      
    }
    public function get_customer_excutive_on_id()
    {
        $id = $this->input->post('id');
        $customer_executive=  $this->model->selectWhereData('customer_executive',array('id'=>$id),array('*'));
        $data['customer_executive'] = $customer_executive;
        echo json_encode($data);
    }
    public function update_customer_executive()
    {
        $edit_customer_executive_name = $this->input->post('edit_customer_executive_name');
        $edit_customer_executive_id = $this->input->post('edit_customer_executive_id');
        $this->form_validation->set_rules('edit_customer_executive_name', 'Customer Executive Name', 'required|trim|alpha', array('required' => 'You must provide a %s'));
        if ($this->form_validation->run() == FALSE) {
                $response['status'] = 'failure';
                $response['error'] = array(
                    'edit_customer_executive_name' => strip_tags(form_error('edit_customer_executive_name')), 
                );
            } else {
                $check_edit_customer_executive_name_count = $this->model->CountWhereRecord('customer_executive', array('name'=>$edit_customer_executive_name,'status'=>'1','id'=>$edit_customer_executive_id));
                if ($check_edit_customer_executive_name_count > 0) {
                    $response['status'] = 'failure';
                    $response['error'] = array('edit_customer_executive_name' => "Customer Executive Already Exist...!",);
                } else {
                    $curl_data = array(
                        'name' =>$edit_customer_executive_name,
                    );
                    $this->model->updateData("customer_executive",$curl_data,array('id'=>$edit_customer_executive_id));
                    $response['status'] ="success";
                    $response['msg'] ="Customer Executive Updated Successfully";
                }
            }
            echo json_encode($response);
    }

    public function delete_cust_exec()
    {
      $id = $this->input->post('id');
        $curl_data = array('status'=>0);
        $this->model->updateData("customer_executive",$curl_data,array('id'=>$id));
        $response['status'] = 'success';
        $response['msg'] ="Customer Executive Deleted Successfully";
        echo json_encode($response);
    }
//  ===================== Role  =======================
     public function roles()
    {
        $data['roles']=$this->model->getAllData('roles');
        $this->load->view('services/roles',$data);
    }   

      public function add_role()
     {
         $jsonObj = $_POST['jsonObj'];
         $array_data = json_decode($jsonObj, true);
         $array_entity=$array_data['product'];
         if (isset($array_entity) && !empty($array_entity)) {
             $user_name = $array_entity['user_name'];
             $password = $this->encryption->encrypt($array_entity['password']);
             $firstname = $array_entity['firstname'];
             $lastname = $array_entity['lastname'];
             $mobile_no = $array_entity['mobile_no'];
             $email = $array_entity['email'];
             $roles = $array_entity['roles'];
             $role_name= $this->model->getData("roles", array('id' => $roles,'status' => '1'));
             $service_name_exist = $this->model->getData("users", array('roles_name' => $user_name,'status' => '1'));
             if(isset($service_name_exist) && !empty($service_name_exist))
             {
                 $data['status'] = '0';
                 $data['msg'] = 'User Name already Exist.';
             }else{
                 $service_id = $this->model->insertData('users', array('username' => $user_name,'password'=>$password,'roles_name'=>$role_name[0]['roles'],'roles_id'=>$roles,'status'=>'1','firstname'=>$firstname,'lastname'=>$lastname,'mobile_no'=>$mobile_no,'email'=>$email));
                 if($service_id  > 0)
                 {
                     $data['status'] = '1';
                     $data['msg'] = 'New User Name has been added successfully.';
                 }else{
                     $data['status'] = '0';
                     $data['msg'] = 'Something went wrong while submitting User Name.';  
                 }
             }
         }else{
                 $data['status'] = '0';
                 $data['msg'] = 'Invalid User Name';
         }
         echo json_encode($data);
     }

     public function getallroles()
     {
        $this->load->model('role_model');
        $role_data = $this->role_model->get_datatables();
        $count = $this->role_model->count_all();
        $count_filtered = $this->role_model->count_filtered();
        $data = array();
        $no = @$_POST['start'];
        foreach ($role_data as $role_data_key => $role_data_row) {
          $edit = '<span><a href="javascript:void(0);" ><i class="glyphicon glyphicon-pencil a_category_view" aria-hidden="true" data-toggle="modal" data-target="#roleModal" id="'.$role_data_row['user_id'].'"></i> </a></span>&nbsp;&nbsp;';
         $delete = "<span><a href='#' onclick='delete_role(this," . $role_data_row['user_id'] . ")'><i class='glyphicon glyphicon-trash'></i></a></span>";

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $role_data_row['firstname']." ".$role_data_row['lastname'];
            $row[] = $role_data_row['roles_name'];
            $row[] = $role_data_row['username'];
            $row[] = $edit . $delete;            
            $data[] = $row;
        }
        $output = array("draw" => @$_POST['draw'], "recordsTotal" => $count, "recordsFiltered" => $count_filtered, "data" => $data);
        echo json_encode($output);
     }

     public function get_all_roles()
     {
        $service_id=$_POST['id'];
        $totalData=  $this->model->selectWhereData('users',array('user_id'=>$service_id),array('*'));
        $totalData['decryptpassword'] = $this->encryption->decrypt($totalData['password']);
        echo json_encode($totalData);
     }

     public function delete_roles()
     {
       $jsonObj=$_POST['jsonObj'];
       $array_data=json_decode($jsonObj,true);
       $array_entity=$array_data['product'];
       if(isset($array_entity) && !empty($array_entity))
       {
         $service_id=$array_entity['role_id'];
         $this->model->updateData('users',array('status'=>'0'),array('user_id'=>$service_id));
         $data['status'] = '1';
         $data['msg'] = 'Role has been deleted successfully.';
       }
       else{
         $data['status'] = '0';
         $data['msg'] = 'Invalid Role details.';
       }
       echo json_encode($data);
     }


     public function Update_roles()
     {
         $jsonObj = $_POST['jsonObj'];
         $array_data = json_decode($jsonObj, true);
         $array_entity=$array_data['product'];
         $service_name_exist = $this->model->getData("users", array('username =' => $array_entity['user_name'], 'status' => '1'));
       
        //  if(isset($service_name_exist) && !empty($service_name_exist))
        //  {
        //     $data['status'] = '0';
        //     $data['msg'] = 'Role Name already Exist';
        //  }else{
            if (isset($array_entity) && !empty($array_entity)) {
                $user_name = $array_entity['user_name'];
                $password = $array_entity['password'];
                $user_id = $array_entity['user_id'];
                $roles = $array_entity['roles1'];
                $firstname = $array_entity['firstname1'];
                $lastname = $array_entity['lastname1'];
                $mobile_no = $array_entity['mobile_no1'];
                $email = $array_entity['email1'];
                $role_name= $this->model->getData("roles", array('id' => $roles,'status' => '1'));
                $this->model->updateData('users',array('username'=>$user_name,'password'=>$password,'roles_name'=>$role_name[0]['roles'],'roles_id'=>$roles), array('user_id' => $user_id,'firstname'=>$firstname,'lastname'=>$lastname,'mobile_no'=>$mobile_no,'email'=>$email));
                $data['status'] = '1';
                $data['msg'] = 'Role has been updated successfully.';
                  
            }else{
                    $data['status'] = '0';
                    $data['msg'] = 'Failed to Update Role';
            }
         //}
       
         echo json_encode($data);
     }
     // =========================Add State==============================
     public function alpha_dash_space($fullname){
        if (! preg_match('/^[a-zA-Z\s]+$/', $fullname)) {
            $this->form_validation->set_message('alpha_dash_space', 'The %s field may only contain alpha characters & White spaces');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function add_state()
    {
        if ($this->session->userdata('superadmin_logged_in')) {
                $this->load->view('add_state');
        }else{
            redirect('welcome');
        }  
    }
    public function save_state()
    {
        $state_name = $this->input->post('state_name');
        $this->form_validation->set_rules('state_name', 'Name', 'required|trim|callback_alpha_dash_space', array('required' => 'You must provide a %s'));
        if ($this->form_validation->run() == FALSE) {
                $response['status'] = 'failure';
                $response['error'] = array(
                    'state_name' => strip_tags(form_error('state_name')), 
                );
            } else {
                $check_state_name_count = $this->model->CountWhereRecord('tbl_states', array('name'=>$state_name,'status'=>'1'));
                if ($check_state_name_count > 0) {
                    $response['status'] = 'failure';
                    $response['error'] = array('state_name' => "Name Already Exist...!",);
                } else {
                    $curl_data = array(
                        'name' =>$state_name,
                        'country_id' =>101,
                    );
                    $this->model->insertData("tbl_states",$curl_data);
                    $response['status'] ="success";
                    $response['msg'] ="States Added Successfully";
                }
            }
            echo json_encode($response);
    }
    public function get_all_state_data()
    {
        $this->load->model('state_model');
        $state_data = $this->state_model->get_datatables();
        $count = $this->state_model->count_all();
        $count_filtered = $this->state_model->count_filtered();
        $data = array();
        $no = @$_POST['start'];
        foreach ($state_data as $state_data_key => $state_data_row) {
            $edit = '<span><a href="javascript:void(0);" ><i class="glyphicon glyphicon-pencil edit_state" aria-hidden="true" data-toggle="modal" data-target="#State_Modal" id="'.$state_data_row['id'].'"></i> </a></span>&nbsp;&nbsp;';
            $delete = "<span id='".$state_data_row['id']."' class='delete_state'><i class='glyphicon glyphicon-trash'></i></a></span>";

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $state_data_row['name'];
            $row[] = $edit . $delete;            
            $data[] = $row;
        }
        $output = array("draw" => @$_POST['draw'], "recordsTotal" => $count, "recordsFiltered" => $count_filtered, "data" => $data);
        echo json_encode($output);
    }
    public function get_state_data_on_id()
    {
        $id = $this->input->post('id');
        $state_data=  $this->model->selectWhereData('tbl_states',array('id'=>$id),array('*'));
        $data['state_data'] = $state_data;
        echo json_encode($data);
    }

    public function Update_state_data()
    {
        $edit_state_id = $this->input->post('edit_state_id');
        $edit_state = $this->input->post('edit_state');
        $this->form_validation->set_rules('edit_state', 'Name', 'required|trim', array('required' => 'You must provide a %s'));
        if ($this->form_validation->run() == FALSE) {
                $response['status'] = 'failure';
                $response['error'] = array(
                    'edit_state' => strip_tags(form_error('edit_state')), 
                );
            } else {
                $check_edit_state_count = $this->model->CountWhereRecord('tbl_states', array('name'=>$edit_state,'status'=>'1','id !=' => $edit_state_id));
                if ($check_edit_state_count > 0) {
                    $response['status'] = 'failure';
                    $response['error'] = array('edit_state' => "Name Already Exist...!",);
                } else {
                    $curl_data = array(
                        'name' =>$edit_state,
                    );
                    $this->model->updateData("tbl_states",$curl_data,array('id'=>$edit_state_id));
                    $response['status'] ="success";
                    $response['msg'] ="State Update Successfully";
                }
            }
            echo json_encode($response);
    }

    public function delete_state()
    {
        $id = $this->input->post('id');
        $curl_data = array('status'=>0);
         $this->model->updateData("tbl_states",$curl_data,array('id'=>$id));
        $response['status'] = 'success';
        $response['msg'] ="State Deleted Successfully";
        echo json_encode($response);
    }

// =========================== Add City ============================

    public function add_city()
    {
        if ($this->session->userdata('superadmin_logged_in')) {
            $state = $this->model->selectWhereData('tbl_states',array('status'=>1),array('*'),false);
            $data['state'] = $state;
                $this->load->view('add_city',$data);
        }else{
            redirect('welcome');
        }  
    }
    public function save_city()
    {
        $state_id = $this->input->post('state_id');
        $name = $this->input->post('name');
        $this->form_validation->set_rules('state_id', 'State', 'required|trim', array('required' => 'You must provide a %s'));
        // $this->form_validation->set_rules('name', 'Name', 'required|trim|callback_alpha_dash_space', array('required' => 'You must provide a %s'));
        if ($this->form_validation->run() == FALSE) {
                $response['status'] = 'failure';
                $response['error'] = array(
                    'state_id' => strip_tags(form_error('state_id')), 
                    // 'name' => strip_tags(form_error('name')), 
                );
            } else {
                  foreach ($name as $name_key => $name_row) {
                    $check_name_count = $this->model->CountWhereRecord('tbl_cities', array('name'=>$name_row,'state_id'=>$state_id,'status'=>'1'));
                    if ($check_name_count > 0) {
                        $response['status'] = 'failure';
                        $response['error'] = array('name' => "Name Already Exist...!",);
                    } else {
                        if(!empty($name_row)){
                            $curl_data = array(
                                'name' =>$name_row,
                                'state_id'=>$state_id
                            );
                            $this->model->insertData("tbl_cities",$curl_data);
                        }                        
                    }                   
                }
                $response['status'] ="success";
                $response['msg'] ="City Added Successfully";
            }
            echo json_encode($response);
    }
    public function display_all_city_data()
    {
       $this->load->model('city_model');
        $city_data = $this->city_model->get_datatables();
        $count = $this->city_model->count_all();
        $count_filtered = $this->city_model->count_filtered();
        $data = array();
        $no = @$_POST['start'];
        foreach ($city_data as $city_data_key => $city_data_row) {
            $edit = '<span><a href="javascript:void(0);" ><i class="glyphicon glyphicon-pencil edit_city" aria-hidden="true" data-toggle="modal" data-target="#City_Modal" id="'.$city_data_row['id'].'"></i> </a></span>&nbsp;&nbsp;';
            $delete = "<span id='".$city_data_row['id']."' class='delete_city'><i class='glyphicon glyphicon-trash'></i></a></span>";

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $city_data_row['state_name'];
            $row[] = $city_data_row['name'];
            $row[] = $edit . $delete;            
            $data[] = $row;
        }
        $output = array("draw" => @$_POST['draw'], "recordsTotal" => $count, "recordsFiltered" => $count_filtered, "data" => $data);
        echo json_encode($output);
    }
     public function get_city_data_on_id()
    {
        $id = $this->input->post('id');
        $city_data=  $this->supermodel->get_city_data_on_id($id);
        $data['city_data'] = $city_data;
        echo json_encode($data);
    }

     public function Update_city_data()
    {
        $edit_city_id = $this->input->post('edit_city_id');
        $edit_city = $this->input->post('edit_city');
        $this->form_validation->set_rules('edit_city', 'Name', 'required|trim', array('required' => 'You must provide a %s'));
        if ($this->form_validation->run() == FALSE) {
                $response['status'] = 'failure';
                $response['error'] = array(
                    'edit_city' => strip_tags(form_error('edit_city')), 
                );
            } else {
                $check_edit_city_count = $this->model->CountWhereRecord('tbl_cities', array('name'=>$edit_city,'status'=>'1','id !=' => $edit_city_id));
                if ($check_edit_city_count > 0) {
                    $response['status'] = 'failure';
                    $response['error'] = array('edit_city' => "Name Already Exist...!",);
                } else {
                    $curl_data = array(
                        'name' =>$edit_city,
                    );
                    $this->model->updateData("tbl_cities",$curl_data,array('id'=>$edit_city_id));
                    $response['status'] ="success";
                    $response['msg'] ="State Update Successfully";
                }
            }
            echo json_encode($response);
    }
    public function delete_city()
    {
        $id = $this->input->post('id');
        $curl_data = array('status'=>0);
         $this->model->updateData("tbl_cities",$curl_data,array('id'=>$id));
        $response['status'] = 'success';
        $response['message'] ="City Deleted Successfully";
        echo json_encode($response);
    }
    // ======================= Pincode ================================
    public function add_pincode()
    {
        if ($this->session->userdata('superadmin_logged_in')) {
             $city_data = $this->model->selectWhereData('tbl_cities ',array('status'=>1),array('*'),false);
            $data['city_data'] = $city_data;
                $this->load->view('add_pincode',$data);
        }else{
            redirect('welcome');
        }  
    }
    public function save_pincode()
    {
        $pincode = $this->input->post('pincode');
        $city_id = $this->input->post('city_id');
        // $this->form_validation->set_rules('pincode', 'Name', 'required|trim|number', array('required' => 'You must provide a %s'));
        $this->form_validation->set_rules('city_id', 'City Name', 'required|trim', array('required' => 'You must provide a %s'));
        if ($this->form_validation->run() == FALSE) {
                $response['status'] = 'failure';
                $response['error'] = array(
                    'pincode' => strip_tags(form_error('pincode')), 
                    'city_id' => strip_tags(form_error('city_id')), 
                );
            } else {
                foreach ($pincode as $pincode_key => $pincode_row) {
                    $check_pincode_count = $this->model->CountWhereRecord('tbl_pincode', array('pincode'=>$pincode_row,'fk_city_id'=>$city_id,'status'=>'1'));
                    if ($check_pincode_count > 0) {
                        $response['status'] = 'failure';
                        $response['error'] = array('pincode' => "Pincode Already Exist...!",);
                    } else {
                        if(!empty($pincode_row)){
                            $curl_data = array(
                                'pincode' =>$pincode_row,
                                'fk_city_id'=>$city_id
                            );
                            $this->model->insertData("tbl_pincode",$curl_data);
                        }  
                         $response['status'] ="success";
                         $response['msg'] ="Pincode Added Successfully";                      
                    }                   
                }
               
            }
            echo json_encode($response);
    }
    public function get_all_pincode_data()
    {
        $this->load->model('pincode_model');
        $pincode_data = $this->pincode_model->get_datatables();
        $count = $this->pincode_model->count_all();
        $count_filtered = $this->pincode_model->count_filtered();
        $data = array();
        $no = @$_POST['start'];
        foreach ($pincode_data as $pincode_data_key => $pincode_data_row) {
            $edit = '<span><a href="javascript:void(0);" ><i class="glyphicon glyphicon-pencil edit_pincode" aria-hidden="true" data-toggle="modal" data-target="#pincode_Modal" id="'.$pincode_data_row['id'].'"></i> </a></span>&nbsp;&nbsp;';
            $delete = "<span id='".$pincode_data_row['id']."' class='delete_pincode'><i class='glyphicon glyphicon-trash'></i></a></span>";

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $pincode_data_row['name'];
            $row[] = $pincode_data_row['pincode'];
            $row[] = $edit . $delete;            
            $data[] = $row;
        }
        $output = array("draw" => @$_POST['draw'], "recordsTotal" => $count, "recordsFiltered" => $count_filtered, "data" => $data);
        echo json_encode($output);
    }
    public function get_pincode_data_on_id()
    {
         $id = $this->input->post('id');
        $pincode_data=  $this->supermodel->get_pincode_data_on_id($id);
        $data['pincode_data'] = $pincode_data;
        echo json_encode($data);
    }

    public function Update_pincode_data()
    {
        $edit_pincode_id = $this->input->post('edit_pincode_id');
        $edit_pincode = $this->input->post('edit_pincode');
        $this->form_validation->set_rules('edit_pincode', 'Pincode', 'required|trim', array('required' => 'You must provide a %s'));
        if ($this->form_validation->run() == FALSE) {
                $response['status'] = 'failure';
                $response['error'] = array(
                    'edit_pincode' => strip_tags(form_error('edit_pincode')), 
                );
            } else {
                $check_edit_pincode_count = $this->model->CountWhereRecord('tbl_pincode', array('pincode'=>$edit_pincode,'status'=>'1','id !=' => $edit_pincode_id));
                if ($check_edit_pincode_count > 0) {
                    $response['status'] = 'failure';
                    $response['error'] = array('edit_pincode' => "pincode Already Exist...!",);
                } else {
                    $curl_data = array(
                        'pincode' =>$edit_pincode,
                    );
                    $this->model->updateData("tbl_pincode",$curl_data,array('id'=>$edit_pincode_id));
                    $response['status'] ="success";
                    $response['msg'] ="pincode Update Successfully";
                }
            }
            echo json_encode($response);
    }

    public function delete_pincode()
    {
        $id = $this->input->post('id');
        $curl_data = array('status'=>0);
         $this->model->updateData("tbl_pincode",$curl_data,array('id'=>$id));
        $response['status'] = 'success';
        $response['msg'] ="State Deleted Successfully";
        echo json_encode($response);
    }

    public function excel_upload_pincode() {
        $session_data = $this->session->userdata('superadmin_logged_in');
        // error_reporting(0);
        $this->load->library('excel');
        if (!empty($_FILES["upload_pincode"]["name"])) {
            $path = $_FILES["upload_pincode"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);
            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();
                $img = 0;
                for ($row = 2;$row <= $highestRow;$row++) {
                    $city_name = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $pincode = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                        $city_id = $this->model->selectWhereData('tbl_cities',array('name'=>$city_name),array('id'));
                    $check_pincode_count = $this->model->CountWhereRecord('tbl_pincode', array('pincode'=>$pincode,'status'=>'1'));
                        if ($check_pincode_count > 0) {
                            $response['status'] = 'failure';
                            $response['error'] = array('upload_pincode' => "Pincode Already Exist...!",);
                        } else {
                            if(!empty($city_id['id']) && !empty($pincode)){
                                $curl_data = array(
                                'pincode' =>$pincode,
                                'fk_city_id'=>$city_id['id']
                            );
                             $this->model->insertData("tbl_pincode",$curl_data);
                             $response['status'] ="success";
                             $response['msg'] ="Pincode Added Successfully";
                            }else{
                                  $response['status'] ="failure";
                                  $response['error'] = array('upload_pincode' => "Pincode Already Exist...!",);
                            }                             
                        }
                }
            }
        }else{
            $response['status'] ="failure";
            $response['msg'] ="Something went wrong";
        }
             echo json_encode($response);
    }
}
