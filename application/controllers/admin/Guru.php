
<?php
class Guru extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('m_guru');
        $this->load->model('m_profil');
    }

    function index(){
        $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $data['guru']= $this->m_guru->tampil()->result();
        $this->load->view('admin/admin/v_daftar_guru',$data);
        // echo $this->db->last_query();
    }

    function tambah(){
        $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $data['nik'] = array(
            "nama"      => "",
            "alamat"    => "",
            "pekerjaan" => "",
            "no_rt"    => "",
            "no_rw"    => "",
            "kel_name"    => "",
            "kec_name"    => "",
            "tanggallahir"    => "",
            "tempatlahir"    => "",
            "jenis_klmin"    => "",

        );

        $ktp = $this->input->get('ktp');

        // jika user sudah input nik, maka ambil data niknya dari model m_rekomendasi_bbm
        if (!empty($ktp)) {
            $ambil_nik = $this->m_guru->get_nik($ktp);

            $data['nik'] = json_decode($ambil_nik, true);
        }
        $this->load->view('admin/admin/v_tambah_guru', $data);
    }

    function tambah_guru(){
			$config['upload_path']         = 'images/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 3000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('foto_guru')) //sesuai dengan name pada form 
            {
                   echo 'Anda gagal upload';
            }
            else
            {
            	//tampung data dari form
                $guru_id = $this->input->post('guru_id');
            	$nip = $this->input->post('nip');
                $nik = $this->input->post('nik');
            	$nama_guru = $this->input->post('nama_guru');
                $tgl_lahir_guru = $this->input->post('tgl_lahir_guru');
                $tempat_lahir = $this->input->post('tempat_lahir');
            	$jk_guru = $this->input->post('jk_guru');
            	$alamat_guru = $this->input->post('alamat_guru');
                $no_telp_guru = $this->input->post('no_telp_guru');
                $jabatan = $this->input->post('jabatan');
                $jenis_guru = $this->input->post('jenis_guru');
            	$file = $this->upload->data();
            	$foto_guru = $file['file_name'];

                $data = array(
                    'guru_id' => $guru_id,
                    'nip' => $nip,
                    'nik' => $nik,
                    'nama_guru' => $nama_guru,
                    'tgl_lahir_guru' => $tgl_lahir_guru,
                    'tempat_lahir' => $tempat_lahir,
                    'jk_guru' => $jk_guru,
                    'alamat_guru' => $alamat_guru,
                    'no_telp_guru' => $no_telp_guru,
                    'jabatan' => $jabatan,
                    'jenis_guru' => $jenis_guru,
                    'foto_guru' => $foto_guru
                    );
                $this->m_guru->input_data($data,'guru');
				// $this->session->set_flashdata('msg','Data berhasil di upload');
				redirect('admin/guru');
				// echo $this->db->last_query();
 
        }
	}

    function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_guru->delete($id)) {
            redirect(site_url('admin/guru'));
            // echo $this->db->last_query();
        }
    }
 

  function edit($id)
     {
        $i = 1;
        $dt['profil']= $this->m_profil->db_edit($i)->row_array();
        $dt['guru']=$this->m_guru->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_edit_guru',$dt);
      }   

function update()
{
    $guru_id=$this->input->post("guru_id");
    $nip=$this->input->post("nip");
    $nik = $this->input->post('nik');
    $nama_guru = $this->input->post('nama_guru');
    $tgl_lahir_guru = $this->input->post('tgl_lahir_guru');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $alamat_guru=$this->input->post("alamat_guru");
    $jk_guru  = $this->input->post('jk_guru');
    $no_telp_guru  = $this->input->post('no_telp_guru');
    $jabatan=$this->input->post("jabatan");
    $jenis_guru  = $this->input->post('jenis_guru');
    $new_file_name  = $this->input->post('foto_guru');
    if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
        // Ambil data foto yang dipilih dari form
        // $foto = $_FILES['foto_guru']['name'];
        // $tmp = $_FILES['foto_guru']['tmp_name'];
                 
        // // Rename nama fotonya dengan menambahkan tanggal dan jam upload
        // $fotobaru = date('dmYHis').$foto;
        // Set path folder tempat menyimpan fotonya
        // $path = "images/".$fotobaru;
        
        $config['upload_path']         = 'images/';
        $config['allowed_types']       = 'gif|jpg|png';
        $config['file_name']           = $new_file_name;
        $config['max_size']             = 3000;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $this->upload->do_upload('foto_guru');
        $file =$this->upload->data();
        $foto_guru= $file['file_name'];
        $id = array('guru_id'=>$guru_id);

        // $data['guru']= $this->m_guru->tampil()->result();
        // // Cek apakah file foto sebelumnya ada di folder images
        // if(is_file("images/".$data['foto_guru'])) // Jika foto ada
        // unlink("images/".$data['foto_guru']); // Hapus file foto sebelumnya yang ada di folder images
                    
        $data = array('nip'=>$nip,'no_telp_guru'=>$no_telp_guru,'jabatan'=>$jabatan,'jenis_guru'=>$jenis_guru,'foto_guru'=>$foto_guru);

        $this->m_guru->update_guru($data, $id);
        // echo var_dump($this->upload->display_errors());
        redirect('admin/guru');
        // echo $this->db->last_query();
    }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
        // Proses ubah data ke Database
        $id = array('guru_id'=>$guru_id);
                   
        $data = array('nip'=>$nip,'no_telp_guru'=>$no_telp_guru,'jabatan'=>$jabatan,'jenis_guru'=>$jenis_guru);
        $this->m_guru->update_guru($data, $id);
        redirect('admin/guru');
        // echo $this->db->last_query();
    }
}
}
 
     