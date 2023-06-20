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
			// print_r($user_logged_in);
			
	}

    public function index(){
		$data["title"] = "IURAN";
		
		$this->load->view('frondend/iuran' , $data);

    }

    public function login(){
		echo "sss";

    }
}