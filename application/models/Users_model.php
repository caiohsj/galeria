<?php 

class Users_model extends CI_Model
{
	
	function __construct()
	{
		//Carregando o banco de dados
		$this->load->database();
	}

	//Select da tabela users
	public function get_users($data = array())
	{
		if(empty($data))
		{
			$query = $this->db->get("tb_users");
			return $query->result_array();
		}

		$query = $this->db->get_where("tb_users", $data);
		return $query->row_array();
	}

}
?>