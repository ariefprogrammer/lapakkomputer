<?php $this->load->view("admin/_partials/atas.php") ?>

<!-- Judul Halaman -->
<h2 class="text-center">Daftar Produk</h2>
        
<!-- Data Tables -->
<div class="card mb-3">
  <div class="card-header">
    <a href="<?php echo site_url('admin/products/add') ?>"><i class="fas fa-plus"></i> Add New</a>
  </div>

<div class="card-body">
  <div class="table-responsive">
    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
      
      <thead>
        <tr>
          <th>Nama</th>
          <th>Harga</th>
          <th>Qty</th>
          <th>Kondisi</th>
          <th>Foto</th>
          <th>Deskripsi</th>
          <th class="text-center">Aksi</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($products as $product): ?>
        <tr>
          <td width="200"> <?php echo $product->nama_product ?></td>
          <td width="120">Rp. <?php echo number_format($product->harga_product);?></td>
          <td><?php echo $product->qty_product ?></td>
          <td><?php echo $product->nama_kondisi ?></td>
          <td>
            <img src="<?php echo base_url('upload/product/'.$product->foto_product) ?>" width="64" />
          </td>
          <td> <?php echo substr($product->deskripsi_product, 0, 20) ?>....</td>

          <td width="180" class="text-center">
            <a href="<?php echo site_url('admin/products/lihat/'.$product->product_id) ?>"
             class="btn btn-small"><i class="fas fa-eye"></i></a>
            <a href="<?php echo site_url('admin/products/edit/'.$product->product_id) ?>"
             class="btn btn-small"><i class="fas fa-edit"></i></a>
            <a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$product->product_id) ?>')"
             href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
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