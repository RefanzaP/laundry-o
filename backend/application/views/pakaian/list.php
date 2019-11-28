
<div class="card">
  <div class="card-body">
<div class="main-content-inner">
  <div class="row">
    <div class="col-lg-10 mt-5">
      <div class="table-responsive">
        <table class="table text-center">
            <h4 class="header-title">List pakaian</h4>
          <thead class="text-uppercase bg-warning">
            <tr class="text-white">
              <th scope="col">No</th>
              <th scope="col">Jenis Pakaian</th>
              <th scope="col">Nama Paket</th>
              <th scope="col">Keterangan</th>
              <th scope="col">harga</th>
              <th scope="col">Gambar</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=0; foreach($arr as $dt_bar):
        $no++; ?>
        <tr>
          <td><?= $no ?></td>
          <td><?= $dt_bar->jenis_pakaian ?></td>
          <td><?= $dt_bar->nama_paket?></td>
          <td><?= $dt_bar->keterangan?></td>
          <td><?= $dt_bar->harga ?></td>
          <td><?= $dt_bar->gambar ?></td>
          <td> <a href="#update" onclick="tm_detail('<?= $dt_bar->id_jenis_paket ?>')" data-toggle="modal">Ubah</a> |
             <a href="<?=base_url('index.php/pakaian/hapus_pakaian/'.$dt_bar->id_jenis_paket)?>" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a></td>
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
          <form action="<?php echo base_url() ?>index.php/pakaian/add" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_pakaian" ><br>
          Nama pakaian
          <input id="jenis_pakaian" type="text" name="jenis_pakaian" class="form-control" placeholder="jenis pakaian"><br>
          Pilih Pemilik
          <select name="id_user" class="form-control">
              <?php
              foreach($data_jenis as $d) {
                echo "<option value='".$d->id_jenis_paket."'>".$d->nama_paket."</option>";
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
      <form action="<?php echo base_url() ?>index.php/pakaian/update" method="post" >
      <input type="hidden" name="id_pakaian" id="id_pakaian" >
      <br>
      Nama pakaian
      <input id="nama_pakaian" type="text" name="nama_pakaian" class="form-control"  placeholder="Nama pakaian"><br><br>
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
      $.getJSON("<?=base_url()?>index.php/pakaian/get_detail/"+id_pakaian,
  function(data){
    $("#id_pakaian").val(data['id_pakaian']);
    $("#nama_pakaian").val(data['nama_pakaian']);
        }
      });
    }
  </script>
