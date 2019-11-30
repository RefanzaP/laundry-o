<div class="card">
  <div class="card-body">
<div class="main-content-inner">
  <div class="row">
    <div class="col-lg-10 mt-5">
      <div class="table-responsive">
        <table class="table text-center">
            <h4 class="header-title">Data Mitra</h4>
                    <a href="#tambah" data-toggle="modal"><span class="glyphicon glyphicon-plus ">Tambah + </span></a><br>
          <thead class="text-uppercase bg-primary">
            <tr class="text-white">
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Username</th>
              <th scope="col">Telepon</th>
              <th scope="col">Alamat</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
      $no=0;
      foreach ($arr as $dt_bar) {
          $no++;
          echo '<tr>
                  <td>'.$no.'</td>
                  <td>'.$dt_bar->nama.'</td>
                  <td>'.$dt_bar->username.'</td>
                  <td>'.$dt_bar->telepon.'</td>
                  <td>'.$dt_bar->alamat.'</td>
                  <td><a href="#" data-toggle="modal" onclick="prepare_ubah_user('.$dt_bar->id_user.')" data-target="#update">Ubah</a> | <a href="'.base_url('index.php/user/hapus_user/'.$dt_bar->id_user).'" onclick="return confirm(\'anda yakin?\')" >Delete</a></td>
               </tr>';
      }
      ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- add user -->
<div class="modal fade" id="tambah">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Tambah Mitra</h4>
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url() ?>index.php/user/add" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_user" ><br>
          Nama
          <input id="nama" type="text" name="nama" class="form-control"  placeholder="nama"><br>
          Username
          <input id="username" type="text" name="username" class="form-control" placeholder="username"><br>
          Password
          <input id="password" type="text" name="password" class="form-control" placeholder="password"><br>
          Telepon
          <input id="telepon" type="text" name="telepon" class="form-control" placeholder="telepon"><br>
          Alamat
          <input id="alamat" type="text" name="alamat" class="form-control" placeholder="alamat"><br>
          Pilih level <br>
              <select name="id_level" class="form-control" >
                <?php
                foreach($data_level as $d) {
                  echo "<option value='".$d->id_level."'>".$d->nama."</option>";
                }
                ?></select>
          <br>
          <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
          <input type="button" value="Cancel" class="btn btn-defaul" data-dismiss="modal">
          </form>
          </div>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
            <!-- /.box-body -->
          </div>
            <!-- <div> -->
          <!-- /.box -->
        </div><br>
      <?php if($this->session->flashdata('pesan')!=null): ?>
           <div class= "alert alert-success"><?= $this->session->flashdata('pesan');?></div>
        <?php endif?>
<!-- Update Kategori -->
<div class="modal fade" id="update">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h4>Ubah</h4>
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    </div>
    <div class="modal-body">
      <form action="<?php echo base_url('index.php/user/update');?>" method="post" enctype="multipart/form-data" >
      <input type="hidden" name="ubah_id_user" id="ubah_id_user" >
      <br>
      Nama
      <input id="ubah_nama" type="text" name="ubah_nama" class="form-control" placeholder="Nama"><br>
      Username
      <input id="ubah_username" type="text" name="ubah_username" class="form-control" placeholder="Username"><br>
      Telepon
      <input id="ubah_telepon" type="text" name="ubah_telepon" class="form-control" placeholder="Telepon"><br>
      Alamat
      <input id="ubah_alamat" type="text" name="ubah_alamat" class="form-control" placeholder="Alamat"><br>
    <br>
      <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
    function prepare_ubah_user(id_user){
        $("#ubah_id_user").empty();
        $("#ubah_nama").empty();
        $("#ubah_username").empty();
        $("#ubah_telepon").empty();
        $("#ubah_alamat").empty();

        $.getJSON('<?php echo base_url(); ?>index.php/user/get_detail_user/' + id_user, function(data){
            $("#ubah_id_user").val(data.id_user);
            $("#ubah_nama").val(data.nama);
            $("#ubah_username").val(data.username);
            $("#ubah_telepon").val(data.telepon);
            $("#ubah_alamat").val(data.alamat);
        });
        }
  </script>
