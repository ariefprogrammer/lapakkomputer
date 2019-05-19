 <?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Mproduct extends CI_Model
{
	private $_table = "products";

	public $product_id;
	public $nama_product;
	public $brand_product;
	public $harga_product;
	public $minimal_beli;
	public $qty_product;
	public $warna_tersedia;
	public $kondisi_id;
	public $berat_product;
	public $foto_product;
	public $deskripsi_product;
	
	public function rules(){
		return[
			['field' => 'nama_product',
			'label' => 'nama_product',
			'rules' => 'required'],

			['field' => 'harga_product',
			'label' => 'harga_product',
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
		$this->brand_product = $post["brand_product"];
		$this->minimal_beli = $post["minimal_beli"];
		$this->qty_product = $post["qty_product"];
		$this->warna_tersedia = $post["warna_tersedia"];
		$this->kondisi_id = $post["kondisi_id"];
		$this->berat_product = $post["berat_product"];
		$this->foto_product = $this->_uploadImage();
		$this->deskripsi_product = $post["deskripsi_product"];
		$this->db->insert($this->_table, $this); //simpan ke database. $this yang terakhir adalah mengacu pada data yang akan disimpan ini
	}

	public function update()
	{
		$post = $this->input->post();
		$this->product_id = $post["id"];
		$this->nama_product = $post["nama_product"];
		$this->brand_product = $post["brand_product"];
		$this->harga_product = $post["harga_product"];
		$this->minimal_beli = $post["minimal_beli"];
		$this->qty_product = $post["qty_product"];
		$this->warna_tersedia = $post["warna_tersedia"];
		$this->kondisi_id = $post["kondisi_id"];
		$this->berat_product = $post["berat_product"];

		if (!empty($_FILES["image"]["name"])) {
			$this->foto_product = $this->_uploadImage();
		}else{
			$this->image = $post["old_image"];
		}

		$this->deskripsi_product = $post["deskripsi_product"];
		$this->db->update($this->_table, $this, array('product_id' => $post['id']));
	}

	public function delete($id)
	{
		$this->_deleteImage($id);
		return $this->db->delete("products", array("product_id" => $id));
	}

	private function _uploadImage()
	{
		$config['upload_path'] = './upload/product/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name'] = $this->product_id;
		$config['overwrite'] = true;
		$config['max_size'] = 1024; //1 MB

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {
			return $this->upload->data("file_name");
		}

		return "default.png";
	}

	private function _deleteImage($id)
	{
		$product = $this->getById($id);
		
		if ($product->foto_product != "default.png") {
				$file_name = explode(".", $product->foto_product[0]);
				return array_map('unlink', glob(FCPATH."upload/product/$file_name.*"));
			
				// Di sana kita mengambil nama file dengan fungsi exlode(). 
				// Lalu kita cari file berdasarkan nama tersbut dengan fungsi glob() 
				// Setelah file-file ditemukan, lalu kita gunakan fungsi array_map() 
				// untuk mengeksekusi fungsi unlink() pada tiap file yang ditemukan. 
				// Tanda bitang (*) setelah $filename artinya semua ektensi dipilih.

			}	
	}

}
 

