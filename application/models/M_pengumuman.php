
<?php 
    class M_pengumuman extends CI_Model{
     private $_table = "pengumuman";

        public function rules()
        {
            return [
                ['field' => 'id_pengumuman',
                'label' => 'Id pengumuman',
                'rules' => 'required'],
                ['field' => 'gambar',
                'label' => 'Gambar',
                'rules' => 'required'],
                ['field' => 'isi_pengumuman',
                'label' => 'Isi pengumuman',
                'rules' => 'required']

            ];
        }
         
         
        function insert($data){
            $this->db->insert('pengumuman',$data);
        }

           function get_all_images(){
             $query = $this->db->query("SELECT * FROM pengumuman where id_pengumuman =3 limit 4");
             return $query->result_array();
         }
         function getById($id)
            {
                return $this->db->get_where($this->_table, ["id_pengumuman" => $id])->row();
            }

        function tampil(){
            return $this->db->get('pengumuman')->result(); // Tampilkan semua data yang ada di tabel pengumuman
        }

        function lihat($id)
        {
            $this->db->where('id_pengumuman', $id);
            $query = $this->db->get('pengumuman');
            return $query->row_array();
        }
         
         function delete($id)
        {
            $this->_deleteImage($id);
            return $this->db->delete($this->_table, array("id_pengumuman" => $id));
        }

         function _deleteImage($id)
        {
            $pengumuman = $this->getById($id);
            if ($pengumuman->image != "default.jpg") {
                $filename = explode(".", $pengumuman->image)[0];
                return array_map('unlink', glob(FCPATH."images/$filename.*"));
            }
        }

        function edit($id)
        {
            $this->db->where('id_pengumuman', $id);
            $query = $this->db->get('pengumuman');
            return $query->row_array();
        }
         
        
        function update_pengumuman($data, $id)
        {
            $this->db->where('id_pengumuman' , $id['id_pengumuman']);
            return $this->db->update('pengumuman',$data);
        }

        }