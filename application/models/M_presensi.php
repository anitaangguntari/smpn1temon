<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_presensi extends CI_Model
{
	private $_table = "presensi";
	
	public function rules()
    {
        return [
            ['field' => 'nis',
            'label' => 'NIS',
            'rules' => 'required'],

            ['field' => 'tanggal',
            'label' => 'Tanggal',
            'rules' => 'numeric'],

            ['field' => 'mapel',
            'label' => 'Mapel',
            'rules' => 'required'],

            ['field' => 'keterangan',
            'label' => 'Keterangan',
            'rules' => 'numeric']
        ];
    }
	function input_data($data,$table){
			$this->db->insert($table,$data);
	}

	function getSiswa(){
        return $this->db->get("siswa");
    }
	function getMapel()
    {
        return $this->db->get('mapel')->result_array();
    }

    function getMapel1(){
        return $this->db->get("mapel");
    }
    function getById($id)
    {
        return $this->db->get_where($this->_table, ["no_presensi" => $id])->row();
    }

	function tampil(){
	   $this->db->select("*");
	   $this->db->from('presensi');
	   $this->db->join('siswa', 'presensi.nis=siswa.nis');
	   $this->db->join('mapel', 'presensi.mapel=mapel.id_mapel');
	   $this->db->join('kelas', 'siswa.kelas=kelas.id_kelas');
	   return $this->db->get();
	}

	function edit($id)
	{
		$this->db->where('no_presensi', $id);
	    $this->db->from('presensi');
	    $this->db->join('siswa', 'presensi.nis=siswa.nis');
	   	$this->db->join('mapel', 'presensi.mapel=mapel.id_mapel');
	    $query=$this->db->get();
	    return $query->row_array();
	}

	function update($data)
	{
	    $this->db->where('no_presensi', $data['no_presensi']);
	    // $this->db->set($data);
	    $this->db->set(array('nis'=>$data['nis']));
	    $this->db->set(array('tanggal'=>$data['tanggal']));
	    $this->db->set(array('mapel'=>$data['mapel']));
	    $this->db->set(array('keterangan'=>$data['keterangan']));
	    return $this->db->update('presensi');
	}

	function delete($id)
    {
        return $this->db->delete($this->_table, array("no_presensi" => $id));
    }
  }