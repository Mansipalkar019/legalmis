<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Kolkata');
		$this->load->model('model');
		if($this->session->has_userdata('user_id')) redirect('dashboard');
	}

	public function index()
	{
		$this->load->view('welcome_message', array('title' => "SignIn | " . CRM__NAME));
	}

	public function login_do()
	{
		
		// check request is POST
		if ($this->input->server('REQUEST_METHOD') === 'POST')
		{
			// $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
			$this->form_validation->set_rules('username', 'User name', 'trim|required|min_length[3]|max_length[16]|html_escape');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[16]|html_escape');

			// check if not valid form data..
			if ($this->form_validation->run() == FALSE) 
			{
				$data['title'] = "SignIn | " . CRM__NAME;
				$this->load->view('welcome_message', $data);
			}
			// form data are correct and process the login now...
			else
			{
			
				// get form data
				$userName = strtolower($this->security->xss_clean($this->input->post('username')));
				$userPassword = $this->input->post('password');
				// FETCH: check user credentials are correct
				$users = $this->model->selectWhereData("users", array('username' => $userName,'password'=>$this->encryption->decrypt($userPassword),'status' => '1'),array('*'));
				// echo '<pre>'; print_r($users); exit;
				if (@$users['roles_id'] == 1) {					
					$this->session->set_userdata('superadmin_logged_in',$users);
					redirect('Dashboard');
				}else if (@$users['roles_id'] == 2) {
					
					$this->session->set_userdata('account_logged_in',$users);
					redirect('Dashboard');
				}else if (@$users['roles_id'] == 3) {
					
					$this->session->set_userdata('users_logged_in',$users);
					redirect('BackendUsers');
				}
					// // redirect to dashboard; login successfull
					// $role_id = $this->session->userdata('role_id');
					// $user_id = $this->session->userdata('user_id');
					// if ($role_id == 1 || $role_id == 2){
					// 	redirect('Dashboard');
					// }else{
					// 	redirect('BackendUsers');
					// }
				else{
					$data['theError'] = "Credentials are not valid...";
					$data['title'] = "SignIn | " . CRM__NAME;
					$this->load->view('welcome_message', $data);
				}
			
			}
		}
		// if not post then redirect to main page [can also do anything else instead of redirecting]
		else
		{
			redirect('welcome/index');
		}
	}
}
