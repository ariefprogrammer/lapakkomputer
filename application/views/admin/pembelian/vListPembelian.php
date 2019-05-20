<?php $this->load->view("admin/_partials/atas.php") ?>

<!-- Judul Halaman -->
<h2 class="text-center">Daftar Pembelian</h2>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
        
        <thead>
          <tr>
            <th>Pelanggan</th>
            <th>No Telp</th>
            <th>Produk</th>
            <th>Tanggal beli</th>
            <th>Foto Produk</th>
            <th class="text-center">Aksi</th> 
          </tr>
        </thead>

        <tbody>
          <?php foreach ($pembelians as $pembelian): ?>
          <!-- foreach($namatabel as $variabelbaru): -->
          <tr>
            <td width="200"><?php echo $pembelian->nama_store;?></td>
            <td width="120"><?php echo $pembelian->telepon_store;?></td>
            <td><?php echo $pembelian->nama_product;?></td>
            <td><?php  echo $pembelian->tanggal_pembelian;?></td>
            <td>
            	<img src="<?php echo base_url('upload/product/'.$pembelian->foto_product) ?>" width="80">
            </td>

            <td width="180" class="text-center">
            <a href="<?php echo site_url('admin/pembelians/lihat/'.$pembelian->pembelian_id) ?>"
               class="btn btn-small"><i class="fas fa-eye"></i></a>
              <a href="<?php echo site_url('admin/pembelians/edit/'.$pembelian->pembelian_id) ?>"
               class="btn btn-small"><i class="fas fa-edit"></i></a>
              <a onclick="deleteConfirm('<?php echo site_url('admin/pembelians/delete/'.$pembelian->pembelian_id) ?>')"
               href="#" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
            </td>

          </tr>
          <?php endforeach; ?>
        </tbody>

      </table>
    </div>
  </div> 
</div>

</div>
<!-- /.container-fluid -->

<?php $this->load->view("admin/_partials/bawah.php") ?>