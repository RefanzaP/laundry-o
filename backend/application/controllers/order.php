<?php
/**
 *
 */
class order extends CI_Controller
{

  public function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in')!=true){
        redirect(base_url('index.php/login'),'refresh');
    }
    $this->load->model('order_model');
  }

  public function index(){
    $data['content_view']="order/list";
    $this->load->model('order_model');
    $data['arr']=$this->order_model->get_order();
    $this->load->view('template', $data, FALSE);
  }

}



 ?>
