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
		$this->load->model("Users_model");
		$this->load->library('form_validation');
	}

	public function index()
	{

		 if (isset($_POST['btn_add_transaksi'])) {
			$this->Mtransaksi->save($_POST);
			$kode_transaksi = $this->input->post('code');
			redirect("admin/transaksis/nota/".$kode_transaksi);
		}
		$data["lastCode"]= $this->Mtransaksi->getLastCode();
		$data["dd_products"]= $this->Mtransaksi->dd_product();
		$data["dd_pelanggans"]= $this->Mtransaksi->dd_pelanggan();
		$this->load->view("admin/transaksi/vFormTransaksi", $data);
		
	}


	public function nota($kode_transaksi)
	{
		$data["nota"] = $this->Mtransaksi->nota($kode_transaksi);
		$this->load->library('Pdf');
		$this->load->view("admin/transaksi/vNota", $data);
	}
}

		
