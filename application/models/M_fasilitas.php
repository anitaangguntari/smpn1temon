<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_fasilitas extends CI_Model
{
	private $_table = "fasilitas";
	
	// function input_data($data,$table){
	// 		$this->db->insert($table,$data);
	// }
	function insert($data){
           $this->db->insert('galeri',$data);
    }
    function get_fasilitas_list($limit, $start){
            $query = $this->db->get('fasilitas', $limit, $start);
            return $query;
        }
    function countRow(){
            $this->db->select('count(id_fasilitas) as jumlah');
            $hasil=$this->db->get('fasilitas');
            return $hasil;
        }
	function daftar(){
	   $this->db->select("*");
	   $this->db->from('fasilitas');
	   return $this->db->get();
	}

	function tampil($id){
	   $this->db->select("*");
	   $this->db->from('fasilitas');
	   return $this->db->get();
	}
	 function getFasilitas()
    {
        return $this->db->get('fasilitas');
    }
	function edit($id)
	{
	    $this->db->where('id_fasilitas', $id);
	    $query = $this->db->get('fasilitas');
	    return $query->row_array();
	}

	 function update_fasilitas($data, $id)
        {
            $this->db->where('id_fasilitas' , $id['id_fasilitas']);
            return $this->db->update('fasilitas',$data);
        }
        
     function db_edit($id)
        {
            return $this->db->get_where('fasilitas', array('id_fasilitas'=>$id));
        }   

	function delete($id)
    {
        return $this->db->delete($this->_table, array("id_fasilitas" => $id));
    }
  }