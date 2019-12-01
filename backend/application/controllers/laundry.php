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
    $data['data_user']=$this->laundry_model->show_owner();
    $this->load->view('template', $data, FALSE);
  }

  public function hapus_laundry($id)
{
  $this->load->model('laundry_model');
  $this->laundry_model->hapus_laundry($id);
  redirect(base_url('index.php/laundry'), 'refresh');
}

  public function add(){
    $this->form_validation->set_rules('nama_laundry', 'Nama Laundry', 'trim|required');
    $this->form_validation->set_rules('alamat_laundry', 'Alamat Laundry', 'trim|required');
    $this->form_validation->set_rules('id_user', 'Owner', 'trim|required');

      if ($this->form_validation->run() == TRUE )
      {
          $this->load->model('laundry_model', 'bar');
          $masuk=$this->bar->add();
          if($masuk==TRUE){
              $this->session->set_flashdata('pesan', 'sukses');
          } else{
              $this->session->set_flashdata('pesan', 'gagal');
          }
          redirect(base_url('index.php/laundry'), 'refresh');
      }
      else{
          $this->session->set_flashdata('pesan', validation_errors());
          redirect(base_url('index.php/laundry'), 'refresh');
      }
  }

  public function get_detail_laundry($id_laundry){
    $data = $this->laundry_model->get_data_laundry($id_laundry);
    echo json_encode($data);
  }

  public function update()
  {
    $this->form_validation->set_rules('ubah_nama_laundry', 'Nama Laundry', 'trim|required');
    $this->form_validation->set_rules('ubah_alamat_laundry', 'Alamat Laundry', 'trim|required');
    if ($this->form_validation->run() == TRUE ){
      if ($this->laundry_model->update() == TRUE ){
      $this->session->set_flashdata('pesan', 'sukses update');
      redirect(base_url('index.php/laundry'), 'refresh');
    } else{

        $this->session->set_flashdata('pesan', 'sukses update');
          redirect(base_url('index.php/laundry'), 'refresh');
      }
    }else {
        $this->session->set_flashdata('pesan', validation_errors());
        redirect(base_url('index.php/laundry'), 'refresh');
      }
}


}




 ?>
