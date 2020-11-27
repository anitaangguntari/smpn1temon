<?php
class Mapel extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_mapel');	
        $this->load->model('m_profil');	
        $this->load->helper('url');	
		$this->load->library('form_validation');
    }
 function index(){
 	$id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
    	$data['mapel']= $this->m_mapel->tampil()->result();
        $this->load->view('admin/admin/v_daftar_mapel', $data);
        // echo $this->db->last_query();
    }

  function tambah(){
  	$id = 1;
        $this->data['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->data['guru'] = $this->m_mapel->getGuru1();
        $this->data['kelas'] = $this->m_mapel->getKelas1();
        $this->load->view('admin/admin/v_tambah_mapel', $this->data);
    }
 function tambah_aksi(){
		$id_mapel = $this->input->post('id_mapel');
		$nama_mapel = $this->input->post('nama_mapel');
		$guru_id = $this->input->post('guru_id');
 		$kelas = $this->input->post('kelas');
		$data = array(
			'id_mapel' => $id_mapel,
			'nama_mapel' => $nama_mapel,
			'guru_id' => $guru_id,
			'kelas' => $kelas
			
			);
		$this->m_mapel->input_data($data,'mapel');
		redirect('admin/mapel');
		// echo $this->db->last_query();
	}
	// function edit($id)
	// {
	// 	$data['mapel'] = $this->m_mapel->edit($id);
	//     $data['guru'] = $this->m_mapel->getNIP();
 //    	$data['kelas'] = $this->m_mapel->getKelas();
	    
	//     // echo $this->db->last_query();
	//     $this->load->view('admin/admin/v_edit_mapel', $data);
	// }
	 function edit($id = null)
    {
    	$i = 1;
        $data['profil']= $this->m_profil->db_edit($i)->row_array();
        if (!isset($id)) redirect('admin/mapel');
       
        $mapel = $this->m_mapel;
        $getkelas = $mapel->getKelas();
        $getguru = $mapel->getGuru();
        
        $validation = $this->form_validation;
        $validation->set_rules($mapel->rules());

        if ($validation->run()) {
            $mapel->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["listkelas"] = $getkelas;
        $data["listguru"] = $getguru;
        $data["varmapel"] = $mapel->getById($id);
        if (!$data["varmapel"]) show_404();
        
        $this->load->view("admin/admin/v_edit_mapel", $data);
    }


	function update()
	{
	    $this->load->library('form_validation');
	    $this->form_validation->set_error_delimiters('<span>', '</span>');
	    $validations = array(
	        array(
	            'field' => 'id_mapel',
	            'label' => 'Id Mapel',
	            'rules' => 'trim|required|max_length[255]',
	            'field' => 'nama_mapel',
	            'label' => 'Nama Mapel',
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
	        $data['id_mapel'] = $this->input->post('id_mapel');
	        $data['nama_mapel'] = $this->input->post('nama_mapel');
	        $data['nip'] = $this->input->post('nip');
	        $data['kelas'] = $this->input->post('kelas');
	        if ($this->m_mapel->update($data)) {

	            redirect('admin/mapel');
	            echo $this->db->last_query();
	        } else {
	            log_message('error', 'Error');
	        }
	    }
	}
	 function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_mapel->delete($id)) {
            redirect(site_url('admin/mapel'));
        }
    }
}