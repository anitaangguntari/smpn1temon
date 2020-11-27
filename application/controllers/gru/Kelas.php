<?php
class Kelas extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_kelas');	
        $this->load->model('m_profil');
        $this->load->helper('url');	
		$this->load->library('form_validation');
    }
 function index(){
 	 $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
    	$data['kelas']= $this->m_kelas->tampil()->result();
        $this->load->view('admin/guru/v_daftar_kelas', $data);
    }

  function tambah(){
  	 $id = 1;
        $this->data['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->data['guru'] = $this->m_kelas->getGuru1();
        $this->load->view('admin/guru/v_tambah_kelas', $this->data);
    }
 function tambah_aksi(){
		$id_kelas = $this->input->post('id_kelas');
		$nama_kelas = $this->input->post('nama_kelas');
		$nip = $this->input->post('nip');
 
		$data = array(
			'id_kelas' => $id_kelas,
			'nama_kelas' => $nama_kelas,
			'nip' => $nip
			
			);
		$this->m_kelas->input_data($data,'kelas');
		redirect('gru/kelas');
		// echo $this->db->last_query();
	}
	// function edit($id)
	// {
	//     $data['kelas'] = $this->m_kelas->edit($id);
	//     // echo $this->db->last_query();
	//     $this->load->view('admin/admin/v_edit_kelas', $data);
	// }
	 function edit($id = null)
    {
    	 $i = 1;
        $data['profil']= $this->m_profil->db_edit($i)->row_array();
        if (!isset($id)) redirect('gru/kelas');
       
        $kelas = $this->m_kelas;
        $getguru = $kelas->getGuru();
        
        $validation = $this->form_validation;
        $validation->set_rules($kelas->rules());

        if ($validation->run()) {
            $kelas->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["listguru"] = $getguru;
        $data["varkelas"] = $kelas->getById($id);
        if (!$data["varkelas"]) show_404();
        
        $this->load->view("admin/guru/v_edit_kelas", $data);
    }
	function update()
	{
	    $this->load->library('form_validation');
	    $this->form_validation->set_error_delimiters('<span>', '</span>');
	    $validations = array(
	        array(
	            'field' => 'id_kelas',
	            'label' => 'Id Kelas',
	            'rules' => 'trim|required|max_length[255]',
	            'field' => 'nama_kelas',
	            'label' => 'Nama Kelas',
	            'rules' => 'trim|required|max_length[255]',
	            'field' => 'nip',
	            'label' => 'NIP',
	            'rules' => 'trim|required|max_length[255]'
	        )
	    );
	    $this->form_validation->set_rules($validations);
	    if ($this->form_validation->run() === FALSE) {
	        $this->edit($this->input->post('id'));
	    } else {
	        $data['id_kelas'] = $this->input->post('id_kelas');
	        $data['nama_kelas'] = $this->input->post('nama_kelas');
	        $data['nip'] = $this->input->post('nip');
	        if ($this->m_kelas->update($data)) {

	            redirect('gru/kelas');
	            // echo $this->db->last_query();
	        } else {
	            log_message('error', 'Error');
	        }
	    }
	}
	 function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_kelas->delete($id)) {
            redirect(site_url('gru/kelas'));
        }
    }
}