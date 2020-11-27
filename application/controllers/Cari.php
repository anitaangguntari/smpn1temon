

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari extends CI_Controller {
      public function __construct() {
                  parent::__construct();
                  $this->load->helper('url');

                  // Load session
                  $this->load->library('session');
                  $this->load->helper('form');
                  // Load Pagination library
                  $this->load->library('pagination');
                  $this->load->model('M_cari','Mmenu');
                  $this->load->model('m_berita');
                  $this->load->model('m_tautan');
                  $this->load->model('m_profil'); 
                  $this->load->model('m_guru'); 
                  $this->load->model('m_pengumuman'); 
                  $this->load->model('m_fasilitas');
                  $this->load->model('m_sosmed');
                  $this->load->model('m_jadwal'); 
            }
             public function index()
    {
        //pagination settings
        $config['base_url'] = site_url('cari/index');
        $config['total_rows'] = $this->db->count_all('guru');
        $config['per_page'] = "3";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"]/$config["per_page"];
        $config["num_links"] = floor($choice);

        // integrate bootstrap pagination
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

        // get books list
        $data['data'] = $this->Mmenu->get_guru($config["per_page"], $data['page'], NULL);

        $data['pagination'] = $this->pagination->create_links();
        $data['jadwal']= $this->m_jadwal->tampil()->result();
        // $data['jadwal1']= $this->m_jadwal->tampil_kelas($kelas)->result();
        $data['fasilitas'] = $this->m_fasilitas->getFasilitas()->result();
        $data['sosmed']= $this->m_sosmed->tampil()->result();
        $data['berita1']= $this->m_berita->tampil3_terakhir()->result();
        $data['guru']= $this->m_guru->tampil1()->result();
        $data['berita']= $this->m_berita->tampil6()->result();
        $data['tautan']= $this->m_tautan->tampil()->result();
        $data['profil']= $this->m_profil->tampil()->result();
        $data['pengumuman']= $this->m_pengumuman->tampil();
        $data['fasilitas'] = $this->m_fasilitas->getFasilitas()->result();
        $data['sosmed']= $this->m_sosmed->tampil()->result();
        $data['berita1']= $this->m_berita->tampil3_terakhir()->result();
        // load view
        $this->load->view('depan/v_guru',$data);
    }
     function search()
    {
        // get search string
        $search = ($this->input->post("book_name"))? $this->input->post("book_name") : "NIL";

        $search = ($this->uri->segment(3)) ? $this->uri->segment(3) : $search;
        // echo $search;
        // pagination settings
        $config = array();
        $config['base_url'] = site_url("cari/search/$search");
        $config['total_rows'] = $this->Mmenu->get_guru_count($search);
        $config['per_page'] = 5;
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"]/$config["per_page"];
        $config["num_links"] = floor($choice);

        // integrate bootstrap pagination
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

        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        // get books list
        $data['data'] = $this->Mmenu->get_guru($config['per_page'], $data['page'], $search);

        $data['pagination'] = $this->pagination->create_links();
        $data['jadwal']= $this->m_jadwal->tampil()->result();
        // $data['jadwal1']= $this->m_jadwal->tampil_kelas($kelas)->result();
        $data['fasilitas'] = $this->m_fasilitas->getFasilitas()->result();
        $data['sosmed']= $this->m_sosmed->tampil()->result();
        $data['berita1']= $this->m_berita->tampil3_terakhir()->result();
        $data['guru']= $this->m_guru->tampil1()->result();
        $data['berita']= $this->m_berita->tampil6()->result();
        $data['tautan']= $this->m_tautan->tampil()->result();
        $data['profil']= $this->m_profil->tampil()->result();
        $data['pengumuman']= $this->m_pengumuman->tampil();
        $data['fasilitas'] = $this->m_fasilitas->getFasilitas()->result();
        $data['sosmed']= $this->m_sosmed->tampil()->result();
        $data['berita1']= $this->m_berita->tampil3_terakhir()->result();
        //Load view
        $this->load->view('depan/v_guru',$data);
    }
      // public function index(){
      //   $q = urldecode($this->input->get('q', TRUE));
      //   $start = intval($this->input->get('start'));
       
      //   if ($q <> '') {
      //       $config['base_url'] = base_url() . 'v_guru/cari?q=' . urlencode($q);
      //       $config['first_url'] = base_url() . 'v_guru/cari?q=' . urlencode($q);
      //   } else {
      //       $config['base_url'] = base_url() . 'v_guru/cari';
      //       $config['first_url'] = base_url() . 'v_guru/cari';
      //   }

      //   $config['per_page'] = 3;
      //   $config['page_query_string'] = true;
      //   $config['total_rows'] = $this->Mmenu->total_rows_guru($q);
      //   $menu = $this->Mmenu->get_limit_data_guru($config['per_page'], $start, $q);

      //   $this->load->library('pagination');
      //   $this->pagination->initialize($config);

      //   $data = array(
      //       'guru' => $menu,
      //       'q' => $q,
      //       'pagination' => $this->pagination->create_links(),
      //       'total_rows' => $config['total_rows'],
      //       'start' => $start,
      //   );
      //   // $data['guru']= $this->m_guru->tampilKS()->result();
      //   $data['jadwal']= $this->m_jadwal->tampil()->result();
      //   // $data['jadwal1']= $this->m_jadwal->tampil_kelas($kelas)->result();
      //   $data['fasilitas'] = $this->m_fasilitas->getFasilitas()->result();
      //   $data['sosmed']= $this->m_sosmed->tampil()->result();
      //   $data['berita1']= $this->m_berita->tampil3_terakhir()->result();
      //   $data['guru']= $this->m_guru->tampil1()->result();
      //   $data['berita']= $this->m_berita->tampil6()->result();
      //   $data['tautan']= $this->m_tautan->tampil()->result();
      //   $data['profil']= $this->m_profil->tampil()->result();
      //   $data['pengumuman']= $this->m_pengumuman->tampil();
      //   $data['fasilitas'] = $this->m_fasilitas->getFasilitas()->result();
      //   $data['sosmed']= $this->m_sosmed->tampil()->result();
      //   $data['berita1']= $this->m_berita->tampil3_terakhir()->result();
      //   $this->load->view('depan/v_guru', $data);
      // }
        // echo $this->db->last_query();
      
      // function ind(){
      //   redirect('cari/loadRecord');
      // }
    //  function loadRecord($rowno=0){

    //   // Search text
    //   $search_text = "";
    //   if($this->input->post('submit') != NULL ){
    //     $search_text = $this->input->post('search');
    //     $this->session->set_userdata(array("search"=>$search_text));
    //   }else{
    //     if($this->session->userdata('search') != NULL){
    //       $search_text = $this->session->userdata('search');
    //     }
    //   }

    //   // Row per page
    //   $rowperpage = 5;

    //   // Row position
    //   if($rowno != 0){
    //     $rowno = ($rowno-1) * $rowperpage;
    //   }
   
    //   // All records count
    //   $allcount = $this->Mmenu->getrecordCount($search_text);

    //   // Get records
    //   $users_record = $this->Mmenu->getData($rowno,$rowperpage,$search_text);
   
    //   // Pagination Configuration
    //   $config['base_url'] = base_url().'cari/loadRecord';
    //   $config['use_page_numbers'] = TRUE;
    //   $config['total_rows'] = $allcount;
    //   $config['per_page'] = $rowperpage;

    //   // Initialize
    //   $this->pagination->initialize($config);
   
    //   $data['pagination'] = $this->pagination->create_links();
    //   $data['result'] = $users_record;
    //   $data['row'] = $rowno;
    //   $data['search'] = $search_text;
    //   $data['jadwal']= $this->m_jadwal->tampil()->result();
    //   // $data['jadwal1']= $this->m_jadwal->tampil_kelas($kelas)->result();
    //   $data['fasilitas'] = $this->m_fasilitas->getFasilitas()->result();
    //   $data['sosmed']= $this->m_sosmed->tampil()->result();
    //   $data['berita1']= $this->m_berita->tampil3_terakhir()->result();
    //   $data['guru']= $this->m_guru->tampil1()->result();
    //   $data['berita']= $this->m_berita->tampil6()->result();
    //   $data['tautan']= $this->m_tautan->tampil()->result();
    //   $data['profil']= $this->m_profil->tampil()->result();
    //   $data['pengumuman']= $this->m_pengumuman->tampil();
    //   $data['fasilitas'] = $this->m_fasilitas->getFasilitas()->result();
    //   $data['sosmed']= $this->m_sosmed->tampil()->result();
    //   $data['berita1']= $this->m_berita->tampil3_terakhir()->result();
    //   // Load view
    //   $this->load->view('depan/v_guru',$data);
   
    // }
    
}