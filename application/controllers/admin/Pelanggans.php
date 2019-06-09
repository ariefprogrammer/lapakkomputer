<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
*  
*/
class Pelanggans extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mpelanggan");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["pelanggan"] = $this->Mpelanggan->getAll();
		$this->load->view("admin/pelanggan/vListPelanggan", $data);
	}

	public function add()
	{
		if (isset($_POST['btn_add_pelanggan'])) {
			$this->Mpelanggan->save($_POST);
			redirect("admin/pelanggans");
		}
		$this->load->view("admin/pelanggan/vNewFormPelanggan");
	}

	public function edit($id)
	{
		if (isset($_POST['btn_edit_pelanggan'])) {
			$this->Mpelanggan->update($_POST, $id);
			redirect("admin/pelanggans");
		}
		$data["editPelanggan"] = $this->Mpelanggan->getById($id);
		$this->load->view("admin/pelanggan/vEditFormPelanggan", $data);
	}




	public function lihat($id=null)
	{
		if(!isset($id)) redirect("admin/pelanggans");

		$pelanggan = $this->Mpelanggan;
		$data["lihatPelanggan"] = $pelanggan->getById($id);
		if(!$data["lihatPelanggan"]) show_404();

		$this->load->view("admin/pelanggan/vLihatPelanggan", $data);
	}

	public function delete($id=null)
	{
		if(!isset($id)) show_404();

		if ($this->Mpelanggan->delete($id)) {
			redirect(site_url('admin/pelanggans'));
		}
	}

}