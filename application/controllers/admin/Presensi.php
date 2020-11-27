<?php
class Presensi extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_presensi');	
        $this->load->helper('url');	
		$this->load->library('form_validation');
    }
 function index(){
 	$id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
    	$data['presensi']= $this->m_presensi->tampil()->result();
        $this->load->view('admin/admin/v_daftar_presensi', $data);
    }

  function tambah(){
  	$id = 1;
        $this->$data['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->data['siswa'] = $this->m_presensi->getSiswa();
        $this->data['presensi'] = $this->m_presensi->getpresensi();
        $this->load->view('admin/admin/v_tambah_presensi', $this->data);
        // echo $this->db->last_query();
    }
 function tambah_aksi(){
		$no_presensi = $this->input->post('no_presensi');
		$nis = $this->input->post('nis');
		$tanggal = $this->input->post('tanggal');
 		$mapel = $this->input->post('mapel');
 		$keterangan = $this->input->post('keterangan');
		$data = array(
			'no_presensi' => $no_presensi,
			'nis' => $nis,
			'tanggal' => $tanggal,
			'mapel' => $mapel,
			'keterangan' => $keterangan
			);
		$this->m_presensi->input_data($data,'presensi');
		redirect('admin/presensi');
		// echo $this->db->last_query();
	}
	function edit($id = null)
    {
    	$id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        if (!isset($id)) redirect('admin/presensi');
       
        $presensi = $this->m_presensi;
        $getmapel = $presensi->getMapel();
        
        $validation = $this->form_validation;
        $validation->set_rules($presensi->rules());

        if ($validation->run()) {
            $presensi->update();

            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["listmapel"] = $getmapel;
        $data["varpresensi"] = $presensi->getById($id);
        if (!$data["varpresensi"]) show_404();
        
        $this->load->view("admin/admin/v_edit_presensi", $data);
    }
	// function edit($id = null)
 //    {
 //        if (!isset($id)) redirect('admin/presensi');
       
 //        $presensi = $this->m_presensi;
 //        $getsiswa = $presensi->getSiswa();
 //        $getpresensi = $presensi->getpresensi();
        
 //        $validation = $this->form_validation;
 //        $validation->set_rules($presensi->rules());

 //        if ($validation->run()) {
 //            $presensi->update();

 //            $this->session->set_flashdata('success', 'Berhasil disimpan');
 //        }

 //        $data["listsiswa"] = $getsiswa;
 //        $data["varpresensi"] = $presensi->getById($id);
 //        if (!$data["varpresensi"]) show_404();
        
 //        $this->load->view("admin/admin/v_edit_presensi", $data);
 //    }


	function update()
	{
	    $this->load->library('form_validation');
	    $this->form_validation->set_error_delimiters('<span>', '</span>');
	    $validations = array(
	        array(
	            'field' => 'no_presensi',
	            'label' => 'Id presensi',
	            'rules' => 'trim|required|max_length[255]',
	            'field' => 'nis',
	            'label' => 'Nama presensi',
	            'rules' => 'trim|required|max_length[255]',
	            'field' => 'tanggal',
	            'label' => 'tanggal',
	            'rules' => 'trim|required|max_length[255]'
	        )
	    );
	    $this->form_validation->set_rules($validations);
	    if ($this->form_validation->run() === FALSE) {
	        $this->edit($this->input->post('id'));
	    } else {
	        $data['no_presensi'] = $this->input->post('no_presensi');
	        $data['nis'] = $this->input->post('nis');
	        $data['tanggal'] = $this->input->post('tanggal');
	        $data['mapel'] = $this->input->post('mapel');
	        $data['keterangan'] = $this->input->post('keterangan');
	        if ($this->m_presensi->update($data)) {

	            redirect('admin/presensi');
	            // echo $this->db->last_query();
	        } else {
	            log_message('error', 'Error');
	        }
	    }
	}
	 function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_presensi->delete($id)) {
            redirect(site_url('admin/presensi'));
        }
    }
}