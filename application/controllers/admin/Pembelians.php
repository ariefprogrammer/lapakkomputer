<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Pembelians extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model("Mpembelian");
	}

	public function index()
	{
		$data["pembelians"] = $this->Mpembelian->getAll();
		$this->load->view("admin/pembelian/vListPembelian", $data);
	}

	public function lihat($id=null)
	{
		if (!isset($id)) redirect('admin/pembelians');

		$pembelian = $this->Mpembelian;
		$data["lihatpembelian"] = $pembelian->getById($id); 
		if(!$data["lihatpembelian"]) show_404();

		$this->load->view("admin/pembelian/vLihatPembelian", $data);
	}
}