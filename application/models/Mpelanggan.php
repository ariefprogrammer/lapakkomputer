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
 
	public function save($post)
	{
		$nama_store = $this->db->escape($post["nama_store"]);
		$alamat_store = $this->db->escape($post["alamat_store"]);
		$email_store = $this->db->escape($post["email_store"]);
		$telepon_store = $this->db->escape($post["telepon_store"]);
		$sql = $this->db->query("INSERT INTO pelanggan VALUES (NULL, $nama_store, $alamat_store, $email_store, $telepon_store)");
		if ($sql) {
			return true;
		}else{
			return false;
		}

		// $post = $this->input->post(); //ambil data yang diinput dari form
		// $this->nama_store = $post["nama_store"]; //isi field name
		// $this->alamat_store = $post["alamat_store"];
		// $this->email_store = $post["email_store"];
		// $this->telepon_store = $post["telepon_store"];
		// $this->db->insert("pelanggan", $this); 

	}

	public function update($post, $id)
	{
		$nama_store = $this->db->escape($post["nama_store"]);
		$alamat_store = $this->db->escape($post["alamat_store"]);
		$email_store = $this->db->escape($post["email_store"]);
		$telepon_store = $this->db->escape($post["telepon_store"]);
		$sql = $this->db->query("UPDATE pelanggan SET nama_store = $nama_store, alamat_store = $alamat_store, email_store = $email_store, telepon_store = $telepon_store WHERE pelanggan_id = " .intval($id));

		return true;

		// $post = $this->input->post();
		// $this->pelanggan_id = $post["id"];
		// $this->nama_store = $post["nama_store"]; //isi field name
		// $this->alamat_store = $post["alamat_store"];
		// $this->email_store = $post["email_store"];
		// $this->telepon_store = $post["telepon_store"];
		// $this->db->update("pelanggan", $this, array('pelanggan_id' => $post['id']));
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
