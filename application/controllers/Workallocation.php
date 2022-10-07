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
        $data['sales_deals']=$this->supermodel->get_all_dealid();
        $data['users'] = $this->supermodel->get_user_listing($this->session->userdata('role_id')); 
        $data['services'] = $this->model->getData("services", array('status' => '1'));
        $this->load->view('work_allocation',$data);
       
    }

    public function add_work_allocation()
    {
       
        
        $this->form_validation->set_rules('dealid', 'Deal Id', 'trim|required',array('required'=>' %s  is required'));
      
        if($this->form_validation->run() == FALSE)
        {
            $response['status'] = 'failure';
            $response['error'] = array(
                'user'=>strip_tags(form_error('user')),
                'service'=>strip_tags(form_error('service[]')),
              
            );
        }else{

            $services=$this->input->post('servicename');
            //print_r($services);die();
            foreach($services as $services_key => $services_row){
                $users[$services_row]=$this->input->post('user_name_'.$services_row);
    
            }
            foreach($users as $user_key =>$user_row){
                foreach($user_row as $user_row_key =>$user_row_rows)
                {
                    $user_data=array(
                    'user'=>$user_row_rows,
                    'service'=>$user_key,
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
            
            }
        echo json_encode($response);
    }

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

    public function get_all_services()
    {
       $sale_id=$this->input->post('saleid');
       $totalData=$this->supermodel->get_sale_id($sale_id);   
       
       echo json_encode($totalData);    
    }
}
?>