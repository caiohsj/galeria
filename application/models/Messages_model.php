<?php 

class Messages_model extends CI_Model
{
	
	function __construct()
	{
		//Carregando o banco de dados
		$this->load->database();
	}

	//Select da tabela messages
	public function get_messages($data = array())
	{
		if(empty($data))
		{
			$query = $this->db->get("tb_messages");
			return $query->result_array();
		}

		$query = $this->db->get_where("tb_messages", $data);
		return $query->row_array();
	}

	public function set_messages($data = array())
	{
		
		return $this->db->insert("tb_messages", $data);
		
	}

	public function delete_messages($data = array())
	{
		return $this->db->delete("tb_messages", $data);
	}

	public function count_all_messages()
	{
		return $this->db->count_all("tb_messages");
	}
}
?>