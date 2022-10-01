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
        if (!$this->session->has_userdata('user_id')) redirect('');

        $role_id = $this->session->userdata('role_id');
        $user_id = $this->session->userdata('user_id');
        if ($role_id == 1 || $role_id == 3); // grant access
        redirect('');
    }

    public function index()
    {

        $this->load->view('addbackendusers');
       
    }
}
?>