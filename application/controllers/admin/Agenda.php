
<?php
class Agenda extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_agenda');
        $this->load->model('m_profil');

    }

    function index(){
    	$id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
    	$data['agenda']= $this->m_agenda->tampil()->result();
        $this->load->view('admin/admin/v_daftar_agenda',$data);
        // echo $this->db->last_query();
    }
    function tambah(){
    	$id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_tambah_agenda', $data);
    }
    function tambah_aksi(){
    	$config['upload_path']         = 'images/';  // folder upload 
        $config['allowed_types']        = 'gif|jpg|png'; // jenis file
        $config['max_size']             = 3000;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
        {
               echo 'Anda gagal upload';
               echo var_dump($this->upload->display_errors());
        }
        else
        {
			$id_agenda = $this->input->post('id_agenda');
			$tanggal_agenda = $this->input->post('tanggal_agenda');
			$judul_agenda = $this->input->post('judul_agenda');
			$keterangan_agenda = $this->input->post('keterangan_agenda');
			$file = $this->upload->data();
            $gambar = $file['file_name'];
	 
			$data = array(
				'id_agenda' => $id_agenda,
				'tanggal_agenda' => $tanggal_agenda,
				'judul_agenda' => $judul_agenda,
				'keterangan_agenda' => $keterangan_agenda,
				'gambar' => $gambar
				);
			$this->m_agenda->input_data($data,'agenda');
			redirect('admin/agenda');
		}
	}
	function edit($id)
	{
		$i = 1;
        $data['profil']= $this->m_profil->db_edit($i)->row_array();
	    $data['agenda'] = $this->m_agenda->edit($id);
	    // echo $this->db->last_query();
	    $this->load->view('admin/admin/v_edit_agenda', $data);
	}
	function update()
	{
	    $id_agenda=$this->input->post("id_agenda");
	    $judul_agenda=$this->input->post("judul_agenda");
	    $keterangan_agenda=$this->input->post("keterangan_agenda");
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
	        $id = array('id_agenda'=>$id_agenda);
	                    
	        $data = array('judul_agenda'=>$judul_agenda,'keterangan_agenda'=>$keterangan_agenda,'gambar'=>$gambar);

	        $this->m_agenda->update_agenda($data, $id);
	        // echo var_dump($this->upload->display_errors());
	        redirect('admin/agenda');
	        
	    }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
	        // Proses ubah data ke Database
	        $id = array('id_agenda'=>$id_agenda);
	                   
	        $data = array('judul_agenda'=>$judul_agenda,'keterangan_agenda'=>$keterangan_agenda);
	        $this->m_agenda->update_agenda($data, $id);
	        redirect('admin/agenda');
	        // echo $this->db->last_query();
	    }
	}

	 function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_agenda->delete($id)) {
            redirect(site_url('admin/agenda'));
        }
    }
}