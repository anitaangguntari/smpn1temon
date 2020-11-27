<?php
class Login extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_login');
    }

     function index() {
        $this->load->view('admin/v_login');
    }

     function aksi_login() {
        $data = array('username' => $this->input->post('username', TRUE),
                        'password' => ($this->input->post('password', TRUE))
            );
        $this->load->model('m_login'); // load model_user
        $hasil = $this->m_login->cek_login($data);
        if ($hasil->num_rows() == 1) {
            foreach ($hasil->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Loggin';
                // $sess_data['uid'] = $sess->uid;
                $sess_data['username'] = $sess->username;
                $sess_data['jabatan'] = $sess->jabatan;
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('jabatan')=='Admin') {
                 $row = $this->db->query('SELECT * FROM admin 
                    where jabatan = "Admin" and username = "'.$sess_data['username'].'" '  );
                     $data = $row->row();
                     $nama_admin = $data->nama_admin;
                     $tahun = date('Y');

                    $this->session->set_userdata('nama_admin', $nama_admin);
                   
                redirect('dashboard/halamanAdmin');
            }elseif($this->session->userdata('jabatan')=='Guru'){
                $row = $this->db->query('SELECT * FROM admin 
                    where jabatan = "Guru" and username = "'.$sess_data['username'].'" '  );
                     $data = $row->row();
                     $nama_admin = $data->nama_admin;
                     $tahun = date('Y');

                    $this->session->set_userdata('nama_admin', $nama_admin);
                    // $this->session->set_userdata($data_session);
                redirect('dashboard/halamanGuru');
            }else{
                $row = $this->db->query('SELECT * FROM admin 
                    where jabatan = "Osis" and username = "'.$sess_data['username'].'" '  );
                     $data = $row->row();
                     $nama_admin = $data->nama_admin;
                     $tahun = date('Y');

                    $this->session->set_userdata('nama_admin', $nama_admin);
                    // $this->session->set_userdata($data_session);
                redirect('dashboard/halamanOsis');
            }            
        }
        else {
            echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
        }
    }
     function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}

      