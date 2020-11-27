<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_agenda extends CI_Model
{
	private $_table = "agenda";
 	//ambil data mahasiswa dari database
    function get_agenda_list($limit, $start){
        $query = $this->db->get('agenda', $limit, $start);
        return $query;
    }	
	function input_data($data,$table){
			$this->db->insert($table,$data);
	}
	function tampil(){
	   $this->db->select("*");
	   $this->db->from('agenda');
	   return $this->db->get();
	}
	 function tampil3(){
           $this->db->select("*");
           $this->db->from('agenda');
           $this->db->order_by('id_agenda', 'DESC');
           $this->db->limit(3);
           return $this->db->get();
        }
	function edit($id)
	{
	    $this->db->where('id_agenda', $id);
	    $this->db->from('agenda');
	    $query=$this->db->get();
	    return $query->row_array();
	}

	  function update_agenda($data, $id)
        {
            $this->db->where('id_agenda' , $id['id_agenda']);
            return $this->db->update('agenda',$data);
        }
	function db_edit($id)
        {
            return $this->db->get_where('agenda', array('id_agenda'=>$id));
        }
	function delete($id)
    {
        return $this->db->delete($this->_table, array("id_agenda" => $id));
    }
 }