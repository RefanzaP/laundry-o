<?php
/**
 *
 */
class user extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in')!=true){
        redirect(base_url('index.php/login'),'refresh');
    }
    $this->load->model('user_model');
  }
  public function index(){
        $data['content_view']="user/list";
        $this->load->model('user_model');
        $data['arr']=$this->user_model->get_user();
        $this->load->model('level_model');
        $data['data_level']=$this->level_model->show();
        $this->load->view('template', $data, FALSE);
  }
  public function hapus_user($id_user){

  $this->load->model('user_model');
  $this->user_model->hapus_user($id_user);
  redirect(base_url('index.php/user'), 'refresh');

  }
  public function get_detail($id_user){
    $this->load->model('user_model');
    $data=$this->user_model->detail($id_user);
		echo json_encode($data);
  }

    public function update()
    {
      $this->form_validation->set_rules('nama', 'nama', 'trim|required');
            $this->form_validation->set_rules('username', 'username', 'trim|required');
            $this->form_validation->set_rules('telepon', 'telepon', 'trim|required');
                  $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
                  if($this->form_validation->run() == TRUE){

            				if($this->user_model->update() == TRUE){
            				$this->session->set_flashdata('pesan', 'Ubah Data user Berhasil!');
            				redirect('user');

            			   }else{
            				$this->session->set_flashdata('pesan', 'Ubah Data user Gagal!');
            				redirect('user');
            			  }
            			}else{
            				$this->session->set_flashdata('pesan', validation_errors());
            				redirect('user');
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
        $this->load->model('user_model', 'bar');
        $masuk=$this->bar->add();
        if($masuk==TRUE){
            $this->session->set_flashdata('pesan', 'sukses');
        } else{
            $this->session->set_flashdata('pesan', 'gagal');
        }
        redirect(base_url('index.php/user'), 'refresh');
    }
    else{
        $this->session->set_flashdata('pesan', validation_errors());
        redirect(base_url('index.php/user'), 'refresh');
    }
  }

}



 ?>
