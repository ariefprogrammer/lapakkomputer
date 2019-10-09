<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Mpembelian extends CI_Model
{
	
			public $pembelian_id;
            public $product_id;
            public $pelanggan_id;
            public $tanggal_pembelian;
            public $jumlah_pembelian;
            public $nama_product;
            public $harga_product;
            public $minimal_beli;
            public $qty_product;
            public $warna_tersedia;
            public $kondisi_id;
            public $berat_product;
            public $foto_product;
            public $deskripsi_product;

            public $nama_store;
            public $alamat_store;
            public $email_store;
            public $telepon_store;
            
	

	public function getAll()
	{
		
		//return $this->db->get("pembelian")->result();
		$this->db->select('*');
		$this->db->from('pembelian');
		$this->db->join('products', 'products.product_id=pembelian.product_id', 'LEFT');
		$this->db->join('pelanggan', 'pelanggan.pelanggan_id=pembelian.pelanggan_id', 'LEFT');
		//$query = $this->db->get();
		return $this->db->get()->result();
	}


	public function getById($id)
	{
		$this->db->select('pembelian.*, products.*, pelanggan.*, kondisi_products.*');
		$this->db->from('pembelian');
		$this->db->join('products', 'pembelian.product_id=products.product_id');
		$this->db->join('pelanggan', 'pembelian.pelanggan_id=pelanggan.pelanggan_id');
		$this->db->join('kondisi_products', 'products.kondisi_id=kondisi_products.kondisi_id');
		$this->db->where('pembelian.pembelian_id', $id);
		return $this->db->get()->row_array(); 

		// return $this->db->get_where("pembelian", ["pembelian_id" => $id])->row();
		// fungsi ini sama seperti SELECT * FROM products WHERE id_product=$id
		// funsi row() akan mengambil satu baris data dari hasil query
	} 

	public function delete($id)
	{
		$this->_deleteImage($id); 
		return $this->db->delete("pembelian", array("pembelian_id" => $id));
	}

	private function _deleteImage($id)
	{
		$product = $this->getById($id);
		
		if ($product->foto_product != "default.png") {
				$file_name = explode(".", $product->foto_product[0]);
				return array_map('unlink', glob(FCPATH."upload/product/$file_name.*"));
			
				// Di sana kita mengambil nama file dengan fungsi exlode(). 
				// Lalu kita cari file berdasarkan nama tersbut dengan fungsi glob() 
				// Setelah file-file ditemukan, lalu kita gunakan fungsi array_map() 
				// untuk mengeksekusi fungsi unlink() pada tiap file yang ditemukan. 
				// Tanda bitang (*) setelah $filename artinya semua ektensi dipilih.

			}	
	}

	public function update($post, $id)
	{

	}
}