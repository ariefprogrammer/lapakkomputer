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
		
		$this->db->select('pembelian.*, products.*, pelanggan.*');
		$this->db->from('pembelian');
		$this->db->join('products', 'pembelian.product_id=products.product_id');
		$this->db->join('pelanggan', 'pembelian.pelanggan_id=pelanggan.pelanggan_id');
		$query = $this->db->get();
		return $query->result();

		// return $this->db->get("pembelian")->result();
	}


	public function getById($id)
	{
		$this->db->select('pembelian.*, products.*, pelanggan.*');
		$this->db->from('pembelian');
		$this->db->join('products', 'pembelian.product_id=products.product_id');
		$this->db->join('pelanggan', 'pembelian.pelanggan_id=pelanggan.pelanggan_id');
		$this->db->where('pembelian.pembelian_id', $id);
		return $this->db->get()->row_array();

		// return $this->db->get_where("pembelian", ["pembelian_id" => $id])->row();
		// fungsi ini sama seperti SELECT * FROM products WHERE id_product=$id
		// funsi row() akan mengambil satu baris data dari hasil query
	} 
}