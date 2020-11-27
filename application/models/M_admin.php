<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model
{
	private $_table = "admin";
	
	function input_data($data,$table){
			$this->db->insert($table,$data);
	}

	function tampil(){
	   $this->db->select("*");
	   $this->db->from('admin');
	   return $this->db->get();
	}

	function edit($id)
	{
	    $this->db->where('id_admin', $id);
	    $query = $this->db->get('admin');
	    return $query->row_array();
	}

	function update($data)
	{
	    $this->db->where('id_admin', $data['id_admin']);
	    // $this->db->set($data);
	    $this->db->set(array('nama_admin'=>$data['nama_admin']));
	    $this->db->set(array('username'=>$data['username']));
	    $this->db->set(array('password'=>$data['password']));
	    return $this->db->update('admin');
	}

	function delete($id)
    {
        return $this->db->delete($this->_table, array("id_admin" => $id));
    }
  }