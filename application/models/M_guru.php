
<?php 
    class M_guru extends CI_Model{
     private $_table = "guru";

        public function rules()
        {
            return [
                ['field' => 'guru_id',
                'label' => 'NIP guru',
                'rules' => 'required'],
                ['field' => 'nip',
                'label' => 'NIP guru',
                'rules' => 'required'],
                ['field' => 'nama_guru',
                'label' => 'Nama guru',
                'rules' => 'required'],
                ['field' => 'alamat_guru',
                'label' => 'Alamat guru',
                'rules' => 'required'],
                ['field' => 'jk_guru',
                'label' => 'Jenis Kelamin guru',
                'rules' => 'required']

            ];
        }

        function get_nik($nik) {
            // $url = 'http://sidoharjo-kulonprogo.desa.id/index.php/apis/get_nik/' . $nik;
            $url = 'https://satudata.kulonprogokab.go.id/index.php/nik/cek_nik?app_user=taniku&nik=' . $nik;

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

            $hasil = curl_exec($ch);
            if ($hasil === false) {
                echo curl_error($ch);
            }
            error_reporting(0);

            return $hasil;
        }

        function input_data($data,$table){
            $this->db->insert($table,$data);
        }

        function countRow(){
            $this->db->select('count(nip) as jumlah');
            $hasil=$this->db->get('guru');
            return $hasil;
        }
         //ambil data mahasiswa dari database
        function get_guru_list($limit, $start){
            // $query = $this->db->get('guru', $limit, $start);
            // return $query;
           $this->db->select("*");
           // $this->db->from('guru', $limit, $start);
           $this->db->join('mapel', 'guru.guru_id=mapel.guru_id', 'left');
           return $this->db->get('guru', $limit, $start);
        }
        function insert($data){
            $this->db->insert('guru',$data);
        }

         function getById($id)
            {
                return $this->db->get_where($this->_table, ["guru_id" => $id])->row();
            }

        function tampil(){
           $this->db->select("*");
           $this->db->from('guru');
           // $this->db->join('mapel', 'guru.nip=mapel.nip', 'left');
           return $this->db->get();
            // return $this->db->get('guru')->result();
        }

         function tampil1(){
           $this->db->select("*");
           $this->db->from('guru');
           $this->db->join('mapel', 'guru.guru_id=mapel.guru_id', 'left');
           return $this->db->get();
            // return $this->db->get('guru')->result();
        }

        function tampilKS(){
           $this->db->select("*");
           $this->db->from('guru');
           $this->db->where('jabatan', 'Kepala Sekolah');
           return $this->db->get();
        }


     function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("guru_id" => $id));
    }

     function _deleteImage($id)
    {
        $guru = $this->getById($id);
        if ($guru->image != "default.jpg") {
            $filename = explode(".", $guru->image)[0];
            return array_map('unlink', glob(FCPATH."images/$filename.*"));
        }
    }

         function db_edit($id)
        {
            return $this->db->get_where('guru', array('guru_id'=>$id));
        }
        
    function update_guru($data, $id)
        {
            $this->db->where('nip' , $id['nip']);
            return $this->db->update('guru',$data);
        }


    }
