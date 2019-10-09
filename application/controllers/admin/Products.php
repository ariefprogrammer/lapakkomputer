<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Products extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mproduct");
		$this->load->model("Users_model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		if ($this->session->userdata('isloggedin')) {
			
			$data['udata']=$this->Users_model->fetch_data(array('id'=>$this->session->userdata('loguserid')));
			$data["products"] = $this->Mproduct->getAll();
			$this->load->view("admin/product/vList", $data);
		}
		else{
			redirect('admin/users/login');
		}		 
	}

	public function add()
	{
		if (isset($_POST['btn_add_product'])) {
			$this->Mproduct->save($_POST);
			redirect("admin/products");
		}

		$this->load->view("admin/product/vNewForm");
	}

	public function lihat($id=null)
	{
		if (!isset($id)) redirect('admin/products');

		$product = $this->Mproduct;
		$data["product"] = $product->getById($id); 
		if(!$data["product"]) show_404();

		$this->load->view("admin/product/vLihatProduct", $data);
	}

	public function edit($id)
	{
		if (isset($_POST['btn_edit_product'])) {
			$this->Mproduct->update($_POST, $id);
			redirect("admin/products");
		}

		$data["product"] = $this->Mproduct->getById($id); //mengambil data untuk ditampilkan pada form
		$this->load->view("admin/product/vEditForm", $data); //menampilkan form edit

	} 

	public function delete($id=null)
	{
		if(!isset($id))  show_404();

		if ($this->Mproduct->delete($id)) //hapus data sesuai fungsi pada Product_model dan id
		{
			redirect(site_url('admin/products')); //jika berhasil, redirect ke halaman ini
		}
	}
}