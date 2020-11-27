<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil extends CI_Model
{
	private $_table = "profil";
	
	function input_data($data,$table){
			$this->db->insert($table,$data);
	}

	function tampil(){
	   $this->db->select("*");
	   $this->db->from('profil');
	   return $this->db->get();
	}

	function db_edit($i)
    {
        return $this->db->get_where('profil', array('id_profil'=>$i));
    }
    function edit($i)
    {
        return $this->db->get_where('profil', array('id_profil'=>$i));
    }
    function update_profil($data, $id)
        {
            $this->db->where('id_profil' , $id['id_profil']);
            return $this->db->update('profil',$data);
        }

	function delete($id)
    {
        return $this->db->delete($this->_table, array("id_profil" => $id));
    }
    function getProfil(){
       $this->db->where('id_profil', 1);
	   return $this->db->get("profil");
	}
  }