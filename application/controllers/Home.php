
<?php
class Home extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_sejarah');	
        $this->load->model('m_profil');	
        $this->load->model('m_visimisi');	
        $this->load->model('m_berita');	
        $this->load->model('m_galeri'); 
        $this->load->model('m_slideshow'); 
        $this->load->model('m_slideshowteks'); 
        $this->load->model('m_agenda'); 
        $this->load->model('m_guru'); 
        $this->load->model('m_fasilitas'); 
        $this->load->model('m_sosmed'); 
        $this->load->model('m_mapel'); 
        $this->load->model('m_pengumuman'); 


    }

     function index(){
    	$data['profil']= $this->m_profil->tampil()->result();
        $data['kepsek']= $this->m_guru->tampilKS()->result();
        $data['slideshow']= $this->m_slideshow->tampil()->result();
        $data['sosmed']= $this->m_sosmed->tampil()->result();
        $data['slideshowteks']= $this->m_slideshowteks->tampil()->result();
    	$data['berita']= $this->m_berita->tampil4()->result();
        $data['berita1']= $this->m_berita->tampil3_terakhir()->result();
        $data['agenda']= $this->m_agenda->tampil3()->result();
        $data['galeri']= $this->m_galeri->tampil16()->result();
        $data['gal']= $this->m_galeri->tampil1()->result();
        $data['fasilitas'] = $this->m_fasilitas->getFasilitas()->result();
        $data['rowG'] = $this->m_guru->countRow();
        $data['rowM'] = $this->m_mapel->countRow();
        $data['rowB'] = $this->m_berita->countRow();
        $data['rowF'] = $this->m_fasilitas->countRow();
        $data['pengumuman']= $this->m_pengumuman->tampil();
        $this->load->view('depan/v_home', $data);
        // echo $this->db->last_query();
    }
 }
 ?>
     