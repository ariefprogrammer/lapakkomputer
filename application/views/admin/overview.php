<?php $this->load->view("admin/_partials/atas.php") ?>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5"><?php echo $jumlahproduk;?> Data Produk</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/products/');?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5"><?php echo $jumlahpelanggan;?> Data Pelanggan</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/pelanggans/');?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5"><?php echo $jumlahpembelian;?> Data Pembelian</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/pembelians/')?>">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
<!--           <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">13 New Tickets!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>  --> 
        </div>

        <div id="graph"></div>

        <!-- Javascript for Chart -->
        <script type="text/javascript" src="<?php echo base_url('js/raphael-min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/morris.min.js');?>"></script>
        <script>
          Morris.Bar({
            element: 'graph',
            data: <?php echo $data;?>,
            xkey: 'product_id',
            ykeys: 'total'
            labels: 'Total'
          });
        </script>

        

<?php $this->load->view("admin/_partials/bawah.php") ?>