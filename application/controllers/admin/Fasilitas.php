<?php
class Fasilitas extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_fasilitas');  
        $this->load->helper('url'); 
        $this->load->library('form_validation');
        $this->load->model('m_profil');
    }

 function index(){
    $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $data['fasilitas']= $this->m_fasilitas->daftar()->result();
        $this->load->view('admin/admin/v_daftar_fasilitas', $data);
    }

  function tambah(){
    $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_tambah_fasilitas', $data);
    }
 // function tambah_aksi(){
 //        $id_fasilitas = $this->input->post('id_fasilitas');
 //        $nama_fasilitas = $this->input->post('nama_fasilitas');
 //        $keterangan = $this->input->post('keterangan');
 //        $data = array(
 //            'id_fasilitas' => $id_fasilitas,
 //            'nama_fasilitas' => $nama_fasilitas,
 //            'keterangan' => $keterangan
 //            );
 //        $this->m_fasilitas->input_data($data,'fasilitas');
 //        redirect('admin/fasilitas');
 //        // echo $this->db->last_query();
 //    }

    function tambah_aksi(){
            $config['upload_path']         = 'images/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 3000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
            {
                   echo 'Anda gagal upload';
                   // echo $this->db->last_query();
                   echo var_dump($this->upload->display_errors());
            }
            else
            {
                //tampung data dari form
                $id_fasilitas = $this->input->post('id_fasilitas');
                $nama_fasilitas = $this->input->post('nama_fasilitas');
                $keterangan = $this->input->post('keterangan');
                $file = $this->upload->data();
                $gambar = $file['file_name'];
 
                $this->m_fasilitas->insert(array(
                    'id_fasilitas' => $id_fasilitas,
                    'nama_fasilitas' => $nama_fasilitas,
                    'keterangan' => $keterangan,
                    'gambar' => $gambar
                ));
                $this->session->set_flashdata('msg','Data berhasil di upload');
                redirect('admin/fasilitas');
                // echo var_dump($this->upload->display_errors());
                // echo $this->db->last_query();
 
        }
    }

    function edit($id)
    {
        $i = 1;
        $data['profil']= $this->m_profil->db_edit($i)->row_array();
        $data['fasilitas'] = $this->m_fasilitas->edit($id);
        // echo $this->db->last_query();
        $this->load->view('admin/admin/v_edit_fasilitas', $data);
    }
     // function update()
     //    {
     //            $id_fasilitas=$this->input->post("id_fasilitas");
     //            $nama_fasilitas=$this->input->post("nama_fasilitas");
     //            $keterangan=$this->input->post("keterangan");
     //            $id = array('id_fasilitas'=>$id_fasilitas);
     //            $data = array('nama_fasilitas'=>$nama_fasilitas);
     //            $data = array('keterangan'=>$keterangan);

     //            $this->m_fasilitas->update_fasilitas($data, $id);
     //            // echo var_dump($this->upload->display_errors());
     //            redirect('admin/fasilitas');
     //            // echo $this->db->last_query();

     //    }
        function update()
        {
            $id_fasilitas=$this->input->post("id_fasilitas");
            $nama_fasilitas=$this->input->post("nama_fasilitas");
            $keterangan=$this->input->post("keterangan");
            $new_file_name  = $this->input->post('gambar');
            if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
                
                $config['upload_path']         = 'images/';
                $config['allowed_types']       = 'gif|jpg|png';
                $config['file_name']           = $new_file_name;
                $config['max_size']             = 3000;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                $this->upload->do_upload('gambar');
                $file =$this->upload->data();
                $gambar= $file['file_name'];
                $id = array('id_fasilitas'=>$id_fasilitas);
                            
                $data = array('nama_fasilitas'=>$nama_fasilitas,'keterangan'=>$keterangan,'gambar'=>$gambar);

                $this->m_fasilitas->update_fasilitas($data, $id);
                // echo var_dump($this->upload->display_errors());
                redirect('admin/fasilitas');
                // echo $this->db->last_query();
            }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
                // Proses ubah data ke Database
                $id = array('id_fasilitas'=>$id_fasilitas);
                           
                $data = array('nama_fasilitas'=>$nama_fasilitas,'keterangan'=>$keterangan);
                $this->m_fasilitas->update_fasilitas($data, $id);
                redirect('admin/fasilitas');
                // echo $this->db->last_query();
            }
        }
     function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_fasilitas->delete($id)) {
            redirect(site_url('admin/fasilitas'));
        }
    }
}