<?php
defined('BASEPATH') or exit('No direct script access allowed');
ini_set("memory_limit", "-1");
class ViewAllocatedTask extends CI_Controller
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
        $this->load->view('viewallocatedtask');
       
    }
    public function get_allocated_work_listing()
    {
        $data[] = json_encode($_POST);  
        // echo "<pre>";
        // print_r($data);die();
        $from_date = $_POST['from_date'];
        $to_date = $_POST['to_date'];
        
        $rowno = $_POST['start'];
        $rowperpage = $_POST['length'];
        $search_text = $_POST['search']['value'];   
        $totalData=$this->supermodel->get_allocated_work_listing($this->session->userdata('user_id'),$from_date,$to_date,$rowno,$rowperpage,$search_text);   
        $count_filtered=$this->supermodel->allocated_work_count_filtered($this->session->userdata('user_id'),$from_date,$to_date,$rowno,$rowperpage,$search_text);
        $count_all = $this->supermodel->allocated_work_count_all($this->session->userdata('user_id'),$from_date,$to_date,$rowno,$rowperpage,$search_text);
        $data_array=array();
       
        foreach($totalData as $category_details_key => $data_row)
        {
           
             $nestedData=array();
                $nestedData[] = ++$category_details_key;
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