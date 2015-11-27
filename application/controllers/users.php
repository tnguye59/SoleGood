<?php


class Users extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		//$this->load->controller('Products') //session controller will interact with products controller

		$this->load->model('User'); //will need to load this model if users controller will hold user info AND register new users to DB.
		$this->load->model('Order'); // will need to load in order to have user order history
		$this->load->model('Product');
		$this->output->enable_profiler(TRUE);
		$this->load->library('form_validation');
		$this->load->library('cart');
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
		redirect('/users/welcome');

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

		redirect('/users/welcome');
	}
	else
	{
		redirect('/');
	}
}

public function welcome()
{
	$view_data['user'] = $this->session->userdata('userInfo');
	// $users=$this->Product->get_all_products($view_data['user']);
	$this->load->view('home', $view_data);
	// not sure if i did this right lol
}

public function logout()
{
	$this->session->sess_destroy();
	redirect('/');
}
public function dashboard($userid)
{
	// $orders=$this->Order->get_orders_by_id($userid);
	$this->load->view('dashboard');//, array('orders'=>$orders));
}
public function add_to_cart()
{
	$data = array(
			'id' => $this->input->post('product_id'),
			'qty' =>$this->input->post('quantity'),
			'price' =>$this->input->post('price'),
			'name' =>$this->input->post('product_name'),
			'options' => array('size' => $this->input->post('size'), 'brand' => $this->input->post('brand') )
			// 'brand' =>$this->input->post('brand')
			// 'size' =>$this->input->post('size'),   //optional array inputs
		);

	$this->cart->insert($data);

	// var_dump($this->cart->contents());
	// die('contents');
	redirect('/welcome/cart');

}

public function edit_cart()
{
	// var_dump($this->input->post());
	// die();
	$data = array(
	'rowid' => $this->input->post('row_id'),
	'qty' => $this->input->post('quantity')
);

// var_dump($data);
// die();
	$this->cart->update($data);
	redirect('/welcome/cart');
}

public function remove_item($rowid)
{
	$data = array(
	'rowid' => $rowid,
	'qty' => 0
	);


	$this->cart->update($data);
	redirect('/welcome/cart');
}
public function load_cart()
{

}
}
