<?php
class Admin extends CI_Controller
{
        function __construct()
        {
                parent::__construct();
                $this->load->model("users_model");
                $this->load->model("photographers_model");
                $this->load->model("photos_model");
                $this->load->model("projects_model");
                $this->load->model("posts_model");
                $this->load->model("messages_model");
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

                $data["messages"] = $this->list_messages();

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

                $data["messages"] = $this->list_messages();


                if($page == "projects")
                {
                        $data["projects"] = $this->list_projects();
                }
                if($page == "posts")
                {
                        $data["posts"] = $this->list_posts();
                }
                if($page == "photos")
                {
                        $data["photos"] = $this->list_photos();
                }
                if($page == "messages")
                {
                        $data["messages"] = $this->list_messages();
                }

                $this->load->view("admin/header", $data);
                $this->load->view("admin/".$page);
                $this->load->view("admin/footer");
	}

        public function view_edit_post($id)
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

                $values = ["id" => $id];

                $data["post_item"] = $this->posts_model->get_posts($values);

                $this->load->view("admin/edit-post", $data);
        }

        public function update($option,$id)
        {
                if($option == "post")
                {
                        $this->update_post($id);
                }
        }

        public function update_post($id)
        {
                $where = ["id" => $id];

                $values = [
                        "title" => $this->input->post("title"),
                        "description" => $this->input->post("description")
                ];

                if($this->posts_model->update_posts($values,$where))
                {
                        header("location: ../../posts");
                        exit;
                }
        }

        public function delete($option,$id)
        {
                if($option ==  "project")
                {
                        $this->delete_project($id);
                }
                elseif($option == "post")
                {
                        $this->delete_post($id);
                }
                elseif($option == "photo")
                {
                        $this->delete_photo($id);
                }
                elseif($option == "message")
                {
                        $this->delete_message($id);
                }
        }

        public function delete_project($id)
        {
                $values = ["id" => $id];
                
                $project = $this->projects_model->get_projects($values);

                $image = $project["image"];

                if($this->projects_model->delete_projects($values))
                {
                        $this->delete_file($image);
                        header("location: ../../projects");
                        exit;
                }
        }

        public function delete_post($id)
        {
                $values = ["id" => $id];
                
                $post = $this->posts_model->get_posts($values);

                $image = $post["image"];

                if($this->posts_model->delete_posts($values))
                {
                        $this->delete_file($image);
                        header("location: ../../posts");
                        exit;
                }
        }

        public function delete_photo($id)
        {
                $values = ["id" => $id];
                
                $post = $this->photos_model->get_photos($values);

                $image = $post["image"];

                if($this->photos_model->delete_photos($values))
                {
                        $this->delete_file($image);
                        header("location: ../../photos");
                        exit;
                }
        }

        public function delete_message($id)
        {
                $values = ["id" => $id];
                
                $message = $this->messages_model->get_messages($values);

                if($this->messages_model->delete_messages($values))
                {
                        header("location: ../../messages");
                        exit;
                }
        }

        public function delete_file($filename)
        {
                unlink($filename);
        }

        public function list_projects()
        {
                return $this->projects_model->get_projects();
        }

        public function list_posts()
        {
                return $this->posts_model->get_posts();
        }

        public function list_photos()
        {
                return $this->photos_model->get_photos();
        }

        public function list_messages()
        {
                return $this->messages_model->get_messages();
        }

        public function create($option)
        {
                session_start();
                
                //$this->users_model->verify_login();

                $this->load->helper('form');
                $this->load->library('form_validation');

                if($option == "photo")
                {
                        $this->create_photo();
                }
                elseif($option == "project")
                {
                        $this->create_project();
                }
                elseif($option == "post")
                {
                        $this->create_post();
                }
        }

        public function create_photo()
        {
                $this->form_validation->set_rules('name', 'Nome', 'required');

                if ($this->form_validation->run() === FALSE)
                {
                        //$this->load->view("admin/index");
                        header("location: /");
                        exit;
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
                                exit;   
                        }
                                
                }
        }

        public function create_project()
        {
                $this->form_validation->set_rules('title', 'Titulo', 'required');
                $this->form_validation->set_rules('description', 'Descrição', 'required');
                
                if ($this->form_validation->run() === FALSE)
                {
                        //$this->load->view("admin/index");
                        header("location: ../projects");
                        exit;
                }
                else
                {
                        $this->load->helper("url");
                        $title = $this->input->post("title");
                        $description = $this->input->post("description");
                        $photo = $_FILES["photo"];

                                
                        $name_file = $this->upload_photo("application/views/res/site/img/",$photo);


                        //Pegando valores dos inputs do formulario
                        $values = [
                                "title" => $title,
                                "description" => $description,
                                "image" => $name_file
                        ];

                        if($this->projects_model->set_projects($values))
                        {
                                //$data["alertSuccess"] = "Foto adicionada com sucesso";
                                //$this->load->view("admin/photo", $data);
                                header("location: ../projects");
                                exit;
                        }
                                
                }
        }

        public function create_post()
        {

                $this->form_validation->set_rules('title', 'Titulo', 'required');
                $this->form_validation->set_rules('description', 'Descrição', 'required');
                
                if ($this->form_validation->run() === FALSE)
                {
                        //$this->load->view("admin/index");
                        header("location: ../posts");
                        exit;
                }
                else
                {
                        $this->load->helper("url");
                        $title = $this->input->post("title");
                        $description = $this->input->post("description");
                        $photo = $_FILES["photo"];

                                
                        $name_file = $this->upload_photo("application/views/res/site/img/blog/",$photo);

                        date_default_timezone_set('America/Sao_Paulo');
                        $dt_post = date("Y-m-d H:i:s");


                        //Pegando valores dos inputs do formulario
                        $values = [
                                "title" => $title,
                                "description" => $description,
                                "dt_post" => $dt_post,
                                "image" => $name_file,
                                "fk_photographer" => $_SESSION["id_photographer"]
                        ];

                        if($this->posts_model->set_posts($values))
                        {
                                //$data["alertSuccess"] = "Foto adicionada com sucesso";
                                //$this->load->view("admin/photo", $data);
                                header("location: ../posts");
                                exit;
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
                                header("location: ../admin/");
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