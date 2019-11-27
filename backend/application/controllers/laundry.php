<?php
/**
 *
 */
class laundry extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    if($this->session->userdata('logged_in')!=true){
        redirect(base_url('index.php/login'),'refresh');
    }
    $this->load->model('laundry_model');
  }

  public function index(){
    $data['content_view']="laundry/list";
    $this->load->model('laundry_model');
    $data['arr']=$this->laundry_model->get_laundry();
    $this->load->model('level_model');
    $data['data_level']=$this->level_model->show_owner();
    $this->load->view('template', $data, FALSE);
  }

}




 ?>
