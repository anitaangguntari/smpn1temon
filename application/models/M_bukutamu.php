<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bukutamu extends CI_Model
{
	private $_table = "bukutamu";
	
	function input_data($data,$table){
			$this->db->insert($table,$data);
	}
	function tampil(){
	   $this->db->select("*");
	   $this->db->from('bukutamu');
	   return $this->db->get();
	}
}