

      <?php
class Pengumuman extends CI_Controller{
    function __construct(){
        parent:: __construct();
          //load libary pagination
        $this->load->library('pagination');
        $this->load->model('m_pengumuman');
        $this->load->model('m_berita');
        $this->load->model('m_tautan');
        $this->load->model('m_profil'); 
        $this->load->model('m_pengumuman'); 
        $this->load->model('m_guru'); 
        $this->load->model('m_fasilitas');
    }

    function index(){
       
        $data['guru']= $this->m_guru->tampilKS()->result();
        $data['pengumuman']= $this->m_pengumuman->tampil();
        $data['berita']= $this->m_berita->tampil6()->result();
        $data['tautan']= $this->m_tautan->tampil()->result();
        $data['profil']= $this->m_profil->tampil()->result();
        $data['pengumuman']= $this->m_pengumuman->tampil();
        $data['fasilitas'] = $this->m_fasilitas->getFasilitas()->result();
        $this->load->view('depan/v_pengumuman', $data);
        // echo $this->db->last_query();
    }
     function lihat_pengumuman($id)
        {
            $data['peng'] = $this->m_pengumuman->lihat($id);
            $data['berita']= $this->m_berita->tampil()->result();
            $data['guru']= $this->m_guru->tampilKS()->result();
            $data['profil']= $this->m_profil->tampil()->result();
            $data['tautan']= $this->m_tautan->tampil()->result();
            $data['berita']= $this->m_berita->tampil6()->result();
            $data['pengumuman']= $this->m_pengumuman->tampil();
            $data['fasilitas'] = $this->m_fasilitas->getFasilitas()->result();
            // echo $this->db->last_query();
            $this->load->view('depan/v_tampil_pengumuman', $data);
        }
        
    function popup(){
        $id=$this->input->post("id");
        $data['peng'] = $this->m_pengumuman->lihat($id);
        $this->load->view('depan/v_popup',$data);

        // echo $this->db->last_query();
    }

 }
 ?>
     