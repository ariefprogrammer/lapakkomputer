<?php $this->load->view("admin/_partials/atas.php") ?>


        <!-- Judul Halaman -->
        
        <h2 class="text-center"><?php echo $lihatpembelian['nama_product'];?></h2>
         <pre>
          <?php print_r($lihatpembelian);?>
        </pre>



        <div class="detail-product">
          <div class="row">
            <div class="text-center">
            <img src="<?php echo base_url('upload/product/'.$lihatpembelian['foto_product']);?>"/>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-2"><strong>Harga Produk</strong></div>
            <div class="col-sm-5">: Rp.</div>
          </div>

          <div class="row">
            <div class="col-sm-2"><strong>Kondisi Produk</strong></div>
            <div class="col-sm-5">:  </div>
          </div>
          <div class="row">
            <div class="col-sm-2"><strong>Berat Produk</strong></div>
            <div class="col-sm-5">: </div>
          </div>
          <div class="row">
            <div class="col-sm-2"><strong>Minimal Pembelian</strong></div>
            <div class="col-sm-5">:  Unit</div>
          </div>
          <div class="row">
            <div class="col-sm-2"><strong>Warna Produk</strong></div>
            <div class="col-sm-5">: </div>
          </div>
          <div class="row">
            <div class="col-sm-2"><strong>Stok Produk (Qty)</strong></div>
            <div class="col-sm-5">: </div>
          </div>
          <div class="row">
            <div class="col-sm-2"><strong>Deskripsi Produk</strong></div>
            <div class="col-sm-8">:  </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

<?php $this->load->view("admin/_partials/bawah.php") ?>