<?php
class Sosmed extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_sosmed');	
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
    	$data['sosmed']= $this->m_sosmed->tampil()->result();
        $this->load->view('admin/admin/v_daftar_sosmed', $data);
    }

  function tambah(){
  	$id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_tambah_sosmed', $data);
    }

   function tambah_aksi(){
   
			$config['upload_path']         = 'images/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 3000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('logo_sosmed')) //sesuai dengan name pada form 
            {
                   echo 'Anda gagal upload';
                   // echo $this->db->last_query();
                   echo var_dump($this->upload->display_errors());
            }
            else
            {
            	//tampung data dari form
            	$id_sosmed = $this->input->post('id_sosmed');
				$link_sosmed = $this->input->post('link_sosmed');
            	$file = $this->upload->data();
            	$logo_sosmed = $file['file_name'];
 
                $this->m_sosmed->insert(array(
                	'id_sosmed' => $id_sosmed,
			        'link_sosmed' => $link_sosmed,
                    'logo_sosmed' => $logo_sosmed
				));
				$this->session->set_flashdata('msg','Data berhasil di upload');
				redirect('admin/sosmed');
                // echo var_dump($this->upload->display_errors());
				// echo $this->db->last_query();
 
        	}
	}

	function edit($id)
	{
		$i = 1;
        $data['profil']= $this->m_profil->db_edit($i)->row_array();
	    $data['sosmed'] = $this->m_sosmed->edit($id);
	    // echo $this->db->last_query();
	    $this->load->view('admin/admin/v_edit_sosmed', $data);
	}

	function update()
	{
		
	    $id_sosmed=$this->input->post("id_sosmed");
	    $link_sosmed=$this->input->post("link_sosmed");
	    $new_file_name  = $this->input->post('logo_sosmed');
	    if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
	        
	        $config['upload_path']         = 'images/';
	        $config['allowed_types']       = 'gif|jpg|png';
	        $config['file_name']           = $new_file_name;
	        $config['max_size']             = 3000;
	        // $config['max_width']            = 1024;
	        // $config['max_height']           = 768;
	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);

	        $this->upload->do_upload('logo_sosmed');
	        $file =$this->upload->data();
	        $logo_sosmed= $file['file_name'];
	        $id = array('id_sosmed'=>$id_sosmed);
	                    
	        $data = array('link_sosmed'=>$link_sosmed,'logo_sosmed'=>$logo_sosmed);

	        $this->m_sosmed->update_sosmed($data, $id);
	        // echo var_dump($this->upload->display_errors());
	        redirect('admin/sosmed');
	        // echo $this->db->last_query();
	    }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
	        // Proses ubah data ke Database
	        $id = array('id_sosmed'=>$id_sosmed);
	                   
	        $data = array('link_sosmed'=>$link_sosmed);
	        $this->m_sosmed->update_sosmed($data, $id);
	        redirect('admin/sosmed');
	        // echo $this->db->last_query();
	    }
	}
	
	 function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_sosmed->delete($id)) {
            redirect(site_url('admin/sosmed'));
        }
    }
}