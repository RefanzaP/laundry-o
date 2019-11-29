<?php
/**
 *
 */
class order_model extends CI_Model
{
  public function get_order(){
    $arr = $this->db->join('user', 'user.id_user = transaksi.id_user')
                    ->join('pelanggan', 'pelanggan.id_pelanggan = transaksi.id_pelanggan')
                    ->get('transaksi')
                    ->result();
    return $arr;
  }
}



 ?>
