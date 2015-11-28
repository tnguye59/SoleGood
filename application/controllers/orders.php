<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('./vendor/autoload.php');

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
    // public function payment()
    // {
    //   $stripe_keys = array(
    //       "secret_key" => "sk_test_imZKswrXl9B2k5cqPBohh7tL",
    //       "publishable_key" => "pk_test_VAwheRPM3ZyjDTMlCkaWUrod"
    //     );
    //
    //     \Stripe\Stripe::setApiKey($stripe_keys["secret_key"]);
    //
    //     $token = $this->input->post("stripeToken");
    //
    //     try {
    //       $charge = \Stripe\Charge::create(array(
    //         "amount" => 3000, // amount in cents, again
    //         "currency" => "usd",
    //         "source" => $token,
    //         "description" => "Charging the user "
    //         ));
    //     } catch(\Stripe\Error\Card $e) {
    //       $this->session->set_flashdata("errors", "Invalid Card. Please try again with another credit card");
    //     }
    //     redirect("/");
      // }
      public function stripe_pay()
        {
          $stripe_keys = array(
            "secret_key" => "sk_test_imZKswrXl9B2k5cqPBohh7tL",
            "publishable_key" => "pk_test_VAwheRPM3ZyjDTMlCkaWUrod"
          );

          \Stripe\Stripe::setApiKey($stripe_keys["secret_key"]);

          $token = $this->input->post("stripeToken");

          // if ($existing_customer) throw new Exception("That e-mail address already exists");
          // $customer = \Stripe\Customer::create(array(
          //   'source'     => $_POST['stripeToken'],
          //   'email'    => $_POST['stripeEmail']
          //   ));

          try {
            $charge = \Stripe\Charge::create(array(
              "amount" => 5000, // amount in cents, again
              "currency" => "usd",
              "source" => $token,
              "description" => "Charging the user in the example"
              ));
          } catch(\Stripe\Error\Card $e) {
            $this->session->set_flashdata("errors", "Invalid Card. Please try again with another credit card");
          }
          redirect("/orders/checkout");
        }
    // public function checkout()
    // {
    //   $products = $this->cart->contents();
    //   $results = $this->input->post();
    //
    //   foreach ($products as $item)
    //   {
    //     $this->order->add_order($item, $results);
    //   }
    //   $this->session->session_destroy();
    //   redirect('/orders/checkout_view');
    // }

    public function confirmation($order_id)
    {
        //$order_details = $this->Order->get_order_by_id($order_id);
        //$view_data['order_details'];
        //$this->load->view('confirmationpageorsomethingwhateveritsnameis', $view_data);
    }

}
