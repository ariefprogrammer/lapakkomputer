<?php

/**
* 
*/
class Overview extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Moverview");
	}

	public function index()
	{
		$data["datas"] = json_encode($this->Moverview->data_chart());
		$data["jumlahproduk"] = $this->Moverview->getJumlahProduk();
		$data["jumlahpelanggan"] = $this->Moverview->getJumlahPelanggan();
		$data["jumlahpembelian"] = $this->Moverview->getJumlahPembelian();
		$this->load->view("admin/overview.php", $data);
	}

	
}

?>