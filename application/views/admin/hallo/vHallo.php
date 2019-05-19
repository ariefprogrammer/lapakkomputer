<?php $this->load->view("admin/_partials/atas.php") ?>


			<!-- Judul Halaman -->
			<h2 class="text-center">Tambah Hallo</h2>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/hallo/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">
 

					<!-- Form Input Data -->
						<form action="<?php base_url('admin/hallo/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="product_id">ID Product*</label>
								<input class="form-control <?php echo form_error('product_id') ? 'is-invalid':'' ?>"
								 type="product_id" name="product_id" placeholder="Product ID" />
								<div class="invalid-feedback">
									<?php echo form_error('product_id') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="pelanggan_id">ID Pelanggan*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="number" name="pelanggan_id" placeholder="Product ID" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Jumlah Pembelian*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="number" name="jumlah_pembelian" placeholder="Product ID" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Tanggal Pembelian*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="date" name="tanggal_pembelian" placeholder="Product ID" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->
<?php $this->load->view("admin/_partials/bawah.php") ?>