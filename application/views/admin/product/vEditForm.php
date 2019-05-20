<?php $this->load->view("admin/_partials/atas.php") ?>

<!-- Judul Halaman -->
<h2 class="text-center">Daftar Produk</h2>

	<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-success" role="alert">
		<?php echo $this->session->flashdata('success'); ?>
	</div>
	<?php endif; ?>

	<div class="card mb-3">
		<div class="card-header">
			<a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
		</div>
		<div class="card-body">


		<!-- Form Input Data -->
			<form action="<?php base_url('admin/product/edit') ?>" method="post" enctype="multipart/form-data" >
				
				<input type="hidden" name="id" value="<?php echo $product->product_id;?>">

				<div class="form-group">
					<label for="name">Nama Product*</label>
					<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
					 type="text" name="nama_product" placeholder="Product name" value="<?php echo $product->nama_product;?>"/>
					<div class="invalid-feedback">
						<?php echo form_error('name') ?>
					</div>
				</div>

				<div class="form-group">
					<label for="name">Brand Name*</label>
					<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
					 type="text" name="brand_product" value="<?php echo $product->brand_product;?>" />
					<div class="invalid-feedback">
						<?php echo form_error('name') ?>
					</div>
				</div>

				<div class="form-group">
					<label for="price">Harga Product*</label>
					<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
					 type="number" name="harga_product" min="0" placeholder="Harga barang" value="<?php echo $product->harga_product;?>" />
					<div class="invalid-feedback">
						<?php echo form_error('price') ?>
					</div>
				</div>

				<div class="form-group">
					<label for="price">Minimal Beli</label>
					<input class="form-control <?php echo form_error('minimal') ? 'is-invalid':'' ?>"
					 type="number" name="minimal_beli" min="0" placeholder="Minimal Beli" value="<?php echo $product->minimal_beli;?>"/>
					<div class="invalid-feedback">
						<?php echo form_error('minimal') ?>
					</div>
				</div>

				<div class="form-group">
					<label for="price">Stok Produk (Qty)</label>
					<input class="form-control <?php echo form_error('qty_product') ? 'is-invalid':'' ?>"
					 type="number" name="qty_product" min="0" placeholder="Stok Produk" value="<?php echo $product->qty_product;?>"/>
					<div class="invalid-feedback">
						<?php echo form_error('qty_product') ?>
					</div>
				</div>

				<div class="form-group">
					<label for="price">Warna tersedia*</label>
					<input class="form-control <?php echo form_error('warna') ? 'is-invalid':'' ?>"
					 type="text" name="warna_tersedia" min="0" placeholder="Warna yang tersedia" value="<?php echo $product->warna_tersedia;?>"/>
					<div class="invalid-feedback">
						<?php echo form_error('warna') ?>
					</div>
				</div>

				<div class="form-group">
					<label for="price">Kondisi produkk*</label>
						<select name="kondisi_id" class="form-control">
							<option value="">--Pilih Kondisi--</option>
							<option value="1" <?php if($product->kondisi_id == 1) echo "selected";?> >Baru</option>
							<option value="2" <?php if($product->kondisi_id == 2) echo "selected";?> >Bekas</option>
							
						</select>

					<!-- <input class="form-control <?php echo form_error('kondisi') ? 'is-invalid':'' ?>"
					 type="text" name="kondisi_id" min="0" placeholder="Baru / Bekas" value="<?php echo $product->kondisi_;?>" />
					<div class="invalid-feedback">
						<?php echo form_error('kondisi') ?> -->
					</div>
				

				<div class="form-group">
					<label for="price">Berat Produk</label>
					<input class="form-control <?php echo form_error('berat') ? 'is-invalid':'' ?>"
					 type="number" name="berat_product" min="0" placeholder="Berat Produk (Gr)" value="<?php echo $product->berat_product;?>"/>
					<div class="invalid-feedback">
						<?php echo form_error('berat') ?>
					</div>
				</div>

				<div class="form-group">
					<label for="name">Photo</label>
					<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
					 type="file" name="image" />
					 <input type="hidden" name="old_image" value="<?php echo $product->foto_product;?>"/>
					<div class="invalid-feedback">
						<?php echo form_error('image') ?>
					</div>
				</div>

				<div class="form-group">
					<label for="name">Deskripsi Produk*</label>
					<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
					 name="deskripsi_product" placeholder="Product description..."><?php echo $product->deskripsi_product;?></textarea>
					<div class="invalid-feedback">
						<?php echo form_error('description') ?>
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