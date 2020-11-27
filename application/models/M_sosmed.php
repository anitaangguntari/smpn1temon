<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sosmed extends CI_Model
{
	private $_table = "sosmed";
	
	 function insert($data){
            $this->db->insert('sosmed',$data);
        }

	function tampil(){
	   $this->db->select("*");
	   $this->db->from('sosmed');
	   return $this->db->get();
	}

	function edit($id)
	{
	    $this->db->where('id_sosmed', $id);
	    $query = $this->db->get('sosmed');
	    return $query->row_array();
	}

	function update($data)
	{
	    $this->db->where('id_sosmed', $data['id_sosmed']);
	    // $this->db->set($data);
	    $this->db->set(array('link_sosmed'=>$data['link_sosmed']));
	    return $this->db->update('sosmed');
	}
	function update_sosmed($data, $id)
        {
            $this->db->where('id_sosmed' , $id['id_sosmed']);
            return $this->db->update('sosmed',$data);
        }

	function delete($id)
    {
        return $this->db->delete($this->_table, array("id_sosmed" => $id));
    }

  }