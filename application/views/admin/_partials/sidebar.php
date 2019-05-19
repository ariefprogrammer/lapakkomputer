
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item <?php echo $this->uri->segment(2) == ''? 'active': ''?>">
        <a class="nav-link" href="<?php echo site_url('admin');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Overview</span>
        </a>
      </li>


      <li class="nav-item <?php echo $this->uri->segment(2)== 'transaksi'? 'active': ''?>">
        <a class="nav-link" href="<?php echo site_url('admin/transaksi');?>">
          <i class="fas fa-fw fa-archive"></i>
          <span>Transaksi</span></a>
      </li>

      <li class="nav-item <?php echo $this->uri->segment(2)== 'pembelians'? 'active': ''?>">
        <a class="nav-link" href="<?php echo site_url('admin/pembelians');?>">
          <i class="fas fa-fw fa-clipboard-list"></i>
          <span>Daftar Pembelian</span></a>
      </li>

      <li class="nav-item dropdown <?php echo $this->uri->segment(2)== 'products'? 'active': ''?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Produk</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo site_url('admin/products/add');?>">Tambah Produk</a>
          <a class="dropdown-item" href="<?php echo site_url('admin/products');?>">Daftar Produk</a>
        </div>
      </li>
      <li class="nav-item dropdown <?php echo $this->uri->segment(2)== 'pelanggans'? 'active': ''?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-user"></i>
          <span>Pelanggan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo site_url('admin/pelanggans/add');?>">Tambah Pelanggan</a>
          <a class="dropdown-item" href="<?php echo site_url('admin/pelanggans');?>">Daftar Pelanggan</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-cog"></i>
          <span>Settings</span></a>
      </li>
    </ul>