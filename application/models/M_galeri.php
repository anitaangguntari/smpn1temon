
<?php 
    class M_galeri extends CI_Model{
     private $_table = "galeri";

        public $id_galeri;
        public $judul_galeri;
        public $foto_galeri;

        public function rules()
        {
            return [
                ['field' => 'id_galeri',
                'label' => 'Kode galeri',
                'rules' => 'required'],

                ['field' => 'judul_galeri',
                'label' => 'Judul galeri',
                'rules' => 'required']

            ];
        }
         //ambil data mahasiswa dari database
        function get_galeri_list($limit, $start){
            $query = $this->db->get('galeri', $limit, $start);
            return $query;
        }
        function insert($data){
            $this->db->insert('galeri',$data);
        }

         function getById($id)
            {
                return $this->db->get_where($this->_table, ["id_galeri" => $id])->row();
            }

        function tampil(){
           $this->db->select("*");
           $this->db->from('galeri');
           return $this->db->get();
        }
         function tampil16(){
           $this->db->select("*");
           $this->db->from('galeri');
           $this->db->order_by('id_galeri', 'DESC');
           $this->db->limit(16);
           return $this->db->get();
        }
         function tampil1(){
           $this->db->select("*");
           $this->db->from('galeri');
           $this->db->order_by('id_galeri', 'DESC');
           $this->db->limit(1);
           return $this->db->get();
        }
     function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_galeri" => $id));
    }

     function _deleteImage($id)
    {
        $galeri = $this->getById($id);
        if ($galeri->image != "default.jpg") {
            $filename = explode(".", $galeri->image)[0];
            return array_map('unlink', glob(FCPATH."images/$filename.*"));
        }
    }

         function db_edit($id)
        {
            return $this->db->get_where('galeri', array('id_galeri'=>$id));
        }
        
    function update_galeri($data, $id)
        {
            $this->db->where('id_galeri' , $id['id_galeri']);
            return $this->db->update('galeri',$data);
        }

    }
