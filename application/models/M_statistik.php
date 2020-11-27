<?php
 function hitung(){
 	   $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
	   $tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
	   $waktu   = time(); //
	   $this->db->select("*");
	   $this->db->from('statistik');
	   $this->db->where('ip', $ip);
	   $this->db->where('tanggal', $tanggal);
	   return $this->db->get();

	   if ($s == 0) {
	   	  $data=$this->array("ip" => $ip,"tanggal" => $tanggal,"hits" => $hits,"online" => $online);
          $this->db->insert('statistik',$data);
	   }else{
	   	 	$this->db->where("ip" => $ip,"tanggal" => $tanggal);
            return $this->db->update('statistik',$data);
	   }
	    $pengunjung = $this->db->select("*");
           			  $this->db->from('statistik');
           			  $this->db->where("tanggal" => $tanggal);
           			  $this->db->group_by($ip);
                      return $this->db->get();
        $totalpengunjung = $this->db->select("*");
        			  $this->db->count('hits');
           			  $this->db->from('statistik');
                      return $this->db->get();
        $bataswaktu      = time() - 300;
        $pengunjungonline = $this->db->select("*");
           			  $this->db->from('statistik');
           			  $this->db->where("online" => $bataswaktu);
                      return $this->db->get();
       return echo('$pengunjung,$totalpengunjung,$bataswaktu,$pengunjungonline');
 }
	
 // Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini
 // $s = mysql_query("SELECT * FROM tstatistika WHERE ip='$ip' AND tanggal='$tanggal'");
// Kalau belum ada, simpan data user tersebut ke database
 // if(mysql_num_rows($s) == 0){
 //     mysql_query("INSERT INTO tstatistika(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
 // }
 // Jika sudah ada, update
 // else{
 //     mysql_query("UPDATE tstatistika SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
 // }
 // $pengunjung       = mysql_num_rows(mysql_query("SELECT * FROM tstatistika WHERE tanggal='$tanggal' GROUP BY ip")); // Hitung jumlah pengunjung
 // $totalpengunjung  = mysql_result(mysql_query("SELECT COUNT(hits) FROM tstatistika"), 0); // hitung total pengunjung
 // $bataswaktu       = time() - 300;
 // $pengunjungonline = mysql_num_rows(mysql_query("SELECT * FROM tstatistika WHERE online > '$bataswaktu'")); // hitung pengunjung online

?>