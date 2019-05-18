<?php
class Blog extends CI_Controller
{
        function __construct()
        {
                parent::__construct();
                $this->load->model("posts_model");
                $this->load->model("configs_model");
                $this->load->model("photographers_model");
        }
	
	public function index()
	{

                $data["page_active"] = "blog";
                $configs = $this->configs_model->get_configs();

                $data["posts"] = $this->posts_model->get_posts();

                $data["configs"] = $configs[0];

                $data["photographers"] = $this->photographers_model->get_photographers();

                $this->load->view("header", $data);
                $this->load->view("blog", $data);
                $this->load->view("footer", $data);
        }

}
?>