<?php defined('BASEPATH') OR exit ('No direct script access alowed');
/**
* 
*/
class Cobas extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Mtest");
		$this->load->library("form_validation");
	}

	public function index()
	{
		$this->load->view("admin/test/vTest");
	}

	public function add()
	{
		$coba = $this->Mtest;
		$validation = $this->form_validation;

		if ($validation->run()) {
			$coba->save();
			$this->session->set_flashdata('succes', 'Berhasil disimpan');
		}

		$this->load->view("admin/test/vTest");
	}
}