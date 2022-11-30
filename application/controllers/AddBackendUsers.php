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
        $roles = $this->model->selectWhereData('roles',array('status'=>'1'),array('id','roles'),false,array('id'=>'DESC'));
        $data['roles'] = $roles;
        $this->load->view('addbackendusers',$data);
    }
    public function add_backend_users()
    {
            $firstname=$this->input->post('firstname');
            $lastname=$this->input->post('lastname');
            $mobile_no=$this->input->post('mobile_no');
            $email=$this->input->post('email');
            $user_name=$this->input->post('user_name');
            $password=$this->input->post('password');
            $password=$this->encryption->encrypt($this->input->post('password'));
            $roles=$this->input->post('roles');
            
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required|alpha',array('required'=>' %s  is required'));
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|alpha',array('required'=>'%s is required'));
        $this->form_validation->set_rules('mobile_no', 'Mobile No', 'trim|required|exact_length[10]',array('required'=>'%s is required','exact_length' => 'Mobile Number should be 10 digit number'));
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email',array('required'=>'%s is required'));
        $this->form_validation->set_rules('user_name', 'Username', 'trim|required|is_unique[users.username]',array('required'=>'%s is required',  'is_unique'=> 'This %s already exists.'));
        $this->form_validation->set_rules('password', 'Password', 'trim|required',array('required'=>'%s is required'));
        $this->form_validation->set_rules('roles', 'Roles', 'trim|required',array('required'=>'%s is required'));
    
        if($this->form_validation->run() == FALSE)
        {
            $response['status'] = 'failure';
            $response['error'] = array(
                'firstname'=>strip_tags(form_error('firstname')),
                'lastname'=>strip_tags(form_error('lastname')),
                'mobile_no'=>strip_tags(form_error('mobile_no')),
                'email'=>strip_tags(form_error('email')),
                'user_name'=>strip_tags(form_error('user_name')),
                'password'=>strip_tags(form_error('password')),
                'roles'=>strip_tags(form_error('roles')),
            );
        }else{
           
           
                $roles_name=$this->model->selectWhereData('roles',array('id'=>$roles),array('roles'));
                $check_user_name_count = $this->model->CountWhereRecord('users', array('username'=>$user_name,'status'=>'1'));
                $check_user_email_count = $this->model->CountWhereRecord('users', array('email'=>$email,'status'=>'1'));
                if ($check_user_name_count > 0) {
                    $response['status'] = 'failure';
                    $response['error'] = array('user_name' => "User Name Already Exist...!",);
                } else  if ($check_user_email_count > 0) {
                    $response['status'] = 'failure';
                    $response['error'] = array('user_name' => "Email Already Exist...!",);
                } else {
                    $user_data=array(
                        'firstname'=>$firstname,
                        'lastname'=>$lastname,
                        'mobile_no'=>$mobile_no,
                        'email'=>$email,
                        'username'=>$user_name,
                        'password'=>$password,
                        'roles_id'=>$roles,
                        'roles_name'=>$roles_name['roles'],
                    );
                    $this->model->insertData('users',$user_data);
                    $response['status'] ="success";
                    $response['msg'] ="Users Added Successfully";
            }
        }
        echo json_encode($response);
    }
    public function get_user_list()
    {
        $this->load->model('user_list_model');
        $user_list_data = $this->user_list_model->get_datatables();
        $count = $this->user_list_model->count_all();
        $count_filtered = $this->user_list_model->count_filtered();
        $data = array();
        $no = @$_POST['start'];
        foreach ($user_list_data as $user_list_data_key => $user_list_data_row) {
            $edit = '<span><a href="javascript:void(0);" ><i class="glyphicon glyphicon-pencil edit_user_list_data" aria-hidden="true" data-toggle="modal" data-target="#UserModal" id="'.$user_list_data_row['user_id'].'"></i> </a></span>&nbsp;&nbsp;';
            $delete = "<span id='".$user_list_data_row['user_id']."' class='delete_user_list' ><i class='glyphicon glyphicon-trash'></i></a></span>";
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $user_list_data_row['firstname']." ".$user_list_data_row['lastname'];
            $row[] = $user_list_data_row['username'];
            $row[] = $user_list_data_row['roles'];
            $row[] = $user_list_data_row['email'];
            $row[] = $user_list_data_row['mobile_no'];
            $row[] = $edit . $delete;            
            $data[] = $row;
        }
        $output = array("draw" => @$_POST['draw'], "recordsTotal" => $count, "recordsFiltered" => $count_filtered, "data" => $data);
        echo json_encode($output);
    }
     public function get_users_data_on_id()
    {
        $id = $this->input->post('id');
        $user_data = $this->model->selectWhereData('users',array('user_id'=>$id),array('*'));
        $response['user_data'] = $user_data;
        echo json_encode($response);
        // $user_id=$_POST['id'];
        // $totalData=  $this->model->selectWhereData('users',array('user_id'=>$user_id),array('*'));
        // $totalData['decrytpassword']=$this->encryption->decrypt($totalData['password']);
        // echo json_encode($totalData);
    }

    public function update_backend_users()
    {
        $firstname=$this->input->post('edit_first_name');
        $lastname=$this->input->post('edit_last_name');
        $mobile_no=$this->input->post('edit_mobile_no');
        $email=$this->input->post('edit_email');
        // $username=$this->input->post('username1');
        // $password=$this->input->post('password1');
        // $password=$this->encryption->encrypt($this->input->post('password1'));
        $user_id=$this->input->post('edit_user_id');
        $roles=$this->input->post('edit_roles');


        $this->form_validation->set_rules('edit_first_name', 'First Name', 'trim|required|alpha',array('required'=>' %s  is required'));
        $this->form_validation->set_rules('edit_last_name', 'Last Name', 'trim|required|alpha',array('required'=>'%s is required'));
        $this->form_validation->set_rules('edit_mobile_no', 'Mobile No', 'trim|required',array('required'=>'%s is required'));
        $this->form_validation->set_rules('edit_email', 'Email', 'trim|required|valid_email',array('required'=>'%s is required'));
        $this->form_validation->set_rules('edit_roles', 'Roles', 'trim|required',array('required'=>'%s is required'));
        // $this->form_validation->set_rules('username1', 'Username', 'trim|required',array('required'=>'%s is required'));
        // $this->form_validation->set_rules('password1', 'Password', 'trim|required',array('required'=>'%s is required'));
    
        if($this->form_validation->run() == FALSE)
        {
            $response['status'] = 'failure';
            $response['error'] = array(
                'edit_first_name'=>strip_tags(form_error('edit_first_name')),
                'edit_last_name'=>strip_tags(form_error('edit_last_name')),
                'edit_mobile_no'=>strip_tags(form_error('edit_mobile_no')),
                'edit_email'=>strip_tags(form_error('edit_email')),
                'edit_roles'=>strip_tags(form_error('edit_roles')),
                // 'username1'=>strip_tags(form_error('username1')),
                // 'password1'=>strip_tags(form_error('password1')),
            );
        }else{        
            $role_name=$this->model->selectWhereData('roles',array('id'=>$roles),array('roles'));            
                $user_data=array(
                    'firstname'=>$firstname,
                    'lastname'=>$lastname,
                    'mobile_no'=>$mobile_no,
                    'email'=>$email,
                    // 'username'=>$username,
                    // 'password'=>$password,
                    'roles_id'=>$roles,
                    'roles_name'=>$role_name['roles'],
                );
                    $this->model->updateData("users",$user_data,array('user_id'=>$user_id));
                    $response['status'] ="success";
                    $response['msg'] ="Users Data Updated Successfully";
            }
        echo json_encode($response);
    } 
    public function delete_users()
    {
            $id = $this->input->post('id');
            $curl_data = array('status'=>0);
             $this->model->updateData("users",$curl_data,array('user_id'=>$id));
            $response['status'] = 'success';
            $response['msg'] ="User Deleted Successfully";
            echo json_encode($response);
    }

   
}
?>