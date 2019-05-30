<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Mpelanggan extends CI_Model
{

	public $pelanggan_id;
	public $nama_store;
	public $alamat_store;
	public $email_store;
	public $telepon_store;
	
	public function rules()
	{
		return[ 
				['field'=> 'nama_store',
				'label' => 'nama_store',
				'rules' => 'required'],

				['field' => 'alamat_store',
				'label' => 'alamat_store',
				'rules' => 'required'],

				['field' => 'email_store',
				'label' => 'email_store',
				'rules' => 'required'],

				['field' => 'telepon_store',
				'label' => 'telepon_store',
				'rules' => 'required']

		];
	}
 
	public function save()
	{
		$post = $this->input->post(); //ambil data yang diinput dari form
		//$this->pelanggan_id = uniqid(); //products_id buat menjadi unik
		$this->nama_store = $post["nama_store"]; //isi field name
		$this->alamat_store = $post["alamat_store"];
		$this->email_store = $post["email_store"];
		$this->telepon_store = $post["telepon_store"];
		$this->db->insert("pelanggan", $this); //simpan ke database. $this yang terakhir adalah mengacu pada data yang akan disimpan ini

	}

	public function update($id=null)
	{
		$post = $this->input->post();
		$this->pelanggan_id = $post["id"];
		$this->nama_store = $post["nama_store"]; //isi field name
		$this->alamat_store = $post["alamat_store"];
		$this->email_store = $post["email_store"];
		$this->telepon_store = $post["telepon_store"];
		$this->db->update("pelanggan", $this, array('pelanggan_id' => $post['id']));
	}
	public function getAll()
	{
		return $this->db->get("pelanggan")->result();
	}

	public function getById($id)
	{
		return $this->db->get_where("pelanggan", ["pelanggan_id"  => $id])->row();
	}

	public function delete($id)
	
	{
		return $this->db->delete("pelanggan", array("pelanggan_id" => $id));
	}
}
