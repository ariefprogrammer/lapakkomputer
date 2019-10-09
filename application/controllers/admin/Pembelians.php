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
		$this->load->model("Users_model");
	}

	public function index()
	{
		if ($this->session->userdata('isloggedin')) {
			# code...
			$data['udata']=$this->Users_model->fetch_data(array('id'=>$this->session->userdata('loguserid')));
			$data["pembelians"] = $this->Mpembelian->getAll();
			$this->load->view("admin/pembelian/vListPembelian", $data);
		}
		else{
			redirect('admin/users/login');
		}	

	}

	public function lihat($id=null)
	{
		if (!isset($id)) redirect('admin/pembelians');

		$pembelian = $this->Mpembelian;
		$data["lihatpembelian"] = $pembelian->getById($id); 
		if(!$data["lihatpembelian"]) show_404();

		$this->load->view("admin/pembelian/vLihatPembelian", $data);
	}

	public function edit($id)
	{
		//$data["edit"] = $this->Mpembelian->;
		//$this->load->view("admin/pembelian/vEditPembelian", $data);
	}

	public function delete($id=null)
	{
		if ($this->Mpembelian->delete($id)) //hapus data sesuai fungsi pada Product_model dan id
		{
			redirect(site_url('admin/pembelians')); //jika berhasil, redirect ke halaman ini
		}
	}
}