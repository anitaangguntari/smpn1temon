
<?php
class Banner extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('m_banner');
    }

    function update()
    {
        $id_banner=$this->input->post("id_banner");
        $new_file_name  = $this->input->post('banner');
        if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
            
            $config['upload_path']         = 'images/';
            $config['allowed_types']       = 'gif|jpg|png';
            $config['file_name']           = $new_file_name;
            $config['max_size']             = 3000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $this->upload->do_upload('banner');
            $file =$this->upload->data();
            $banner= $file['file_name'];
            $id = array('id_banner'=>$id_banner);
                        
            $data = array('banner'=>$banner);

            $this->m_banner->update_banner($data, $id);
            // echo var_dump($this->upload->display_errors());
            redirect('dashboard/halamanAdmin');
            // echo $this->db->last_query();
        }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
            // Proses ubah data ke Database
            redirect('dashboard/halamanAdmin');
            // echo $this->db->last_query();
        }
    }
}
 
     