<?php
class M_login extends CI_Model{

 //    function cek_login($table,$where){		
	// 	return $this->db->get_where($table,$where);
	// }	

	public function cek_login($data) {
			$query = $this->db->get_where('admin', $data);
			return $query;
		}
	
	function tampilJabatan(){
	   $this->db->select("jabatan");
	   $this->db->from('admin');
	   $this->db->where('username',  $this->input->post('username'));
	   $this->db->where('password',  $this->input->post('password'));

	   return $this->db->get();
	}
}
