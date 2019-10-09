<?php $this->load->view("admin/_partials/atas.php") ?>

<!-- Judul Halaman -->
<h2 class="text-center"><?php echo $lihatpembelian['nama_product'];?></h2>

  <div class="container detail-product">
        <div class="row">
            <div class="col-sm-12">
                <img src="<?php echo base_url('upload/product/'.$lihatpembelian['foto_product']);?>">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-2 offset-sm-1">
             <div class="line-height">Nama Produk</div>
             <div class="line-height">Store Pelanggan</div>
             <div class="line-height">Email Pelanggan</div>
             <div class="line-height">Telepon Pelanggan</div>
             <div class="line-height">Jumlah Beli </div>
             <div class="line-height">Tanggal Beli </div>
             <div class="line-height">Harga </div>
             <div class="line-height">Kondisi </div>
             <div class="line-height">Berat </div>
             <div class="line-height">Deskripsi </div>
            </div>
            <div class="col-sm-8">
             <div class="strong line-height">: <?php echo $lihatpembelian['nama_product']?> </div>
             <div class=" line-height">: <?php echo $lihatpembelian['nama_store']?></div>
             <div class=" line-height">: <?php echo $lihatpembelian['email_store']?></div>
             <div class=" line-height">: <?php echo $lihatpembelian['telepon_store']?></div>
             <div class=" line-height">: <?php echo $lihatpembelian['jumlah_pembelian']?></div>
             <div class=" line-height">: <?php echo $lihatpembelian['tanggal_pembelian']?></div>
             <div class=" line-height">: <?php echo $lihatpembelian['harga_product']?></div>
             <div class=" line-height">: <?php echo $lihatpembelian['nama_kondisi']?></div>
             <div class=" line-height">: <?php echo $lihatpembelian['berat_product']?></div>
             <div class=" line-height">: <?php echo $lihatpembelian['deskripsi_product']?></div>
            </div>
      </div>
    </div>
    <hr>
</div>
<!-- /.container-fluid -->

<?php $this->load->view("admin/_partials/bawah.php") ?>