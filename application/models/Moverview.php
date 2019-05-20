<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Moverview extends CI_Model
{

	public function data_chart()
	{
		// $this->db->select('product_id, COUNT(product_id) as total');
		// $this->db->group_by('product_id');
		// $this->db->order_by('total', 'desc');
		// $query = $this->db->get('pembelian', 10);
		// return $query->result();

		return $this->db->query("SELECT COUNT(product_id) AS jumlah_penjualan, product_id AS nama_product FROM pembelian GROUP BY pelanggan_id")->result();
	}
	
	public function getJumlahProduk()
	{
		$query = $this->db->get('products');
		if ($query->num_rows()>0) {
			return $query->num_rows();
		}
		else{
			return 0;
		}
	}

	public function getJumlahPelanggan()
	{
		$query = $this->db->get('pelanggan');
		if ($query->num_rows()>0) {
			return $query->num_rows();
		}else
		{
			return 0;
		}
	}

	public function getJumlahPembelian()
	{
		$query = $this->db->get("pembelian");
		if ($query->num_rows()>0) {
			return $query->num_rows();
		}else
		{
			return 0;
		}
	}

	

}