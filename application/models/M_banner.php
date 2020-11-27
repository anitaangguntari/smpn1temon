
<?php 
    class M_banner extends CI_Model{
     private $_table = "banner";

        public $id_banner;
        public $banner;

        public function rules()
        {
            return [
                ['field' => 'id_banner',
                'label' => 'Kode banner',
                'rules' => 'required'],

                ['field' => 'banner',
                'label' => 'banner',
                'rules' => 'required']

            ];
        }
         function getById($id)
        {
            return $this->db->get_where($this->_table, ["id_banner" => $id])->row();
        }

        function tampil(){
           $this->db->select("*");
           $this->db->from('banner');
           return $this->db->get();
        }
        
         function db_edit($id)
        {
            return $this->db->get_where('banner', array('id_banner'=>$id));
        }
        
         function update_banner($data, $id)
        {
            $this->db->where('id_banner' , $id['id_banner']);
            return $this->db->update('banner',$data);
        }

    }
