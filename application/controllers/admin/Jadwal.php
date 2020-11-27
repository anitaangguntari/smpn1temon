<?php
class Jadwal extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_jadwal'); 
        $this->load->helper('url'); 
        $this->load->library('form_validation');
        $this->load->model('m_profil');
    }

    function halamanAdmin(){
        $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_halamanAdmin');
    }

 function index(){
    $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $data['jadwal']= $this->m_jadwal->tampil()->result();
        $data['jadwal_new']= $this->m_jadwal->tampil_jadwal_new()->result();
        $this->load->view('admin/admin/v_daftar_jadwal', $data);
    }

  function tambah(){
    $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_upload_jadwal', $data);
    }

   function do_upload(){
            $config['upload_path']         = 'images/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 3000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('gambar_jadwal')) //sesuai dengan name pada form 
            {
                   echo 'Anda gagal upload';
                   // echo $this->db->last_query();
                   echo var_dump($this->upload->display_errors());
            }
            else
            {
                //tampung data dari form
                $id_jadwal = $this->input->post('id_jadwal');
                $kelas = $this->input->post('kelas');
                $file = $this->upload->data();
                $gambar_jadwal = $file['file_name'];
 
                $this->m_jadwal->insert(array(
                    'id_jadwal' => $id_jadwal,
                    'kelas' => $kelas,
                    'gambar_jadwal' => $gambar_jadwal
                ));
                $this->session->set_flashdata('msg','Data berhasil di upload');
                redirect('admin/jadwal');
                // echo var_dump($this->upload->display_errors());
                // echo $this->db->last_query();
 
        }
    }

    function tambah_aksi(){
        $jadwal_id = $this->input->post('jadwal_id');
        $hari = $this->input->post('hari');
        $jam_ke = $this->input->post('jam_ke');
        $jam_mulai = $this->input->post('jam_mulai');
        $jam_selesai = $this->input->post('jam_selesai');
        $k7a = $this->input->post('k7a');
        $k7b = $this->input->post('k7b');
        $k7c = $this->input->post('k7c');
        $k7d = $this->input->post('k7d');
        $k7e = $this->input->post('k7e');
        $k7f = $this->input->post('k7f');
        $k8a = $this->input->post('k8a');
        $k8b = $this->input->post('k8b');
        $k8c = $this->input->post('k8c');
        $k8d = $this->input->post('k8d');
        $k8e = $this->input->post('k8e');
        $k8f = $this->input->post('k8f');
        $k9a = $this->input->post('k9a');
        $k9b = $this->input->post('k9b');
        $k9c = $this->input->post('k9c');
        $k9d = $this->input->post('k9d');
        $k9e = $this->input->post('k9e');
        $k9f = $this->input->post('k9f');
 
        $data = array(
            'jadwal_id' => $jadwal_id,
            'hari' => $hari,
            'jam_ke' => $jam_ke,
            'jam_mulai' => $jam_mulai,
            'jam_selesai' => $jam_selesai,
            'k7a' => $k7a,
            'k7b' => $k7b,
            'k7c' => $k7c,
            'k7d' => $k7d,
            'k7e' => $k7e,
            'k7f' => $k7f,
            'k8a' => $k8a,
            'k8b' => $k8b,
            'k8c' => $k8c,
            'k8d' => $k8d,
            'k8e' => $k8e,
            'k8f' => $k8f,
            'k9a' => $k9a,
            'k9b' => $k9b,
            'k9c' => $k9c,
            'k9d' => $k9d,
            'k9e' => $k9e,
            'k9f' => $k9f
            
            );
        $this->m_jadwal->input_data($data,'jadwal_new');
        redirect('admin/jadwal');
        // echo $this->db->last_query();
    }

    function edit($id)
    {
        $i = 1;
        $data['profil']= $this->m_profil->db_edit($i)->row_array();
        $data['jadwal'] = $this->m_jadwal->edit($id);
        // echo $this->db->last_query();
        $this->load->view('admin/admin/v_edit_jadwal', $data);
    }

    function update()
    {
        $id_jadwal=$this->input->post("id_jadwal");
        $kelas=$this->input->post("kelas");
        $new_file_name  = $this->input->post('gambar_jadwal');
        if(isset($_POST['ubah'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
            
            $config['upload_path']         = 'images/';
            $config['allowed_types']       = 'gif|jpg|png';
            $config['file_name']           = $new_file_name;
            $config['max_size']             = 3000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $this->upload->do_upload('gambar_jadwal');
            $file =$this->upload->data();
            $gambar_jadwal= $file['file_name'];
            $id = array('id_jadwal'=>$id_jadwal);
                        
            $data = array('kelas'=>$kelas,'gambar_jadwal'=>$gambar_jadwal);

            $this->m_jadwal->update_jadwal($data, $id);
            // echo var_dump($this->upload->display_errors());
            redirect('admin/jadwal');
            // echo $this->db->last_query();
        }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
            // Proses ubah data ke Database
            $id = array('id_jadwal'=>$id_jadwal);
                       
            $data = array('kelas'=>$kelas);
            $this->m_jadwal->update_jadwal($data, $id);
            redirect('admin/jadwal');
            // echo $this->db->last_query();
        }
    }
    
     function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_jadwal->delete($id)) {
            redirect(site_url('admin/jadwal'));
        }
    }
}