<?php
class Admin extends CI_Controller
{
        function __construct()
        {
                parent::__construct();
                $this->load->model("users_model");
                $this->load->model("photographers_model");
                $this->load->model("photos_model");
                $this->load->model("posts_model");
                $this->load->helper("url_helper");
        }

        public function index()
        {
                session_start();

                if($this->verify_login() === false)
                {
                        header("location: login");
                }
                
                //Pegando id usuário da sessão
                $values = [
                        "fk_user" => $_SESSION["id_user"]
                ];

                //Faz o select o procurando o usuario acima($values)
                $photographer = $this->photographers_model->get_photographers($values);

                $_SESSION["id_photographer"] = $photographer["id"];

                //Array com dados do fotógrafo que foi buscado no banco; 
                $data["photographer"] = $photographer;

                $this->load->view("admin/header", $data);
                $this->load->view("admin/index", $data);
                $this->load->view("admin/footer", $data);
        }
	
	public function view($page = "index")
	{
                session_start();

                if($this->verify_login() === false)
                {
                        header("location: login");
                }


		if ( ! file_exists(APPPATH."views/admin/".$page.".php"))
                {
                        // Whoops, we don't have a page for that!
                        show_404();
                }

                //Pegando id usuário da sessão
                $values = [
                        "fk_user" => $_SESSION["id_user"]
                ];

                //Faz o select o procurando o usuario acima($values)
                $photographer = $this->photographers_model->get_photographers($values);

                $_SESSION["id_photographer"] = $photographer["id"];

                //Array com dados do fotógrafo que foi buscado no banco; 
                $data["photographer"] = $photographer;

                //$data["title"] = ucfirst($page); // Capitalize the first letter

                $this->load->view("admin/header", $data);
                $this->load->view("admin/".$page);
                $this->load->view("admin/footer");
	}

        public function create($option)
        {
                session_start();
                
                //$this->users_model->verify_login();

                $this->load->helper('form');
                $this->load->library('form_validation');


                $this->create_photo($option);
        }

        public function create_photo($option)
        {
                if($option == "photo")
                {
                        $this->form_validation->set_rules('name', 'Nome', 'required');

                        if ($this->form_validation->run() === FALSE)
                        {
                           //$this->load->view("admin/index");
                           header("location: /");
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
                                        //$data["alertSuccess"] = "Foto adicionada com sucesso";
                                        //$this->load->view("admin/photo", $data);
                                        header("location: photo");
                                }
                                
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

        public function login()
        {
                session_start();
                //$this->users_model->verify_login();

                $this->load->helper('form');
                $this->load->library('form_validation');

                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');

                if ($this->form_validation->run() === FALSE)
                {
                       $this->load->view("admin/login");

                }
                else
                {
                        //Pegando valores dos inputs do formulario de login
                        $values = [
                                "login" => $this->input->post("email"),
                                "password" => $this->input->post("password")
                        ];

                        //Faz o select o procurando o usuario acima($values)
                        $user = $this->users_model->get_users($values);

                        //Se o usuario foi encontrado
                        if(empty($user) === false)
                        {
                                $_SESSION["id_user"] = $user["id"];
                                $_SESSION["login"] = $user["login"];
                                $_SESSION["isphotographer"] = $user["isphotographer"];

                                //Carregando a dashboard
                                header("location: index");
                        }

                        //$this->load->view("admin/login");

                }
                
        }

        public function verify_login()
        {

                if(isset($_SESSION["id_user"]) && isset($_SESSION["login"]) && isset($_SESSION["isphotographer"]))
                {
                        if($_SESSION["id_user"] != "" && $_SESSION["login"] != "" && $_SESSION["isphotographer"] != "")
                        {
                                return true;
                        }
                        else
                        {
                                return false;
                        }
                }
                else
                {
                        return false;
                }
        }

        //Função para deslogar, retira da sessão
        public function logout()
        {
                session_start();
                unset($_SESSION["id_user"],$_SESSION["login"],$_SESSION["isphotographer"],$_SESSION["id_photographer"]);
                header("location: login");
        }
}
?>