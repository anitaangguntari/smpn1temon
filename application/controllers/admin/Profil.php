
<?php
class Profil extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('m_profil');
    }

    function index(){
        $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $data['pf']= $this->m_profil->tampil()->result();
        $this->load->view('admin/admin/v_daftar_profil',$data);
        // echo $this->db->last_query();
    }

    function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_profil->delete($id)) {
            redirect(site_url('admin/profil'));
        }
    }
 

  function edit($id)
     {
        $i = 1;
        $dt['profil']= $this->m_profil->db_edit($i)->row_array();
        $dt['profil']=$this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_edit_profil',$dt);
      }   

function update()
{
    $id_profil=$this->input->post("id_profil");
    $nama_sekolah=$this->input->post("nama_sekolah");
    $alamat_sekolah=$this->input->post("alamat_sekolah");
    $no_telp=$this->input->post("no_telp");
    $email=$this->input->post("email");
    $isi_profil=$this->input->post("isi_profil");
    $isi_lainnya=$this->input->post("isi_lainnya");
    $new_file_name  = $this->input->post('logo_sekolah');
    if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
        
        $config['upload_path']         = 'images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['file_name']           = $new_file_name;
        $config['max_size']             = 3000;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $this->upload->do_upload('logo_sekolah');
        $file =$this->upload->data();
        $logo_sekolah= $file['file_name'];
        $id = array('id_profil'=>$id_profil);
                    
        $data = array('nama_sekolah'=>$nama_sekolah,'alamat_sekolah'=>$alamat_sekolah,'no_telp'=>$no_telp,'email'=>$email,'isi_profil'=>$isi_profil,'isi_lainnya'=>$isi_lainnya,'logo_sekolah'=>$logo_sekolah);

        $this->m_profil->update_profil($data, $id);
        // echo var_dump($this->upload->display_errors());
        redirect('admin/profil');
        // echo $this->db->last_query();
    }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
        // Proses ubah data ke Database
        $id = array('id_profil'=>$id_profil);
                   
        $data = array('nama_sekolah'=>$nama_sekolah,'alamat_sekolah'=>$alamat_sekolah,'no_telp'=>$no_telp,'email'=>$email,'isi_profil'=>$isi_profil,'isi_lainnya'=>$isi_lainnya);
        $this->m_profil->update_profil($data, $id);
        redirect('admin/profil');
        // echo $this->db->last_query();
    }
}
}
 
     