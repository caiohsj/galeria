<?php
class Pages extends CI_Controller
{
        function __construct()
        {
                parent::__construct();
                $this->load->model("projects_model");
                $this->load->model("photos_model");
                $this->load->model("configs_model");
                $this->load->model("messages_model");
        }
	
	public function view($page = "home")
	{
	       if ( ! file_exists(APPPATH."views/".$page.".php"))
                {
                        // Whoops, we don't have a page for that!
                        show_404();
                }

                $data["projects"] = $this->projects_model->get_projects();
                $data["quantity_projects"] = $this->projects_model->count_projects();
                
                $configs = $this->configs_model->get_configs();

                $configs[0]["phone"] = $this->mask_phone($configs[0]["phone"]);

                $data["configs"] = $configs[0];

                $data["page_active"] = $page;

                if($page == "gallery")
                {
                        $data["photos"] = $this->photos_model->get_photos();
                }

                $this->load->view("header", $data);
                $this->load->view($page, $data);
                $this->load->view("footer", $data);
        }

        public function send_message()
        {
                $this->load->library('form_validation');

                $this->form_validation->set_rules('name', 'Nome', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('subject', 'Assunto', 'required');
                $this->form_validation->set_rules('message', 'Mensagem', 'required');

                if ($this->form_validation->run() === FALSE)
                {
                        echo "Preencha";
                }
                else
                {
                        $name = $this->input->post("name");
                        $email = $this->input->post("email");
                        $subject = $this->input->post("subject");
                        $message = $this->input->post("message");

                        $dt_message = date("Y-m-d H:i:s");

                        $values = [
                                "name" => $name,
                                "email" => $email,
                                "subject" => $subject,
                                "message" => $message,
                                "dt_message" => $dt_message
                        ];

                        if($this->messages_model->set_messages($values))
                        {
                                header("location: contact");
                        }
                        
                }
        }

        public function mask_phone($phone)
        {
                $phone_with_mask = "(".$phone[0].$phone[1].") ";
                

                if(strlen($phone) > 10)
                {
                        $phone_with_mask = $phone_with_mask.$phone[2].$phone[3].$phone[4].$phone[5].$phone[6];
                        $phone_with_mask = $phone_with_mask."-";
                        $phone_with_mask = $phone_with_mask.$phone[7].$phone[8].$phone[9].$phone[10];
                }
                else
                {
                        $phone_with_mask = $phone_with_mask.$phone[2].$phone[3].$phone[4].$phone[5];
                        $phone_with_mask = $phone_with_mask."-";
                        $phone_with_mask = $phone_with_mask.$phone[6].$phone[7].$phone[8].$phone[9];
                }
                
                return $phone_with_mask;
        }
}
?>