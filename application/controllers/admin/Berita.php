
<?php
class Berita extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('m_berita');
        $this->load->model('m_profil');
    }

    function index(){

        $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $data['berita']= $this->m_berita->tampil()->result();
        $this->load->view('admin/admin/v_daftar_berita',$data);
        // echo $this->db->last_query();
    }

    function tambah(){

        $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_tambah_berita', $data);
    }

    function tambah_berita(){
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
            	$id_berita = $this->input->post('id_berita');
            	$tanggal = $this->input->post('tanggal');
            	$tahun=substr($tanggal, 6,4);		
				$bulan=substr($tanggal, 3,2);
				$t=substr($tanggal, 0,2);
				$tgl=$tahun."-".$bulan."-".$t;
            	$judul_berita = $this->input->post('judul_berita');
            	$isi_berita = $this->input->post('isi_berita');
            	$file = $this->upload->data();
            	$gambar = $file['file_name'];
 
                $this->m_berita->insert(array(
                	'id_berita' => $id_berita,
			        'judul_berita' => $judul_berita,
			        'isi_berita' => $isi_berita,
                    'gambar' => $gambar,
			        'tanggal' => $tgl
				));
				$this->session->set_flashdata('msg','Data berhasil di upload');

				redirect('admin/berita');
				// echo $this->db->last_query();
 
        }
	}

    function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_berita->delete($id)) {
            redirect(site_url('admin/berita'));
        }
    }
 

  function edit($id)
     {
        $i = 1;
        $dt['profil']= $this->m_profil->db_edit($i)->row_array();
        $dt['berita']=$this->m_berita->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_edit_berita',$dt);
      }   

function update()
{
    $id_berita=$this->input->post("id_berita");
    $tanggal=$this->input->post("tanggal");
    $judul_berita=$this->input->post("judul_berita");
    $isi_berita  = $this->input->post('isi_berita');
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
        $id = array('id_berita'=>$id_berita);
                    
        $data = array('judul_berita'=>$judul_berita,'isi_berita'=>$isi_berita,'gambar'=>$gambar);

        $this->m_berita->update_berita($data, $id);
        // echo var_dump($this->upload->display_errors());
        redirect('admin/berita');
        // echo $this->db->last_query();
    }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
        // Proses ubah data ke Database
        $id = array('id_berita'=>$id_berita);
                   
        $data = array('judul_berita'=>$judul_berita,'isi_berita'=>$isi_berita);
        $this->m_berita->update_berita($data, $id);
        redirect('admin/berita');
        // echo $this->db->last_query();
    }
}
}
 
     