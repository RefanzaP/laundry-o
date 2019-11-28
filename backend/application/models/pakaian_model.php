<?php
/**
 *
 */
class pakaian_model extends CI_Model
{
  public function get_pakaian(){
    $arr = $this->db->join('jenis_paket', 'jenis_paket.id_jenis_paket = pakaian.id_jenis_paket')
                    ->get('pakaian')
                    ->result();
    return $arr;
  }
}



 ?>
