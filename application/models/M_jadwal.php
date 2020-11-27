<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal extends CI_Model
{
	private $_table = "jadwal";
	
	 public function rules()
    {
        return [
            ['field' => 'id_jadwal',
            'label' => 'Id Jadwal',
            'rules' => 'required'],
            ['field' => 'kelas',
            'label' => 'Kelas',
            'rules' => 'required'],

            ['field' => 'gambar_jadwal',
            'label' => ' Gambar',
            'rules' => 'numeric']
        ];
    }
	 function insert($data){
            $this->db->insert('jadwal',$data);
        }
 	function getById($id)
            {
                return $this->db->get_where($this->_table, ["id_jadwal" => $id])->row();
            }
	function tampil(){
	   $this->db->select("*");
	   $this->db->from('jadwal');
	   return $this->db->get();
	}

	function tampil_jadwal_new(){
	   $this->db->select("*");
	   $this->db->from('jadwal_new');
	   return $this->db->get();
	}

	function edit($id)
	{
	    $this->db->where('id_jadwal', $id);
	    $query = $this->db->get('jadwal');
	    return $query->row_array();
	}

	function update($data)
	{
	    $this->db->where('id_jadwal', $data['id_jadwal']);
	    // $this->db->set($data);
	    $this->db->set(array('kelas'=>$data['kelas']));
	    $this->db->set(array('gambar_jadwal'=>$data['gambar_jadwal']));
	    return $this->db->update('jadwal');
	}
	function update_jadwal($data, $id)
        {
            $this->db->where('id_jadwal' , $id['id_jadwal']);
            return $this->db->update('jadwal',$data);
        }

	function delete($id)
    {
        return $this->db->delete($this->_table, array("id_jadwal" => $id));
    }
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
    function lihat($id)
    {
        $this->db->where('kelas', $id);
        $query = $this->db->get('jadwal');
        return $query->row_array();
    }
	function db_edit($id)
        {
            return $this->db->get_where('agenda', array('id_agenda'=>$id));
        }
	function tampil_kelas($kelas){
	   $this->db->select("*");
	   $this->db->from('jadwal');
	   $this->db-> like ('kelas', '$kelas'); 
	   return $this->db->get();
	}
	
     function download($id){
		$query = $this->db->get_where('jadwal',array('id_jadwal'=>$id));
		return $query->row_array();
	 }

 }