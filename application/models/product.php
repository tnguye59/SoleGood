<?php

class Product extends CI_Model{
	public function get_product_by_id($id){
		//requires product $id
		//will return an array with corresponding product information to pass to view.
		$query = "SELECT * FROM products WHERE id = ?";
		$values = array($id);
		return $this->db->query($query, $values)->row_array();
	}

	public function get_all_products(){
		//returns all products to an array.
		return $this->db->query("SELECT * FROM products")->result_array();
	}

	public function get_by_gen_cat($gen, $cat){
		$query = "SELECT * FROM products WHERE gender = ? AND category = ?";
		$values = array($gen, $cat);
		return $this->db->query($query, $values)->result_array();
	}

	public function get_mens_products(){
		//will be used to select all men's products.
		//interacts with index_mens, loads partial.
		return $this->db->query("SELECT * FROM products WHERE gender = 'Mens'")->result_array();
	}

	public function get_womens_products(){
		//will be used to select all women's products.
		//interacts with index_womens, loads partial.
		return $this->db->query("SELECT * FROM products WHERE gender = 'Womens'")->result_array();
	}

	public function get_boys_products(){
		//will be used to select all boys's products.
		//interacts with index_boys, loads partial.
		return $this->db->query("SELECT * FROM products WHERE gender = 'Boys'")->result_array();
	}

	public function get_girls_products(){
		//will be used to select all girls's products.
		//interacts with index_girls, loads partial.
		return $this->db->query("SELECT * FROM products WHERE gender = 'Girls'")->result_array();
	}

	public function add_new_product($product){
		//only available to admin, query will add new product to DB
		//takes post data.
		//will interact with dashboard method in Users Controller
		$query = "INSERT INTO products(category, brand, name, description, price, gender, created_at, updated_at)
					VALUES(?, ?, ?, ?, ?, ?, NOW(), NOW())";
		$values = array($product['category'], $product['brand'], $product['name'], $product['description'], $product['price'], $product['gender']);
		return $this->db->query($query, $values);
	}

	public function updated_product_info($product,$id){
		//only available to admin, query will update product information in DB.
		//takes product id.
		//will interact with dashboard method in Users Controller.
		$query = "UPDATE products SET category = ?, brand = ?, name=?, description=?, price=?, updated_at=NOW() WHERE id = ?";
	  $values = array($product['category'], $product['brand'], $product['name'], $product['description'], $product['price'], $id);
	  // var_dump($values);
	  // die('in update model');
	  return $this->db->query($query, $values);
	}
}
?>
