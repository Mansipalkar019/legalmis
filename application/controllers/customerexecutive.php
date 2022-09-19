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
        if ($this->role_id != 1) redirect(''); // grant access
    }

   

   

}