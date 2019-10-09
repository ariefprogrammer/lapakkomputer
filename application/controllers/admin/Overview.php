<?php

/**
* 
*/
class Overview extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Moverview");
		$this->load->model("Users_model");

	}

	public function index()
	{
		if ($this->session->userdata('isloggedin')) {
			# code...
			$data['udata']=$this->Users_model->fetch_data(array('id'=>$this->session->userdata('loguserid')));
			$data["test"] = $this->session->userdata('loguserid');
			$data["datas"] = json_encode($this->Moverview->data_chart());
			$data["jumlahproduk"] = $this->Moverview->getJumlahProduk();
			$data["jumlahpelanggan"] = $this->Moverview->getJumlahPelanggan();
			$data["jumlahpembelian"] = $this->Moverview->getJumlahPembelian();
			$this->load->view('admin/overview', $data);
		}
		else{
			redirect('admin/users/login');
		}
	}

	
}

?>