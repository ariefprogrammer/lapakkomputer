<?php $this->load->view("admin/_partials/atas.php") ?>

        <!-- Judul Halaman -->
        <h2 class="text-center">Daftar Pelanggan</h2>

        <!-- Data Tables -->
        <div class="card mb-3">
          <div class="card-header">
            <a href="<?php echo site_url('admin/pelanggans/add') ?>"><i class="fas fa-plus"></i> Add New</a> 
            <!-- pelanggans = controller -->
          </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                
                <thead>
                  <tr>
                    <th>Nama Store</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th class="text-center">Aksi</th> 
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($pelanggan as $pelanggan): ?>
                    <!-- foreach($namatabel as $variabelbaru): -->
                  <tr>
                    <td width="200"> <?php echo substr($pelanggan->nama_store, 0, 25) ?></td>
                    <td width="200"><?php echo substr($pelanggan->alamat_store, 0, 30) ?></td>
                    <td><?php echo $pelanggan->email_store ?></td>
                    <td><?php echo $pelanggan->telepon_store ?></td>

                    <td width="180" class="text-center">
                    <a href="<?php echo site_url('admin/pelanggans/lihat/'.$pelanggan->pelanggan_id) ?>"
                       class="btn btn-small"><i class="fas fa-eye"></i></a>
                      <a href="<?php echo site_url('admin/pelanggans/edit/'.$pelanggan->pelanggan_id) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i></a>
                      <a onclick="deleteConfirm('<?php echo site_url('admin/pelanggans/delete/'.$pelanggan->pelanggan_id) ?>')"
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