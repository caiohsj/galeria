<?php
class Admin extends CI_Controller
{

        public function index()
        {
                $data["title"] = "Home";

                $this->load->view("admin/header", $data);
                $this->load->view("admin/index", $data);
                $this->load->view("admin/footer", $data);
        }
	
	public function view($page = "index")
	{
		if ( ! file_exists(APPPATH."views/admin/".$page.".php"))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data["title"] = ucfirst($page); // Capitalize the first letter

        $this->load->view("admin/header", $data);
        $this->load->view("admin/".$page, $data);
        $this->load->view("admin/footer", $data);
	}
}
?>