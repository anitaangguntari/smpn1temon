
<?php
class Profil extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_profil');	
        $this->load->model('m_berita');	
        $this->load->model('m_tautan');
        $this->load->model('m_guru'); 
        $this->load->model('m_pengumuman'); 
        $this->load->model('m_fasilitas');
        $this->load->model('m_sosmed'); 
        $this->load->model('m_jadwal'); 
    }

     function index(){
        $data['guru']= $this->m_guru->tampil1()->result();
        $data['profil']= $this->m_profil->tampil()->result();
    	$data['jadwal']= $this->m_jadwal->tampil()->result();
    	$data['berita']= $this->m_berita->tampil6()->result();
        $data['tautan']= $this->m_tautan->tampil()->result();
        $data['pengumuman']= $this->m_pengumuman->tampil();
        $data['fasilitas'] = $this->m_fasilitas->getFasilitas()->result();
        $data['sosmed']= $this->m_sosmed->tampil()->result();
        $data['berita1']= $this->m_berita->tampil3_terakhir()->result();
        $this->load->view('depan/v_profil', $data);

        // echo $this->db->last_query();
    }
      function editSambutan($id)
     {
        $data['pf']=$this->m_profil->db_edit($id)->row_array();
        $data['jadwal']= $this->m_jadwal->tampil()->result();
        $data['guru']= $this->m_guru->tampilKS()->result();
        $data['profil']= $this->m_profil->tampil()->result();
        $data['tautan']= $this->m_tautan->tampil()->result();
        $data['berita']= $this->m_berita->tampil6()->result();
        $data['pengumuman']= $this->m_pengumuman->tampil();
        $data['fasilitas'] = $this->m_fasilitas->getFasilitas()->result();
        $data['sosmed']= $this->m_sosmed->tampil()->result();
        $data['berita1']= $this->m_berita->tampil3_terakhir()->result();
        $this->load->view('depan/v_tampil_sambutan',$data);

        // echo var_dump($this->db_edit->display_errors());
      }   
 }
 ?>
     