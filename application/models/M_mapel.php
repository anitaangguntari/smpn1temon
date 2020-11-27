<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mapel extends CI_Model
{
	private $_table = "mapel";
	
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
   function countRow(){
            $this->db->select('count(id_mapel) as jumlah');
            $hasil=$this->db->get('mapel');
            return $hasil;
        }
	function getGuru()
    {
        return $this->db->get('guru')->result_array();
    }

    function getKelas()
    {
        return $this->db->get('kelas')->result_array();
    }
    function getGuru1()
    {
        return $this->db->get('guru');
    }

    function getKelas1()
    {
        return $this->db->get('kelas');
    }
    function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_mapel" => $id])->row();
        
    }

	function tampil(){
	   $this->db->select("*");
	   $this->db->from('mapel');
	   $this->db->join('guru', 'mapel.guru_id=guru.guru_id', 'left');
	   $this->db->join('kelas','mapel.kelas=kelas.id_kelas', 'left');
	   return $this->db->get();
	}

	function edit($id)
	{
		$this->db->where('id_mapel', $id);
	    $this->db->from('mapel');
	    $this->db->join('guru', 'mapel.guru_id=guru.guru_id', 'left');
        $this->db->join('kelas','mapel.kelas=kelas.id_kelas', 'left');
	    $query=$this->db->get();
	    return $query->row_array();
	}

	function update($data)
	{
	    $this->db->where('id_mapel', $data['id_mapel']);
	    // $this->db->set($data);
	    $this->db->set(array('nama_mapel'=>$data['nama_mapel']));
	    $this->db->set(array('guru_id'=>$data['guru_id']));
	    $this->db->set(array('kelas'=>$data['kelas']));
	    return $this->db->update('mapel');
	}

	function delete($id)
    {
        return $this->db->delete($this->_table, array("id_mapel" => $id));
    }
  }