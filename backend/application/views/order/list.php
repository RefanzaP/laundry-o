
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
              <th scope="col">Nomor Transaksi</th>
              <th scope="col">Nama Pelanggan</th>
              <th scope="col">Alamat</th>
              <th scope="col">Total</th>
              <th scope="col">Status</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=0; foreach($arr as $dt_bar):
        $no++; ?>
        <tr>
          <td><?= $no ?></td>
          <td><?= $dt_bar->id_transaksi ?></td>
          <td><?= $dt_bar->nama_user?></td>
          <td><?= $dt_bar->alamat?></td>
          <td><?= $dt_bar->total_bayar?></td>
          <td><a href ="#update" data-toggle="modal"><?= $dt_bar->status_pesan?></a></td>
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
<!-- Update Kategori -->
<div class="modal fade" id="update">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h4>Ubah</h4>
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    </div>
    <div class="modal-body">
      <form action="<?php echo base_url() ?>index.php/order/update" method="post" >
      <input type="hidden" name="id_pakaian" id="id_pakaian" >
      <br>
      Pilih Status <br>
          <select name="id_status" class="form-control" >
            <?php
            foreach($data_status as $d) {
              echo "<option value='".$d->id_status."'>".$d->status_pesan."</option>";
            }
            ?></select>
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
