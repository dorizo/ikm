<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	
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
		$data["title"] = "Berita";
		
		$this->load->view('frondend/berita' , $data);

    }

    public function detail($id){
		$data["title"] = $id;
		$data["idberita"] = $id;
		$this->load->view('frondend/beritadetail' , $data);
		

    }
}