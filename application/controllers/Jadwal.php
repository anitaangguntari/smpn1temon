<?php
class Jadwal extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_guru');
        $this->load->model('m_berita');
        $this->load->model('m_tautan');
        $this->load->model('m_profil'); 
        $this->load->model('m_jadwal');
        $this->load->helper(array('form', 'url','download'));
        $this->load->model('m_pengumuman'); 
        $this->load->model('m_fasilitas');
    }

    function index(){
        $data['gru']= $this->m_guru->tampilKS()->result();
    	$data['guru']= $this->m_guru->tampil()->result();
    	$data['berita']= $this->m_berita->tampil6()->result();
    	$data['tautan']= $this->m_tautan->tampil()->result();
        $data['profil']= $this->m_profil->tampil()->result();
        $data['jadwal']= $this->m_jadwal->tampil()->result();

        // $data['j1a']= $this->m_jadwal->tampil1a()->result();
        // $data['j1b']= $this->m_jadwal->tampil1b()->result();
        // $data['j1c']= $this->m_jadwal->tampil1c()->result();
        // $data['j1d']= $this->m_jadwal->tampil1d()->result();
        // $data['j1e']= $this->m_jadwal->tampil1e()->result();
        // $data['j1f']= $this->m_jadwal->tampil1f()->result();
        // $data['j2a']= $this->m_jadwal->tampil2a()->result();
        // $data['j2b']= $this->m_jadwal->tampil2b()->result();
        // $data['j2c']= $this->m_jadwal->tampil2c()->result();
        // $data['j2d']= $this->m_jadwal->tampil2d()->result();
        // $data['j2e']= $this->m_jadwal->tampil2e()->result();
        // $data['j2f']= $this->m_jadwal->tampil2f()->result();
        // $data['j3a']= $this->m_jadwal->tampil3a()->result();
        // $data['j3b']= $this->m_jadwal->tampil3b()->result();
        // $data['j3c']= $this->m_jadwal->tampil3c()->result();
        // $data['j3d']= $this->m_jadwal->tampil3d()->result();
        // $data['j3e']= $this->m_jadwal->tampil3e()->result();
        // $data['j3f']= $this->m_jadwal->tampil3f()->result();
        $data['pengumuman']= $this->m_pengumuman->tampil();
        $data['fasilitas'] = $this->m_fasilitas->getFasilitas()->result();
        $this->load->view('depan/v_jadwal', $data);
        // echo $this->db->last_query();
    }

   function popup(){
        $id=$this->input->post("id");
        $data['jadwal'] = $this->m_jadwal->lihat($id);
        $this->load->view('depan/v_popup_jadwal',$data);

        // echo $this->db->last_query();
    }

    function download() 
    {    
        $id=$this->input->post("id_jadwal");
        $fileinfo = $this->m_jadwal->download($id);
        $file = 'images/'.$fileinfo['gambar_jadwal'];
        force_download($file, NULL);

        //  $nama_file=$this->input->post("file");
        // force_download('file/$nama_file',NULL);
    }
}
?>
     