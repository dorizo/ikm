<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wilayah extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('vendor_model');
	}


	public function prov()
	{
       $a =  $this->db->query("SELECT * FROM (SELECT kode , nama,CHAR_LENGTH(kode) as lengthkode FROM `wilayah_2022`) A where lengthkode=2;")->result_array();
        echo json_encode($a);
    }

	public function kabupaten($prov)
	{
       $a =  $this->db->query("SELECT * FROM (SELECT kode , nama,CHAR_LENGTH(kode) as lengthkode FROM `wilayah_2022`) A where lengthkode=5 AND kode LIKE '$prov%';")->result_array();
        echo json_encode($a);
    }
    
	public function kecamatan($kode)
	{
        $a =  $this->db->query("SELECT * FROM (SELECT kode , nama,CHAR_LENGTH(kode) as lengthkode FROM `wilayah_2022`) A where lengthkode=8 AND kode LIKE '$kode%';")->result_array();
        echo json_encode($a);
        
    }
    
	public function desa($kode)
	{
        $a =  $this->db->query("SELECT * FROM (SELECT kode , nama,CHAR_LENGTH(kode) as lengthkode FROM `wilayah_2022`) A where lengthkode=13 AND kode LIKE '$kode%';")->result_array();
        echo json_encode($a);
    }
}
?>