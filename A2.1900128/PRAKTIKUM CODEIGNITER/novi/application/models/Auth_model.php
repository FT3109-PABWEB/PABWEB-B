<?php
class Auth_model extends CI_Model

{
 public function cek_users($data)
 {
     return $this->db->get_where('user',$data);
 }
}