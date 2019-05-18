<?php
class Pages extends CI_Controller
{
        function __construct()
        {
                parent::__construct();
                $this->load->model("projects_model");
        }
	
	public function view($page = "home")
	{
	       if ( ! file_exists(APPPATH."views/".$page.".php"))
                {
                        // Whoops, we don't have a page for that!
                        show_404();
                }

                $data["page_active"] = $page;
                $data["projects"] = $this->projects_model->get_projects();
                $data["quantity_projects"] = $this->projects_model->count_projects();

                $this->load->view("header", $data);
                $this->load->view($page, $data);
                $this->load->view("footer", $data);
        }
}
?>