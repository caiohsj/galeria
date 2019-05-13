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

		$this->load->view("header", $data);
        $this->load->view("photos", $data);
        $this->load->view("footer", $data);
	}

	public function view($data = array())
	{
		$data["photos_item"] = $this->photos_model->get_photos($data);

		if(empty($data["photos_item"]))
		{
			show_404();
		}

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
        $this->form_validation->set_rules('photo', 'Photo', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view("admin/index");
        }
        else
        {
        	$name = $this->input->post("email");
        	$fk_photographer = $_SESSION["id_photographer"];

        	//upload do arquivo com data e hora no nome do arquivo
		    date_default_timezone_set('America/Sao_Paulo'); // definir fuso horario
		    $dateAndTime = date('dmYHi'); // pegar data e hora do servidor
		    $name_file = "application/views/res/site/img/gallery/" . $dataEHora . $_FILES["photo"]["name"]; // definir pasta e nome do arquivo no servidor
		    $name_file_tmp = $_FILES["photo"]["tmp_name"]; // pegar nome do arquivo temporario no servidor
		    $msgErroArquivo = ""; // definir msg de erro vazia
		    if(move_uploaded_file($name_file_tmp, $name_file)==false){ // se ocorrer erro...
		        $msgErroArquivo = "Arquivo não pode ser enviado."; // define msg de erro
		    }
		    //fim upload do arquivo



	        //Pegando valores dos inputs do formulario de login
	        $values = [
	            "name" => $name,
	            "url" => $name_file,
	            "fk_photographer" => $fk_photographer
	        ];
	        
        }
	}
}
?>