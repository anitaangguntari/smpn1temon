<?php
class Kurikulum extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_kurikulum');  
        $this->load->helper('url'); 
        $this->load->library('form_validation');
        $this->load->model('m_profil');
    }

    function halamankurikulum(){
        $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_halamankurikulum');
    }

 function index(){
    $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $data['kurikulum']= $this->m_kurikulum->tampil()->result();
        $this->load->view('admin/admin/v_daftar_kurikulum', $data);
    }

  function tambah(){
    $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_tambah_kurikulum');
    }
 function tambah_aksi(){
        $id_kurikulum = $this->input->post('id_kurikulum');
        $isi_kurikulum = $this->input->post('isi_kurikulum');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $jabatan = $this->input->post('jabatan');
 
        $data = array(
            'id_kurikulum' => $id_kurikulum,
            'isi_kurikulum' => $isi_kurikulum
            
            );
        $this->m_kurikulum->input_data($data,'kurikulum');
        redirect('admin/kurikulum');
        // echo $this->db->last_query();
    }
    function edit($id)
    {
        $i = 1;
        $data['profil']= $this->m_profil->db_edit($i)->row_array();
        $data['kurikulum'] = $this->m_kurikulum->edit($id);
        // echo $this->db->last_query();
        $this->load->view('admin/admin/v_edit_kurikulum', $data);
    }
     function update()
        {
                $id_kurikulum=$this->input->post("id_kurikulum");
                $isi_kurikulum=$this->input->post("isi_kurikulum");
                $id = array('id_kurikulum'=>$id_kurikulum);
                $data = array('isi_kurikulum'=>$isi_kurikulum);

                $this->m_kurikulum->update_kurikulum($data, $id);
                // echo var_dump($this->upload->display_errors());
                redirect('admin/kurikulum');
                // echo $this->db->last_query();

        }
     function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_kurikulum->delete($id)) {
            redirect(site_url('admin/kurikulum'));
        }
    }
}