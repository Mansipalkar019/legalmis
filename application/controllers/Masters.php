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
     if (!$this->session->has_userdata('user_id')) redirect('');
    }

    public function index()
    {
        $data['get_service_info']=$this->model->getAllData('services');
        $this->load->view('masters',$data);
        
    }
    public function subservices()
    {
        $data['get_service_info']=$this->model->getAllData('services');
        $this->load->view('services/subservice',$data);
        
    }

    public function documentlist()
    {
        $data['get_document_list']=$this->model->getAllData('services');
        $this->load->view('services/documentlist',$data);
        
    }
    public function paymentmode()
    {
        $data['get_payment_mode']=$this->model->getAllData('payment_mode');
        $this->load->view('services/paymentmode',$data);
        
    }
    public function invoicetype()
    {
        $data['get_invoice_type']=$this->model->getAllData('invoice_type');
        $this->load->view('services/invoicetype',$data);
        
    }

    public function invoicestatus()
    {
        $data['get_invoice_type']=$this->model->getAllData('invoice_status');
        $this->load->view('services/invoicestatus',$data);
        
    }

    public function cust_executive()
    {
        $this->load->view('services/cust_executive');
        
    }

    public function getallservices()
    {
       
       $data[] = json_encode($_POST);  
       $totalData=  $this->model->getAllData('services');
       
       $sql="SELECT * FROM services WHERE status='1'";
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
        $nestedData[]=$category_details_row['brand_name'];
        $nestedData[]=$category_details_row['class_name'];
        $edit = '<span><a href="javascript:void(0);" >
        <i class="glyphicon glyphicon-pencil a_category_view" aria-hidden="true" data-toggle="modal"
        data-target="#myModal" id="'.$category_details_row['id'].'"></i> </a></span>&nbsp;&nbsp;';
        $delete = "<span><a href='#' onclick='delete_services(this," . $category_details_row['id'] . ")'><i class='glyphicon glyphicon-trash'></i></a></span>";
        $nestedData[] =  $edit . $delete;
        $data_array[] = $nestedData;
       }
       $json_data = array("draw" => intval($_POST['draw']), "recordsTotal" => intval($totalData), "recordsFiltered" => intval($totalFiltered), "data" => $data_array);
       //echo "<pre>";
       //print_r($json_data);die();
       echo json_encode($json_data);
    }
    public function get_all_services()
    {
        $service_id=$_POST['id'];
        $totalData=  $this->model->selectWhereData('services',array('id'=>$service_id),array('id','name','brand_name','class_name'));
      
        echo json_encode($totalData);
    }

    public function addservice()
    {
        $jsonObj = $_POST['jsonObj'];
        $array_data = json_decode($jsonObj, true);
        $array_entity=$array_data['product'];
        if (isset($array_entity) && !empty($array_entity)) {
            $service_name = $array_entity['servicename'];
            $brand_name = $array_entity['brandname'];
            $class_name = $array_entity['classname'];
            $service_name_exist = $this->model->getData("services", array('name' => $service_name,'status' => '1'));
            if(isset($service_name_exist) && !empty($service_name_exist))
            {
                $data['status'] = '0';
                $data['msg'] = 'Service Name already Exist.';
            }else{
                 $service_id = $this->model->insertData('services', array('name' => $service_name,'brand_name' => $brand_name,'class_name' => $class_name));
                if($service_id  > 0)
                {
                    $data['status'] = '1';
                    $data['msg'] = 'New Service Name has been added successfully.';
                }else{
                    $data['status'] = '0';
                    $data['msg'] = 'Something went wrong while submitting Service Name.';  
                }
            }
        }else{
                $data['status'] = '0';
                $data['msg'] = 'Invalid Service Name';
        }
        echo json_encode($data);
    }

    public function Update_Service()
    {
        $jsonObj = $_POST['jsonObj'];
        $array_data = json_decode($jsonObj, true);
        $array_entity=$array_data['product'];
        $service_name_exist = $this->model->getData("services", array('name' => $array_entity['service_name'], 'status' => '1','id !='=>$array_entity['serviceid']));
        if(isset($service_name_exist) && !empty($service_name_exist))
        {  
            $data['status'] = '0';
            $data['msg'] = 'Service Name already Exist';
            
        }else{
            if (isset($array_entity) && !empty($array_entity)) {
                $service_name = $array_entity['service_name'];
                $service_id = $array_entity['serviceid'];
                $brandname = $array_entity['brandname'];
                $classname = $array_entity['classname'];
                $this->model->updateData('services',array('name'=>$service_name,'brand_name'=>$brandname,'class_name'=>$classname), array('id' => $service_id));
                   
                $data['status'] = '1';
                $data['msg'] = 'Service has been updated successfully.';
                  
            }else{
                    $data['status'] = '0';
                    $data['msg'] = 'Failed to update Service ';
            }
        }
      
        echo json_encode($data);
    }

    public function delete_service()
    {
      $jsonObj=$_POST['jsonObj'];
      $array_data=json_decode($jsonObj,true);
      $array_entity=$array_data['product'];
      if(isset($array_entity) && !empty($array_entity))
      {
        $service_id=$array_entity['service_id'];
        $this->model->updateData('services',array('status'=>'0'),array('id'=>$service_id));
        $data['status'] = '1';
        $data['msg'] = 'Service has been deleted successfully.';
      }
      else{
        $data['status'] = '0';
        $data['msg'] = 'Invalid Service details.';
      }
      echo json_encode($data);
    }

    
    //====================================subservices============================================//
    public function getallsubservices()
    {
       $data[] = json_encode($_POST);
       $totalData=  $this->supermodel->get_sub_services();
       // echo '<pre>'; print_r($totalData); exit;
       $sql="SELECT sub_services.*, services.name as servicename
       FROM sub_services
       LEFT JOIN services ON sub_services.id=services.id ";
       if(!empty($data['search']['value']))
       {
            $sql.="WHERE sub_services.name LIKE '%".$_POST['search']['value']."%'";
       }
     
       $totalFiltered=$this->supermodel->count_filtered();
       $sql.= " ORDER BY sub_services.name " . $_POST['order'][0]['dir'] . " LIMIT " . $_POST['start'] . " ," . $_POST['length'] . " ";
       $category_details = $this->supermodel->get_sub_services();
       $data_array=array();
       foreach($category_details as $category_details_key => $category_details_row)
       {
        $nestedData=array();
        $nestedData[]=++$category_details_key;
        $nestedData[]=$category_details_row['servicename'];
        $nestedData[]=$category_details_row['name'];
        $edit = '<span><a href="javascript:void(0);" >
        <i class="glyphicon glyphicon-pencil a_category_view" aria-hidden="true" data-toggle="modal"
        data-target="#subserviceModal" id="'.$category_details_row['id'].'"></i> </a></span>&nbsp;&nbsp;';
        $delete = "<span><a href='#' onclick='delete_sub_service(this," . $category_details_row['id'] . ")'><i class='glyphicon glyphicon-trash'></i></a></span>";
        $nestedData[] =  $edit . $delete;
        $data_array[] = $nestedData;
       }
       $json_data = array("draw" => intval($_POST['draw']), "recordsTotal" => intval($totalData), "recordsFiltered" => intval($totalFiltered), "data" => $data_array);
    //    echo "<pre>";
    //    print_r($json_data);die();
       echo json_encode($json_data);
    }

    public function get_all_sub_services()
    {
        $service_id=$_POST['id'];
        $totalData= $this->supermodel->main_sub_services($service_id);
        echo json_encode($totalData);
    }

    public function addsubservice()
    {
        $jsonObj = $_POST['jsonObj'];
        $array_data = json_decode($jsonObj, true);
        $array_entity=$array_data['product'];
        if (isset($array_entity) && !empty($array_entity)) {
            $services = $array_entity['services'];
            $sub_service_name = $array_entity['sub_service_name'];
            $service_name_exist = $this->model->getData("sub_services", array('name' => $sub_service_name, 'status' => '1'));
            if(isset($service_name_exist) && !empty($service_name_exist))
            {
                $data['status'] = '0';
                $data['msg'] = 'Sub Service already Exist.';
            }else{
                $service_id = $this->model->insertData('sub_services', array('name' => $sub_service_name,'service_id'=>$services));
                if($service_id  > 0)
                {
                    $data['status'] = '1';
                    $data['msg'] = 'New Service Name has been added successfully.';
                }else{
                    $data['status'] = '0';
                    $data['msg'] = 'Something went wrong while submitting Service Name.';  
                }
            }
        }else{
                $data['status'] = '0';
                $data['msg'] = 'Invalid Service Name';
        }
        echo json_encode($data);
    }

    public function delete_sub_service()
    {
      $jsonObj=$_POST['jsonObj'];
      $array_data=json_decode($jsonObj,true);
      $array_entity=$array_data['product'];
      if(isset($array_entity) && !empty($array_entity))
      {
        $service_id=$array_entity['service_id'];
        $this->model->updateData('sub_services',array('status'=>'0'),array('id'=>$service_id));
        $data['status'] = '1';
        $data['msg'] = 'Sub Service has been deleted successfully.';
      }
      else{
        $data['status'] = '0';
        $data['msg'] = 'Invalid Sub Service details.';
      }
      echo json_encode($data);
    }

    public function Update_Sub_Service()
    {
        $jsonObj = $_POST['jsonObj'];
        $array_data = json_decode($jsonObj, true);
        $array_entity=$array_data['product'];
        $service_name_exist = $this->model->getData("sub_services", array('name' => $array_entity['name'], 'status' => '1','id !='=>$array_entity['id']));
        if(isset($service_name_exist) && !empty($service_name_exist))
        {
            $data['status'] = '0';
            $data['msg'] = 'Sub Service Already Exist';
        }else{
            if (isset($array_entity) && !empty($array_entity)) {
                $service_name = $array_entity['name'];
                $service_id = $array_entity['serviceid'];
                $id = $array_entity['id'];
                $this->model->updateData('sub_services',array('name'=>$service_name,'service_id' => $service_id), array('id' => $id));
                //echo $this->db->last_query();die();
                $data['status'] = '1';
                $data['msg'] = 'Service has been updated successfully.';
                  
            }else{
                    $data['status'] = '0';
                    $data['msg'] = 'Failed to update Service';
            }
        }
        
        echo json_encode($data);
    }

    //=============================================payment mode=====================================//
    public function getallpaymentmode()
    {
       $data[] = json_encode($_POST);   
       $totalData=  $this->model->getAllData('payment_mode');
       $sql="SELECT * FROM payment_mode WHERE status='1'";
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
        data-target="#pay_mode_Modal" id="'.$category_details_row['id'].'"></i> </a></span>&nbsp;&nbsp;';
        $delete = "<span><a href='#' onclick='delete_payment_mode(this," . $category_details_row['id'] . ")'><i class='glyphicon glyphicon-trash'></i></a></span>";
        $nestedData[] =  $edit . $delete;
        $data_array[] = $nestedData;
       }
       $json_data = array("draw" => intval($_POST['draw']), "recordsTotal" => intval($totalData), "recordsFiltered" => intval($totalFiltered), "data" => $data_array);
       //echo "<pre>";
       //print_r($json_data);die();
       echo json_encode($json_data);
    }
    public function get_all_payment_mode()
    {
        $service_id=$_POST['id'];
        $totalData=  $this->model->selectWhereData('payment_mode',array('id'=>$service_id),array('id','name'));
        echo json_encode($totalData);
    }

    public function addpaymentmode()
    {
        $jsonObj = $_POST['jsonObj'];
        $array_data = json_decode($jsonObj, true);
        $array_entity=$array_data['product'];
        if (isset($array_entity) && !empty($array_entity)) {
            $service_name = $array_entity['servicename'];
            $service_name_exist = $this->model->getData("payment_mode", array('name' => $service_name, 'status' => '1'));
            if(isset($service_name_exist) && !empty($service_name_exist))
            {
                $data['status'] = '0';
                $data['msg'] = 'Invoice Type already Exist.';
            }else{
                $service_id = $this->model->insertData('payment_mode', array('name' => $service_name));
                if($service_id  > 0)
                {
                    $data['status'] = '1';
                    $data['msg'] = 'Payment Mode has been added successfully.';
                }else{
                    $data['status'] = '0';
                    $data['msg'] = 'Something went wrong while submitting Payment Mode.';  
                }
            }
        }else{
                $data['status'] = '0';
                $data['msg'] = 'Invalid Payment Mode';
        }
        echo json_encode($data);
    }

    public function Update_Paymentmode()
    {
        $jsonObj = $_POST['jsonObj'];
        $array_data = json_decode($jsonObj, true);
        $array_entity=$array_data['product'];
        $service_name_exist = $this->model->getData("payment_mode", array('name' => $array_entity['service_name'], 'status' => '1','id !='=>$array_entity['serviceid']));
        if(isset($service_name_exist) && !empty($service_name_exist))
        {
            $data['status'] = '0';
            $data['msg'] = 'Payment Mode already exist';
        }else{
            if (isset($array_entity) && !empty($array_entity)) {
                $service_name = $array_entity['service_name'];
                $service_id = $array_entity['serviceid'];
                $this->model->updateData('payment_mode',array('name'=>$service_name), array('id' => $service_id));
                   
                $data['status'] = '1';
                $data['msg'] = 'Payment Mode has been updated successfully.';
                  
            }else{
                    $data['status'] = '0';
                    $data['msg'] = 'Failed to update Payment Mode ';
            }
        }
       
        echo json_encode($data);
    }

    public function delete_paymentmode()
    {
      $jsonObj=$_POST['jsonObj'];
      $array_data=json_decode($jsonObj,true);
      $array_entity=$array_data['product'];
      if(isset($array_entity) && !empty($array_entity))
      {
        $service_id=$array_entity['service_id'];
        $this->model->updateData('payment_mode',array('status'=>'0'),array('id'=>$service_id));
        $data['status'] = '1';
        $data['msg'] = 'Payment Mode has been deleted successfully.';
      }
      else{
        $data['status'] = '0';
        $data['msg'] = 'Invalid Payment Mode details.';
      }
      echo json_encode($data);
    }

     //=============================================Document List=====================================//
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
        $sql="SELECT * FROM services WHERE status='1' and id='".$category_details_row['service_id']."'";
        $get_services = $this->model->getSqlData($sql);
        //echo $this->db->last_query();
         $nestedData=array();
         $nestedData[]=++$category_details_key;
         $nestedData[]=$get_services[0]['name'];
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
         $totalData= $this->supermodel->main_document_list($service_id);
         echo json_encode($totalData);
     }
 
     public function add_doc()
     {
         $jsonObj = $_POST['jsonObj'];
         $array_data = json_decode($jsonObj, true);
         $array_entity=$array_data['product'];
         if (isset($array_entity) && !empty($array_entity)) {
             $service_name = $array_entity['servicename'];
             $services = $array_entity['services'];
             $service_name_exist = $this->model->getData("document_list", array('name' => $service_name,'status' => '1'));
             if(isset($service_name_exist) && !empty($service_name_exist))
             {
                 $data['status'] = '0';
                 $data['msg'] = 'Document Name already Exist.';
             }else{
                 $service_id = $this->model->insertData('document_list', array('name' => $service_name,'service_id'=>$services));
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
         $service_name_exist = $this->model->getData("document_list", array('name =' => $array_entity['service_name'], 'status' => '1','service_id ='=>$array_entity['serviceid']));
         if(isset($service_name_exist) && !empty($service_name_exist))
         {
            $data['status'] = '0';
            $data['msg'] = 'Document List Name already Exist';
         }else{
            if (isset($array_entity) && !empty($array_entity)) {
                $service_name = $array_entity['service_name'];
                $service_id = $array_entity['serviceid'];
                $id = $array_entity['id'];
                $this->model->updateData('document_list',array('name'=>$service_name,'service_id'=>$service_id), array('id' => $id));
                $data['status'] = '1';
                $data['msg'] = 'Document List has been updated successfully.';
                  
            }else{
                    $data['status'] = '0';
                    $data['msg'] = 'Failed to Document List Service';
            }
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
 
    //===========================================Invoice tYPE================================//
    
    public function getallinvoicetype()
    {
       $data[] = json_encode($_POST);   
       $totalData=  $this->model->getAllData('invoice_type');
       $sql="SELECT * FROM invoice_type WHERE status='1'";
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
        // $edit = '<span><a href="javascript:void(0);" >
        // <i class="glyphicon glyphicon-pencil a_category_view" aria-hidden="true" data-toggle="modal"
        // data-target="#invoicetypeModal" id="'.$category_details_row['id'].'"></i> </a></span>&nbsp;&nbsp;';
        // $delete = "<span><a href='#' onclick='delete_invoice_type(this," . $category_details_row['id'] . ")'><i class='glyphicon glyphicon-trash'></i></a></span>";
        // $nestedData[] =  $edit . $delete;
        $data_array[] = $nestedData;
       }
       $json_data = array("draw" => intval($_POST['draw']), "recordsTotal" => intval($totalData), "recordsFiltered" => intval($totalFiltered), "data" => $data_array);
       //echo "<pre>";
       //print_r($json_data);die();
       echo json_encode($json_data);
    }
    public function get_all_invoicetype()
    {
        $service_id=$_POST['id'];
        $totalData=  $this->model->selectWhereData('invoice_type',array('id'=>$service_id),array('id','name'));
        echo json_encode($totalData);
    }

    public function addinvoicetype()
    {
        $jsonObj = $_POST['jsonObj'];
        $array_data = json_decode($jsonObj, true);
        $array_entity=$array_data['product'];
        if (isset($array_entity) && !empty($array_entity)) {
            $service_name = $array_entity['servicename'];
            $service_name_exist = $this->model->getData("invoice_type", array('name' => $service_name, 'status' => '1'));
            if(isset($service_name_exist) && !empty($service_name_exist))
            {
                $data['status'] = '0';
                $data['msg'] = 'Invoice Type already Exist.';
            }else{
                $service_id = $this->model->insertData('invoice_type', array('name' => $service_name));
                if($service_id  > 0)
                {
                    $data['status'] = '1';
                    $data['msg'] = 'Invoice Type has been added successfully.';
                }else{
                    $data['status'] = '0';
                    $data['msg'] = 'Something went wrong while submitting Invoice Type.';  
                }
            }
        }else{
                $data['status'] = '0';
                $data['msg'] = 'Invalid Invoice Type';
        }
        echo json_encode($data);
    }

    public function Update_Invoicetype()
    {
        $jsonObj = $_POST['jsonObj'];
        $array_data = json_decode($jsonObj, true);
        $array_entity=$array_data['product'];
        $service_name_exist = $this->model->getData("invoice_type", array('name' => $array_entity['service_name'], 'status' => '1','id !='=>$array_entity['serviceid']));
        if(isset($service_name_exist) && !empty($service_name_exist))
        {   
            $data['status'] = '0';
            $data['msg'] = 'Invoice Type already Exist';

        }else{
            if (isset($array_entity) && !empty($array_entity)) {
                $service_name = $array_entity['service_name'];
                $service_id = $array_entity['serviceid'];
                $this->model->updateData('invoice_type',array('name'=>$service_name), array('id' => $service_id));
                   
                $data['status'] = '1';
                $data['msg'] = 'Invoice Type has been updated successfully.';
                  
            }else{
                    $data['status'] = '0';
                    $data['msg'] = 'Failed to update Invoice Type ';
            }
        }
       
        echo json_encode($data);
    }

    public function delete_invoicetype()
    {
      $jsonObj=$_POST['jsonObj'];
      $array_data=json_decode($jsonObj,true);
      $array_entity=$array_data['product'];
      if(isset($array_entity) && !empty($array_entity))
      {
        $service_id=$array_entity['service_id'];
        $this->model->updateData('invoice_type',array('status'=>'0'),array('id'=>$service_id));
        $data['status'] = '1';
        $data['msg'] = 'Invoice Type has been deleted successfully.';
      }
      else{
        $data['status'] = '0';
        $data['msg'] = 'Invalid Invoice Type details.';
      }
      echo json_encode($data);
    }

    //==========================================Invoice Status=========================================//
    public function getallinvoicestatus()
    {
       $data[] = json_encode($_POST);   
       $totalData=  $this->model->getAllData('invoice_status');
       $sql="SELECT * FROM invoice_status WHERE status='1'";
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
        data-target="#invoicestatusModal" id="'.$category_details_row['id'].'"></i> </a></span>&nbsp;&nbsp;';
        $delete = "<span><a href='#' onclick='delete_invoice_status(this," . $category_details_row['id'] . ")'><i class='glyphicon glyphicon-trash'></i></a></span>";
        $nestedData[] =  $edit . $delete;
        $data_array[] = $nestedData;
       }
       $json_data = array("draw" => intval($_POST['draw']), "recordsTotal" => intval($totalData), "recordsFiltered" => intval($totalFiltered), "data" => $data_array);
       //echo "<pre>";
       //print_r($json_data);die();
       echo json_encode($json_data);
    }
    public function get_all_invoicestatus()
    {
        $service_id=$_POST['id'];
        $totalData=  $this->model->selectWhereData('invoice_status',array('id'=>$service_id),array('id','name'));
        echo json_encode($totalData);
    }

    public function addinvoicestatus()
    {
        $jsonObj = $_POST['jsonObj'];
        $array_data = json_decode($jsonObj, true);
        $array_entity=$array_data['product'];
        if (isset($array_entity) && !empty($array_entity)) {
            $service_name = $array_entity['servicename'];
            $service_name_exist = $this->model->getData("invoice_status", array('name' => $service_name, 'status' => '1'));
            if(isset($service_name_exist) && !empty($service_name_exist))
            {
                $data['status'] = '0';
                $data['msg'] = 'Invoice Status already Exist.';
            }else{
                $service_id = $this->model->insertData('invoice_status', array('name' => $service_name));
                if($service_id  > 0)
                {
                    $data['status'] = '1';
                    $data['msg'] = 'Invoice Status has been added successfully.';
                }else{
                    $data['status'] = '0';
                    $data['msg'] = 'Something went wrong while submitting Invoice Status.';  
                }
            }
        }else{
                $data['status'] = '0';
                $data['msg'] = 'Invalid Invoice Type';
        }
        echo json_encode($data);
    }

    public function Update_Invoicestatus()
    {
        $jsonObj = $_POST['jsonObj'];
        $array_data = json_decode($jsonObj, true);
        $array_entity=$array_data['product'];
        $service_name_exist = $this->model->getData("invoice_status", array('name' => $array_entity['service_name'], 'status' => '1','id !='=>$array_entity['serviceid']));
        if(isset($service_name_exist) && !empty($service_name_exist)){
            $data['status'] = '0';
            $data['msg'] = 'Invoice Status already Exist';
        }else{
            if (isset($array_entity) && !empty($array_entity)) {
                $service_name = $array_entity['service_name'];
                $service_id = $array_entity['serviceid'];
                $this->model->updateData('invoice_status',array('name'=>$service_name), array('id' => $service_id));
                   
                $data['status'] = '1';
                $data['msg'] = 'Invoice Status has been updated successfully.';
                  
            }else{
                    $data['status'] = '0';
                    $data['msg'] = 'Failed to update Invoice Status ';
            }
        }
      
        echo json_encode($data);
    }

    public function delete_invoicestatus()
    {
      $jsonObj=$_POST['jsonObj'];
      $array_data=json_decode($jsonObj,true);
      $array_entity=$array_data['product'];
      if(isset($array_entity) && !empty($array_entity))
      {
        $service_id=$array_entity['service_id'];
        $this->model->updateData('invoice_status',array('status'=>'0'),array('id'=>$service_id));
        $data['status'] = '1';
        $data['msg'] = 'Invoice Status has been deleted successfully.';
      }
      else{
        $data['status'] = '0';
        $data['msg'] = 'Invalid Invoice Status details.';
      }
      echo json_encode($data);
    }

    //====================================customer Executive==============================//
    public function getallcust_exec()
    {
      
       $data[] = json_encode($_POST);  
       $totalData=  $this->model->getAllData('users');
       
       $sql="SELECT * FROM users WHERE status='1'";
       if(!empty($_POST['search']['value']))
       {
            $sql.="WHERE username LIKE '%".$_POST['search']['value']."%'";
       }
       $totalFiltered=$this->model->count_by_query($sql);
       $sql.= " ORDER BY username " . $_POST['order'][0]['dir'] . " LIMIT " . $_POST['start'] . " ," . $_POST['length'] . " ";
       $category_details = $this->model->getSqlData($sql);
       $data_array=array();
       foreach($category_details as $category_details_key => $category_details_row)
       {
        $nestedData=array();
        $nestedData[]=++$category_details_key;
        $nestedData[]=$category_details_row['username'];
        $edit = '<span><a href="javascript:void(0);" >
        <i class="glyphicon glyphicon-pencil a_category_view" aria-hidden="true" data-toggle="modal"
        data-target="#cust_execModal" id="'.$category_details_row['user_id'].'"></i> </a></span>&nbsp;&nbsp;';
        $delete = "<span><a href='#' onclick='delete_cust_exec(this," . $category_details_row['user_id'] . ")'><i class='glyphicon glyphicon-trash'></i></a></span>";
        $nestedData[] =  $edit . $delete;
        $data_array[] = $nestedData;
       }
       $json_data = array("draw" => intval($_POST['draw']), "recordsTotal" => intval($totalData), "recordsFiltered" => intval($totalFiltered), "data" => $data_array);
       //echo "<pre>";
       //print_r($json_data);die();
       echo json_encode($json_data);
    }
    public function get_all_cust_exec()
    {
        $service_id=$_POST['id'];
        $totalData=  $this->model->selectWhereData('users',array('user_id'=>$service_id),array('user_id','username'));
      
        echo json_encode($totalData);
    }

    public function addcust_exec()
    {
        $jsonObj = $_POST['jsonObj'];
        $array_data = json_decode($jsonObj, true);
        $array_entity=$array_data['product'];
        if (isset($array_entity) && !empty($array_entity)) {
            $service_name = $array_entity['servicename'];
            $service_name_exist = $this->model->getData("users", array('username' => $service_name, 'status' => '1'));
            if(isset($service_name_exist) && !empty($service_name_exist))
            {
                $data['status'] = '0';
                $data['msg'] = 'Customer Executive Name already Exist.';
            }else{
                $service_id = $this->model->insertData('users', array('username' => $service_name));
                if($service_id  > 0)
                {
                    $data['status'] = '1';
                    $data['msg'] = 'New Customer Executive  has been added successfully.';
                }else{
                    $data['status'] = '0';
                    $data['msg'] = 'Something went wrong while submitting Customer Executive Name.';  
                }
            }
        }else{
                $data['status'] = '0';
                $data['msg'] = 'Invalid Customer Executive Name';
        }
        echo json_encode($data);
    }

    public function Update_cust_exec()
    {
        $jsonObj = $_POST['jsonObj'];
        $array_data = json_decode($jsonObj, true);
        $array_entity=$array_data['product'];
        $service_name_exist = $this->model->getData("users", array('username' => $array_entity['service_name'], 'status' => '1','user_id !='=>$array_entity['serviceid']));
        if(isset($service_name_exist) && !empty($service_name_exist)){
            $data['status'] = '0';
            $data['msg'] = 'Customer Executive Already Exist ';
        }else{
            if (isset($array_entity) && !empty($array_entity)) {
                $service_name = $array_entity['service_name'];
                $service_id = $array_entity['serviceid'];
                $this->model->updateData('users',array('username'=>$service_name), array('user_id' => $service_id));
                   
                $data['status'] = '1';
                $data['msg'] = 'Customer Executive has been updated successfully.';
                  
            }else{
                    $data['status'] = '0';
                    $data['msg'] = 'Failed to update Customer Executive ';
            }
        }
       
        echo json_encode($data);
    }

    public function delete_cust_exec()
    {
      $jsonObj=$_POST['jsonObj'];
      $array_data=json_decode($jsonObj,true);
      $array_entity=$array_data['product'];
      if(isset($array_entity) && !empty($array_entity))
      {
        $service_id=$array_entity['service_id'];
        $this->model->updateData('users',array('status'=>'0'),array('user_id'=>$service_id));
        $data['status'] = '1';
        $data['msg'] = 'Customer Executive has been deleted successfully.';
      }
      else{
        $data['status'] = '0';
        $data['msg'] = 'Invalid Customer Executive details.';
      }
      echo json_encode($data);
    }

   
}
