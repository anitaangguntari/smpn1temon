<?php
class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('m_laporanpdf');   
    }
    
    function laporanguru(){
        
        // $this->load->view('admin/v_laporanguru', $data);
        // echo $this->db->last_query();
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(280,10,'DAFTAR GURU ',0,1,'C');
        $pdf->SetFont('Arial','B',15);
        $pdf->Cell(280,10,'SMP Negeri 1 Temon',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(5,7,'NO',1,0,'C');
        $pdf->Cell(25,7,'NIK',1,0,'C');
        $pdf->Cell(25,7,'NIP',1,0,'C');
        $pdf->Cell(45,7,'NAMA',1,0,'C');
        $pdf->Cell(5,7,'JK',1,0,'C');
        $pdf->Cell(70,7,'ALAMAT',1,0,'C');
        $pdf->Cell(40,7,'TTL',1,0,'C');
        $pdf->Cell(20,7,'NO. TELP.',1,0,'C');
        $pdf->Cell(15,7,'JENIS',1,0,'C');
        $pdf->Cell(25,7,'JABATAN',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $guru = $this->db->get('guru')->result();
        // $guru = $this->m_laporanpdf->tampilguru();
        $no=0;
        foreach($guru as $g) {
            $tanggal = $g->tgl_lahir_guru;
            $tahun=substr($tanggal, 0,4);   
            $bulan=substr($tanggal, 5,2);
            $t=substr($tanggal, 8,2);
            $tgl=$t."-".$bulan."-".$tahun;
         
        $no++;
        if($g->jk_guru=='Perempuan'){
            $jk='P';
        }else{
            $jk='L';
        }
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(5,5,$no,1,0,'C');
        $pdf->SetFont('Arial','',7);
        $pdf->Cell(25,5,$g->nik,1,0,'C');
        $pdf->Cell(25,5,$g->nip,1,0,'C');
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(45,5,$g->nama_guru,1,0,'');
        $pdf->Cell(5,5,$jk,1,0,'C');
        $pdf->Cell(70,5,$g->alamat_guru,1,0,'');
        $pdf->Cell(20,5,$g->tempat_lahir,1,0,'');
        $pdf->Cell(20,5,$tgl,1,0,'C');
        $pdf->Cell(20,5,$g->no_telp_guru,1,0,'C');
        $pdf->Cell(15,5,$g->jenis_guru,1,0,'C');
        $pdf->Cell(25,5,$g->jabatan,1,1,'C');
        } 
        $pdf->Output();
    }
     function laporansiswa(){
        
          $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(280,10,'Daftar Siswa ',0,1,'C');
        $pdf->SetFont('Arial','B',15);
        $pdf->Cell(280,10,'SMP Negeri 1 Temon',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(5,7,'NO',1,0,'C');
        $pdf->Cell(25,7,'NIK',1,0,'C');
        $pdf->Cell(25,7,'NIS',1,0,'C');
        $pdf->Cell(45,7,'NAMA',1,0,'C');
        $pdf->Cell(5,7,'JK',1,0,'C');
        $pdf->Cell(70,7,'ALAMAT',1,0,'C');
        $pdf->Cell(35,7,'TTL',1,0,'C');
        $pdf->Cell(20,7,'NO. TELP.',1,0,'C');
        $pdf->Cell(7,7,'KLS',1,0,'C');
        $pdf->Cell(20,7,'Th MASUK',1,0,'C');
        $pdf->Cell(20,7,'Th LULUS',1,1,'C');
        $siswa = $this->db->get('siswa')->result();
        // $guru = $this->m_laporanpdf->tampilguru();
        $no=0;
        foreach($siswa as $s) {
            $tanggal = $s->tgl_lahir_siswa;
            $tahun=substr($tanggal, 0,4);   
            $bulan=substr($tanggal, 5,2);
            $t=substr($tanggal, 8,2);
            $tgl=$t."-".$bulan."-".$tahun;
         
        $no++;
        if($s->jk_siswa=='Perempuan'){
            $jk='P';
        }else{
            $jk='L';
        }
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(5,5,$no,1,0,'C');
        $pdf->SetFont('Arial','',7);
        $pdf->Cell(25,5,$s->nik,1,0,'C');
        $pdf->Cell(25,5,$s->nis,1,0,'C');
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(45,5,$s->nama_siswa,1,0,'');
        $pdf->Cell(5,5,$jk,1,0,'C');
        $pdf->Cell(70,5,$s->alamat_siswa,1,0,'');
        $pdf->Cell(20,5,$s->tempat_lahir,1,0,'');
        $pdf->Cell(15,5,$tgl,1,0,'C');
        $pdf->Cell(20,5,$s->no_telp_siswa,1,0,'C');
        $pdf->Cell(7,5,$s->kelas,1,0,'C');
        $pdf->Cell(20,5,$s->tahun_masuk,1,0,'C');
        $pdf->Cell(20,5,$s->tahun_lulus,1,1,'C');
        } 
        $pdf->Output();
    }
    function laporanberita(){
        
          $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(280,10,'Daftar Berita ',0,1,'C');
        $pdf->SetFont('Arial','B',15);
        $pdf->Cell(280,10,'SMP Negeri 1 Temon',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(5,7,'NO',1,0,'C');
        $pdf->Cell(20,7,'TANGGAL',1,0,'C');
        $pdf->Cell(50,7,'JUDUL',1,0,'C');
        $pdf->Cell(205,7,'ISI BERITA',1,1,'C');
        $berita = $this->db->get('berita')->result();
        // $guru = $this->m_laporanpdf->tampilguru();
        $no=0;
        foreach($berita as $b) {
            $tanggal = $b->tanggal;
            $tahun=substr($tanggal, 0,4);   
            $bulan=substr($tanggal, 5,2);
            $t=substr($tanggal, 8,2);
            $tgl=$t."-".$bulan."-".$tahun;
         
        $no++;
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(5,5,$no,1,0,'C');
        $pdf->Cell(20,5,$tgl,1,0,'');
        $pdf->Cell(50,5,$b->judul_berita,1,0,'');
        $pdf->Cell(205,5,$b->isi_berita,1,1,'');
        } 
        $pdf->Output();
    }
}
