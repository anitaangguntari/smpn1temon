
<?php 
    class M_artikel extends CI_Model{
     private $_table = "artikel";

        public $id_artikel;
        public $judul_artikel;
        public $isi_artikel;
        public $gambar;

        public function rules()
        {
            return [
                ['field' => 'id_artikel',
                'label' => 'Kode artikel',
                'rules' => 'required'],

                ['field' => 'judul_artikel',
                'label' => 'Judul artikel',
                'rules' => 'required']

            ];
        }
        function countRow(){
            $this->db->select('count(id_artikel) as jumlah');
            $hasil=$this->db->get('artikel');
            return $hasil;
        }
        //ambil data mahasiswa dari database
        function get_artikel_list($limit, $start){
            $query = $this->db->get('artikel', $limit, $start);
            return $query;
        }
        function insert($data){
            $this->db->insert('artikel',$data);
        }

        function getById($id)
        {
           return $this->db->get_where($this->_table, ["id_artikel" => $id])->row();
        }

        function tampil(){
           $this->db->select("*");
           $this->db->from('artikel');
           return $this->db->get();
        }

        function tampil6(){
           $this->db->select("*");
           $this->db->from('artikel');
           $this->db->order_by('id_artikel', 'DESC');
           $this->db->limit(6);
           return $this->db->get();
        }
        function tampil3_terakhir(){
           $this->db->select("*");
           $this->db->from('artikel');
           $this->db->order_by('id_artikel', 'DESC');
           $this->db->limit(3);
           return $this->db->get();
        }
        function tampil3_6_terakhir(){
           $this->db->select("*");
           $this->db->from('artikel');
           $this->db->order_by('id_artikel', 'DESC');
           $this->db->limit(4,6);
           return $this->db->get();
        }
     function update_rating($table, $data, $where){
        return $this->db->update_rating($table, $data, $where); 
    }

     function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_artikel" => $id));
    }

     function _deleteImage($id)
    {
        $artikel = $this->getById($id);
        if ($artikel->image != "default.jpg") {
            $filename = explode(".", $artikel->image)[0];
            return array_map('unlink', glob(FCPATH."images/$filename.*"));
        }
    }

    function db_edit($id)
    {
        return $this->db->get_where('artikel', array('id_artikel'=>$id));
    }
        
    function update_artikel($data, $id)
        {
            $this->db->where('id_artikel' , $id['id_artikel']);
            return $this->db->update('artikel',$data);
        }

    }
