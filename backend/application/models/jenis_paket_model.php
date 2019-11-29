<?php
/**
 *
 */
class jenis_paket_model extends CI_Model
{

  public function get_jenis_paket(){
    $arr = $this->db->order_by('harga','asc')->get('jenis_paket')
                    ->result();
            return $arr;
  }
  public function hapus_jenis_paket($id_jenis_paket = '')
  {
    $this->db->where('id_jenis_paket', $id_jenis_paket);
    return $this->db->delete('jenis_paket');
  }

  public function add(){
    $data_topik=array(
        'nama_paket' => $this->input->post('nama_paket'),
        'harga' => $this->input->post('harga'),
    );
  $ql_masuk=$this->db->insert('jenis_paket', $data_topik);
  return $ql_masuk;
  }
}



 ?>
