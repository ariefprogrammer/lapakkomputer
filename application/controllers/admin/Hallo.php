<?php defined('BASEPATH') OR exit ('No direct script access alowed');

/**
* 
*/
class Hallo extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Mhallo");
		$this->load->library("form_validation");
	}


	function index()
	{
		$this->load->view("admin/hallo/vHallo");
	}

	function add()
	{
		$hallo = $this->Mhallo;
		$validation = $this->form_validation;
		$validation->set_rules($hallo->rules());

		if ($validation->run()) {
			$hallo->save();
			$this->session->set_flashdata('success', 'Berhasil ditambahkan');
		}

		$this->load->view("admin/hallo/vHallo");
	}
}