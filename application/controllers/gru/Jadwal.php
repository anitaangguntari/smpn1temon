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
        $this->load->view('admin/guru/v_halamanAdmin');
    }

 function index(){
    $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $data['jadwal']= $this->m_jadwal->tampil()->result();
        $this->load->view('admin/guru/v_daftar_jadwal', $data);
    }

  function tambah(){
    $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/guru/v_upload_jadwal', $data);
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
                redirect('gru/jadwal');
                // echo var_dump($this->upload->display_errors());
                // echo $this->db->last_query();
 
        }
    }

    function edit($id)
    {
        $i = 1;
        $data['profil']= $this->m_profil->edit($i)->row_array();
        $data['jadwal'] = $this->m_jadwal->db_edit($id)->row_array();
        // echo $this->db->last_query();
        $this->load->view('admin/guru/v_edit_jadwal', $data);
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
            redirect('gru/jadwal');
            // echo $this->db->last_query();
        }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
            // Proses ubah data ke Database
            $id = array('id_jadwal'=>$id_jadwal);
                       
            $data = array('kelas'=>$kelas);
            $this->m_jadwal->update_jadwal($data, $id);
            redirect('gru/jadwal');
            // echo $this->db->last_query();
        }
    }
    
     function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_jadwal->delete($id)) {
            redirect(site_url('gru/jadwal'));
        }
    }
}