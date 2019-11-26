<?php

class login extends CI_Controller
{

  public function __construct(){
    parent::__construct();
    $this->load->model('login_model');
  }

  public function index(){
      $this->load->view('login/list');
  }

  public function proses(){
    if ($this->session->userdata('logged_in') == FALSE) {
            $this->form_validation->set_rules('username','username','trim|required');
            $this->form_validation->set_rules('username','username','trim|required');

            if ($this->form_validation->run() == TRUE) {
              if ($this->login_model->cek_user() == TRUE) {
                redirect('dashboard');
              }else {
                $this->session->set_flashdata('notif','Periksa kembali username dan password anda!');
                redirect('login/index');
              }
            }else {
              $this->session->set_flashdata('notif',validation_errors());
              redirect('login/index');
            }
      } else {
        redirect('dashboard');
      }
}
}

 ?>
