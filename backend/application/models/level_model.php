<?php
/**
 *
 */
class level_model extends CI_Model
{

      public function show_owner()
      {
        $arr= $this->db->where('id_level = 3')->get('level')->result();
      return $arr;
      }
      public function show_driver()
      {
        $arr= $this->db->where('id_level = 2')->get('level')->result();
      return $arr;
      }
}





 ?>
