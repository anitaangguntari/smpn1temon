
<?php 
    class M_slideshow extends CI_Model{
     private $_table = "slideshow";

        public $id_slideshow;
        public $judul_slideshow;
        public $foto_slideshow;

        public function rules()
        {
            return [
                ['field' => 'id_slideshow',
                'label' => 'Kode slideshow',
                'rules' => 'required'],

                ['field' => 'gambar ',
                'label' => 'Gambar',
                'rules' => 'required']

            ];
        }
        
        function insert($data){
            $this->db->insert('slideshow',$data);
        }

         function getById($id)
            {
                return $this->db->get_where($this->_table, ["id_slideshow" => $id])->row();
            }

        function tampil(){
           $this->db->select("*");
           $this->db->from('slideshow');
           return $this->db->get();
        }
         function tampil6(){
           $this->db->select("*");
           $this->db->from('slideshow');
           $this->db->order_by('id_slideshow', 'DESC');
           $this->db->limit(6);
           return $this->db->get();
        }
     function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_slideshow" => $id));
    }

     function _deleteImage($id)
    {
        $slideshow = $this->getById($id);
        if ($slideshow->image != "default.jpg") {
            $filename = explode(".", $slideshow->image)[0];
            return array_map('unlink', glob(FCPATH."images/$filename.*"));
        }
    }

         function db_edit($id)
        {
            return $this->db->get_where('slideshow', array('id_slideshow'=>$id));
        }
        
    function update_slideshow($data, $id)
        {
            $this->db->where('id_slideshow' , $id['id_slideshow']);
            return $this->db->update('slideshow',$data);
        }

    }
