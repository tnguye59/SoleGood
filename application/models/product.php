<?php

class Product extends CI_Model
{

public function get_product_by_id($id)
{
	//requires product $id
	//will return an array with corresponding product information to pass to view.
	$query = "SELECT * FROM products WHERE id = ?";
	$values = array($id);
	return $this->db->query($query, $values)->row_array();
}

public function get_all_products()
{
	//returns all products to an array.
	return $this->db->query("SELECT * FROM products")->result_array();
}

public function get_mens_products()
{
	//will be used to select all men's products.
	//interacts with index_mens, loads partial.
}

public function get_womens_products()
{
	//will be used to select all women's products.
	//interacts with index_womens, loads partial.
}

public function get_boys_products()
{
	//will be used to select all boys's products.
	//interacts with index_boys, loads partial.
}

public function get_girls_products()
{
	//will be used to select all girls's products.
	//interacts with index_girls, loads partial.
}

public function add_new_product($product)
{
	//only available to admin, query will add new product to DB
	//takes post data.
	//will interact with dashboard method in Users Controller
	//$query = "INSERT INTO products(category, name, description, price, quanity, created_at, updated_at, gender)
	// 			VALUES(?, ?, ?, ?, ?, NOW(), NOW(), ?)";
	//$values = array($product['category'], $product['name'], $product['description'], $product['price'], $product['quantity'], $product['gender']);
	// return $this->db->query($query, $values);
}

public function updated_product_info($product,$id)
{
	//only available to admin, query will update product information in DB.
	//takes product id.
	//will interact with dashboard method in Users Controller.
	//$query = "INSERT INTO products(category, name, description, price, quanity, created_at, updated_at, gender)
	// 			VALUES(?, ?, ?, ?, ?, NOW(), NOW(), ?)";
	//$values = array($product['category'], $product['name'], $product['description'], $product['price'], $product['quantity'], $product['gender']);
	// return $this->db->query($query, $values);
}
}
?>
