<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        //if (!$this->session->has_userdata('user_id')) redirect('');
    }

    public function index()
    {
        // TODO: show dashboard components / modules / features / etc
        $this->load->view('header', array('title' => "Dashboard | " . CRM__NAME, 'active' => "dashboard"));
        $this->load->view('dashboard');
        $this->load->view('footer');
    }

    public function logout()
	{
        // destroy and logout user session
		$this->session->sess_destroy();
		redirect('');
	}
}
