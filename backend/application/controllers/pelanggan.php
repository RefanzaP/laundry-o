<?php
/**
 *
 */
class pelanggan extends CI_Controller
{

  public function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in')!=true){
        redirect(base_url('index.php/login'),'refresh');
    }
    $this->load->model('pelanggan_model');
  }

  public function index(){
    $data['content_view']="pelanggan/list";
    $this->load->model('pelanggan_model');
    $data['arr']=$this->pelanggan_model->get_pelanggan();
    $this->load->model('pelanggan_model');
    $this->load->view('template', $data, FALSE);
  }

  public function add(){
    $this->form_validation->set_rules('nama_user', 'nama', 'trim|required');
          $this->form_validation->set_rules('username', 'username', 'trim|required');
          $this->form_validation->set_rules('password', 'password', 'trim|required');
          $this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
                $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
      if ($this->form_validation->run() == TRUE )
      {
          $this->load->model('pelanggan_model', 'bar');
          $masuk=$this->bar->add();
          if($masuk==TRUE){
              $this->session->set_flashdata('pesan', 'sukses');
          } else{
              $this->session->set_flashdata('pesan', 'gagal');
          }
          redirect(base_url('index.php/pelanggan'), 'refresh');
      }
      else{
          $this->session->set_flashdata('pesan', validation_errors());
          redirect(base_url('index.php/pelanggan'), 'refresh');
      }

  }
  public function hapus_user($id_pelanggan){
      $this->load->model('pelanggan_model');
      $this->pelanggan_model->hapus_user($id_pelanggan);
      redirect(base_url('index.php/pelanggan'), 'refresh');
  }
}


 ?>
