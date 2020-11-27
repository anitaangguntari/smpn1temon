
<?php
class Ekstra extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_ekstra');	
        $this->load->model('m_berita');
        $this->load->model('m_tautan');
        $this->load->model('m_profil'); 
        $this->load->model('m_guru'); 
        $this->load->model('m_pengumuman'); 
        $this->load->model('m_fasilitas');
        $this->load->model('m_jadwal');
        $this->load->model('m_sosmed'); 
    }

     function index(){
        $data['guru']= $this->m_guru->tampilKS()->result();
        $data['ekstra']= $this->m_ekstra->tampil()->result();
    	$data['jadwal']= $this->m_jadwal->tampil()->result();
        $data['profil']= $this->m_profil->tampil()->result();
        $data['tautan']= $this->m_tautan->tampil()->result();
    	$data['berita']= $this->m_berita->tampil6()->result();
        $data['pengumuman']= $this->m_pengumuman->tampil();
        $data['fasilitas'] = $this->m_fasilitas->getFasilitas()->result();
        $data['sosmed']= $this->m_sosmed->tampil()->result();
        $data['berita1']= $this->m_berita->tampil3_terakhir()->result();
        $this->load->view('depan/v_ekstra', $data);
        // echo $this->db->last_query();
    }
  
 }
 ?>
     