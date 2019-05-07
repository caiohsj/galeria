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
}
?>