<?php


class Orders extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Order');
        $this->load->library('form_validation');

    }

    public function checkout_view()
    {
        //loads checkout view with session[cart] data
    }

    public function checkout()
    {
        //processes POST data on SUBMIT PURCHASE BUTTON
        //ADD ORDER
        //RETRIEVES INSERTED ID
        //REDIRECTS TO CONFIRMATION/$id
    }

    public function confirmation($order_id)
    {
        //get_order_by_id($order_id)
        //load view (confirmation, order_details)
    }

}
