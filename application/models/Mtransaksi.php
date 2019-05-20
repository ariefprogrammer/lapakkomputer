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
		'rules' => 'required'],

		['field' => 'tanggal_pembelian',
		'label' => 'tanggal_pembelian',
		'rules' => 'required']
		];
	}

	public function save()
	{
		$post = $this->input->post();
		$this->pelanggan_id = $post["pelanggan_id"];
		$this->product_id = $post["product_id"];
		$this->jumlah_pembelian = $post["jumlah_pembelian"];
		$this->tanggal_pembelian = $post["tanggal_pembelian"];
		$this->db->insert("transaksi", $this);

	}

	function dd_pelanggan()
	{
		return $this->db->get("pelanggan")->result();
	}

	function dd_product()
	{
		return $this->db->get("products")->result();
	}
}