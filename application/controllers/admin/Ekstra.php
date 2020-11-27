
<?php
class Ekstra extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_ekstra');
        $this->load->model('m_profil');

    }

    function index(){
    	$id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
    	$data['ekstra']= $this->m_ekstra->tampil()->result();
        $this->load->view('admin/admin/v_daftar_ekstra',$data);
        // echo $this->db->last_query();
    }

     function tambah(){
     	$id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_tambah_ekstra', $data);
    }

    function tambah_aksi(){
		$id_ekstra = $this->input->post('id_ekstra');
		$hari = $this->input->post('hari');
		$jam_mulai = $this->input->post('jam_mulai');
		$jam_selesai = $this->input->post('jam_selesai');
		$jenis_kegiatan = $this->input->post('jenis_kegiatan');
 
		$data = array(
			'id_ekstra' => $id_ekstra,
			'hari' => $hari,
			'jam_mulai' => $jam_mulai,
			'jam_selesai' => $jam_selesai,
			'jenis_kegiatan' => $jenis_kegiatan
			
			);
		$this->m_ekstra->input_data($data,'ekstra');
		redirect('admin/ekstra');
		// echo $this->db->last_query();
	}
	
	function edit($id)
	{
		$i = 1;
        $data['profil']= $this->m_profil->db_edit($i)->row_array();
	    $data['ekstra'] = $this->m_ekstra->edit($id);
	    // echo $this->db->last_query();
	    $this->load->view('admin/admin/v_edit_ekstra', $data);
	}
	
	function update()
	{
	    $this->load->library('form_validation');
	    $this->form_validation->set_error_delimiters('<span>', '</span>');
	    $validations = array(
	        array(
	            'field' => 'id_ekstra',
	            'label' => 'Id Ekstra',
	            'rules' => 'trim|required|max_length[255]',
	            'field' => 'hari',
	            'label' => 'Hari',
	            'rules' => 'trim|required|max_length[255]',
	            'field' => 'jenis_kegiatan',
	            'label' => 'jenis_kegiatan',
	            'rules' => 'trim|required|max_length[255]'
	        )
	    );
	    $this->form_validation->set_rules($validations);
	    if ($this->form_validation->run() === FALSE) {
	        $this->edit($this->input->post('id'));
	    } else {
	        $data['id_ekstra'] = $this->input->post('id_ekstra');
	        $data['hari'] = $this->input->post('hari');
	        $data['jam_mulai'] = $this->input->post('jam_mulai');
	        $data['jam_selesai'] = $this->input->post('jam_selesai');
	        $data['jenis_kegiatan'] = $this->input->post('jenis_kegiatan');


	        if ($this->m_ekstra->update($data)) {

	            redirect('admin/ekstra');
	            // echo $this->db->last_query();
	        } else {
	            log_message('error', 'Error');
	        }
	    }
	}
	
	 function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_ekstra->delete($id)) {
            redirect(site_url('admin/ekstra'));
        }
    }
   
}