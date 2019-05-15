<?php
class Admin extends CI_Controller
{
        function __construct()
        {
                parent::__construct();
                $this->load->model("users_model");
                $this->load->model("photographers_model");
                $this->load->helper("url_helper");
        }

        public function index()
        {
                session_start();
                
                //Pegando id usuário da sessão
                $values = [
                        "fk_user" => $_SESSION["id_user"]
                ];

                //Faz o select o procurando o usuario acima($values)
                $photographer = $this->photographers_model->get_users($values);

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
                $photographer = $this->photographers_model->get_users($values);

                $_SESSION["id_photographer"] = $photographer["id"];

                //Array com dados do fotógrafo que foi buscado no banco; 
                $data["photographer"] = $photographer;

                //$data["title"] = ucfirst($page); // Capitalize the first letter

                $this->load->view("admin/header", $data);
                $this->load->view("admin/".$page);
                $this->load->view("admin/footer");
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
                        if(!empty($user))
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

        //Função para deslogar, retira da sessão
        public function logout()
        {
                session_start();
                unset($_SESSION["id_user"],$_SESSION["login"],$_SESSION["isphotographer"],$_SESSION["id_photographer"]);
                header("location: login");
        }
}
?>