
<div class="card">
  <div class="card-body">
<div class="main-content-inner">
  <div class="row">
    <div class="col-lg-10 mt-5">
      <div class="table-responsive">
        <table class="table text-center">
            <h4 class="header-title">List Orderan</h4>
          <thead class="text-uppercase bg-secondary">
            <tr class="text-white">
              <th scope="col">No</th>
              <th scope="col">Pemesanan Nomor</th>
              <th scope="col">Nama Pelanggan</th>
              <th scope="col">Driver</th>
              <th scope="col">Status</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=0; foreach($arr as $dt_bar):
        $no++; ?>
        <tr>
          <td><?= $dt_bar->id_transaksi ?></td>
          <td><?= $dt_bar->nama_user?></td>
          <td><?= $dt_bar->nama?></td>
          <td><?= $dt_bar->total_bayar?></td>
          <td><?= $dt_bar->status_pesan?></td>
             <td><a href="<?=base_url('index.php/order/hapus_order/'.$dt_bar->id_transaksi)?>" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a></td>
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
          <h4 class="modal-title" id="myModalLabel">Tambah Paket</h4>
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url() ?>index.php/jenis_paket/add" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_jenis_paket" ><br>
          Nama Paket
          <input id="nama_paket" type="text" name="nama_paket" class="form-control"  placeholder="Nama Paket"><br>
          Harga
          <input id="harga" type="number" min="0" max="10000" name="harga" class="form-control" placeholder="Harga"><br>
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
      <form action="<?php echo base_url() ?>index.php/pakaian/update" method="post" >
      <input type="hidden" name="id_pakaian" id="id_pakaian" >
      <br>
      Nama Paket
      <input id="nama_paket" type="text" name="nama_paket" class="form-control"  placeholder="Nama Paket"><br><br>
      <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
<?php if($this->session->flashdata('pesan')!=null): ?>
     <div class= "alert alert-success"><?= $this->session->flashdata('pesan');?></div>
  <?php endif?>

<script>
    function tm_detail(id_jenis_paket){
      $.getJSON("<?=base_url()?>index.php/jenis_paket/get_detail/"+id_jenis_paket,
      function(data){
    $("#id_pakaian").val(data['id_pakaian']);
    $("#nama_pakaian").val(data['nama_pakaian']);
        }
      });
    }
  </script>
