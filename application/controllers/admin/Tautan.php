<?php
class Tautan extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_tautan');	
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
    	$data['tautan']= $this->m_tautan->tampil()->result();
        $this->load->view('admin/admin/v_daftar_tautan', $data);
    }

  function tambah(){
  	$id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_tambah_tautan', $data);
    }

   function tambah_aksi(){
   
			$config['upload_path']         = 'images/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 3000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('logo')) //sesuai dengan name pada form 
            {
                   echo 'Anda gagal upload';
                   // echo $this->db->last_query();
                   echo var_dump($this->upload->display_errors());
            }
            else
            {
            	//tampung data dari form
            	$id_tautan = $this->input->post('id_tautan');
				$judul_tautan = $this->input->post('judul_tautan');
				$tujuan_tautan = $this->input->post('tujuan_tautan');
            	$file = $this->upload->data();
            	$logo = $file['file_name'];
 
                $this->m_tautan->insert(array(
                	'id_tautan' => $id_tautan,
			        'judul_tautan' => $judul_tautan,
			        'tujuan_tautan' => $tujuan_tautan,
                    'logo' => $logo
				));
				$this->session->set_flashdata('msg','Data berhasil di upload');
				redirect('admin/tautan');
                // echo var_dump($this->upload->display_errors());
				// echo $this->db->last_query();
 
        }
	}
 // function tambah_aksi(){
	// 	$id_tautan = $this->input->post('id_tautan');
	// 	$judul_tautan = $this->input->post('judul_tautan');
	// 	$tujuan_tautan = $this->input->post('tujuan_tautan');
	// 	$logo = $this->input->post('logo');

 
	// 	$data = array(
	// 		'id_tautan' => $id_tautan,
	// 		'judul_tautan' => $judul_tautan,
	// 		'tujuan_tautan' => $tujuan_tautan,
	// 		'logo' => $logo

			
	// 		);
	// 	$this->m_tautan->input_data($data,'tautan');
	// 	redirect('admin/tautan');
	// 	// echo $this->db->last_query();
	// }
	function edit($id)
	{
		$i = 1;
        $data['profil']= $this->m_profil->db_edit($i)->row_array();
	    $data['tautan'] = $this->m_tautan->edit($id);
	    // echo $this->db->last_query();
	    $this->load->view('admin/admin/v_edit_tautan', $data);
	}

	function update()
	{
		
	    $id_tautan = $this->input->post('id_tautan');
		$judul_tautan = $this->input->post('judul_tautan');
		$tujuan_tautan = $this->input->post('tujuan_tautan');
	    $new_file_name  = $this->input->post('logo');
	    if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
	        
	        $config['upload_path']         = 'images/';
	        $config['allowed_types']       = 'gif|jpg|png';
	        $config['file_name']           = $new_file_name;
	        $config['max_size']             = 3000;
	        // $config['max_width']            = 1024;
	        // $config['max_height']           = 768;
	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);

	        $this->upload->do_upload('logo');
	        $file =$this->upload->data();
	        $logo= $file['file_name'];
	        $id = array('id_tautan'=>$id_tautan);
	                    
	        $data = array('judul_tautan'=>$judul_tautan,'tujuan_tautan'=>$tujuan_tautan,'logo'=>$logo);

	        $this->m_tautan->update_tautan($data, $id);
	        // echo var_dump($this->upload->display_errors());
	        redirect('admin/tautan');
	        // echo $this->db->last_query();
	    }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
	        // Proses ubah data ke Database
	        $id = array('id_tautan'=>$id_tautan);
	                   
	        $data = array('judul_tautan'=>$judul_tautan);
	        $data = array('tujuan_tautan'=>$tujuan_tautan);
	        
	        $this->m_tautan->update_tautan($data, $id);
	        redirect('admin/tautan');
	        // echo $this->db->last_query();
	    }
	}
	// function update()
	// {
	//     $this->load->library('form_validation');
	//     $this->form_validation->set_error_delimiters('<span>', '</span>');
	//     $validations = array(
	//         array(
	//             'field' => 'id_tautan',
	//             'label' => 'Id Tautan',
	//             'rules' => 'trim|required|max_length[255]',
	//             'field' => 'judul_tautan',
	//             'label' => 'Judul Tutan',
	//             'rules' => 'trim|required|max_length[255]',
	//             'field' => 'tujuan_tautan',
	//             'label' => 'Tujuan Tautan ',
	//             'rules' => 'trim|required|max_length[255]',
	//             'field' => 'logo',
	//             'label' => 'Logo ',
	//             'rules' => 'trim|required|max_length[255]'
	//         )
	//     );
	//     $this->form_validation->set_rules($validations);
	//     if ($this->form_validation->run() === FALSE) {
	//         $this->edit($this->input->post('id'));
	//     } else {
	//         $data['id_tautan'] = $this->input->post('id_tautan');
	//         $data['judul_tautan'] = $this->input->post('judul_tautan');
	//         $data['tujuan_tautan'] = $this->input->post('tujuan_tautan');
	//         $data['logo'] = $this->input->post('logo');

	//         if ($this->m_tautan->update($data)) {

	//             redirect('admin/tautan');
	//             // echo $this->db->last_query();
	//         } else {
	//             log_message('error', 'Error');
	//         }
	//     }
	// }
	 function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_tautan->delete($id)) {
            redirect(site_url('admin/tautan'));
        }
    }
}