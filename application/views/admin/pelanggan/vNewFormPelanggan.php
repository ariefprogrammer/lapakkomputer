<?php $this->load->view("admin/_partials/atas.php") ?>

			<!-- Judul Halaman -->
        	<h2 class="text-center">Tambah Pelanggan</h2>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/pelanggans/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
						<!-- pelanggans adalah controller -->
					</div>
					<div class="card-body">


					<!-- Form Input Data -->
						<form action="<?php base_url('admin/pelanggans/edit') ?>" method="post" enctype="multipart/form-data" >

							<div class="form-group">
								<label for="nama_store">Nama Store*</label>
								<input class="form-control <?php echo form_error('nama_store') ? 'is-invalid':'' ?>"
								 type="text" name="nama_store" placeholder="Nama Store" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_store') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="alamat_store">Alamat store*</label>
								<input class="form-control <?php echo form_error('alamat_store') ? 'is-invalid':'' ?>"
								 type="text" name="alamat_store" placeholder="Email Store"/>
								<div class="invalid-feedback">
									<?php echo form_error('alamat_store') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="email_store">Email Store*</label>
								<input class="form-control <?php echo form_error('email_store') ? 'is-invalid':'' ?>"
								 type="email" name="email_store" />
								<div class="invalid-feedback">
									<?php echo form_error('email_store') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="telepon_store">Telepon Store*</label>
								<input class="form-control <?php echo form_error('telepon_store') ? 'is-invalid':'' ?>"
								 type="number" name="telepon_store" placeholder="Telepon Store" />
								<div class="invalid-feedback">
									<?php echo form_error('telepon_store') ?>
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