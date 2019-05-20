<?php defined('BASEPATH') OR exit('No direct script access alowed');

/**
* 
*/
class Mtest extends CI_Model
{
	public $coba_id="19";

	public function save()
	{
		$post=$this->input->post();
		$this->coba_id = $post["coba_id"];
		$this->db->insert("coba", $this);
	}
}
