<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uangkas extends CI_Controller {

	
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
		$data["title"] = "IKATAN KELUARGA MANDALA";
		$data["query"] = $this->db->query("select sum(jumlah) as j from iuran where konfirmasi=1")->row();
		$data["dataresult"] = $this->db->query("select * from iuran JOIN member ON member.memberCode=iuran.memberCode where konfirmasi=1")->result_array();
		
		$this->load->view('frondend/uangkas' , $data);

    }

    public function login(){
		echo "sss";

    }
}