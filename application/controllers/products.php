<?php

class Products extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
			$this->output->enable_profiler(TRUE);
		//$this->load->model('product');
	}
	public function product_view($id)
	{
		//link for this on view should follow /controller/product_view/.
		//will take product id from main page and pull up product view page.
		//will communicate with Product Model method get_product_by_id($id).
		//$id = $this->session->userdata('productid')
		//$product_info = $this->Product->get_product_by_id($id)
		//this->load->view('product_view', $product_info);
	}

	public function main_product_page()
	{
		//will load all products on main page
		//will communication with Product Model method get_all_products().
		//May also interact with Users Controller Welcome method?
		//$this->Product->get_all_products();

	}

	public function index_mens()
	{
		//will load all men's shoes
		//will communicate with Product Model method get_mens_products().
		//loads partials
	}

	public function index_womens()
	{
		//will load all women's shoes
		//will communicate with Product Model method get_womens_products().
		//loads partials
	}

	public function index_boys()
	{
		//will load all boys's shoes
		//will communicate with Product Model method get_boys_products().
		//loads partials
	}

	public function index_girls()
	{
		//will load all girls's shoes
		//will communicate with Product Model method get_girls_products().
		//loads partials
	}

	public function add_product()
	{
		//will only be available if user is admin.
		//links for these methods will appear in view page if admin
		//should load a view page with form to add product.
		//$product = array(
		//	   'category' =>$this->input->post('category'),
		//     'name' => $this->input->post('product_name'),
		//     'description' => $this->input->post('product_description')
		//	   'price' => $this->input->post('product_price'),
		// 	   'quantity' => $this->input->post('quantity'),
		//	   'gender' => $this->input->post('gender'),
		//	);
		//$this->Product->add_new_product($post);
		//redirect('/');
	}

	public function edit_product($id)
	{
		//will only be available if user is admin.
		//links for this method will appear in view page if admin.
		//should load a view page with form to update product information.
		//$product = array(
		//	   'category' =>$this->input->post('category'),
		//     'name' => $this->input->post('product_name'),
		//     'description' => $this->input->post('product_description')
		//	   'price' => $this->input->post('product_price'),
		// 	   'quantity' => $this->input->post('quantity'),
		//	   'gender' => $this->input->post('gender'),
		//	);
		// $this->Product->updated_product_info($product, $id);
		// redirect('/');
	}
}





?>
