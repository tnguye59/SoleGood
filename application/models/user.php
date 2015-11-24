<?php

class User extends CI_Model {

public function add_user($userData)
{
	$query = "INSERT INTO users (first_name, last_name, email, password, is_admin, created_at, updated_at) VALUES (?, ?, ?, ?, ?, NOW(), NOW())";
	$values = array($userData['first_name'], $userData['last_name'], $userData['email'], $userData['password'], 'false');
	// var_dump($values);
	// die('in add_user');
	return $this->db->query($query, $values);
}

public function get_user_by_email($post)
{
	$query ="SELECT id, first_name, email, password FROM users WHERE email = ? AND password = ?";
	$values = array($post['email'], $post['password']);

	return $this->db->query($query, $values)->row_array();
}



}


?>
