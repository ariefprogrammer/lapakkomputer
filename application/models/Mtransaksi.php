<?php defined('BASEPATH') OR exit('No direct script access alowed');

/**
* 
*/
class Mtransaksi extends CI_Model
{
	public $pelanggan_id;
	public $product_id;
	public $jumlah_pembelian;
	public $tanggal_pembelian;

	public function rules(){
		return[
		['field' => 'pelanggan_id',
		'label' => 'pelanggan_id',
		'rules' => 'required'],

		['field' => 'product_id',
		'label' => 'product_id',
		'rules' => 'required'],

		['field' => 'jumlah_pembelian',
		'label' => 'jumlah_pembelian',
		'rules' => 'required']
	];
	}

	public function save($post)
	{
		$pelanggan_id = $this->db->escape($post["pelanggan_id"]);
		$kode_transaksi = $this->db->escape($post["code"]);
		$product_id = $this->db->escape($post["product_id"]);
		$jumlah_pembelian = $this->db->escape($post["jumlah_pembelian"]);
		$tanggal_pembelian = $this->db->escape($post["tanggal_pembelian"]);
		$sql = $this->db->query("INSERT INTO pembelian VALUES(NULL, $kode_transaksi, $product_id, $pelanggan_id, $jumlah_pembelian, $tanggal_pembelian)");

		if ($sql) {
			return true;
		} else
		{
			return false;
		}
		// $post = $this->input->post();
		// $this->pelanggan_id = $post["pelanggan_id"];
		// $this->product_id = $post["product_id"];
		// $this->jumlah_pembelian = $post["jumlah_pembelian"];
		// $this->tanggal_pembelian = $post["tanggal_pembelian"];
		// $this->db->insert("transaksi", $this);

	}

	public function dd_pelanggan()
	{
		return $this->db->get("pelanggan")->result();
	}

	public function dd_product()
	{
		return $this->db->get("products")->result();
	}

	public function getLastCode()
	{
		$sql = $this->db->query("SELECT kode_transaksi FROM pembelian ORDER BY pembelian_id DESC LIMIT 1");
		return $sql->row();
	}

	public function nota($kode_transaksi)
	{
		$this->db->select('pembelian.*, products.*, pelanggan.*, kondisi_products.*');
		$this->db->from('pembelian');
		$this->db->join('products', 'pembelian.product_id=products.product_id');
		$this->db->join('pelanggan', 'pembelian.pelanggan_id=pelanggan.pelanggan_id');
		$this->db->join('kondisi_products', 'products.kondisi_id=kondisi_products.kondisi_id');
		$this->db->where('pembelian.kode_transaksi', $kode_transaksi);
		return $this->db->get()->row_array();
	}


}