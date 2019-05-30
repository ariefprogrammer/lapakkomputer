<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Products extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mproduct");
		$this->load->library('form_validation');
	}

	public function index()
	{
		 $data["products"] = $this->Mproduct->getAll();
		 $this->load->view("admin/product/vList", $data);
	}

	public function add()
	{
		$product = $this->Mproduct;
		$validation = $this->form_validation;
		$validation->set_rules($product->rules());

		if ($validation->run()) { 
			$product->save();
			$this->session->set_flashdata('success','Berhasil disimpan');
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

	public function edit($id=null)
	{
		if (!isset($id)) redirect('admin/products');

		$product = $this->Mproduct;
		$validation = $this->form_validation;
		$validation->set_rules($product->rules());

		if ($validation->run()) { //melakukan validasi
			$product->update(); //jika berhasil, lakukan update
			$this->session->set_flashdata('success', 'Berhasil mengedit data');
			redirect(site_url('admin/products'));
		}

		$data["product"] = $product->getById($id); //mengambil data untuk ditampilkan pada form
		if(!$data["product"]) show_404(); // jika tidak ada data, tampilkan error 404

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