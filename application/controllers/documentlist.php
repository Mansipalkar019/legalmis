<?php
defined('BASEPATH') or exit('No direct script access allowed');

class documentlist extends CI_Controller
{
    var $role_id;

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('model');
        if (!$this->session->has_userdata('user_id')) redirect('');

        $this->role_id = intval($this->encryption->decrypt($this->session->userdata('role_id')));
        if ($this->role_id != 1) redirect(''); // grant access
    }

    public function getalldoclist()
    {
       $data[] = json_encode($_POST);   
       $totalData=  $this->model->getAllData('document_list');
       $sql="SELECT * FROM document_list WHERE status='1'";
       if(!empty($_POST['search']['value']))
       {
            $sql.="WHERE name LIKE '%".$_POST['search']['value']."%'";
       }
       $totalFiltered=$this->model->count_by_query($sql);
       $sql.= " ORDER BY name " . $_POST['order'][0]['dir'] . " LIMIT " . $_POST['start'] . " ," . $_POST['length'] . " ";
       $category_details = $this->model->getSqlData($sql);
      
       $data_array=array();
       foreach($category_details as $category_details_key => $category_details_row)
       {
        $nestedData=array();
        $nestedData[]=++$category_details_key;
        $nestedData[]=$category_details_row['name'];
        $edit = '<span><a href="javascript:void(0);" >
        <i class="glyphicon glyphicon-pencil a_category_view" aria-hidden="true" data-toggle="modal"
        data-target="#doclistModal" id="'.$category_details_row['id'].'"></i> </a></span>&nbsp;&nbsp;';
        $delete = "<span><a href='#' onclick='delete_doc_list(this," . $category_details_row['id'] . ")'><i class='glyphicon glyphicon-trash'></i></a></span>";
        $nestedData[] =  $edit . $delete;
        $data_array[] = $nestedData;
       }
       $json_data = array("draw" => intval($_POST['draw']), "recordsTotal" => intval($totalData), "recordsFiltered" => intval($totalFiltered), "data" => $data_array);
       //echo "<pre>";
       //print_r($json_data);die();
       echo json_encode($json_data);
    }
    public function get_all_doclist()
    {
        $service_id=$_POST['id'];
        $totalData=  $this->model->selectWhereData('document_list',array('id'=>$service_id),array('id','name'));
        echo json_encode($totalData);
    }

    public function add_doc()
    {
        $jsonObj = $_POST['jsonObj'];
        $array_data = json_decode($jsonObj, true);
        $array_entity=$array_data['product'];
        if (isset($array_entity) && !empty($array_entity)) {
            $service_name = $array_entity['servicename'];
            $service_name_exist = $this->model->getData("document_list", array('name' => $service_name, 'status' => '1'));
            if(isset($service_name_exist) && !empty($service_name_exist))
            {
                $data['status'] = '0';
                $data['msg'] = 'Document Name already Exist.';
            }else{
                $service_id = $this->model->insertData('document_list', array('name' => $service_name));
                if($service_id  > 0)
                {
                    $data['status'] = '1';
                    $data['msg'] = 'New Document Name has been added successfully.';
                }else{
                    $data['status'] = '0';
                    $data['msg'] = 'Something went wrong while submitting Document Name.';  
                }
            }
        }else{
                $data['status'] = '0';
                $data['msg'] = 'Invalid Document Name';
        }
        echo json_encode($data);
    }

    public function Update_Doclist()
    {
        $jsonObj = $_POST['jsonObj'];
        $array_data = json_decode($jsonObj, true);
        $array_entity=$array_data['product'];
        if (isset($array_entity) && !empty($array_entity)) {
            $service_name = $array_entity['service_name'];
            $service_id = $array_entity['serviceid'];
            $id = $array_entity['id'];
            $this->model->updateData('document_list',array('name'=>$service_name,'service_id'=>$service_id), array('id' => $id));
               
            $data['status'] = '1';
            $data['msg'] = 'Document List has been updated successfully.';
              
        }else{
                $data['status'] = '0';
                $data['msg'] = 'Failed to Document List Service ';
        }
        echo json_encode($data);
    }

    public function delete_documentlist()
    {
      $jsonObj=$_POST['jsonObj'];
      $array_data=json_decode($jsonObj,true);
      $array_entity=$array_data['product'];
      if(isset($array_entity) && !empty($array_entity))
      {
        $service_id=$array_entity['service_id'];
        $this->model->updateData('document_list',array('status'=>'0'),array('id'=>$service_id));
        $data['status'] = '1';
        $data['msg'] = 'Service has been deleted successfully.';
      }
      else{
        $data['status'] = '0';
        $data['msg'] = 'Invalid Service details.';
      }
      echo json_encode($data);
    }

    public function sub_services()
    {
        $this->load->view('header', array('title' => "Services | " . CRM__NAME, 'active' => "services",'active_sub'=>'sub_services'));
        
        $this->load->library('grocery_CRUD');
        $table = "sub_services";
        $crud = new grocery_CRUD();
        $crud->set_table($table);
        $crud->set_subject(ucwords($table));

        $crud->set_relation('service_id', 'services', 'name');
        $crud->display_as('service_id', 'Service');

        $output = $crud->render();
        $data['output'] = $output;
        $this->load->view('crud-view', $data);

        $this->load->view('footer');
    }

    public function document_list()
    {
        $this->load->view('header', array('title' => "Document List | " . CRM__NAME, 'active' => "services",'active_sub'=>'document_list'));
        
        $this->load->library('grocery_CRUD');
        $table = "document_list";
        $crud = new grocery_CRUD();
        $crud->set_table($table);
        $crud->set_subject(ucwords($table));

        $output = $crud->render();
        $data['output'] = $output;
        $this->load->view('crud-view', $data);

        $this->load->view('footer');
    }

    public function payment_mode()
    {
        $this->load->view('header', array('title' => "Payment Mode | " . CRM__NAME, 'active' => "services",'active_sub'=>'payment_mode'));
        
        $this->load->library('grocery_CRUD');
        $table = "payment_mode";
        $crud = new grocery_CRUD();
        $crud->set_table($table);
        $crud->set_subject(ucwords($table));

        $output = $crud->render();
        $data['output'] = $output;
        $this->load->view('crud-view', $data);

        $this->load->view('footer');
    }

    public function invoice_type()
    {
        $this->load->view('header', array('title' => "Invoice Type | " . CRM__NAME, 'active' => "services",'active_sub'=>'invoice_type'));
        
        $this->load->library('grocery_CRUD');
        $table = "invoice_type";
        $crud = new grocery_CRUD();
        $crud->set_table($table);
        $crud->set_subject(ucwords($table));

        $output = $crud->render();
        $data['output'] = $output;
        $this->load->view('crud-view', $data);

        $this->load->view('footer');
    }

    public function invoice_status()
    {
        $this->load->view('header', array('title' => "Invoice Status | " . CRM__NAME, 'active' => "services",'active_sub'=>'invoice_status'));
        
        $this->load->library('grocery_CRUD');
        $table = "invoice_status";
        $crud = new grocery_CRUD();
        $crud->set_table($table);
        $crud->set_subject(ucwords($table));

        $output = $crud->render();
        $data['output'] = $output;
        $this->load->view('crud-view', $data);

        $this->load->view('footer');
    }

}