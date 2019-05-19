<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Moverview extends CI_Model
{
	
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