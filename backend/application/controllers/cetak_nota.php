<?php
/**
 *
 */
class cetak_nota extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in')!=true){
        redirect(base_url('index.php/login'),'refresh');
    }
    $this->load->model('cetak_nota_model');
  }
  public function index(){
    $data['content_view']="cetak_nota/list";
    $this->load->model('cetak_nota_model');
    $data['arr']=$this->cetak_nota_model->get_detail_transaksi();
    $this->load->view('template', $data, FALSE);
  }
}


 ?>
