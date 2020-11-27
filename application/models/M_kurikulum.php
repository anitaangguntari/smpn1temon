<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kurikulum extends CI_Model
{
	private $_table = "kurikulum";
	
	function input_data($data,$table){
			$this->db->insert($table,$data);
	}

	function tampil(){
	   $this->db->select("*");
	   $this->db->from('kurikulum');
	   return $this->db->get();
	}

	function edit($id)
	{
	    $this->db->where('id_kurikulum', $id);
	    $query = $this->db->get('kurikulum');
	    return $query->row_array();
	}

	 function update_kurikulum($data, $id)
        {
            $this->db->where('id_kurikulum' , $id['id_kurikulum']);
            return $this->db->update('kurikulum',$data);
        }

	function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kurikulum" => $id));
    }
  }