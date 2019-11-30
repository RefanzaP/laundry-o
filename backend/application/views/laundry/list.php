<div class="card">
  <div class="card-body">
<div class="main-content-inner">
  <div class="row">
    <div class="col-lg-10 mt-5">
      <div class="table-responsive">
        <table class="table text-center">
            <h4 class="header-title">Data Laundry</h4>
                    <a href="#tambah" data-toggle="modal"><span class="glyphicon glyphicon-plus ">Tambah + </span></a><br>
          <thead class="text-uppercase bg-primary">
            <tr class="text-white">
              <th scope="col">No</th>
              <th scope="col">Laundry</th>
              <th scope="col">Nama Pemilik</th>
              <th scope="col">Alamat</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=0; foreach($arr as $dt_bar):
        $no++; ?>
        <tr>
          <td><?= $no ?></td>
          <td><?= $dt_bar->nama_laundry ?></td>
          <td><?= $dt_bar->nama ?></td>
          <td><?= $dt_bar->alamat?></td>
          <td> <a href="#update" onclick="tm_detail('<?= $dt_bar->id_laundry ?>')" data-toggle="modal">Ubah</a> |
             <a href="<?=base_url('index.php/laundry/hapus_laundry/'.$dt_bar->id_laundry)?>" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a></td>
        </tr>
      <?php endforeach ?>
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
          <form action="<?php echo base_url() ?>index.php/laundry/add" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_laundry" ><br>
          Nama Laundry
          <input id="nama_laundry" type="text" name="nama_laundry" class="form-control" placeholder="Nama Laundry"><br>
          Pilih Pemilik
          <select name="id_user" class="form-control">
              <?php
              foreach($data_user as $d) {
                echo "<option value='".$d->id_user."'>".$d->nama."</option>";
              }
              ?>
            </select><br>
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
      <form action="<?php echo base_url() ?>index.php/laundry/update" method="post" >
      <input type="hidden" name="id_laundry" id="id_laundry" >
      <br>
      Nama Laundry
      <input id="nama_laundry" type="text" name="nama_laundry" class="form-control"  placeholder="Nama Laundry"><br><br>
      <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
<script>
    function tm_detail(id_user){
      $.getJSON("<?=base_url()?>index.php/laundry/get_detail/"+id_laundry,
  function(data){
    $("#id_laundry").val(data['id_laundry']);
    $("#nama_laundry").val(data['nama_laundry']);
        }
      });
    }
  </script>
