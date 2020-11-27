<?php
class Bukutamu extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_bukutamu');	
        $this->load->helper('url');	
		$this->load->library('form_validation');
		$this->load->model('m_profil');
    }
 function index(){
 	$id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
    	$data['bukutamu']= $this->m_bukutamu->tampil()->result();
        $this->load->view('admin/admin/v_daftar_bukutamu', $data);
    }
}