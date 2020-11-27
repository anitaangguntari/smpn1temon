<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model
{
	private $_table = "kelas";
	public function rules()
    {
        return [
            ['field' => 'nama_kelas',
            'label' => 'Nama Kelas',
            'rules' => 'required'],

            ['field' => 'nama_guru',
            'label' => 'Nama Guru',
            'rules' => 'numeric']
        ];
    }
	function input_data($data,$table){
			$this->db->insert($table,$data);
	}

	function getGuru1(){
	   return $this->db->get("guru");
	}
	function getGuru()
    {
        return $this->db->get('guru')->result_array();
    }
     function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kelas" => $id])->row();
    }
	function tampil(){
	   $this->db->select("*");
	   $this->db->from('kelas');
	   $this->db->join('guru', 'kelas.nip=guru.nip', 'left');
	   return $this->db->get();
	}

	function edit($id)
	{
	    $this->db->where('id_kelas', $id);
	    $query = $this->db->get('kelas');
	    return $query->row_array();
	}

	function update($data)
	{
	    $this->db->where('id_kelas', $data['id_kelas']);
	    // $this->db->set($data);
	    $this->db->set(array('nama_kelas'=>$data['nama_kelas']));
	    $this->db->set(array('nip'=>$data['nip']));
	    return $this->db->update('kelas');
	}

	function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kelas" => $id));
    }
     function getKelas()
    {
        return $this->db->get('kelas')->result_array();
    }
  }