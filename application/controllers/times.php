<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class times extends CI_Controller {

	

	public function index()
	{
		$this->output->enable_profiler(TRUE);
		$this->load->view('main');
	}

}

