
<?php 
    class M_rating extends CI_Model{
     private $_table = "rating";

        public $id_rating;
        public $email;
        public $id_berita;
        public $rating;

        public function rules()
        {
            return [
                ['field' => 'id_rating',
                'label' => 'Kode Rating',
                'rules' => 'required'],

                ['field' => 'email',
                'label' => ' Id User',
                'rules' => 'required'],

                ['field' => 'id_berita',
                'label' => 'Kode Berita',
                'rules' => 'required'],

                ['field' => 'rating',
                'label' => ' Rating',
                'rules' => 'required']

            ];
        }

        //ambil data mahasiswa dari database
        function insert($data){
            $this->db->insert('rating',$data);
        }

        function insert_rat($data){
            $this->db->insert('reting',$data);
        }

        function getById($id)
          {
              return $this->db->get_where($this->_table, ["id_berita" => $id])->row();
          }
        function getById_rat($id)
          {
              return $this->db->get_where($this->_table, ["id_artikel" => $id])->row();
          }

        function get_rating_list($limit, $start){
            $query = $this->db->get('rating', $limit, $start);
            return $query;
        }
        function get_reting_list($limit, $start){
            $query = $this->db->get('rating_artikel', $limit, $start);
            return $query;
        }
        function tampil($id_berita){
           $this->db->select("*");
           $this->db->from('rating');
           $this->db->join('berita', 'rating.id_berita=berita.id_berita');
           $this->db->where('berita.id_berita' , $id_berita);
           return $this->db->get();
        }
        function tampil_reting($id_artikel){
           $this->db->select("*");
           $this->db->from('reting');
           $this->db->join('artikel', 'reting.id_artikel=artikel.id_artikel');
           $this->db->where('artikel.id_artikel' , $id_artikel);
           return $this->db->get();
        }

        function tampil5($id_berita){
           $this->db->select("rating.*");
           $this->db->from('rating');
           $this->db->join('berita', 'rating.id_berita=berita.id_berita');
           $this->db->where('berita.id_berita' , $id_berita);
           $this->db->order_by('id_rating', 'DESC');
           $this->db->limit(5);
           return $this->db->get();
        }
        function tampil5_reting($id_artikel){
           $this->db->select("reting.*");
           $this->db->from('reting');
           $this->db->join('artikel', 'reting.id_artikel=artikel.id_artikel');
           $this->db->where('artikel.id_artikel' , $id_artikel);
           $this->db->order_by('id_rat', 'DESC');
           $this->db->limit(5);
           return $this->db->get();
        }
}
