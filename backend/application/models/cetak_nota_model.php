<?php
/**
 *
 */
class cetak_nota_model extends CI_Model
{
  public function get_detail_transaksi(){
    $arr= $this->db->get('detail_transaksi')->result();
    return $arr;
  }
}



 ?>
