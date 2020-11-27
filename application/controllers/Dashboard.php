
<?php
class Dashboard extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->library('session');
        $this->load->model('m_profil'); 
        $this->load->model('m_banner'); 
    }
    // function index(){
    //     $this->load->view('depan/v_home');
    // }

    function halamanAdmin(){
        $id = 1;
        $dt['profil']= $this->m_profil->db_edit($id)->row_array();
        $dt['banner']=$this->m_banner->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_halamanAdmin', $dt);
    }
    function halamanGuru(){
        $id = 1;
        $dt['profil']= $this->m_profil->db_edit($id)->row_array();
        $dt['banner']=$this->m_banner->db_edit($id)->row_array();
        $this->load->view('admin/guru/v_halamanGuru', $dt);
    }
    function halamanOsis(){
        $id = 1;
        $dt['profil']= $this->m_profil->db_edit($id)->row_array();
        $dt['banner']=$this->m_banner->db_edit($id)->row_array();
        $this->load->view('admin/guru/v_halamanOsis', $dt);
    }
 }
 ?>
     