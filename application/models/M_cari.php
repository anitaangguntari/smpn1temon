<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_cari extends CI_Model
{
      function __construct()
    {
        parent::__construct();
    }
     
    // get total rows
  //   function total_rows_siswa($q = NULL) {
  //       $sql="SELECT *,COUNT(*) jum FROM siswa
  //                       WHERE nis LIKE '%$q%' OR  nik LIKE '%$q%'OR  nama_siswa LIKE '%$q%'OR  tempat_lahir LIKE '%$q%'OR  alamat_siswa LIKE '%$q%'OR  kelas LIKE '%$q%'OR  jk_siswa LIKE '%$q%'";               
  //       $res= $this->db->query($sql)->row();
  //       return $res->jum;
  //   }

  //   // get data with limit and search
  //   function get_limit_data_siswa($limit, $start = 0, $q = NULL) {
  //      $sql="SELECT * FROM siswa
  //                       WHERE nis LIKE '%$q%' OR  nik LIKE '%$q%'OR  nama_siswa LIKE '%$q%'OR  tempat_lahir LIKE '%$q%'OR  alamat_siswa LIKE '%$q%'OR  kelas LIKE '%$q%'OR  jk_siswa LIKE '%$q%'
  //               ORDER BY nis desc
  //               LIMIT $limit OFFSET $start";
  //       return $this->db->query($sql)->result();
  //   }
  //   function total_rows_guru($q = NULL) {
  //       $sql="SELECT *,COUNT(*) jum FROM guru
  //                       WHERE nip LIKE '%$q%' OR  nik LIKE '%$q%'OR  nama_guru LIKE '%$q%'OR  tempat_lahir LIKE '%$q%'OR  alamat_guru LIKE '%$q%'OR  jabatan LIKE '%$q%'OR  jk_guru LIKE '%$q%'";               
  //       $res= $this->db->query($sql)->row();
  //       return $res->jum;
  //   }

  //   // get data with limit and search
  //   function get_limit_data_guru($limit, $start = 0, $q = NULL) {
  //      $sql="SELECT * FROM guru
  //                       WHERE nip LIKE '%$q%' OR  nik LIKE '%$q%'OR  nama_guru LIKE '%$q%'OR  tempat_lahir LIKE '%$q%'OR  alamat_guru LIKE '%$q%'OR  jabatan LIKE '%$q%'OR  jk_guru LIKE '%$q%'
  //               ORDER BY nip desc
  //               LIMIT $limit OFFSET $start";
  //       return $this->db->query($sql)->result();
  //   }
  //   // Fetch records
  // public function getData($rowno,$rowperpage,$search="") {
 
  //   $this->db->select('*');
  //   $this->db->from('guru');

  //   if($search != ''){
  //     $this->db->like('nip', $search);
  //     $this->db->or_like('nik', $search);
  //     $this->db->or_like('nama_guru', $search);
  //     $this->db->or_like('tempat_lahir', $search);
  //     $this->db->or_like('alamat_guru', $search);
  //     $this->db->or_like('jabatan', $search);
  //     $this->db->or_like('jk_guru', $search);
  //   }

  //   $this->db->limit($rowperpage, $rowno); 
  //   $query = $this->db->get();
 
  //   return $query->result_array();
  // }

  // // Select total records
  // public function getrecordCount($search = '') {

  //   $this->db->select('count(*) as allcount');
  //   $this->db->from('guru');
 
  //   if($search != ''){
  //     $this->db->like('nip', $search);
  //     $this->db->or_like('nik', $search);
  //     $this->db->or_like('nama_guru', $search);
  //     $this->db->or_like('tempat_lahir', $search);
  //     $this->db->or_like('alamat_guru', $search);
  //     $this->db->or_like('jabatan', $search);
  //     $this->db->or_like('jk_guru', $search);
  //   }

  //   $query = $this->db->get();
  //   $result = $query->result_array();
 
  //   return $result[0]['allcount'];
  // }
  function get_guru($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from guru 
        inner join mapel on guru.nip = mapel.nip 
        where guru.nip like '%$st%' or nik like '%$st%' or nama_guru like '%$st%' or tempat_lahir like '%$st%' or alamat_guru like '%$st%' or jabatan like '%$st%' or jk_guru like '%$st%' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }

    function get_guru_count($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from guru 
           inner join mapel on guru.nip = mapel.nip 
           where guru.nip like '%$st%' or nik like '%$st%' or nama_guru like '%$st%' or tempat_lahir like '%$st%' or alamat_guru like '%$st%' or jabatan like '%$st%' or jk_guru like '%$st%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
}
