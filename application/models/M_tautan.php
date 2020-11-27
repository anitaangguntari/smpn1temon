<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tautan extends CI_Model
{
	private $_table = "tautan";
	
	 function insert($data){
            $this->db->insert('tautan',$data);
        }

	function tampil(){
	   $this->db->select("*");
	   $this->db->from('tautan');
	   return $this->db->get();
	}

	function edit($id)
	{
	    $this->db->where('id_tautan', $id);
	    $query = $this->db->get('tautan');
	    return $query->row_array();
	}

	function update($data)
	{
	    $this->db->where('id_tautan', $data['id_tautan']);
	    // $this->db->set($data);
	    $this->db->set(array('judul_tautan'=>$data['judul_tautan']));
	    $this->db->set(array('tujuan_tautan'=>$data['tujuan_tautan']));
	    return $this->db->update('tautan');
	}
	function update_tautan($data, $id)
        {
            $this->db->where('id_tautan' , $id['id_tautan']);
            return $this->db->update('tautan',$data);
        }

	function delete($id)
    {
        return $this->db->delete($this->_table, array("id_tautan" => $id));
    }

  }