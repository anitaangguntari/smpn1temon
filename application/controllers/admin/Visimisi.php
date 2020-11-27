<?php
class Visimisi extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_visimisi');  
        $this->load->model('m_profil');
        $this->load->helper('url'); 
        $this->load->library('form_validation');
    }
 function index(){
        $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $data['visimisi']= $this->m_visimisi->tampil()->result();
        $this->load->view('admin/admin/v_daftar_visimisi', $data);
    }

  function tambah(){
        $id = 1;
        $data['profil']= $this->m_profil->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_tambah_visimisi', $data);
    }
 function tambah_aksi(){
       
        $id_visimisi = $this->input->post('id_visimisi');
        $isi_visi = $this->input->post('isi_visi');
        $isi_misi = $this->input->post('isi_misi');
 
        $data = array(
            'id_visimisi' => $id_visimisi,
            'isi_visi' => $isi_visi,
            'isi_misi' => $isi_misi
            
            );
        $this->m_visimisi->input_data($data,'visimisi');
        redirect('admin/visimisi');
        // echo $this->db->last_query();
    }

  function edit($id)
     {
        $i = 1;
        $dt['profil']= $this->m_profil->db_edit($i)->row_array();
        $dt['visimisi']=$this->m_visimisi->db_edit($id)->row_array();
        $this->load->view('admin/admin/v_edit_visimisi',$dt);
      }   

         function update()
        {
                
                $id_visimisi=$this->input->post("id_visimisi");
                $isi_visi=$this->input->post("isi_visi");
                $isi_misi=$this->input->post("isi_misi");
                $id = array('id_visimisi'=>$id_visimisi);
                $data = array('isi_visi'=>$isi_visi,'isi_misi'=>$isi_misi);

                $this->m_visimisi->update_visimisi($data, $id);
                // echo var_dump($this->upload->display_errors());
                redirect('admin/visimisi');
                // echo $this->db->last_query();

        }
     function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_visimisi->delete($id)) {
            redirect(site_url('admin/visimisi'));
        }
    }
}