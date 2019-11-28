<?php
/**
 *
 */
class pakaian extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in')!=true){
        redirect(base_url('index.php/login'),'refresh');
    }
    $this->load->model('pakaian_model');
  }

  public function index(){
        $data['content_view']="pakaian/list";
        $this->load->model('pakaian_model');
        $data['arr']=$this->pakaian_model->get_pakaian();
        $this->load->model('level_model');
        $data['data_level']=$this->level_model->show_owner();
        $this->load->view('template', $data, FALSE);

  }

  public function hapus_pakaian(){
      $this->load->model('pakaian_model');
      $this->pakaian_model->pakaian_user($id);
      redirect(base_url('index.php/pakaian'), 'refresh');
  }
}



 ?>
