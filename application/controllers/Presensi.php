
<?php
class Presensi extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_presensi');	
        $this->load->model('m_berita');
        $this->load->model('m_tautan');
        $this->load->model('m_profil'); 
        $this->load->model('m_guru'); 
        $this->load->model('m_pengumuman'); 
        $this->load->model('m_fasilitas');
    }

     function index(){
        $data['guru']= $this->m_guru->tampilKS()->result();
    	$data['presensi']= $this->m_presensi->tampil()->result();
        $data['profil']= $this->m_profil->tampil()->result();
        $data['tautan']= $this->m_tautan->tampil()->result();
    	$data['berita']= $this->m_berita->tampil6()->result();
        $data['pengumuman']= $this->m_pengumuman->tampil();
        $data['fasilitas'] = $this->m_fasilitas->getFasilitas()->result();
        $this->load->view('depan/v_presensi', $data);
        // echo $this->db->last_query();
    }
  
 }
 ?>
     