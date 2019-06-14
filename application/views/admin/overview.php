<?php $this->load->view("admin/_partials/atas.php") ?>

<div class="row wallpaper">
    <img src="<?php echo base_url('upload/product/wallpaper.jpg')?>">
</div>

<!-- Icon Cards-->
<div class="row text-center">
  <div class="col-md-4 col-sm-6 mb-3">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-box-open"></i>
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
  <div class="col-md-4 col-sm-6 mb-3">
    <div class="card text-white bg-warning o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-user"></i>
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
  <div class="col-md-4 col-sm-6 mb-3">
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

<!--<div class="col-xl-3 col-sm-6 mb-3">
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

<!-- Area Chart Example-->
<!-- <div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-chart-area"></i>
    Performa Penjualan</div>
  <div class="card-body">
    <canvas id="myAreaChart" width="100%" height="30"></canvas>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div> -->


<script type="text/javascript">
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Area Chart Example
var ctx = document.getElementById("myAreaChart1");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {

    //labels: ["$datas['nama_product']"],
    labels: ["Mar 1", "Mar 2", "Mar 3", "Mar 4", "Mar 5", "Mar 6", "Mar 7", "Mar 8", "Mar 9"],
    datasets: [{
      label: "Jumlah Penjualan",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [1,2,3,4,5,6,7,8,9],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 40000,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
</script>

<?php $this->load->view("admin/_partials/bawah.php") ?>