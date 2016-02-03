<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('./vendor/autoload.php');

class Orders extends CI_Controller{

  public function __construct(){
      parent::__construct();
      // $this->output->enable_profiler(TRUE);
      $this->load->model('Order');
      $this->load->model('User');
      $this->load->library('form_validation');

  }

  public function checkout_view(){
      //loads checkout view with session[cart] data
      $this->load->view('checkout');
  }

  public function stripe_pay(){
    $this->form_validation->set_rules('first_name', "First Name", 'trim|required');
  	$this->form_validation->set_rules('last_name', "Last Name", 'trim|required');
    $this->form_validation->set_rules('address', "Address", 'trim|required');
  	$this->form_validation->set_rules('city', "City", 'trim|required');
  	$this->form_validation->set_rules('state', "State", 'required|min_length[2]');
  	$this->form_validation->set_rules('zip_code', "Zip Code", 'required|min_length[5]');
    $this->form_validation->set_rules('country', "Country", 'trim|required');
  	$this->form_validation->set_rules('phone_number', "Phone Number", 'trim|required');
  	if($this->form_validation->run() == FALSE){
  		$this->session->set_flashdata('errors', validation_errors());
  		redirect('/welcome/checkout');
  	}

    $stripe_keys = array(
      "secret_key" => "sk_test_imZKswrXl9B2k5cqPBohh7tL",
      "publishable_key" => "pk_test_VAwheRPM3ZyjDTMlCkaWUrod"
    );

    \Stripe\Stripe::setApiKey($stripe_keys["secret_key"]);

    $token = $this->input->post("stripeToken");

    // $customer = \Stripe\Customer::create(array(
    //   "source" => $token,
    //   "id" => $this->session->userdata('userInfo')['id'],
    //   "city"=>$this->input->post('city'),
    //   "phone_number"=> $this->input->post('phone_number'),
    //   "address"=> $this->input->post("address"),
    //   "zip_code"=>$this->input->post("zip_code")
    // ));
    //
    // var_dump($customer);
    // die();
    $user = $this->session->userdata('userInfo');
    $this->User->add_customer_details($this->input->post(), $user['id']);
    // //inserting to database
    // $this->User->get_customer_details($customer);
    // quering
    try {
      $charge = \Stripe\Charge::create(array(
        "amount" => 5000, // amount in cents, again
        "currency" => "usd",
        "source" => $token,
        // "customer" => $customer->id,
        "description" => "Charging the user in the example"
        ));
    } catch(\Stripe\Error\Card $e) {
      $this->session->set_flashdata("errors", "Invalid Card. Please try again with another credit card");
    }
    redirect("/orders/checkout");
  }

  public function checkout(){
    $products = $this->cart->contents();
    $orderID = $this->Order->add_order($products);
    foreach ($products as $product) {
      $this->Order->add_ordproduct($orderID, $product);
    }
    $this->cart->destroy();
    redirect('/orders/confirmation/'.$orderID);
  }

  public function confirmation($order_id){
    $view_data['order_details'] = $this->Order->get_order_by_id($order_id);

    $this->load->view('confirmation', $view_data);
  }

}
