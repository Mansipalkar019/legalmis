<?php
defined('BASEPATH') or exit('No direct script access allowed');

class customerexecutive extends CI_Controller
{
    var $role_id;

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('model');
        if (!$this->session->has_userdata('user_id')) redirect('');

        $this->role_id = intval($this->encryption->decrypt($this->session->userdata('role_id')));
        $this->user_id = intval($this->encryption->decrypt($this->session->userdata('user_id')));
        if ($this->role_id == 1 || $this->role_id == 3); // grant access
        else redirect('');
    }

    public function getallcust_exec()
    {
       
       $data[] = json_encode($_POST);  
       $totalData=  $this->model->getAllData('customer_executive');
       
       $sql="SELECT * FROM customer_executive WHERE status='1'";
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
        data-target="#cust_execModal" id="'.$category_details_row['id'].'"></i> </a></span>&nbsp;&nbsp;';
        $delete = "<span><a href='#' onclick='delete_cust_exec(this," . $category_details_row['id'] . ")'><i class='glyphicon glyphicon-trash'></i></a></span>";
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
        $totalData=  $this->model->selectWhereData('customer_executive',array('id'=>$service_id),array('id','name'));
      
        echo json_encode($totalData);
    }

    public function addcust_exec()
    {
        $jsonObj = $_POST['jsonObj'];
        $array_data = json_decode($jsonObj, true);
        $array_entity=$array_data['product'];
        if (isset($array_entity) && !empty($array_entity)) {
            $service_name = $array_entity['servicename'];
            $service_name_exist = $this->model->getData("customer_executive", array('name' => $service_name, 'status' => '1'));
            if(isset($service_name_exist) && !empty($service_name_exist))
            {
                $data['status'] = '0';
                $data['msg'] = 'Customer Executive Name already Exist.';
            }else{
                $service_id = $this->model->insertData('customer_executive', array('name' => $service_name));
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
        if (isset($array_entity) && !empty($array_entity)) {
            $service_name = $array_entity['service_name'];
            $service_id = $array_entity['serviceid'];
            $this->model->updateData('customer_executive',array('name'=>$service_name), array('id' => $service_id));
               
            $data['status'] = '1';
            $data['msg'] = 'Customer Executive has been updated successfully.';
              
        }else{
                $data['status'] = '0';
                $data['msg'] = 'Failed to update Customer Executive ';
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
        $this->model->updateData('customer_executive',array('status'=>'0'),array('id'=>$service_id));
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