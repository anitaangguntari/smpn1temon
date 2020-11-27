
<?php 
    class M_berita extends CI_Model{
     private $_table = "berita";

        public $id_berita;
        public $judul_berita;
        public $isi_berita;
        public $gambar;

        public function rules()
        {
            return [
                ['field' => 'id_berita',
                'label' => 'Kode Berita',
                'rules' => 'required'],

                ['field' => 'judul_berita',
                'label' => 'Judul Berita',
                'rules' => 'required']

            ];
        }
        function countRow(){
            $this->db->select('count(id_berita) as jumlah');
            $hasil=$this->db->get('berita');
            return $hasil;
        }
        //ambil data mahasiswa dari database
        function get_berita_list($limit, $start){
            $query = $this->db->get('berita', $limit, $start);
            return $query;
        }
        function insert($data){
            $this->db->insert('berita',$data);
        }

         function getById($id)
            {
                return $this->db->get_where($this->_table, ["id_berita" => $id])->row();
            }

        function tampil(){
           $this->db->select("*");
           $this->db->from('berita');
           return $this->db->get();
        }
        function tampil4(){
           $this->db->select("*");
           $this->db->from('berita');
           $this->db->order_by('id_berita', 'DESC');
           $this->db->limit(4);
           return $this->db->get();
        }
        function tampil6(){
           $this->db->select("*");
           $this->db->from('berita');
           $this->db->order_by('id_berita', 'DESC');
           $this->db->limit(6);
           return $this->db->get();
        }
        function tampil3_terakhir(){
           $this->db->select("*");
           $this->db->from('berita');
           $this->db->order_by('id_berita', 'DESC');
           $this->db->limit(3);
           return $this->db->get();
        }
        function tampil3_6_terakhir(){
           $this->db->select("*");
           $this->db->from('berita');
           $this->db->order_by('id_berita', 'DESC');
           $this->db->limit(4,6);
           return $this->db->get();
        }
     function update_rating($table, $data, $where){
        return $this->db->update_rating($table, $data, $where); 
    }

     function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_berita" => $id));
    }

     function _deleteImage($id)
    {
        $berita = $this->getById($id);
        if ($berita->image != "default.jpg") {
            $filename = explode(".", $berita->image)[0];
            return array_map('unlink', glob(FCPATH."images/$filename.*"));
        }
    }

    function db_edit($id)
    {
        return $this->db->get_where('berita', array('id_berita'=>$id));
    }
        
    function update_berita($data, $id)
        {
            $this->db->where('id_berita' , $id['id_berita']);
            return $this->db->update('berita',$data);
        }

    }
