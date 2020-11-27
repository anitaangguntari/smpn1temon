<?php
class Slideshowteks extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_slideshowteks');  
        $this->load->helper('url'); 
        $this->load->library('form_validation');
        $this->load->model('m_profil');
    }

    function halamanAdmin(){
        $id = 1;
        $dt['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_halamanAdmin');
    }

 function index(){
    $id = 1;
        $dt['profil']= $this->m_profil->db_edit($id)->row_array();
        $data['slideshowteks']= $this->m_slideshowteks->tampil()->result();
        $this->load->view('admin/admin/v_daftar_slideshowteks', $data);
    }

  function tambah(){
    $id = 1;
        $dt['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_tambah_slideshowteks');
    }
 function tambah_aksi(){
    $id = 1;
        $dt['profil']= $this->m_profil->db_edit($id)->row_array();
        $id_slideshowteks = $this->input->post('id_slideshowteks');
        $teks1 = $this->input->post('teks1');
        $teks2 = $this->input->post('teks2');
 
        $data = array(
            'id_slideshowteks' => $id_slideshowteks,
            'teks1' => $teks1,
            'teks2' => $teks2
            
            );
        $this->m_slideshowteks->input_data($data,'slideshowteks');
        redirect('admin/slideshowteks');
        // echo $this->db->last_query();
    }
    function edit($id)
    {
        $id = 1;
        $dt['profil']= $this->m_profil->db_edit($id)->row_array();
        $data['slideshowteks'] = $this->m_slideshowteks->edit($id);
        // echo $this->db->last_query();
        $this->load->view('admin/admin/v_edit_slideshowteks', $data);
    }
    function update()
    {
        $id = 1;
        $dt['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<span>', '</span>');
        $validations = array(
            array(
                'field' => 'id_slideshowteks',
                'label' => 'Id Slideshowteks',
                'rules' => 'trim|required|max_length[255]',
                'field' => 'teks1',
                'label' => 'Teks 1',
                'rules' => 'trim|required|max_length[255]',
                'field' => 'teks2',
                'label' => 'Teks 2 ',
                'rules' => 'trim|required|max_length[255]'
            )
        );
        $this->form_validation->set_rules($validations);
        if ($this->form_validation->run() === FALSE) {
            $this->edit($this->input->post('id'));
        } else {
            $data['id_slideshowteks'] = $this->input->post('id_slideshowteks');
            $data['teks1'] = $this->input->post('teks1');
            $data['teks2'] = $this->input->post('teks2');
            if ($this->m_slideshowteks->update($data)) {

                redirect('admin/slideshowteks');
                // echo $this->db->last_query();
            } else {
                log_message('error', 'Error');
            }
        }
    }
     function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_slideshowteks->delete($id)) {
            redirect(site_url('admin/slideshowteks'));
        }
    }
}