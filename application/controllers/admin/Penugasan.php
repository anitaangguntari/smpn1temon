
<?php
class Penugasan extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_bukutamu');
        $this->load->model('m_mapel');
        $this->load->model('m_berita');
        $this->load->model('m_tautan');
        $this->load->model('m_profil');	
        $this->load->model('m_guru'); 
        $this->load->model('m_pengumuman');
        $this->load->model('m_fasilitas');
        $this->load->model('m_sosmed');
        $this->load->model('m_jadwal');
        $this->load->model('m_penugasan');

    }

    function index(){
        $data['tugas']= $this->m_penugasan->tampilTugas()->result();
    	$id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/guru/v_daftar_tugas',$data);
    }
    function tambah(){
        $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $data['guru']= $this->m_guru->tampil()->result();
        $data['mapel']= $this->m_mapel->tampil()->result();
        $this->load->view('admin/guru/v_tambah_tugas', $data);
    }
    function tambah_aksi(){
            $config['upload_path']         = 'images/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 3000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('isi_tugas')) //sesuai dengan name pada form 
            {
                   echo 'Anda gagal upload';
            }
            else
            {
        		$id_tugas = $this->input->post('id_tugas');
                $guru_id = $this->input->post('guru_id');
        		$id_mapel = $this->input->post('id_mapel');
        		$kelas = $this->input->post('kelas');
                $file = $this->upload->data();
        		$isi_tugas = $file['file_name'];
        		$ket_tugas = $this->input->post('ket_tugas');
         
        		$data = array(
                    'id_tugas' => $id_tugas,
                    'guru_id' => $guru_id,
        			'id_mapel' => $id_mapel,
        			'kelas' => $kelas,
        			'isi_tugas' => $isi_tugas,
        			'ket_tugas' => $ket_tugas
        			
        			);
        		$this->m_penugasan->input_data($data,'penugasan');
        		redirect('admin/penugasan');
        		// echo $this->db->last_query();
        	}
        }

    function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_penugasan->delete($id)) {
            redirect(site_url('admin/penugasan'));
            // echo $this->db->last_query();
        }
    }
 

  function edit($id)
     {
        $i = 1;
        $dt['profil']= $this->m_profil->db_edit($i)->row_array();
        $dt['tugas']=$this->m_penugasan->db_edit($id)->row_array();
        $dt['guru']= $this->m_guru->tampil()->result();
        $dt['mapel']= $this->m_mapel->tampil()->result();
        $this->load->view('admin/guru/v_edit_tugas',$dt);
      }   

function update()
{
    $id_tugas = $this->input->post('id_tugas');
    $guru_id = $this->input->post('guru_id');
    $id_mapel = $this->input->post('id_mapel');
    $kelas = $this->input->post('kelas');
    $ket_tugas = $this->input->post('ket_tugas');
    $new_file_name  = $this->input->post('isi_tugas');
    if(isset($_POST['ubah'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
        // Ambil data foto yang dipilih dari form
        // $foto = $_FILES['isi_tugas']['name'];
        // $tmp = $_FILES['isi_tugas']['tmp_name'];
                 
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

        $this->upload->do_upload('isi_tugas');
        $file =$this->upload->data();
        $isi_tugas= $file['file_name'];
        $id = array('id_tugas'=>$id_tugas);

        // $data['guru']= $this->m_guru->tampil()->result();
        // // Cek apakah file foto sebelumnya ada di folder images
        // if(is_file("images/".$data['isi_tugas'])) // Jika foto ada
        // unlink("images/".$data['isi_tugas']); // Hapus file foto sebelumnya yang ada di folder images
                    
        $data = array('guru_id'=>$guru_id,'id_mapel'=>$id_mapel,'kelas'=>$kelas,'isi_tugas'=>$isi_tugas,'ket_tugas'=>$ket_tugas);

        $this->m_penugasan->update($data, $id);
        // echo var_dump($this->upload->display_errors());
        redirect('admin/penugasan');
        // echo $this->db->last_query();
    }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
        // Proses ubah data ke Database
        $id = array('guru_id'=>$guru_id);
                   
        $data = array('guru_id'=>$guru_id,'id_mapel'=>$id_mapel,'kelas'=>$kelas,'ket_tugas'=>$ket_tugas);
        $this->m_penugasan->update($data, $id);
        redirect('admin/penugasan');
        // echo $this->db->last_query();
    }
}
 }
 ?>
     