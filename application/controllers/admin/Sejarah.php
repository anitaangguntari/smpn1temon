
<?php
class Sejarah extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('m_sejarah');
        $this->load->model('m_profil');
    }

    function index(){
        $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $data['sejarah']= $this->m_sejarah->tampil()->result();
        $this->load->view('admin/admin/v_daftar_sejarah',$data);
        // echo $this->db->last_query();
    }

    function tambah(){
        $id = 1;
        $dt['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_tambah_sejarah', $dt);
    }

    function tambah_sejarah(){
			$config['upload_path']         = 'images/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 3000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
            {
                   echo 'Anda gagal upload';
                   echo $this->db->last_query();
            }
            else
            {
            	//tampung data dari form
            	$id_sejarah = $this->input->post('id_sejarah');
            	$isi_sejarah = $this->input->post('isi_sejarah');
            	$file = $this->upload->data();
            	$gambar = $file['file_name'];
 
                $this->m_sejarah->insert(array(
                	'id_sejarah' => $id_sejarah,
			        'isi_sejarah' => $isi_sejarah,
                    'gambar' => $gambar
				));
				$this->session->set_flashdata('msg','Data berhasil di upload');
				redirect('admin/sejarah');
				// echo $this->db->last_query();
 
        }
	}

    function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_sejarah->delete($id)) {
            redirect(site_url('admin/sejarah'));
        }
    }
 

  function edit($id)
     {
        $i = 1;
        $dt['profil']= $this->m_profil->db_edit($i)->row_array();
        $dt['sejarah']=$this->m_sejarah->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_edit_sejarah',$dt);
      }   

function update()
{
    $id_sejarah=$this->input->post("id_sejarah");
    $isi_sejarah=$this->input->post("isi_sejarah");
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
        $id = array('id_sejarah'=>$id_sejarah);
                    
        $data = array('isi_sejarah'=>$isi_sejarah,'gambar'=>$gambar);

        $this->m_sejarah->update_sejarah($data, $id);
        // echo var_dump($this->upload->display_errors());
        redirect('admin/sejarah');
        // echo $this->db->last_query();
    }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
        // Proses ubah data ke Database
        $id = array('id_sejarah'=>$id_sejarah);
                   
        $data = array('isi_sejarah'=>$isi_sejarah);
        $this->m_sejarah->update_sejarah($data, $id);
        redirect('admin/sejarah');
        // echo $this->db->last_query();
    }
}
}
 
     