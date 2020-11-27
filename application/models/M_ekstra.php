<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ekstra extends CI_Model
{
	private $_table = "ekstra";
	
	function input_data($data,$table){
			$this->db->insert($table,$data);
	}


	function tampil(){
	   $this->db->select("*");
	   $this->db->from('ekstra');
	   return $this->db->get();
	}

	function hari($id)
	{
	    $this->db->where('hari', $id);
	    $this->db->from('ekstra');
	    $query=$this->db->get();
	    return $query->row_array();
	}


	function edit($id)
	{
	    $this->db->where('id_ekstra', $id);
	    $this->db->from('ekstra');
	    $query=$this->db->get();
	    return $query->row_array();
	}
	
	function update($data)
	{
	    $this->db->where('id_ekstra', $data['id_ekstra']);
	    // $this->db->set($data);
	    $this->db->set(array('hari'=>$data['hari']));
	    $this->db->set(array('jenis_kegiatan'=>$data['jenis_kegiatan']));
	    $this->db->set(array('jam_selesai'=>$data['jam_selesai']));
	    $this->db->set(array('jam_mulai'=>$data['jam_mulai']));

	    return $this->db->update('ekstra');
	}
	

	function delete($id)
    {
        return $this->db->delete($this->_table, array("id_ekstra" => $id));
    }
   
 }