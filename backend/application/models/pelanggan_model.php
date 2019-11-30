<?php
/**
 *
 */
class pelanggan_model extends CI_Model
{

  public function get_pelanggan(){
    $arr= $this->db->get('pelanggan')->result();
    return $arr;
  }
  public function add(){
    $data_topik=array(
        'nama_user' => $this->input->post('nama_user'),
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password'),
        'telepon' => $this->input->post('telepon'),
        'alamat' => $this->input->post('alamat'),
    );
  $ql_masuk=$this->db->insert('pelanggan', $data_topik);
  return $ql_masuk;
  }

  public function hapus_user($id_pelanggan = ''){

      $this->db->where('id_pelanggan', $id_pelanggan);
      return $this->db->delete('pelanggan');
  }
}



 ?>
