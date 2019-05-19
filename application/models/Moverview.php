<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Moverview extends CI_Model
{

	public function data_chart()
	{
		$this->db->select('product_id, COUNT(product_id) as total');
		$this->db->group_by('product_id');
		$this->db->order_by('total', 'desc');
		$query = $this->db->get('pembelian', 10);
		return $query->result();

		//return $this->db->query("SELECT COUNT (pembelian.jumlah_pembelian) as banyak, MONTH(tanggal_pembelian) as bulan from pembelian GROUP by MONTH(tanggal_pembelian)")->result();
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