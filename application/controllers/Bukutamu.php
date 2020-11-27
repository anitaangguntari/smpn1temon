
<?php
class Bukutamu extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_bukutamu');
        $this->load->model('m_berita');
        $this->load->model('m_tautan');
        $this->load->model('m_profil');	
        $this->load->model('m_guru'); 
        $this->load->model('m_pengumuman');
        $this->load->model('m_fasilitas');
        $this->load->model('m_sosmed');
        $this->load->model('m_jadwal');

    }

    function index(){
    	$data['guru']= $this->m_guru->tampilKS()->result();
    	$data['berita']= $this->m_berita->tampil6()->result();
    	$data['profil']= $this->m_profil->tampil()->result();
    	$data['tautan']= $this->m_tautan->tampil()->result();
    	$data['pengumuman']= $this->m_pengumuman->tampil();
        $data['fasilitas'] = $this->m_fasilitas->getFasilitas()->result();
        $data['sosmed']= $this->m_sosmed->tampil()->result();
        $data['jadwal']= $this->m_jadwal->tampil()->result();
        $data['berita1']= $this->m_berita->tampil3_terakhir()->result();
        $this->load->view('depan/v_bukutamu',$data);
    }
    function tambah_aksi(){
		$id_tamu = $this->input->post('id_tamu');
		$nama_tamu = $this->input->post('nama_tamu');
		$email = $this->input->post('email');
		$no_telp = $this->input->post('no_telp');
		$saran = $this->input->post('saran');
 
		$data = array(
			'id_tamu' => $id_tamu,
			'nama_tamu' => $nama_tamu,
			'email' => $email,
			'no_telp' => $no_telp,
			'saran' => $saran
			
			);
		$this->m_bukutamu->input_data($data,'bukutamu');
		redirect('bukutamu');
		// echo $this->db->last_query();
	}
 }
 ?>
     