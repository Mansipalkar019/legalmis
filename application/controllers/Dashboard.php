<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
    //    if ($this->session->userdata('role_id') == 3){
    //     redirect('AddBackendUsers');
    //    }
    //    elseif($this->session->userdata('role_id') == 1 || $this->session->userdata('role_id') == 2){
    //     redirect('dashboard');
    //    }
    }

    public function index()
    {
       $this->load->view('header', array('title' => "Dashboard | " . CRM__NAME, 'active' => "dashboard"));
        $this->load->view('dashboard');
        $this->load->view('footer');
    }

    public function logout()
	{
     	$this->session->sess_destroy();
		redirect('');
	}
}
