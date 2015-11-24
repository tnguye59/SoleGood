<?php


class Users extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		//$this->load->controller('Products') //session controller will interact with products controller
		$this->load->model('User'); //will need to load this model if sessions controller will hold user info AND register new users to DB.
		$this->load->library('form_validation');

	}

	public function index()
	{
		// $this->output->enable_profiler(TRUE);
		$this->load->view('registration_login');
	}

public function register()
{
	$this->form_validation->set_rules('first_name', "First Name", 'required');
	$this->form_validation->set_rules('last_name', "Last Name", 'required');
	$this->form_validation->set_rules('email', "Email", 'required');
	$this->form_validation->set_rules('password', "Password", 'required');
	$this->form_validation->set_rules('confirm_password', "Confirm Password", 'required');
	if($this->form_validation->run() == FALSE)
	{
		$this->session->set_flashdata('errors', validation_errors());
		redirect('/');
	}
	else
	{
		$userData = $this->input->post();
		// var_dump($userData);
		// die('in register method');
		$this->User->add_user($userData);
		$this->session->set_userdata('userInfo', $userData);
		redirect('/sessions/welcome');

	}
}

public function login()
{
	$email = $this->input->post('email');
	$password = $this->input->post('password');
	$post = $this->input->post();
	$userData = $this->User->get_user_by_email($post);

	if($userData)
	{
		$user = array(
			'id' => $userData['id'],
			'name' => $userData['first_name'],
			'email' => $userData['email'],
			'is_logged_in' => true
			);
		$this->session->set_userdata('userInfo', $user);

		redirect('/sessions/welcome');
	}
	else
	{
		redirect('/');
	}
}

public function welcome()
{
	$view_data['user'] = $this->session->userdata('userInfo');
	$this->load->view('home', $view_data);
}

public function logout()
{
	$this->session->sess_destroy();
	redirect('/');
}








}
