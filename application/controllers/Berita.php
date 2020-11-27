
<?php
class Berita extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
         //load libary pagination
        $this->load->library('pagination');
        $this->load->model('m_berita');
        $this->load->model('m_tautan');
        $this->load->model('m_profil'); 
        $this->load->model('m_guru'); 
        $this->load->model('m_pengumuman'); 
        $this->load->model('m_rating');
        $this->load->model('m_fasilitas');
        $this->load->model('m_jadwal');
        $this->load->model('m_calendar');
        $this->load->model('m_sosmed'); 
        $this->load->model('m_artikel'); 

    }

    function index($year = 0, $month = 0){
        //konfigurasi pagination
        $config['base_url'] = site_url('berita/index'); //site url
        $config['total_rows'] = $this->db->count_all('berita'); //total row
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
        $data['data'] = $this->m_berita->get_berita_list($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
 

        // $data['berita']= $this->m_berita->tampil()->result();
        $data['guru']= $this->m_guru->tampilKS()->result();
        $data['profil']= $this->m_profil->tampil()->result();
        $data['tautan']= $this->m_tautan->tampil()->result();
        $data['berita']= $this->m_berita->tampil6()->result();
        $data['artikel']= $this->m_artikel->tampil6()->result();
        $data['pengumuman']= $this->m_pengumuman->tampil();
        $kelas = $this->input->post("kelas");
        $data['jadwal']= $this->m_jadwal->tampil()->result();
        $data['jadwal1']= $this->m_jadwal->tampil_kelas($kelas)->result();
        $data['fasilitas'] = $this->m_fasilitas->getFasilitas()->result();
        $data['sosmed']= $this->m_sosmed->tampil()->result();
        $data['berita1']= $this->m_berita->tampil3_terakhir()->result();
        //KALENDER
        $config['start_day'] = 'monday';
        $config['show_next_prev'] = true;
        $config['next_prev_url'] = base_url('berita/index');

        $this->load->library('calendar', $config);

        $data['calendar'] = $this->calendar
                                 ->generate($year, $month);
       


        $this->load->view('depan/v_berita',$data);
       
        // echo $this->db->last_query();
    }

    // function popup(){
    //     $id=$this->input->post("id");
    //     $data['peng'] = $this->m_pengumuman->lihat($id);
    //     $this->load->view('depan/v_popup',$data);

    //     // echo $this->db->last_query();
    // }

    function edit($id)
     {
        $id_berita=$this->uri->segment(3);
        $data['b']=$this->m_berita->db_edit($id)->row_array();
        $data['guru']= $this->m_guru->tampilKS()->result();
        $data['profil']= $this->m_profil->tampil()->result();
        $data['tautan']= $this->m_tautan->tampil()->result();
        $data['berita']= $this->m_berita->tampil6()->result();
        $data['pengumuman']= $this->m_pengumuman->tampil();
        $data['rating']= $this->m_rating->tampil5($id_berita)->result();
        $data['fasilitas'] = $this->m_fasilitas->getFasilitas()->result();
        $data['sosmed']= $this->m_sosmed->tampil()->result();
        $data['berita1']= $this->m_berita->tampil3_terakhir()->result();
        $data['jadwal']= $this->m_jadwal->tampil()->result();

        $this->load->view('depan/v_tampil_berita',$data);
      }   

      function update($id)
        {
            $data['b']=$this->m_berita->db_edit($id)->row_array();
            $data['guru']= $this->m_guru->tampilKS()->result();
            $data['profil']= $this->m_profil->tampil()->result();
            $data['tautan']= $this->m_tautan->tampil()->result();
            $data['berita']= $this->m_berita->tampil6()->result();
            $data['pengumuman']= $this->m_pengumuman->tampil();
            $data['fasilitas'] = $this->m_fasilitas->getFasilitas()->result();
            $data['sosmed']= $this->m_sosmed->tampil()->result();
            $data['berita1']= $this->m_berita->tampil3_terakhir()->result();
            $id_berita=$this->input->post("id_berita");
            $viewer=$this->input->post("viewer");
            $tambah=$viewer+1;
            $id = array('id_berita'=>$id_berita);
            $data = array('viewer'=>$tambah);

            $this->m_berita->update_berita($data, $id);
            // echo var_dump($this->upload->display_errors());
            redirect('berita/edit/'.$id_berita);
            // echo $this->db->last_query();
        }


        function tampil_rating()
        {
            $id_berita=$this->input->post("id_berita");
            $data['guru']= $this->m_guru->tampilKS()->result();
            $data['profil']= $this->m_profil->tampil()->result();
            $data['tautan']= $this->m_tautan->tampil()->result();
            $data['berita']= $this->m_berita->tampil6()->result();
            $data['pengumuman']= $this->m_pengumuman->tampil();
            $data['rating']= $this->m_rating->tampil($id_berita)->result();
            $data['fasilitas'] = $this->m_fasilitas->getFasilitas()->result();
            $data['sosmed']= $this->m_sosmed->tampil()->result();
            $data['berita1']= $this->m_berita->tampil3_terakhir()->result();
            $data['jadwal']= $this->m_jadwal->tampil()->result();

            $this->load->view('depan/v_tampil_rating',$data);
            // echo $this->db->last_query();
        }
      // function display($year = null, $month = null){
      //   $config['start_day'] = 'monday';
      //   $config['show_next_prev'] = true;
      //   $config['next_prev_url'] = base_url() . "calendar/display";

      //   $this->load->library('calendar', $config);

      //   $data['calendar'] = $this->calendar
      //                            ->generate($year, $month);

      //   $this->load->view('depan/v_berita', $data);
      // }
        
}
 
     