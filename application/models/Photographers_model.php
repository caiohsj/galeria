<?php 

class Photographers_model extends CI_Model
{
	
	function __construct()
	{
		//Carregando o banco de dados
		$this->load->database();
	}

	//Select da tabela photographers
	public function get_photographers($data = array())
	{
		if(empty($data))
		{
			$query = $this->db->get("tb_photographers");
			return $query->result_array();
		}

		$query = $this->db->get_where("tb_photographers", $data);
		return $query->row_array();
	}
}
?>