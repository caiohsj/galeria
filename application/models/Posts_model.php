<?php 

class Posts_model extends CI_Model
{
	
	function __construct()
	{
		//Carregando o banco de dados
		$this->load->database();
	}

	//Select da tabela posts
	public function get_posts($data = array())
	{
		if(empty($data))
		{
			$query = $this->db->get("tb_posts");
			return $query->result_array();
		}

		$query = $this->db->get_where("tb_posts", $data);
		return $query->row_array();
	}

	public function set_posts($data = array())
	{
		
		return $this->db->insert("tb_posts", $data);
		//$sql = "INSERT INTO tb_posts(name,url,fk_photographer) VALUES(?,?,?)";
		//$this->db->query($sql, $data);
	}
}
?>