
<?php 
    class M_sejarah extends CI_Model{
     private $_table = "sejarah";

        public $id_sejarah;
        public $isi_sejarah;
        public $gambar;

        public function rules()
        {
            return [
                ['field' => 'id_sejarah',
                'label' => 'Kode sejarah',
                'rules' => 'required'],

                ['field' => 'isi_sejarah',
                'label' => 'Isi sejarah',
                'rules' => 'required']

            ];
        }
        
        function insert($data){
            $this->db->insert('sejarah',$data);
        }

         function getById($id)
            {
                return $this->db->get_where($this->_table, ["id_sejarah" => $id])->row();
            }

        function tampil(){
           $this->db->select("*");
           $this->db->from('sejarah');
           return $this->db->get();
        }

     function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_sejarah" => $id));
    }

     function _deleteImage($id)
    {
        $sejarah = $this->getById($id);
        if ($sejarah->image != "default.jpg") {
            $filename = explode(".", $sejarah->image)[0];
            return array_map('unlink', glob(FCPATH."images/$filename.*"));
        }
    }

    function db_edit($id)
    {
        return $this->db->get_where('sejarah', array('id_sejarah'=>$id));
    }
        
    function update_sejarah($data, $id)
        {
            $this->db->where('id_sejarah' , $id['id_sejarah']);
            return $this->db->update('sejarah',$data);
        }

    }
