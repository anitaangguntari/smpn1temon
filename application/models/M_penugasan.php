<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penugasan extends CI_Model
{
	private $_table = "penugasan";
	
	function input_data($data,$table){
			$this->db->insert($table,$data);
	}

	function tampilTugas(){
	   $this->db->select("*, penugasan.kelas as kls");
	   $this->db->from('penugasan');
	   $this->db->join('mapel', 'penugasan.id_mapel=mapel.id_mapel', 'left');
	   $this->db->join('guru', 'penugasan.guru_id=guru.guru_id', 'left');
	   return $this->db->get();
	}

	function tampilTugas7(){
	   $this->db->select("*");
	   $this->db->from('penugasan');
	   $this->db->join('mapel', 'penugasan.id_mapel=mapel.id_mapel', 'left');
	   $this->db->join('guru', 'penugasan.guru_id=guru.guru_id', 'left');
	   $this->db->where('penugasan.kelas', 7);
	   return $this->db->get();
	}


	function tampilTugas8(){
	   $this->db->select("*");
	   $this->db->from('penugasan');
	   $this->db->join('mapel', 'penugasan.id_mapel=mapel.id_mapel', 'left');
	   $this->db->join('guru', 'penugasan.guru_id=guru.guru_id', 'left');
	   $this->db->where('penugasan.kelas', 8);
	   return $this->db->get();
	}

	function tampilTugas9(){
	   $this->db->select("*");
	   $this->db->from('penugasan');
	   $this->db->join('mapel', 'penugasan.id_mapel=mapel.id_mapel', 'left');
	   $this->db->join('guru', 'penugasan.guru_id=guru.guru_id', 'left');
	   $this->db->where('penugasan.kelas', 9);
	   return $this->db->get();
	}

	function edit($id)
	{
	    $this->db->where('id_tugas', $id);
	    $query = $this->db->get('penugasan');
	    return $query->row_array();
	}

	function db_edit($id)
    {
        return $this->db->get_where('penugasan', array('id_tugas'=>$id));
    }

	function update($data)
	{
	    $this->db->where('id_tugas', $data['id_tugas']);
	    // $this->db->set($data);
	    $this->db->set(array('guru_id'=>$data['guru_id']));
	    $this->db->set(array('id_mapel'=>$data['id_mapel']));
	    $this->db->set(array('kelas'=>$data['kelas']));
	    $this->db->set(array('isi_tugas'=>$data['isi_tugas']));
	    $this->db->set(array('ket_tugas'=>$data['ket_tugas']));
	    return $this->db->update('penugasan');
	}

	function delete($id)
    {
        return $this->db->delete($this->_table, array("id_tugas" => $id));
    }

    function tampilguru($id_tugas){
       $this->db->select('guru_id');
       $this->db->where('id_tugas', $id_tugas);
        $hasil=$this->db->get('penugasan');
        return $hasil;
    }

    function tampilmapel($id_tugas){
       $this->db->select('id_mapel');
       $this->db->where('id_tugas', $id_tugas);
        $hasil=$this->db->get('penugasan');
        return $hasil;
    }
  }