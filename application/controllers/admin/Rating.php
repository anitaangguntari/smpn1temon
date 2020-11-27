<?php
class Rating extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_rating');	
        $this->load->model('m_berita');
        $this->load->model('m_tautan');
        $this->load->model('m_profil'); 
        $this->load->model('m_guru'); 
        $this->load->model('m_pengumuman'); 
        $this->load->helper('url');	
		$this->load->library('form_validation');
        $this->load->model('m_profil');
    }

 function index(){
 	 	$data['berita']= $this->m_berita->tampil()->result();
        $data['guru']= $this->m_guru->tampilKS()->result();
        $data['profil']= $this->m_profil->tampil()->result();
        $data['tautan']= $this->m_tautan->tampil()->result();
        $data['berita']= $this->m_berita->tampil6()->result();
        $data['pengumuman']= $this->m_pengumuman->tampil();
        $data['rating']= $this->m_rating->tampil6()->result();


        $this->load->view('depan/v_tampil_berita', $data);
    }

 function tambah_aksi(){
		$id_rating = $this->input->post('id_rating');
		$email = $this->input->post('email');
		$id_berita = $this->input->post('id_berita');
		$rating = $this->input->post('rating');
 
		$data = array(
			'id_rating' => $id_rating,
			'email' => $email,
			'id_berita' => $id_berita,
			'rating' => $rating
			
			);
		$this->m_rating->insert($data,'rating');
		redirect('berita/edit/'.$id_berita);
		// echo $this->db->last_query();
	}

function index_artikel(){
        $data['berita']= $this->m_berita->tampil()->result();
        $data['guru']= $this->m_guru->tampilKS()->result();
        $data['profil']= $this->m_profil->tampil()->result();
        $data['tautan']= $this->m_tautan->tampil()->result();
        $data['berita']= $this->m_berita->tampil6()->result();
        $data['pengumuman']= $this->m_pengumuman->tampil();
        $data['rating']= $this->m_rating->tampil6()->result();


        $this->load->view('depan/v_tampil_artikel', $data);
    }

 function tambah_aksi_rat(){
        $id_rat = $this->input->post('id_rat');
        $email = $this->input->post('email');
        $id_artikel = $this->input->post('id_artikel');
        $rating = $this->input->post('rating');
 
        $data = array(
            'id_rat' => $id_rat,
            'email' => $email,
            'id_artikel' => $id_artikel,
            'rating' => $rating
            
            );
        $this->m_rating->insert_rat($data,'reting');
        redirect('artikel/edit/'.$id_artikel);
        // echo $this->db->last_query();
    }
}