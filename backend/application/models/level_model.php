<?php
/**
 *
 */
class level_model extends CI_Model
{

      public function get_level()
      {
          $arr= $this->db->get('level')->result();
          return $arr;

      }

      public function show()
      {
        $arr= $this->db->where('id_level = 3')->get('level')->result();
      return $arr;
      }

}





 ?>
