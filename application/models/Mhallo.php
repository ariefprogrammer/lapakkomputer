<?php defined('BASEPATH') OR exit ('No direct script access alowed');
/**
* 
*/
class Mhallo extends CI_Model
{
	
	public $product_id;
	public $pelanggan_id;
	public $jumlah_pembelian;
	public $tanggal_pembelian;

	function rules()
	{
		return[

			['field'=>'product_id',
			'label' => 'product_id',
			'rules' => 'required'],

			['field'=>'pelanggan_id',
			'label' => 'pelanggan_id',
			'rules' => 'required'],

			['field'=>'jumlah_pembelian',
			'label' => 'jumlah_pembelian',
			'rules' => 'required'],

			['field'=>'tanggal_pembelian',
			'label' => 'tanggal_pembelian',
			'rules' => 'required']
		];
	}

	function save()
	{
		$post = $this->input->post();
		$this->product_id = $post["product_id"];
		$this->pelanggan_id = $post["pelanggan_id"];
		$this->jumlah_pembelian = $post["jumlah_pembelian"];
		$this->db->insert("pelanggan", $this);
	}
}