<?php 

class Photos_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	//Select da tabela fotos
	public function get_photos($data = array())
	{
		if(empty($data))
		{
			$query = $this->db->get("tb_photos");
			return $query->result_array();
		}

		$query = $this->db->get_where("tb_photos", $data);
		return $query->row_array();
	}
}
?>