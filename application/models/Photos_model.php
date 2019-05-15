<?php 

class Photos_model extends CI_Model
{
	
	function __construct()
	{
		//Carregando o banco de dados
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

	public function set_photos($data = array())
	{
		
		return $this->db->insert('tb_photos', $data);
		//$sql = "INSERT INTO tb_photos(name,url,fk_photographer) VALUES(?,?,?)";
		//$this->db->query($sql, $data);
	}
}
?>