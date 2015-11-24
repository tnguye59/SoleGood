<?php


class Orders extends CI_Controller {

  public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');

	}

  public function checkout_view(){
    //loads checkout view with cart data
  }

  public function checkout(){
    //processes POST data on SUBMIT PURCHASE BUTTON
    //RETRIEVES INSERTED ID
    //REDIRECTS TO CONFIRMATION/$id
  }

  public function confirmation($order_id){

  }






}
