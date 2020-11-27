
<?php
class Artikel extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('m_artikel');
        $this->load->model('m_profil');
    }

    function index(){
         $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $data['artikel']= $this->m_artikel->tampil()->result();
        $this->load->view('admin/guru/v_daftar_artikel',$data);
        // echo $this->db->last_query();
    }

    function tambah(){
         $id = 1;
        $dt['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/guru/v_tambah_artikel', $dt);
    }

    function tambah_artikel(){
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
            	$id_artikel = $this->input->post('id_artikel');
            	$tanggal_artikel = $this->input->post('tanggal_artikel');
            	$tahun=substr($tanggal_artikel, 6,4);		
				$bulan=substr($tanggal_artikel, 3,2);
				$t=substr($tanggal_artikel, 0,2);
				$tgl=$tahun."-".$bulan."-".$t;
            	$judul_artikel = $this->input->post('judul_artikel');
            	$isi_artikel = $this->input->post('isi_artikel');
            	$file = $this->upload->data();
            	$gambar = $file['file_name'];
 
                $this->m_artikel->insert(array(
                	'id_artikel' => $id_artikel,
			        'judul_artikel' => $judul_artikel,
			        'isi_artikel' => $isi_artikel,
                    'gambar' => $gambar,
			        'tanggal_artikel' => $tgl
				));
				$this->session->set_flashdata('msg','Data berhasil di upload');

				redirect('gru/artikel');
				// echo $this->db->last_query();
 
        }
	}

    function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_artikel->delete($id)) {
            redirect(site_url('gru/artikel'));
        }
    }
 

    function edit($id)
     {
         $i = 1;
        $dt['profil']= $this->m_profil->db_edit($i)->row_array();
        $dt['artikel']=$this->m_artikel->db_edit($id)->row_array();
        $this->load->view('admin/guru/v_edit_artikel',$dt);
      }   

    function update()
    {
        $id_artikel=$this->input->post("id_artikel");
        $tanggal_artikel=$this->input->post("tanggal_artikel");
        $judul_artikel=$this->input->post("judul_artikel");
        $isi_artikel  = $this->input->post('isi_artikel');
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
            $id = array('id_artikel'=>$id_artikel);
                        
            $data = array('judul_artikel'=>$judul_artikel,'isi_artikel'=>$isi_artikel,'gambar'=>$gambar);

            $this->m_artikel->update_artikel($data, $id);
            // echo var_dump($this->upload->display_errors());
            redirect('gru/artikel');
            // echo $this->db->last_query();
        }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
            // Proses ubah data ke Database
            $id = array('id_artikel'=>$id_artikel);
                       
            $data = array('judul_artikel'=>$judul_artikel,'isi_artikel'=>$isi_artikel);
            $this->m_artikel->update_artikel($data, $id);
            redirect('gru/artikel');
            // echo $this->db->last_query();
        }
    }
}
 
     