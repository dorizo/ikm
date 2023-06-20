<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iuran extends CI_Controller {

	
	public function __construct()
	{
			parent::__construct();
			$this->load->model('project_model');
			$this->load->model('Report_model');
			$this->load->model('job_model');
			$this->load->model('witel_model');
			$this->load->model('Projectcat_model');
			if(!$this->session->userdata("usermember")){
				redirect('/loginfrondend', 'refresh');
			}
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>'); 
			// print_r($user_logged_in);
			
	}

    public function index(){
		$this->form_validation->set_rules('jumlah', 'jumlah', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
    
        if ($this->form_validation->run() === FALSE)
        {
		// $this->load->view('login' , $data);

       
		$data["title"] = "IURAN";
		
		$this->load->view('frondend/iuran' , $data);
		}else{
			$config['upload_path']          = './pembayaran/';
			$config['allowed_types']        = '*';
			$config['max_size']             = 1000;
			$config['max_width']            = 10240;
			$config['max_height']           = 7680;
			$config['encrypt_name']           = TRUE;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto'))
			{
				$data["title"] =  $this->upload->display_errors();
				
				$this->load->view('frondend/notive/error' , $data);
			}else{
				$datapost = $this->input->post();
				$datapost["foto"] = $this->upload->data("file_name");
				$datapost["memberCode"] = $this->session->userdata("usermember");
				$this->db->insert("iuran" , $datapost);
				$data["data"] = $this->input->post();
				
				$this->load->view('frondend/notive/msuccess' , $data);

			}
		}

    }

    public function login(){
		echo "sss";

    }
}