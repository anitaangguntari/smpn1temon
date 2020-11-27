<?php
class Admin extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_admin');	
        $this->load->helper('url');	
		$this->load->library('form_validation');
        $this->load->model('m_profil'); 

    }

  	function halamanAdmin(){
        $this->load->view('admin/admin/v_halamanAdmin');
    }

 function index(){
 	 	$id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
    	$data['admin']= $this->m_admin->tampil()->result();
        $this->load->view('admin/admin/v_daftar_admin', $data);
    }

  function tambah(){
  		$id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_tambah_admin', $data);
    }
 function tambah_aksi(){
		$id_admin = $this->input->post('id_admin');
		$nama_admin = $this->input->post('nama_admin');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$jabatan = $this->input->post('jabatan');
 
		$data = array(
			'id_admin' => $id_admin,
			'nama_admin' => $nama_admin,
			'username' => $username,
			'password' => $password,
			'jabatan' => $jabatan
			
			);
		$this->m_admin->input_data($data,'admin');
		redirect('admin/admin');
		// echo $this->db->last_query();
	}
	function edit($id)
	{
		$i = 1;
        $data['profil']= $this->m_profil->db_edit($i)->row_array();
	    $data['admin'] = $this->m_admin->edit($id);
	    // echo $this->db->last_query();
	    $this->load->view('admin/admin/v_edit_admin', $data);
	}
	function update()
	{
	    $this->load->library('form_validation');
	    $this->form_validation->set_error_delimiters('<span>', '</span>');
	    $validations = array(
	        array(
	            'field' => 'id_admin',
	            'label' => 'Id Admin',
	            'rules' => 'trim|required|max_length[255]',
	            'field' => 'nama_admin',
	            'label' => 'Nama Admin',
	            'rules' => 'trim|required|max_length[255]',
	            'field' => 'username',
	            'label' => 'Username Admin',
	            'rules' => 'trim|required|max_length[255]',
	            'field' => 'password',
	            'label' => 'Password Admin',
	            'rules' => 'trim|required|max_length[255]',
	            'field' => 'jabatan',
	            'label' => 'Jabatan Admin',
	            'rules' => 'trim|required|max_length[255]'
	        )
	    );
	    $this->form_validation->set_rules($validations);
	    if ($this->form_validation->run() === FALSE) {
	        $this->edit($this->input->post('id'));
	    } else {
	        $data['id_admin'] = $this->input->post('id_admin');
	        $data['nama_admin'] = $this->input->post('nama_admin');
	        $data['username'] = $this->input->post('username');
	        $data['password'] = md5($this->input->post('password'));
	        $data['jabatan'] = $this->input->post('jabatan');
	        if ($this->m_admin->update($data)) {

	            redirect('admin/admin');
	            // echo $this->db->last_query();
	        } else {
	            log_message('error', 'Error');
	        }
	    }
	}
	 function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_admin->delete($id)) {
            redirect(site_url('admin/admin'));
        }
    }
}