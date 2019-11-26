<?php

/**
 *
 */
class login_model extends CI_Model
{



  public function cek_user(){
    $u = $this->input->post('username');
      $p = $this->input->post('password');

      $query = $this->db->join('level','level.id_level = user.id_level')
                        ->where('username',$u)
                        ->where('password',$p)
                        ->get('user');

      if ($this->db->affected_rows() > 0) {
        $data_login = $query->row();
        $data_session = array(
                          'username' => $data_login->username,
                          'id_level' =>$data_login->id_level,
                          'logged_in' => TRUE
                          );
        $this->session->set_userdata($data_session);
        return TRUE;
      }else {
        return FALSE;
  }
          }
  }





 ?>
