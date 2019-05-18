<?php 

class Projects_model extends CI_Model
{
	
	function __construct()
	{
		//Carregando o banco de dados
		$this->load->database();
	}

	//Select da tabela fotos
	public function get_projects($data = array())
	{
		if(empty($data))
		{
			$query = $this->db->get("tb_projects");
			return $query->result_array();
		}

		$query = $this->db->get_where("tb_projects", $data);
		return $query->row_array();
	}

	public function set_projects($data = array())
	{
		
		return $this->db->insert("tb_projects", $data);
		
	}

	public function count_projects()
	{
		return $this->db->count_all("tb_projects");
	}
}
?>