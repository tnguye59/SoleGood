<?php

class Order extends CI_Model{
  public function add_order($products){
    $query = "INSERT INTO orders  (quantity, total_price, created_at, updated_at, user_id ) VALUES (? , ? , NOW(), NOW(), ?)";
    $values= array($this->cart->total_items(), $this->cart->total(), $this->session->userdata('userInfo')['id']);
    // var_dump($values);
    // die('model');
    $this->db->query($query,$values);
    //return $this->db->query($query, $values);
    return $this->db->insert_id();
  }
  public function add_ordproduct($orderID,$product){
    $query = "INSERT INTO products_has_orders (order_id, product_id) VALUES (?,?)";
    $values = array($orderID,$product['id']);
    return $this->db->query($query, $values);
  }
  public function get_all_orders_by_user_id($id){
     $query = "SELECT * from orders where orders.user_id = ?";
      $values = array($id);
    // var_dump($values);
    // die('in controller');
    return $this->db->query($query, $values)->result_array();
  }
  public function get_order_by_id($id){
    $query = "SELECT * from orders
              LEFT JOIN customer_details on orders.user_id = customer_details.user_id
              WHERE orders.id = ?
              GROUP BY orders.user_id";
    $values = array($id);
    return $this->db->query($query, $values)->row_array();
  }
}
?>
