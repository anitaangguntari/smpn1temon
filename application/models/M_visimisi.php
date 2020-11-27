<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_visimisi extends CI_Model
{
	private $_table = "visimisi";
	
	function input_data($data,$table){
			$this->db->insert($table,$data);
	}

	function tampil(){
	   $this->db->select("*");
	   $this->db->from('visimisi');
	   return $this->db->get();
	}

	  function db_edit($id)
    {
        return $this->db->get_where('visimisi', array('id_visimisi'=>$id));
    }
        
    function update_visimisi($data, $id)
        {
            $this->db->where('id_visimisi' , $id['id_visimisi']);
            return $this->db->update('visimisi',$data);
        }

	function delete($id)
    {
        return $this->db->delete($this->_table, array("id_visimisi" => $id));
    }
  }