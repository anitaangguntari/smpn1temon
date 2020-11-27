<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_slideshowteks extends CI_Model
{
    private $_table = "slideshowteks";
    
    function input_data($data,$table){
            $this->db->insert($table,$data);
    }

    function tampil(){
       $this->db->select("*");
       $this->db->from('slideshowteks');
       return $this->db->get();
    }

    function edit($id)
    {
        $this->db->where('id_slideshowteks', $id);
        $query = $this->db->get('slideshowteks');
        return $query->row_array();
    }

    function update($data)
    {
        $this->db->where('id_slideshowteks', $data['id_slideshowteks']);
        // $this->db->set($data);
        $this->db->set(array('teks1'=>$data['teks1']));
        $this->db->set(array('teks2'=>$data['teks2']));
        return $this->db->update('slideshowteks');
    }

    function delete($id)
    {
        return $this->db->delete($this->_table, array("id_slideshowteks" => $id));
    }
  }