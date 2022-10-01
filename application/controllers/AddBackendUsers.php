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
        if ($this->session->userdata('role_id') == 3){
            redirect(base_url()."AddBackendUsers");
            return false;
           }
           elseif($this->session->userdata('role_id') == 1 || $this->session->userdata('role_id') == 2){
            redirect(base_url()."dashboard");
            return false;
        }
    }

    public function index()
    {

        $this->load->view('addbackendusers');
       
    }
}
?>