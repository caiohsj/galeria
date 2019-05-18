<?php 
class Photos extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("photos_model");
		$this->load->helper("url_helper");
	}

	public function index()
	{
		$data["photos"] = $this->photos_model->get_photos();

		$data["page_active"] = "photos";

		$this->load_page_photos($data);
	}

	public function view($values = array(), $msg)
	{
		$data["photos_item"] = $this->photos_model->get_photos($values);

		if(empty($data["photos_item"]))
		{
			show_404();
		}

		$this->load_page_photos($data);

	} 

	public function load_page_photos($data = array())
	{
		$this->load->view("header", $data);
        $this->load->view("photos", $data);
        $this->load->view("footer", $data);
	}

	public function create()
	{
		session_start();
		
        //$this->users_model->verify_login();

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Nome', 'required');
        //$this->form_validation->set_rules('photo', 'Photo', 'required');

        if ($this->form_validation->run() === FALSE)
        {
           //$this->load->view("admin/index");
           header("location: ../admin/index");
        }
        else
        {
        	$this->load->helper("url");
        	$name = $this->input->post("name");
        	$fk_photographer = $_SESSION["id_photographer"];
        	$photo = $_FILES["photo"];

        	
        	$name_file = $this->upload_photo("application/views/res/site/img/gallery/",$photo);


	        //Pegando valores dos inputs do formulario
	        $values = [
	            "name" => $name,
	            "url" => $name_file,
	            "fk_photographer" => $fk_photographer
	        ];

	        if($this->photos_model->set_photos($values))
	        {
	        	$data["alertSuccess"] = "Foto adicionada com sucesso";
	        	$this->load->view("admin/photo", $data);
	        }
	        
        }
	}

	//Recebe a url onde será salvo o arquivo e o name do input file que está enviando o arquivo e retorna o caminho completo do arquivo(foto)
	public function upload_photo($url, $input_file)
	{
		//upload do arquivo com data e hora no nome do arquivo
		date_default_timezone_set('America/Sao_Paulo'); // definir fuso horario
		$dateAndTime = date('dmYHi'); // pegar data e hora do servidor
		$name_file = $url . $dateAndTime . $input_file["name"]; // definir pasta e nome do arquivo no servidor
		$name_file_tmp = $input_file["tmp_name"]; // pegar nome do arquivo temporario no servidor
		$msgErroArquivo = ""; // definir msg de erro vazia
		if(move_uploaded_file($name_file_tmp, $name_file)==false)
		{ // se ocorrer erro...
		    $msgErroArquivo = "Arquivo não pode ser enviado."; // define msg de erro
		}
		else
		{
			return $name_file;
		}

		//fim upload do arquivo
	}
}
?>