<?php defined('BASEPATH') OR exit('No direct script access alowed');
/**
* 
*/
class Transaksi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Mtransaksi");
		$this->load->library("form_validation");
	}

	function index()
	{
		$data["dd_pelanggan"]= $this->Mtransaksi->dd_pelanggan();
		$data["dd_products"]= $this->Mtransaksi->dd_product();
		$this->load->view("admin/transaksi/vFormTransaksi", $data);
	}

	function add()
	{
		$transaksi = $this->Mtransaksi;
		$validation = $this->form_validation;
		$validation->set_rules($transaksi->rules());

		if ($validation->run()) {
			$transaksi->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		$this->load->view("admin/transaksi/vformTransaksi");
	}
}