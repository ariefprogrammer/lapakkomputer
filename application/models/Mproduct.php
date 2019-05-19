 <?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Mproduct extends CI_Model
{
	private $_table = "products";

	public $product_id;
	public $nama_product;
	public $harga_product;
	public $minimal_beli;
	public $qty_product;
	public $warna_tersedia;
	public $kondisi_id;
	public $berat_product;
	public $foto_product = "default.png";
	public $deskripsi_product;
	
	public function rules(){
		return[
			['field' => 'nama_product',
			'label' => 'nama_product',
			'rules' => 'required'],

			['field' => 'harga_product',
			'label' => 'harga_product',
			'rules' => 'required'],

			['field' => 'minimal_beli',
			'label' => 'minimal_beli',
			'rules' => 'required'],

			['field' => 'qty_product',
			'label' => 'qty_product',
			'rules' => 'required'],

			['field' => 'warna_tersedia',
			'label' => 'warna_tersedia',
			'rules' => 'required'],

			['field' => 'kondisi_id',
			'label' => 'kondisi_id',
			'rules' => 'required'],

			['field' => 'berat_product',
			'label' => 'berat_product',
			'rules' => 'required'],

			['field'=>'deskripsi_product',
			'label' => 'deskripsi_product',
			'rules' => 'required']
		];
	}
 
	public function getAll()
	{
		$this->db->select('products.*, kondisi_products.nama_kondisi');
		$this->db->from('products');
		$this->db->join('kondisi_products', 'kondisi_products.kondisi_id = products.kondisi_id','LEFT');
		$query = $this->db->get();
		return $query->result();

		//return $this->db->get($this->_table)->result();
		// fungsi ini sama seperti SELECT * FROM products. ingat, _table adalah products
		// result() berarti == ambil semua data dari hasil query
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["product_id" => $id])->row();
		// fungsi ini sama seperti SELECT * FROM products WHERE id_product=$id
		// funsi row() akan mengambil satu baris data dari hasil query
	} 

	public function save()
	{
		$post = $this->input->post(); //ambil data yang diinput dari form
		//$this->product_id = uniqid(); //products_id buat menjadi unik
		$this->nama_product = $post["nama_product"]; //isi field name
		$this->harga_product = $post["harga_product"];
		$this->minimal_beli = $post["minimal_beli"];
		$this->qty_product = $post["qty_product"];
		$this->warna_tersedia = $post["warna_tersedia"];
		$this->kondisi_id = $post["kondisi_id"];
		$this->berat_product = $post["berat_product"];
		$this->deskripsi_product = $post["deskripsi_product"];
		$this->db->insert($this->_table, $this); //simpan ke database. $this yang terakhir adalah mengacu pada data yang akan disimpan ini
	}

	public function update()
	{
		$post = $this->input->post();
		$this->product_id = $post["id"];
		$this->nama_product = $post["nama_product"];
		$this->harga_product = $post["harga_product"];
		$this->minimal_beli = $post["minimal_beli"];
		$this->qty_product = $post["qty_product"];
		$this->warna_tersedia = $post["warna_tersedia"];
		$this->kondisi_id = $post["kondisi_id"];
		$this->berat_product = $post["berat_product"];
		$this->deskripsi_product = $post["deskripsi_product"];
		$this->db->update($this->_table, $this, array('product_id' => $post['id']));
	}

	public function delete($id)
	{
		return $this->db->delete("products", array("product_id" => $id));
	}

}
 

