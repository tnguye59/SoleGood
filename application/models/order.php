<?php

class Order extends CI_Model
{

    public function add_order($post)
    {
      //return $this->db->query($query, $values);
      //return $this->db->insert_id()
    }

    public function get_all_orders_by_user_id($id)
    {
       $query = "SELECT * from orders where orders.user_id = ?"; 
        $values = array($id);
      // var_dump($values);
      // die('in controller');
      return $this->db->query($query, $values)->result_array();    
    }
      public function get_order_by_id($id)
    {
      //$query =
      //$values
      //return $this->db->query($query, $values)->row_array();
    }
}
?>
