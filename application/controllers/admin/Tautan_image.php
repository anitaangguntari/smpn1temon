
<?php
class Tautan_image extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('m_tautan_image');
        $this->load->model('m_profil');
    }

    function index(){
        $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $data['tautan_image']= $this->m_tautan_image->tampil()->result();
        $this->load->view('admin/admin/v_daftar_tautan_image',$data);
        // echo $this->db->last_query();
    }

    function tambah(){
        $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_tambah_tautan_image');
    }

    function tambah_tautan_image(){
       
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
            	$id = $this->input->post('id');
            	$link = $this->input->post('link');
            	$file = $this->upload->data();
            	$gambar = $file['file_name'];
 
                $this->m_tautan_image->insert(array(
                	'id' => $id,
                    'gambar' => $gambar,
                    'link' => $link
				));
				$this->session->set_flashdata('msg','Data berhasil di upload');
				redirect('admin/tautan_image');
				// echo $this->db->last_query();
 
        }
	}

    function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_tautan_image->delete($id)) {
            redirect(site_url('admin/tautan_image'));
        }
    }
 

  function edit($id)
     {
        $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $dt['tautan_image']=$this->m_tautan_image->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_edit_tautan_image',$dt);
      }   

function update()
{
   
    $id=$this->input->post("id");
    $link=$this->input->post("link");
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
        $id = array('id'=>$id);
                    
        $data = array('link'=>$link,'gambar'=>$gambar);

        $this->m_tautan_image->update_tautan_image($data, $id);
        // echo var_dump($this->upload->display_errors());
        redirect('admin/tautan_image');
        // echo $this->db->last_query();
    }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
        // Proses ubah data ke Database
        $id = array('id'=>$id);
                   
        $data = array('link'=>$link);
        $this->m_tautan_image->update_tautan_image($data, $id);
        redirect('admin/tautan_image');
        // echo $this->db->last_query();
    }
}
}
 
     