<?php
defined('BASEPATH') or exit('No direct script access allowed');
ini_set("memory_limit", "-1");
class Workallocation extends CI_Controller
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
        
        $data['users'] = $this->supermodel->get_user_listing($this->session->userdata('role_id')); 
        $data['services'] = $this->model->getData("services", array('status' => '1'));
        $this->load->view('work_allocation',$data);
       
    }

    public function add_work_allocation()
    {
        $this->form_validation->set_rules('user', 'User Name', 'trim|required',array('required'=>' %s  is required'));
        $this->form_validation->set_rules('service[]', 'Services', 'trim|required',array('required'=>'%s field is required'));
       
        if($this->form_validation->run() == FALSE)
        {
            $response['status'] = 'failure';
            $response['error'] = array(
                'user'=>strip_tags(form_error('user')),
                'service'=>strip_tags(form_error('service[]')),
              
            );
        }else{
            $user=$this->input->post('user');
            $service=$this->input->post('service[]');
            //print_r($service);die();
            foreach($service as $service_key => $service_row)
            {
                $user_data=array(
                    'user'=>$user,
                    'service'=>$service_row,
                    'status'=>'1',
                    'created_on'=>date('Y-m-d'),
                );
                if($this->model->insertData('allocated_service_users',$user_data))
                {
                    $response['status']='success';
                    $response['error']=array('msg' => "Service Allocated Successfully !");
                }else{
                    $response['status']='failure';
                    $response['error']=array('msg' => "Service Allocated UnSuccessfully !"); 
                }
            }
            
            }
        echo json_encode($response);
    }

    // public function update_backend_users()
    // {
    //     $this->form_validation->set_rules('firstname1', 'First Name', 'trim|required',array('required'=>' %s  is required'));
    //     $this->form_validation->set_rules('lastname1', 'Last Name', 'trim|required',array('required'=>'%s is required'));
    //     $this->form_validation->set_rules('mobile_no1', 'Mobile No', 'trim|required',array('required'=>'%s is required'));
    //     $this->form_validation->set_rules('email1', 'Email', 'trim|required',array('required'=>'%s is required'));
    //     $this->form_validation->set_rules('username1', 'Username', 'trim|required',array('required'=>'%s is required'));
    //     $this->form_validation->set_rules('password1', 'Password', 'trim|required',array('required'=>'%s is required'));
    
    //     if($this->form_validation->run() == FALSE)
    //     {
    //         $response['status'] = 'failure';
    //         $response['error'] = array(
    //             'firstname1'=>strip_tags(form_error('firstname1')),
    //             'lastname1'=>strip_tags(form_error('lastname1')),
    //             'mobile_no1'=>strip_tags(form_error('mobile_no1')),
    //             'email1'=>strip_tags(form_error('email1')),
    //             'username1'=>strip_tags(form_error('username1')),
    //             'password1'=>strip_tags(form_error('password1')),
    //         );
    //     }else{
    //         $firstname=$this->input->post('firstname1');
    //         $lastname=$this->input->post('lastname1');
    //         $mobile_no=$this->input->post('mobile_no1');
    //         $email=$this->input->post('email1');
    //         $username=$this->input->post('username1');
    //         $password=$this->input->post('password1');
    //         $password=$this->encryption->encrypt($this->input->post('password1'));
    //         $user_id=$this->input->post('userid');
           
    //         $roleid=$this->model->selectWhereData('roles',array('id'=>$this->session->userdata('role_id')),array('roles'));
    //         //echo $roleid['roles'];die();

            
    //             $user_data=array(
    //                 'firstname'=>$firstname,
    //                 'lastname'=>$lastname,
    //                 'mobile_no'=>$mobile_no,
    //                 'email'=>$email,
    //                 'username'=>$username,
    //                 'password'=>$password,
    //                 'roles_id'=>$this->session->userdata('role_id'),
    //                 'roles_name'=>$roleid['roles'],
    //             );
    //             if($this->model->updateData('users',$user_data,array('user_id'=>$user_id)))
    //             {
    //                 $response['status']='success';
    //                 $response['error']=array('msg' => "User Updated Successfully !");
    //             }
    //             else{
    //                 $response['status']='failure';
    //                 $response['error']=array('msg' => "User Updated UnSuccessfully !"); 

    //             }
    //         }
    //     echo json_encode($response);
    // }

    public function getuserlist()
    {
        $data[] = json_encode($_POST);  
        $rowno = $_POST['start'];
        $rowperpage = $_POST['length'];
        $search_text = $_POST['search']['value'];   
        $totalData=$this->supermodel->get_allocated_work($this->session->userdata('role_id'),$rowno,$rowperpage,$search_text);   
        $count_filtered=$this->supermodel->count_allocated_work_filtered($this->session->userdata('role_id'),$rowno,$rowperpage,$search_text);
        $count_all = $this->supermodel->count_all_allocated_work($this->session->userdata('role_id'),$rowno,$rowperpage,$search_text);
        $data_array=array();
       
        foreach($totalData as $category_details_key => $data_row)
        {
                $nestedData=array();
                $nestedData[] = ++$category_details_key;
                $nestedData[] = $data_row['username'];
                $nestedData[] = $data_row['servicename'];
                $nestedData[] = $data_row['created_on'];
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
}
?>