<?php
defined('BASEPATH') or exit('No direct script access allowed');
ini_set("memory_limit", "-1");
class AddBackendUsers extends CI_Controller
{
   
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->load->model('model');
        $this->load->model('supermodel');
    
    }

    public function index()
    {
        $this->load->view('addbackendusers');
       
    }

    public function add_backend_users()
    {
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required',array('required'=>' %s  is required'));
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required',array('required'=>'%s is required'));
        $this->form_validation->set_rules('mobile_no', 'Mobile No', 'trim|required',array('required'=>'%s is required'));
        $this->form_validation->set_rules('email', 'Email', 'trim|required',array('required'=>'%s is required'));
        $this->form_validation->set_rules('username', 'Username', 'trim|required',array('required'=>'%s is required'));
        $this->form_validation->set_rules('password', 'Password', 'trim|required',array('required'=>'%s is required'));
    
        if($this->form_validation->run() == FALSE)
        {
            $response['status'] = 'failure';
            $response['error'] = array(
                'firstname'=>strip_tags(form_error('firstname')),
                'lastname'=>strip_tags(form_error('lastname')),
                'mobile_no'=>strip_tags(form_error('mobile_no')),
                'email'=>strip_tags(form_error('email')),
                'username'=>strip_tags(form_error('username')),
                'password'=>strip_tags(form_error('password')),
            );
        }else{
            $firstname=$this->input->post('firstname');
            $lastname=$this->input->post('lastname');
            $mobile_no=$this->input->post('mobile_no');
            $email=$this->input->post('email');
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $password=$this->encryption->encrypt($this->input->post('password'));
           
            $roleid=$this->model->selectWhereData('roles',array('id'=>$this->session->userdata('role_id')),array('roles'));
            //echo $roleid['roles'];die();

            $name_exist = $this->model->getData("users", array('username' => $username,'status' => '1'));
            //echo $this->db->last_query();die();
            if(isset($name_exist) && empty($name_exist))
            {
                $user_data=array(
                    'firstname'=>$firstname,
                    'lastname'=>$lastname,
                    'mobile_no'=>$mobile_no,
                    'email'=>$email,
                    'username'=>$username,
                    'password'=>$password,
                    'roles_id'=>$this->session->userdata('role_id'),
                    'roles_name'=>$roleid['roles'],
                );
                $this->model->insertData('users',$user_data);
                $response['status']='success';
                $response['error']=array('msg' => "User Added Successfully !");
            }
            else{
                $response['status']='failure';
                $response['error']=array('msg' => "User Added UnSuccessfully !"); 
            }
            }
        echo json_encode($response);
    }

    public function update_backend_users()
    {
       
        $this->form_validation->set_rules('firstname1', 'First Name', 'trim|required',array('required'=>' %s  is required'));
        $this->form_validation->set_rules('lastname1', 'Last Name', 'trim|required',array('required'=>'%s is required'));
        $this->form_validation->set_rules('mobile_no1', 'Mobile No', 'trim|required',array('required'=>'%s is required'));
        $this->form_validation->set_rules('email1', 'Email', 'trim|required',array('required'=>'%s is required'));
        $this->form_validation->set_rules('username1', 'Username', 'trim|required',array('required'=>'%s is required'));
        $this->form_validation->set_rules('password1', 'Password', 'trim|required',array('required'=>'%s is required'));
    
        if($this->form_validation->run() == FALSE)
        {
            $response['status'] = 'failure';
            $response['error'] = array(
                'firstname1'=>strip_tags(form_error('firstname1')),
                'lastname1'=>strip_tags(form_error('lastname1')),
                'mobile_no1'=>strip_tags(form_error('mobile_no1')),
                'email1'=>strip_tags(form_error('email1')),
                'username1'=>strip_tags(form_error('username1')),
                'password1'=>strip_tags(form_error('password1')),
            );
        }else{
            $firstname=$this->input->post('firstname1');
            $lastname=$this->input->post('lastname1');
            $mobile_no=$this->input->post('mobile_no1');
            $email=$this->input->post('email1');
            $username=$this->input->post('username1');
            $password=$this->input->post('password1');
            $password=$this->encryption->encrypt($this->input->post('password1'));
            $user_id=$this->input->post('userid');
           
            $roleid=$this->model->selectWhereData('roles',array('id'=>$this->session->userdata('role_id')),array('roles'));
            //echo $roleid['roles'];die();

            
                $user_data=array(
                    'firstname'=>$firstname,
                    'lastname'=>$lastname,
                    'mobile_no'=>$mobile_no,
                    'email'=>$email,
                    'username'=>$username,
                    'password'=>$password,
                    'roles_id'=>$this->session->userdata('role_id'),
                    'roles_name'=>$roleid['roles'],
                );
                if($this->model->updateData('users',$user_data,array('user_id'=>$user_id)))
                {
                    $response['status']='success';
                    $response['error']=array('msg' => "User Updated Successfully !");
                }
                else{
                    $response['status']='failure';
                    $response['error']=array('msg' => "User Updated UnSuccessfully !"); 

                }
            }
        echo json_encode($response);
    }

    public function getuserlist()
    {
        $data[] = json_encode($_POST);  
        $rowno = $_POST['start'];
        $rowperpage = $_POST['length'];
        $search_text = $_POST['search']['value'];   
        $totalData=$this->supermodel->main_users($this->session->userdata('role_id'),$rowno,$rowperpage,$search_text);   
        $count_filtered=$this->supermodel->count_users_filtered($this->session->userdata('role_id'),$rowno,$rowperpage,$search_text);
        $count_all = $this->supermodel->count_users_all($this->session->userdata('role_id'),$rowno,$rowperpage,$search_text);
        $data_array=array();
       
        foreach($totalData as $category_details_key => $data_row)
        {
           
            $edit = '<span><a href="javascript:void(0);" >
            <i class="glyphicon glyphicon-pencil a_category_view" aria-hidden="true" data-toggle="modal"
            data-target="#UserModal" id="'.$data_row['user_id'].'"></i> </a></span>&nbsp;&nbsp;';
            $delete="<span><a href='#' onclick='delete_users(this," . $data_row['user_id'] . ")' ><i class='glyphicon glyphicon-trash'></i> </a></span>&nbsp;&nbsp;";
           
             $nestedData=array();
                $nestedData[] =  $edit . $delete ;
                $nestedData[] = ++$category_details_key;
                $nestedData[] = $data_row['roles_name'];
                $nestedData[] = $data_row['username'];
                $nestedData[] = $data_row['mobile_no'];
                $nestedData[] = $data_row['email'];
                
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

    public function delete_users()
    {
        $jsonObj=$_POST['jsonObj'];
        $array_data=json_decode($jsonObj,true);
        $array_entity=$array_data['product'];
        if(isset($array_entity) && !empty($array_entity))
        {
          $user_id=$array_entity['user_id'];
          $this->model->updateData('users',array('status'=>'0'),array('user_id'=>$user_id));
          $data['status'] = '1';
          $data['msg'] = 'Service has been deleted successfully.';
        }
        else{
          $data['status'] = '0';
          $data['msg'] = 'Invalid Service details.';
        }
        echo json_encode($data);
    }

    public function get_all_users()
    {
        $user_id=$_POST['id'];
        $totalData=  $this->model->selectWhereData('users',array('user_id'=>$user_id),array('*'));
        $totalData['decrytpassword']=$this->encryption->decrypt($totalData['password']);
        echo json_encode($totalData);
    }
}
?>