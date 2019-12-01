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
  public function show_owner(){
    $arr= $this->db->where('id_level = 3')->get('user')->result();
    return $arr;
  }

      public function hapus_laundry($id_laundry)
      {
        $this->db->where('id_laundry', $id_laundry);
        return $this->db->delete('laundry');
      }

    public function add(){
        $data_laundry=array(
            'nama_laundry' => $this->input->post('nama_laundry'),
            'alamat_laundry' => $this->input->post('alamat_laundry'),
            'id_user' => $this->input->post('id_user')
              );
        $ql_masuk=$this->db->insert('laundry', $data_laundry);
        return $ql_masuk;
            }


    public function get_data_laundry($id_laundry=''){
      return $this->db->where('id_laundry', $id_laundry)
                      ->get('laundry')
                      ->row();
    }


      public function update()
      {
        $data = array(
          'nama_laundry'     => $this->input->post('ubah_nama_laundry'),
          'alamat_laundry'     => $this->input->post('ubah_alamat_laundry'),
            );

            return $this->db->where('id_laundry', $this->input->post('ubah_id_laundry'))
                            ->update('laundry', $data);
        if ($this->db->affected_rows() > 0) {
          return TRUE;
        } else {
          return FALSE;
        }
    }
}

 ?>
