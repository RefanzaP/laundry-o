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
                  'id_user' => $this->input->post('id_user')
              );
        $ql_masuk=$this->db->insert('laundry', $data_laundry);
        return $ql_masuk;
            }


}

 ?>
