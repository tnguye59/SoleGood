<?php

class User extends CI_Model {
	public function add_user($userData){
		$query = "INSERT INTO users (first_name, last_name, email, password, is_admin, created_at, updated_at) VALUES (?, ?, ?, ?, ?, NOW(), NOW())";
		$values = array($userData['first_name'], $userData['last_name'], $userData['email'], md5($userData['password']), 'false');
		// var_dump($values);
		// die('in add_user');
		return $this->db->query($query, $values);
	}

	public function get_user_by_email($post){
		$query ="SELECT * FROM users WHERE email = ? AND password = ?";
		$values = array($post['email'], md5($post['password']));
		return $this->db->query($query, $values)->row_array();
	}

	public function add_customer_details( $post, $user){
		$query = "INSERT INTO customer_details (address, city, state, zip_code, phone_number, user_id , created_at, updated_at) VALUES (?,?,?,?,?,?, NOW(), NOW())";
		$values = array($post['address'],$post['city'], $post['state'], $post['zip_code'], $post['phone_number'], $user);
		// var_dump($values);
		// die();
		return $this->db->query($query, $values);
	}
}
?>
