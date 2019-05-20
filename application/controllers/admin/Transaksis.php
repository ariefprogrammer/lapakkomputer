<?php defined('BASEPATH') OR exit('No direct script access alowed');
/**
* 
*/
class Transaksis extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mtransaksi");
		$this->load->library('form_validation');
	}

	public function index()
	{
		 $data["dd_products"]= $this->Mtransaksi->dd_product();
		 $data["dd_pelanggan"]= $this->Mtransaksi->dd_pelanggan();
		 $this->load->view("admin/transaksi/vFormTransaksi", $data);
	}

	public function add()
	{
		$transaksi = $this->Mtransaksi;
		$validation = $this->form_validation;
		//$validation->set_rules($transaksi->rules());

		if ($validation->run()) { 
			$transaksi->save();
			$this->session->set_flashdata('success','Berhasil disimpan');
		}

		$this->load->view("admin/transaksi/vFormTransaksi");
	}





	// function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model("Mtransaksi");
	// 	$this->load->library("form_validation");
	// }

	// function index()
	// {
	// 	$data["dd_pelanggan"]= $this->Mtransaksi->dd_pelanggan();
	// 	$data["dd_products"]= $this->Mtransaksi->dd_product();
	// 	$this->load->view("admin/transaksi/vFormTransaksi", $data);
	// } 

	// public function add()
	// {
	// 	$transaksi = $this->Mtransaksi;
	// 	$validation = $this->form_validation;
	// 	//$validation->set_rules($transaksi->rules());

	// 	if ($validation->run()) {
	// 		$transaksi->save();
	// 		$this->session->set_flashdata('success', 'Berhasil disimpan');
	// 	}
	// 	$this->load->view("admin/transaksi/vformTransaksi");
	// }
}