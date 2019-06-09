<?php $this->load->view("admin/_partials/atas.php") ?>

<!-- Judul Halaman -->
<h2 class="text-center">Halaman Transaksi</h2>

	<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-success" role="alert">
		<?php echo $this->session->flashdata('success'); ?>
	</div>
	<?php endif; ?>

		<div class="card mb-3">
			<div class="card-header">
				<a href="<?php echo site_url('admin/transaksis/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
				<!-- pelanggans adalah controller -->
			</div>
			<div class="card-body">


		<!-- Form Input Data -->
		<form method="post" enctype="multipart/form-data" >
			<div class="form-group">
				<label for="pelanggan_id">Pelanggan*</label>
				<select class="form-control" name="pelanggan_id">
					<?php
						echo '<option value="" disabled selected>--Pilih Pelanggan--</option>';
						foreach ($dd_pelanggans as $a) {
						echo '<option value="'.$a->pelanggan_id.'">'.$a->nama_store.'</option>';
							}
						?>
				</select>
			</div>

			<div class="form-group">
				<label for="product_id">Produk*</label>
				<select class="form-control" id="product_id" name="product_id">
					<?php
						echo '<option value="" disabled selected>--Pilih Produk--</option>';
						foreach ($dd_products as $b) {
							echo '<option value="'.$b->product_id.'">'.$b->nama_product.'</option>';
						}
					?>
				</select>
			</div>

			<div class="form-group">
				<label for="jumlah_pembelian">Jumlah Pembelian*</label>
				<input class="form-control <?php echo form_error('jumlah_pembelian') ? 'is-invalid':'' ?>"
				 type="number" name="jumlah_pembelian" placeholder="Jumlah Pembelian"/>
				<div class="invalid-feedback">
					<?php echo form_error('jumlah_pembelian') ?>
				</div>
			</div>

			<div class="form-group">
				<label for="tanggal_pembelian">Tanggal*</label>
				<input class="form-control <?php echo form_error('tanggal_pembelian') ? 'is-invalid':'' ?>"
				 type="date" name="tanggal_pembelian" />
				<div class="invalid-feedback">
					<?php echo form_error('tanggal_pembelian') ?>
				</div>
			</div>

			<button name="btn_add_transaksi" class="btn btn-primary">Simpan</button>
		</form>

	</div>
	<div class="card-footer small text-muted">
		* required fields
	</div>

</div>
<!-- /.container-fluid -->
				
<?php $this->load->view("admin/_partials/bawah.php") ?>