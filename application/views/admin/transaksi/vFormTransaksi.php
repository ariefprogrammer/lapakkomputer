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
		<form action="<?php base_url('admin/transaksis/add') ?>" method="post" enctype="multipart/form-data" >
			<div class="form-group">
				<label for="pelanggan_id">Pelanggan*</label>
				<select class="form-control" name="pelanggan_id">
					<?php
						echo '<option value="" disabled selected>--Pilih Pelanggan--</option>';
						foreach ($dd_pelanggan as $row) {
						echo '<option value="'.$row->pelanggan_id.'">'.$row->nama_store.'</option>';
							}
						?>
				</select>
			</div>

			<div class="form-group">
				<label for="product_id">Produk*</label>
				<select class="form-control" id="product_id" name="product_id">
					<?php
						echo '<option value="" disabled selected>--Pilih Produk--</option>';
						foreach ($dd_products as $row) {
							echo '<option value="'.$row->product_id.'" data-harga_product="'.$row->harga_product.'">'.$row->nama_product.'</option>';
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

			<input class="btn btn-success" type="submit" name="btn" value="Save" />
		</form>

	</div>
	<div class="card-footer small text-muted">
		* required fields
	</div>

</div>
<!-- /.container-fluid -->
				
<?php $this->load->view("admin/_partials/bawah.php") ?>