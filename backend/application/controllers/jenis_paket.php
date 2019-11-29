<?php
/**
 *
 */
class jenis_paket extends CI_Controller
{

  public function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in')!=true){
        redirect(base_url('index.php/login'),'refresh');
    }
    $this->load->model('jenis_paket_model');
  }

  public function index(){
    $data['content_view']="jenis_paket/list";
    $this->load->model('jenis_paket_model');
    $data['arr']=$this->jenis_paket_model->get_jenis_paket();
    $this->load->view('template', $data, FALSE);
  }

      public function hapus_jenis_paket($id_jenis_paket)
    {
      $this->load->model('jenis_paket_model');
      $this->jenis_paket_model->hapus_jenis_paket($id_jenis_paket);
      redirect(base_url('index.php/jenis_paket'), 'refresh');
    }

    public function add(){
      $this->form_validation->set_rules('nama_paket', 'Nama Paket', 'trim|required');
      $this->form_validation->set_rules('harga', 'Harga', 'trim|required');

        if ($this->form_validation->run() == TRUE )
        {
            $this->load->model('jenis_paket_model', 'bar');
            $masuk=$this->bar->add();
            if($masuk==TRUE){
                $this->session->set_flashdata('pesan', 'sukses');
            } else{
                $this->session->set_flashdata('pesan', 'gagal');
            }
            redirect(base_url('index.php/jenis_paket'), 'refresh');
        }
        else{
            $this->session->set_flashdata('pesan', validation_errors());
            redirect(base_url('index.php/jenis_paket'), 'refresh');
        }
    }
}



 ?>
