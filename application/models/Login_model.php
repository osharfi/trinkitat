<?php
class Login_model extends CI_Model{

  function validate($name,$password){
    $this->db->where('user_name',$name);
    $this->db->where('user_password',$password);
	//$this->db->where('customerActive',1);
    $result = $this->db->get('users',1);
    return $result;
  }

}
