
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_laporanpdf extends CI_Model{

		function tampilguru(){
           $this->db->select("*");
           $this->db->from('guru');
            $this->db->join('mapel', 'guru.nip=mapel.nip');
           return $this->db->get();
        }

}