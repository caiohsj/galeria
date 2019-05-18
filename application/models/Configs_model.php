<?php 

class Configs_model extends CI_Model
{
	
	function __construct()
	{
		//Carregando o banco de dados
		$this->load->database();
	}

	//Select da tabela configs
	public function get_configs($data = array())
	{
		if(empty($data))
		{
			$query = $this->db->get("tb_configs");
			return $query->result_array();
		}

		$query = $this->db->get_where("tb_configs", $data);
		return $query->row_array();
	}

	public function update_configs($data = array())
	{
		
		return $this->db->update("tb_configs", $data);
		
	}

}
?>