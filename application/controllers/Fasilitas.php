
<?php
class Fasilitas extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('m_fasilitas');	
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
        //konfigurasi pagination
        $config['base_url'] = site_url('fasilitas/index'); //site url
        $config['total_rows'] = $this->db->count_all('fasilitas'); //total row
        $config['per_page'] = 5;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->m_fasilitas->get_fasilitas_list($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
 

        // $data['berita']= $this->m_berita->tampil()->result();
        $data['guru']= $this->m_guru->tampilKS()->result();
        $data['profil']= $this->m_profil->tampil()->result();
        $data['tautan']= $this->m_tautan->tampil()->result();
        $data['berita']= $this->m_berita->tampil6()->result();
        // $data['artikel']= $this->m_artikel->tampil6()->result();
        $data['pengumuman']= $this->m_pengumuman->tampil();
        $kelas = $this->input->post("kelas");
        $data['jadwal']= $this->m_jadwal->tampil()->result();
        $data['jadwal1']= $this->m_jadwal->tampil_kelas($kelas)->result();
        $data['fasilitas'] = $this->m_fasilitas->daftar()->result();
        $data['sosmed']= $this->m_sosmed->tampil()->result();
        $data['berita1']= $this->m_berita->tampil3_terakhir()->result();
        //KALENDER
        // $config['start_day'] = 'monday';
        // $config['show_next_prev'] = true;
        // $config['next_prev_url'] = base_url('berita/index');

        // $this->load->library('calendar', $config);

        // $data['calendar'] = $this->calendar
        //                          ->generate($year, $month);
       


        $this->load->view('depan/v_daftar_fasilitas',$data);
       
        // echo $this->db->last_query();
    }
  
     function tampil($id){
        $id=$this->uri->segment(3);
        $data['fa']=$this->m_fasilitas->db_edit($id)->row_array();
        $data['jadwal']= $this->m_jadwal->tampil()->result();
        $data['guru']= $this->m_guru->tampilKS()->result();
    	$data['fasilitas']= $this->m_fasilitas->tampil($id)->result();
        $data['profil']= $this->m_profil->tampil()->result();
        $data['tautan']= $this->m_tautan->tampil()->result();
    	$data['berita']= $this->m_berita->tampil6()->result();
        $data['pengumuman']= $this->m_pengumuman->tampil();
        $data['fasilitas'] = $this->m_fasilitas->getFasilitas()->result();
        $data['sosmed']= $this->m_sosmed->tampil()->result();
        $data['berita1']= $this->m_berita->tampil3_terakhir()->result();
        $this->load->view('depan/v_fasilitas', $data);
        // echo $this->db->last_query();
    }
  
 }
 ?>
     