
<?php
class Galeri extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('m_galeri');
        $this->load->model('m_profil');
    }

    function index(){
         $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $data['galeri']= $this->m_galeri->tampil()->result();
        $this->load->view('admin/guru/v_daftar_galeri',$data);
        // echo $this->db->last_query();
    }

    function tambah(){
        $id = 1;
        $dt['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/guru/v_tambah_galeri', $dt);
    }

    function tambah_galeri(){
			$config['upload_path']         = 'images/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 3000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('foto_galeri')) //sesuai dengan name pada form 
            {
                   echo 'Anda gagal upload';
                   // echo $this->db->last_query();
                   echo var_dump($this->upload->display_errors());
            }
            else
            {
            	//tampung data dari form
            	$id_galeri = $this->input->post('id_galeri');
            	$judul_galeri = $this->input->post('judul_galeri');
            	$file = $this->upload->data();
            	$foto_galeri = $file['file_name'];
 
                $this->m_galeri->insert(array(
                	'id_galeri' => $id_galeri,
			        'judul_galeri' => $judul_galeri,
                    'foto_galeri' => $foto_galeri
				));
				$this->session->set_flashdata('msg','Data berhasil di upload');
				redirect('gru/galeri');
                // echo var_dump($this->upload->display_errors());
				// echo $this->db->last_query();
 
        }
	}

    function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_galeri->delete($id)) {
            redirect(site_url('gru/galeri'));
        }
    }
 

  function edit($id)
     {
         $i = 1;
        $dt['profil']= $this->m_profil->db_edit($i)->row_array();
        $dt['galeri']=$this->m_galeri->db_edit($id)->row_array();
        $this->load->view('admin/guru/v_edit_galeri',$dt);
      }   

function update()
{
    $id_galeri=$this->input->post("id_galeri");
    $judul_galeri=$this->input->post("judul_galeri");
    $new_file_name  = $this->input->post('foto_galeri');
    if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
        
        $config['upload_path']         = 'images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['file_name']           = $new_file_name;
        $config['max_size']             = 3000;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $this->upload->do_upload('foto_galeri');
        $file =$this->upload->data();
        $foto_galeri= $file['file_name'];
        $id = array('id_galeri'=>$id_galeri);
                    
        $data = array('judul_galeri'=>$judul_galeri,'foto_galeri'=>$foto_galeri);

        $this->m_galeri->update_galeri($data, $id);
        // echo var_dump($this->upload->display_errors());
        redirect('gru/galeri');
        // echo $this->db->last_query();
    }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
        // Proses ubah data ke Database
        $id = array('id_galeri'=>$id_galeri);
                   
        $data = array('judul_galeri'=>$judul_galeri);
        $this->m_galeri->update_galeri($data, $id);
        redirect('gru/galeri');
        // echo $this->db->last_query();
    }
}
}
 
     