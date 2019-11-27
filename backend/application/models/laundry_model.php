<?php
/**
 *
 */
class laundry_model extends CI_Model
{

  public function get_laundry(){
    $arr= $this->db->get('laundry')->result();
    return $arr;
  }

}



 ?>
