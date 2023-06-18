<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	
	public function __construct()
	{
			parent::__construct();
			$this->load->model('project_model');
			$this->load->model('Report_model');
			$this->load->model('job_model');
			$this->load->model('witel_model');
			$this->load->model('Projectcat_model');
			
			// print_r($user_logged_in);
			
	}
	public function index()
	{
		$data["titlepage"] = "Login Page";
        // $this->session->sess_destroy();
        // print_r($this->session->userdata());

        $this->form_validation->set_rules('no_telp', 'telp', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
    
        if ($this->form_validation->run() === FALSE)
        {
		$this->load->view('frondend/register' , $data);
        }else{
            // print_r($this->input->post());
            
            try {
                $data = $this->input->post();
                $data["password"] = SHA1($this->input->post("password"));
                $x = $this->db->insert("member" , $data);
                if($x){
                    $this->load->view("frondend/notive/success");

                }else{    
                    // print_r($this->db->error());?
                }
            } catch (Exception $e) {
                log_message('error ',$e->getMessage());
                return;
            }
        }
	}
    public function logout(){
        $this->session->sess_destroy();
            
            
        redirect('/', 'refresh');
    }
}
?>