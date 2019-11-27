<?php
/**
 *
 */
class laundry_model extends CI_Model
{

  public function get_laundry(){
    $arr = $this->db->join('user', 'user.id_user = laundry.id_user')
                    ->get('laundry')
                    ->result();
    return $arr;
  }

}



 ?>
