
<?php
class Slideshow extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('m_slideshow');
        $this->load->model('m_profil');
    }

    function index(){
        $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $data['slideshow']= $this->m_slideshow->tampil()->result();
        $this->load->view('admin/admin/v_daftar_slideshow',$data);
        // echo $this->db->last_query();
    }

    function tambah(){
        $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_tambah_slideshow', $data);
    }

    function tambah_slideshow(){
       
			$config['upload_path']         = 'images/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 3000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
            {
                   echo 'Anda gagal upload';
                   echo $this->db->last_query();
            }
            else
            {
            	//tampung data dari form
            	$id_slideshow = $this->input->post('id_slideshow');
                $judul_keterangan=$this->input->post("judul_keterangan");
            	$keterangan = $this->input->post('keterangan');
                $deskripsi = $this->input->post('deskripsi');
            	$file = $this->upload->data();
            	$gambar = $file['file_name'];
 
                $this->m_slideshow->insert(array(
                	'id_slideshow' => $id_slideshow,
                    'judul_keterangan' => $judul_keterangan,
			        'keterangan' => $keterangan,
                    'gambar' => $gambar
				));
				$this->session->set_flashdata('msg','Data berhasil di upload');
				redirect('admin/slideshow');
				// echo $this->db->last_query();
 
        }
	}

    function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_slideshow->delete($id)) {
            redirect(site_url('admin/slideshow'));
        }
    }
 

  function edit($id)
     {
        $i = 1;
        $dt['profil']= $this->m_profil->db_edit($i)->row_array();
        $dt['slideshow']=$this->m_slideshow->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_edit_slideshow',$dt);
      }   

        function update()
{
    
    $id_slideshow=$this->input->post("id_slideshow");
    $judul_keterangan=$this->input->post("judul_keterangan");
    $keterangan=$this->input->post("keterangan");
    $deskripsi=$this->input->post("deskripsi");
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
        $id = array('id_slideshow'=>$id_slideshow);
                    
        $data = array('judul_keterangan'=>$judul_keterangan,'keterangan'=>$keterangan,'deskripsi'=>$deskripsi,'gambar'=>$gambar);

        $this->m_slideshow->update_slideshow($data, $id);
        // echo var_dump($this->upload->display_errors());
        redirect('admin/slideshow');
        // echo $this->db->last_query();
    }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
        // Proses ubah data ke Database
        $id = array('id_slideshow'=>$id_slideshow);
                   
        $data = array('judul_keterangan'=>$judul_keterangan,'keterangan'=>$keterangan,'deskripsi'=>$deskripsi);
        $this->m_slideshow->update_slideshow($data, $id);
        redirect('admin/slideshow');
        // echo $this->db->last_query();
    }
}
}
 
     