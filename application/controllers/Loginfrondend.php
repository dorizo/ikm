<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginfrondend extends CI_Controller {

	
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

        $this->form_validation->set_rules('phone', 'phone', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
    
        if ($this->form_validation->run() === FALSE)
        {
		$this->load->view('frondend/login' , $data);
        }else{
            // $this->load->view('frondend/login' , $data);
            $quers = "select * from member where no_telp='".$this->input->post('phone')."' AND password=SHA1('".$this->input->post("password")."')";
            $createsession = $this->db->query($quers)->row();
        // print_r($createsession);
        if($createsession){
            // echo "data";
        //    $a =  json_encode($this->user_model->login());
        //     print_r($a);
            $a = array(
                'usermember'  => $createsession->memberCode,
                'mamberkta'  => $createsession->desa_tinggal.".".$createsession->memberCode,
                'telp'  => $createsession->no_telp,
                'nama_lengkap'  => $createsession->nama_lengkap,
                'jenis_kelamin'  => $createsession->jenis_kelamin,
                // 'email'     => 'johndoe@some-site.com',
                // 'logged_in' => TRUE
            );
            $this->session->set_userdata($a);
            
            
            redirect('/', 'refresh');
        }else{
            $data["title"] = "LOGIN GAGAL MOHON CEK PASSWORD DAN USERNAME ANDA";
            $this->load->view("frondend/notive/error" , $data);
        }

        }
	}
    public function logout(){
        $this->session->sess_destroy();
            
            
        redirect('/', 'refresh');
    }
}
?>