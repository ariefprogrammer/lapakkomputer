<?php $this->load->view("admin/_partials/atas.php") ?>

<!-- Judul Halaman -->
<h2 class="text-center">Edit Data Pelanggan</h2>

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
	<form method="post" enctype="multipart/form-data" >
		<input type="hidden" name="id" value="<?php echo $editPelanggan->pelanggan_id;?>"/>

		<div class="form-group">
			<label for="nama_store">Nama Store*</label>
			<input class="form-control" type="text" name="nama_store" placeholder="Nama Store" value="<?php echo $editPelanggan->nama_store;?>" />
		</div>

		<div class="form-group">
			<label for="alamat_store">Alamat store*</label>
			<input class="form-control" type="text" name="alamat_store" placeholder="Email Store" value="<?php echo $editPelanggan->alamat_store;?>"/>
		</div>

		<div class="form-group">
			<label for="email_store">Email Store*</label>
			<input class="form-control" type="email" name="email_store" value="<?php echo $editPelanggan->email_store;?>"/>
		</div>

		<div class="form-group">
			<label for="telepon_store">Telepon Store*</label>
			<input class="form-control" type="number" name="telepon_store" placeholder="Telepon Store" value="<?php echo $editPelanggan->telepon_store;?>"/>
		</div>

		<button name="btn_edit_pelanggan" class="btn btn-primary">Simpan</button>
	</form>

</div>

<div class="card-footer small text-muted">* required fields</div>

</div>

<!-- /.container-fluid -->
<?php $this->load->view("admin/_partials/bawah.php") ?>