<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		// $this->output->enable_profiler(TRUE);
		$this->load->view('home');
	}
	public function about(){
		$this->load->view('about');
	}
	public function contact(){
		$this->load->view('contact');
	}
	public function shoes(){
		$this->load->view('shoes');
	}
	public function item_view(){
		$this->load->view('item_view');
	}
	public function checkout(){
		$this->load->view('checkout');
	}
	public function cart(){
		$this->load->view('cart');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
