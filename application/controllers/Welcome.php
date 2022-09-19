<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Kolkata');
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
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[16]|html_escape');

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
				$userPassword = md5($this->input->post('password'));

				// FETCH: check user credentials are correct
				$user = $this->db->query("SELECT * from users where username='$userName' and password='$userPassword'")->row();

				// check if correct
				if($user)
				{
					// FETCH: $user credential is correct; now fetch role of the $user
					// $user_role = $this->db->query("SELECT r.role_id, r.role_name from roles r join user_role ur on r.role_id=ur.role_id join users u on u.user_id=ur.user_id where u.user_id='{$user->user_id}'")->row();

					// // check if user has role
					// if(!empty($user_role)) {}
					// // no roles assigned say SORRY!... :P
					// else
					// {
					// 	$data['theError'] = "Sorry, You have no roles assigned...";
					// 	$data['title'] = "SignIn | " . CRM__NAME;
					// 	$this->load->view('welcome_message', $data);
					// }

					// set required session data here
					$sessionArray = array(
						'username' => $this->encryption->encrypt($user->username),
						'user_id' => $this->encryption->encrypt($user->user_id),
						'role_id' => $this->encryption->encrypt($user->roles_id),
						'role_name' => $this->encryption->encrypt($user->roles_name)
					);
					$this->session->set_userdata($sessionArray);

					// redirect to dashboard; login successfull
					redirect('dashboard');
				}

				// if credentials are not correct
				else
				{
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
