<?php
/**
 *
 */
class driver extends CI_Controller
{

    public function __construct(){
      parent::__construct();
      if($this->session->userdata('logged_in')!=true){
          redirect(base_url('index.php/login'),'refresh');
      }
      $this->load->model('driver_model');
    }

    public function index(){
          $data['content_view']="driver/list";
          $this->load->model('driver_model');
          $data['arr']=$this->driver_model->get_user();
          $this->load->model('driver_model');
          $data['data_level']=$this->driver_model->show();
          $this->load->view('template', $data, FALSE);
    }

    public function hapus_user($id_user){

    $this->load->model('driver_model');
    $this->driver_model->hapus_user($id_user);
    redirect(base_url('index.php/driver'), 'refresh');

    }
    public function get_detail($id_user){
      $data=$this->driver_model->detail($id_user);
  		echo json_encode($data);
    }

      public function update()
      {
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        $this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
                    if($this->form_validation->run() == TRUE){

              				if($this->driver_model->update() == TRUE){
              				$this->session->set_flashdata('pesan', 'Ubah Data user Berhasil!');
              				redirect('driver');

              			   }else{
              				$this->session->set_flashdata('pesan', 'Ubah Data user Gagal!');
              				redirect('driver');
              			  }
              			}else{
              				$this->session->set_flashdata('pesan', validation_errors());
              				redirect('driver');
              			  }

    }

    public function add()
    {
      $this->form_validation->set_rules('nama', 'nama', 'trim|required');
            $this->form_validation->set_rules('username', 'username', 'trim|required');
            $this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
                  $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
      if ($this->form_validation->run() == TRUE )
      {
          $this->load->model('driver_model', 'bar');
          $masuk=$this->bar->add();
          if($masuk==TRUE){
              $this->session->set_flashdata('pesan', 'sukses');
          } else{
              $this->session->set_flashdata('pesan', 'gagal');
          }
          redirect(base_url('index.php/driver'), 'refresh');
      }
      else{
          $this->session->set_flashdata('pesan', validation_errors());
          redirect(base_url('index.php/driver'), 'refresh');
      }
    }

}




 ?>
