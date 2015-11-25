<?php


class Orders extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(TRUE);
        $this->load->model('Order');
        $this->load->library('form_validation');

    }

    public function checkout_view()
    {
        //loads checkout view with session[cart] data
        $this->load->view('checkout');
    }

    public function checkout()
    {
        //processes POST data on SUBMIT PURCHASE BUTTON
        //$post = $this->input->post();
        //ADD ORDER
        //RETRIEVES INSERTED ID
        //$order_id = $this->Order->add_order($post);
        //REDIRECTS TO CONFIRMATION/$id
        //redirect('/orders/confirmation/'.$order_id);
    }

    public function confirmation($order_id)
    {
        //$order_details = $this->Order->get_order_by_id($order_id);
        //$view_data['order_details'];
        //$this->load->view('confirmationpageorsomethingwhateveritsnameis', $view_data);
    }

}
