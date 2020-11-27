
<?php
class Pengumuman extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('m_pengumuman');
        $this->load->model('m_profil');
    }

    function index(){
        $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $data['pengumuman']= $this->m_pengumuman->tampil();
        $this->load->view('admin/guru/v_daftar_pengumuman',$data);
        // echo $this->db->last_query();
    }

    function tambah(){
         $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/guru/v_tambah_pengumuman', $data);
        // echo $this->db->last_query();
    }

    function tambah_pengumuman(){
            $config['upload_path']         = 'images/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jeid_pengumuman file
            $config['max_size']             = 3000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
            {
                   echo 'Anda gagal upload';
                   echo $this->db->last_query();
            }
            else
            {
                //tampung data dari form
                $id_pengumuman = $this->input->post('id_pengumuman');
                $isi_pengumuman = $this->input->post('isi_pengumuman');

                $file = $this->upload->data();
                $gambar = $file['file_name'];
 
                $this->m_pengumuman->insert(array(
                    'id_pengumuman' => $id_pengumuman,
                    'isi_pengumuman' => $isi_pengumuman,
                    'gambar' => $gambar
                ));
                $this->session->set_flashdata('msg','Data berhasil di upload');
                redirect('gru/pengumuman');
                // echo $this->db->last_query();
 
        }
    }

    function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_pengumuman->delete($id)) {
            redirect(site_url('gru/pengumuman'));
            // echo $this->db->last_query();
        }
    }
 
    function lihat($id)
    {
        $data['pengumuman'] = $this->m_pengumuman->lihat($id);
        // echo $this->db->last_query();
        $this->load->view('depan/v_tampil_pengumuman', $data);
    }

    function edit($id)
    {
         $i = 1;
        $data['profil']= $this->m_profil->db_edit($i)->row_array();
        $data['pengumuman'] = $this->m_pengumuman->edit($id);
        // echo $this->db->last_query();
        $this->load->view('admin/guru/v_edit_pengumuman', $data);
    }
      
function update()
{
    $id_pengumuman=$this->input->post("id_pengumuman");
    $isi_pengumuman=$this->input->post("isi_pengumuman");
    $new_file_name  = $this->input->post('gambar');
    if(isset($_POST['ubah_foto'])){ // Jika user 
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
        $id = array('id_pengumuman'=>$id_pengumuman);

     
                    
        $data = array('isi_pengumuman'=>$isi_pengumuman,'gambar'=>$gambar);

        $this->m_pengumuman->update_pengumuman($data, $id);
        // echo var_dump($this->upload->display_errors());
        redirect('gru/pengumuman');
        // echo $this->db->last_query();
    }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
        // Proses ubah data ke Database
        $id = array('id_pengumuman'=>$id_pengumuman);
                   
        $data = array('isi_pengumuman'=>$isi_pengumuman);
        $this->m_pengumuman->update_pengumuman($data, $id);
        redirect('gru/pengumuman');
        // echo $this->db->last_query();
    }
}
 
 
}
 
     