<?php

class Products extends CI_Controller{

	public function __construct(){
		parent::__construct();
		// $this->output->enable_profiler(TRUE);
		$this->load->model('Product');
	}

	public function product_view($id){
		//link for this on view should follow /controller/product_view/.
		//will take product id from main page and pull up product view page.
		//will communicate with Product Model method get_product_by_id($id).
		//$id = $this->session->userdata('productid')
		$product_info = $this->Product->get_product_by_id($id);
		$view_data['product_info'] = $product_info;
		$this->load->view('item_view', $view_data);
	}

	public function main_product_page(){
		//will load all products on main page
		//will communication with Product Model method get_all_products().
		//May also interact with Users Controller Welcome method?
		$products = $this->Product->get_all_products();
		$view_data['products'] = $products;
		$this->load->view('shoes', $view_data);

	}

	public function mens_products(){
		$products = $this->Product->get_mens_products();
		$view_data['products'] = $products;
		$this->load->view('mens_shoes', $view_data);
	}

	public function womens_products(){
		$products = $this->Product->get_womens_products();
		$view_data['products'] = $products;
		$this->load->view('womens_shoes', $view_data);
	}

	public function boys_products(){
		$products = $this->Product->get_boys_products();
		$view_data['products'] = $products;
		//var_dump($products);
		//die("MAIN PROD PAGE");
		$this->load->view('boys_shoes', $view_data);
	}
	
	public function girls_products(){
		$products = $this->Product->get_girls_products();
		$view_data['products'] = $products;
		//var_dump($products);
		//die("MAIN PROD PAGE");
		$this->load->view('girls_shoes', $view_data);
	}

	public function dress_mens_html(){
		$view_data['products'] = $this->Product->get_by_gen_cat('mens', 'dress');
		$this->load->view('/partials/dress_mens', $view_data);
	}

	public function dress_womens_html(){
		$view_data['products'] = $this->Product->get_by_gen_cat('womens', 'dress');
		$this->load->view('/partials/dress_womens', $view_data);
	}

	public function dress_boys_html(){
		$view_data['products'] = $this->Product->get_by_gen_cat('boys', 'dress');
		$this->load->view('/partials/dress_boys', $view_data);
	}

	public function dress_girls_html(){
		$view_data['products'] = $this->Product->get_by_gen_cat('girls', 'dress');
		$this->load->view('/partials/dress_girls', $view_data);
	}

	public function casual_mens_html(){
		$view_data['products'] = $this->Product->get_by_gen_cat('mens', 'casual');
		$this->load->view('/partials/casual_mens', $view_data);
	}

	public function casual_womens_html(){
		$view_data['products'] = $this->Product->get_by_gen_cat('womens', 'casual');
		$this->load->view('/partials/casual_womens', $view_data);
	}

	public function casual_boys_html(){
		$view_data['products'] = $this->Product->get_by_gen_cat('boys', 'casual');
		$this->load->view('/partials/casual_boys', $view_data);
	}

	public function casual_girls_html(){
		$view_data['products'] = $this->Product->get_by_gen_cat('girls', 'casual');
		$this->load->view('/partials/casual_girls', $view_data);
	}

	public function sports_mens_html(){
		$view_data['products'] = $this->Product->get_by_gen_cat('mens', 'sport');
		$this->load->view('/partials/sports_mens', $view_data);
	}

	public function sports_womens_html(){
		$view_data['products'] = $this->Product->get_by_gen_cat('womens', 'sport');
		$this->load->view('/partials/sports_womens', $view_data);
	}

	public function sports_boys_html(){
		$view_data['products'] = $this->Product->get_by_gen_cat('boys', 'sport');
		$this->load->view('/partials/sports_boys', $view_data);
	}

	public function sports_girls_html(){
		$view_data['products'] = $this->Product->get_by_gen_cat('girls', 'sport');
		$this->load->view('/partials/sports_girls', $view_data);
	}

	public function edit_cart(){
		$this->cart->update();
		redirect('/welcome/cart');
	}

	public function addnew(){
		$this->load->view('add_product');
	}

	public function editinfo(){
		$products = $this->Product->get_all_products();
		$view_data['products'] = $products;
		$this->load->view('edit_product', $view_data);
	}

	public function add_product(){
		//will only be available if user is admin.
		//links for these methods will appear in view page if admin
		//should load a view page with form to add product.
		// var_dump($this->input->post());
		// die('in add_product');
		$product = array(
			   'category' =>$this->input->post('category'),
			   'brand' =>$this->input->post('brand'),
			   'name' => $this->input->post('name'),
			   'description' => $this->input->post('description'),
			   'price' => $this->input->post('price'),
			   'gender' => $this->input->post('gender'),
			);
		// var_dump($product);
		// die('in add_product');

		$this->Product->add_new_product($product);
		// die('in add_product');
		redirect('/users/dashboard');
	}

	public function edit_product($id){
		//will only be available if user is admin.
		//links for this method will appear in view page if admin.
		//should load a view page with form to update product information.
		$product_info = $this->Product->get_product_by_id($id);
		$view_data['product_info'] = $product_info;
		$this->load->view('edit_view', $view_data);
	}

	public function update_product_info($id){
		$this->load->model('Product');
		$product = array(
			'brand'=>$this->input->post('brand'),
			'category'=>$this->input->post('category'),
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description'),
			'price' => $this->input->post('price'),
			);
		// var_dump($product);
		// die('in update');
		$this->Product->updated_product_info($product, $id);
		redirect("/users/dashboard");
	}
}
