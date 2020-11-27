<!DOCTYPE html> <html lang="en">
<head>
    <title>SMP N 1 TEMON</title>
    <meta charset="UTF-8">
    <meta name="description" content="Unica University Template">
    <meta name="keywords" content="event, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->   
    <link href="<?php echo base_url('assets/img/favicon.ico') ; ?>" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ; ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ; ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/themify-icons.css') ; ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css') ; ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css') ; ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css') ; ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ; ?>"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 <script type="text/javascript">
       // <!-- This script and many more are available free online at -->
        //<!-- The JavaScript Source!! http://javascript.internet.com -->

      //  <!-- Begin
        function maxDays(mm, yyyy){
        var mDay;
            if((mm == 3) || (mm == 5) || (mm == 8) || (mm == 10)){
                mDay = 30;
              }
              else{
                  mDay = 31
                  if(mm == 1){
                       if (yyyy/4 - parseInt(yyyy/4) != 0){
                           mDay = 28
                       }
                       else{
                           mDay = 29
                      }
                }
          }
        return mDay;
        }
        function changeBg(id){
            if (eval(id).style.backgroundColor != "yellow"){
                eval(id).style.backgroundColor = "yellow"
            }
            else{
                eval(id).style.backgroundColor = "#ffffff"
            }
        }
        function writeCalendar(){
        var now = new Date
        var dd = now.getDate()
        var mm = now.getMonth()
        var dow = now.getDay()
        var yyyy = now.getFullYear()
        var arrM = new Array("January","February","March","April","May","June","July","August","September","October","November","December")
        var arrY = new Array()
            for (ii=0;ii<=4;ii++){
                arrY[ii] = yyyy - 2 + ii
            }
        var arrD = new Array("Sun","Mon","Tue","Wed","Thu","Fri","Sat")

        var text = ""
        text = "<form name=calForm>"
        text += "<table border=5>"
        text += "<tr background-color:#6a7975><td>"
        text += "<table width=100%><tr>"
        text += "<td align=left>"
        text += "<select name=selMonth onChange='changeCal()'>"
            for (ii=0;ii<=11;ii++){
                if (ii==mm){
                    text += "<option value= " + ii + " Selected>" + arrM[ii] + "</option>"
                }
                else{
                    text += "<option value= " + ii + ">" + arrM[ii] + "</option>"
                }
            }
        text += "</select>"
        text += "</td>"
        text += "<td align=center></td>"
        text += "<td align=right>"
        text += "<select name=selYear onChange='changeCal()'>"
            for (ii=0;ii<=4;ii++){
                if (ii==2){
                    text += "<option value= " + arrY[ii] + " Selected>" + arrY[ii] + "</option>"
                }
                else{
                    text += "<option value= " + arrY[ii] + ">" + arrY[ii] + "</option>"
                }
            }
        text += "</select>"
        text += "</td>"
        text += "</tr></table>"
        text += "</td></tr>"
        text += "<tr><td>"
        text += "<table border=1>"
        text += "<tr>"
            for (ii=0;ii<=6;ii++){
                text += "<td align=center><span class=label>" + arrD[ii] + "</span></td>"
            }
        text += "</tr>"
        aa = 0
            for (kk=0;kk<=5;kk++){
                text += "<tr>"
                for (ii=0;ii<=6;ii++){
                    text += "<td align=center><span id=sp" + aa + " onClick='changeBg(this.id)'>1</span></td>"
                    aa += 1
                }
                text += "</tr>"
            }
        text += "</table>"
        text += "</td></tr>"
        text += "</table>"
        text += "</form>"
        document.write(text)
        changeCal()
        }
        function changeCal(){
        var now = new Date
        var dd = now.getDate()
        var mm = now.getMonth()
        var dow = now.getDay()
        var yyyy = now.getFullYear()
        var currM = parseInt(document.calForm.selMonth.value)
        var prevM
            if (currM!=0){
                prevM = currM - 1
            }
            else{
                prevM = 11
            }
        var currY = parseInt(document.calForm.selYear.value)
        var mmyyyy = new Date()
        mmyyyy.setFullYear(currY)
        mmyyyy.setMonth(currM)
        mmyyyy.setDate(1)
        var day1 = mmyyyy.getDay()
            if (day1 == 0){
                day1 = 7
            }
        var arrN = new Array(41)
        var aa
            for (ii=0;ii<day1;ii++){
                arrN[ii] = maxDays((prevM),currY) - day1 + ii + 1
            }
            aa = 1
            for (ii=day1;ii<=day1+maxDays(currM,currY)-1;ii++){
                arrN[ii] = aa
                aa += 1
            }
            aa = 1
            for (ii=day1+maxDays(currM,currY);ii<=41;ii++){
                arrN[ii] = aa
                aa += 1
            }
            for (ii=0;ii<=41;ii++){
                eval("sp"+ii).style.backgroundColor = "#cdf9ed"
            }
        var dCount = 0
            for (ii=0;ii<=41;ii++){
                if (((ii<7)&&(arrN[ii]>20))||((ii>27)&&(arrN[ii]<20))){
                    eval("sp"+ii).innerHTML = arrN[ii]
                    eval("sp"+ii).className = "c3"
                }
                else{
                    eval("sp"+ii).innerHTML = arrN[ii]
                    if ((dCount==0)||(dCount==6)){
                        eval("sp"+ii).className = "c2"
                    }
                    else{
                        eval("sp"+ii).className = "c1"
                    }
                    if ((arrN[ii]==dd)&&(mm==currM)&&(yyyy==currY)){
                        eval("sp"+ii).style.backgroundColor="#d68a5e"
                    }
                }
            dCount += 1
                if (dCount>6){
                    dCount=0
                }
            }
        }
        //  End -->
        </script>
        <style type="text/css">
            table {
                background-color: #cdf9ed;
            }
            span.label {
                color: black;
                width: 20;
                height: 30;
                text-align: center;
                margin-top: 0;
                background: #d8d1a2;
                font: bold 13px Arial;
            }
        </style>
<style type="text/css">
    .testimonial-slider .ts-author-pic {
    width: 100%;
    height: 200px;
    border-radius: 0%;
    margin: 0px auto 0;
}
.testimonial-slider .owl-nav {
    position: absolute;
    top: 0px;
    width: 100%;
    left: 0px;
}
</style>
<style type="text/css">
body{
      background-color: #edeff4;
    }
    .header-section{
        max-height: 300px;
        margin-bottom: 0px;
    }
    .header-section img{
        width: 100px;
        margin-top: 7px;
    }
    .alamat{
        padding-top:1px;
        padding-bottom:1px;
        background-color: black;
        max-height: 25px;
    }
    .alamat p{
        padding-top:1px;
        padding-bottom:1px;
        color: white;
        margin: 15px;
        text-shadow: 2px 2px blue;
    }
    .alamat a{
        text-align: relative;
    }
    .service-section .container .service-icon img{
        max-width: 40px;
        max-height: 40px;
    }
     .border h4{
        color: #000;
        font-family: Calibri;
        text-align: center;
        font-size: 25px;
    }
     .border1{
        background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,234,227,1));
        background-color: #e1eae3;
        font-family: Calibri;
        font-size: 15px;
        border-radius: 7px;
    }
     .border2 h4{
        color: #000;
        font-family: Calibri;
        text-align: center;
        font-size: 25px;
        vertical-align: middle;
    }
    .galeri{
        max-height: 50px;
    }
     .nav-switch {
        color: #bae2c3;
    }
     .atas{
        background-color: #fff;
        margin-bottom: 50px;
    }
    .course-thumb img{
      -webkit-transition: 0.4s ease;
      transition: 0.4s ease;
      width: 700px;
    }
    .zoom-effect:hover .course-thumb img {
      -webkit-transform: scale(1.08);
      transform: scale(1.08);
    }
    .menu-footer ul li a:hover {
        background-color: orange;
    }
    .spad {
        padding-top: 0px;
        padding-bottom: 30px;
    }
    /* Style tombol utama */
    .dropbtn {
        background-color: #020031;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    /* Warna background dari tombol utama ketika isi konten dropdown ditampilkan */
    .dropdown:hover .dropbtn {
        background-color: #006947;
    }

    /* Isi dari <div> - Diperlukan untuk memposisikan isi konten dropdown */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Isi konten dropdown (disembunyikan) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #2f303f;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    /* Link di dalam menu dropdown */
    .dropdown-content a {
        color:#fff;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Warna link di dalam dropdown ketika disorot */
    .dropdown-content a:hover {
     background-color:#008c5f;
     color: #fff !important;
    }

    /* Tampilkan isi konten dopdown ketika disorot */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    .nav-section .nav-right {
        float: right;
        padding-top: 15px;
        margin-right: 5px;
    }
    .menu a:hover{
         background-color:orange;
    }
     hr {
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
        border: 0;
        border-top: 1px solid rgba(0,0,0,.1);
    }
</style>
<style type="text/css">

    span.label {color:black;width:20;height:30;text-align:center;margin-top:0;background:#ffF;font:bold 13px Arial}
    span.c1 {cursor:hand;color:black;width:20;height:16;text-align:center;margin-top:0;background:#ffF;font:bold 13px Arial}
    span.c2 {cursor:hand;color:red;width:20;height:16;text-align:center;margin-top:0;background:#ffF;font:bold 13px Arial}
    span.c3 {cursor:hand;color:#b0b0b0;width:20;height:16;text-align:center;margin-top:0;background:#ffF;font:bold 12px Arial}

</style>
<style type="text/css">
    p {
        font-family: calibri;
        font-size: 17px;
        text-align: justify;
        color: black;
    }
</style>
<style type="text/css">
    .dropdown-menu>li
{   position:relative;
    -webkit-user-select: none; /* Chrome/Safari */        
    -moz-user-select: none; /* Firefox */
    -ms-user-select: none; /* IE10+ */
    /* Rules below not implemented in browsers yet */
    -o-user-select: none;
    user-select: none;
    cursor:pointer;
}
.dropdown-menu .sub-menu {
    left: 100%;
    position: absolute;
    top: 0;
    display:none;
    margin-top: -1px;
    border-top-left-radius:0;
    border-bottom-left-radius:0;
    border-left-color:#fff;
    box-shadow:none;
}
.right-caret:after,.left-caret:after
 {  content:"";
    border-bottom: 5px solid transparent;
    border-top: 5px solid transparent;
    display: inline-block;
    height: 0;
    vertical-align: middle;
    width: 0;
    margin-left:5px;
}
.right-caret:after
{   border-left: 5px solid #ffaf46;
}
.left-caret:after
{   border-right: 5px solid #ffaf46;
}
.main-menu li a:hover {
    background: #006947;
    width: 100%;
}
.main-menu li a {
    display: inline-block;
    color: #fff;
    font-size: 13px;
    text-transform: capitalize;
    font-weight: 500;
    padding: 25px 20px;
    margin-right: -5px;
    -webkit-transition: all 0.4s ease 0s;
    -o-transition: all 0.4s ease 0s;
    transition: all 0.4s ease 0s;
}
.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 160px;
    padding: 5px 0;
    margin: 2px 0 0;
    font-size: 14px;
    text-align: left;
    list-style: none;
    background-color: #2f303f;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #ccc;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 4px;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
}
a:not([href]):not([tabindex]) {
    color: white;
    text-decoration: none;
}
</style>
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
<div class="atas">
    <!-- header section -->
    <header class="header-section" style="background-color: #fff;">

        <div class="alamat">
        <?php foreach( $profil as $p ) : ?> <!-- Mulai loop -->
         <marquee style="max-height: 25px;"><p style="margin-top: 0px;"><?php echo $p->alamat_sekolah; ?></p></marquee>
        <?php endforeach; ?> <!-- Selesai loop -->
        </div>
        <div class="container">
           <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row">
                        <div class="col-lg-1 col-md-1">
                            <?php foreach( $profil as $p ) : ?> <!-- Mulai loop -->
                            <img src='<?=base_url()?>images/<?=$p->logo_sekolah;?>' style="">
                            <?php endforeach; ?> <!-- Selesai loop -->
                        </div>
                        <div class="col-lg-11 col-md-11">
                            <strong>
                                <?php foreach( $profil as $p ) : ?> <!-- Mulai loop -->
                                <font color="green" style="font-size: 30px;"><?php echo $p->nama_sekolah; ?></font>
                                <p style="color: black;"><?php echo $p->alamat_sekolah; ?></p> 
                                <?php endforeach; ?> <!-- Selesai loop -->
                            </strong>
                        </div>
                </div>
            </div>
           </div>
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
        </div>
     </header>
    <!-- Header section end -->


    <!-- Header section  -->
   <nav class="nav-section">
        <div class="nav-right">
                 <a href="<?php echo base_url('login') ; ?>"><i class="fa fa-user"></i></a>
            </div>
        <div class="container">
            
            <ul class="main-menu">
                <button class="dropbtn" style="background-color:  #006947" ><a href="<?php echo base_url('') ; ?>" style="color: white;">BERANDA</a></button>
                <button class="dropbtn" style="background-color:  #020031" ><a href="<?php echo base_url('berita') ; ?>" style="color: white;">BERITA</a></button>
                <button class="dropbtn" style="background-color:  #020031" ><a href="<?php echo base_url('artikel') ; ?>" style="color: white;">ARTIKEL</a></button>
                <div class="dropdown">
                  <button class="dropbtn">PROFIL</button>
                  <div class="dropdown-content">
                    <a href="<?php echo base_url('profil') ; ?>">Tentang Kami</a>
                    <a href="<?php echo base_url('visimisi') ; ?>">Visi dan Misi</a>
                    <a href="<?php echo base_url('sejarah') ; ?>">Sejarah</a>
                    <!-- <a href="<?php echo base_url('dapodik/identitas') ; ?>">Dapodkdasmen SMP N 1 Temon</a> -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dapodkdasmen SMP N 1 Temon <!-- <span class="caret"></span> --></a>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo base_url('dapodik/identitas') ; ?>">Profil</a></li>
                          <li><a class="trigger right-caret">Rekapitulasi</a>
                              <ul class="dropdown-menu sub-menu">
                                <li><a href="<?php echo base_url('dapodik/ptk_pd') ; ?>">Data PTK dan PD</a></li>
                                <li><a href="<?php echo base_url('dapodik/sarpras') ; ?>">Data Sarpras</a></li>
                                <li><a href="<?php echo base_url('dapodik/sanitasi') ; ?>">Data Sanitasi</a></li>
                                <li><a href="<?php echo base_url('dapodik/rombel') ; ?>">Data Rombel</a></li>
                              </ul>
                          </li>
                        </ul>
                    </li>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="dropbtn">AKADEMIS</button>
                  <div class="dropdown-content">
                    <a href="<?php echo base_url('kurikulum') ; ?>">Kurikulum</a>
                    <a href="<?php echo base_url('agenda') ; ?>">Agenda</a>
                    <!-- <a href="<?php echo base_url('jadwal') ; ?>">JADWAL</a> -->
                    <a href="<?php echo base_url('guru') ; ?>">Guru</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="dropbtn">NON AKADEMIS</button>
                  <div class="dropdown-content">
                    <a href="<?php echo base_url('galeri') ; ?>">Galei Foto</a>
                    <a href="<?php echo base_url('ekstra') ; ?>">Ekstrakurikuler</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="dropbtn">FASILITAS</button>
                  <div class="dropdown-content">
                    <?php foreach ($fasilitas as $f) {  ?>
                    <a href="<?php echo base_url('fasilitas/tampil/'.$f->id_fasilitas);?>" stye="text-transform: capitalize;"><?php echo  $f->nama_fasilitas;?></a>
                    <?php } ?> <!-- Selesai loop -->
                  </div>
                </div>
                <button class="dropbtn" style="background-color:  #020031" ><a href="<?php echo base_url('bukutamu') ; ?>"  style="color: white;">BUKU TAMU</a></button>
                <div class="dropdown">
                  <button class="dropbtn">PENUGASAN</button>
                  <div class="dropdown-content">
                    <a href="<?php echo base_url('penugasan/kelas7') ; ?>">Kelas 7</a>
                    <a href="<?php echo base_url('penugasan/kelas8') ; ?>">Kelas 8</a>
                    <a href="<?php echo base_url('penugasan/kelas9') ; ?>">Kelas 9</a>
                  </div>
                </div>
            </ul>
        </div>
    </nav>
</div>
    <!-- Services section -->

    <?php

        function http_request($url){
            // persiapkan curl
            $ch = curl_init(); 

            // set url 
            curl_setopt($ch, CURLOPT_URL, $url);
            
            // set user agent    
            curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

            // return the transfer as a string 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

            // $output contains the output string 
            $output = curl_exec($ch); 

            // tutup curl 
            curl_close($ch);      

            // mengembalikan hasil curl
            return $output;
        }

        $profile = http_request("http://dapo.dikdasmen.kemdikbud.go.id/rekap/sekolahDetail?semester_id=20182&sekolah_id=844679F2A6302AA1E31C");

        // ubah string JSON menjadi array
        $profile = json_decode($profile, TRUE);
        // echo "<pre>";
        // print_r($profile);
        // echo "</pre>";
    ?>

    <section class="service-section spad">
        <div class="container services">
            <div class="row">
                <div class="col-lg-8 col-sm-8 service-item" >
                     <div class="menu">
                        <b> <a href="<?php echo base_url('') ; ?>" style="color: black; font-family: calibri;">Home</a>&nbsp;&nbsp;<font style="color: grey;">|</font>&nbsp;&nbsp;<a href="<?php echo base_url('dapodik/identitas') ; ?>" style="color: black; font-family: calibri;">Profil</a>&nbsp;&nbsp;<font style="color: grey;">|</font>&nbsp;&nbsp; <a href="<?php echo base_url('dapodik/rekapitulasi') ; ?>" style="color: black; font-family: calibri;">Rekapitulasi</a></b></br></br>
                    </div>
                    <!-- <a href="http://dapo.dikdasmen.kemdikbud.go.id/getExcel/getProfilSekolah?semester_id=20162&sekolah_id=844679F2A6302AA1E31C" class="btn btn-primary" style=""><i class="fa fa-file-excel"></i>Unduh Profil</a> -->
                    <div class="row"  >
                        <h3 style="font-family: Calibri; color: orange; background-color: #020031; width: 100%;"><b>Data PTK dan PD</b></h3></br>
                           <div class="col-sm-12 col-md-6 col-lg-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Jenis Kelamin</th>
                                                <th>Guru</th>
                                                <th>Tendik</th>
                                                <th>PTK</th>
                                                <th>PD</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="background-color: #e1eae3;">
                                               <td>Laki-Laki</td> 
                                               <td><?=$profile[0]['ptk_laki'];?></td> 
                                               <td><?=$profile[0]['pegawai_laki'];?></td> 
                                               <td><?=($profile[0]['ptk_laki'] + $profile[0]['pegawai_laki']);?></td>
                                               <td><?=$profile[0]['pd_laki'];?></td>
                                            </tr>
                                            <tr >
                                               <td>Perempuan</td> 
                                               <td><?=$profile[0]['ptk_perempuan'];?></td> 
                                               <td><?=$profile[0]['pegawai_perempuan'];?></td> 
                                               <td><?=($profile[0]['ptk_perempuan'] + $profile[0]['pegawai_perempuan']);?></td>
                                               <td><?=$profile[0]['pd_perempuan'];?></td>
                                            </tr>
                                             <tr style="background-color: #e1eae3;">
                                               <td><b>Total</b></td> 
                                               <td><b><?=($profile[0]['ptk_laki'] + $profile[0]['ptk_perempuan']);?></b></td>
                                               <td><b><?=($profile[0]['pegawai_laki'] + $profile[0]['pegawai_perempuan']);?></b></td>
                                               <td><b><?=($profile[0]['ptk_laki'] + $profile[0]['ptk_perempuan'] + $profile[0]['pegawai_laki'] + $profile[0]['pegawai_perempuan']);?></b></td>
                                               <td><b><?=($profile[0]['pd_laki'] + $profile[0]['pd_perempuan'] );?></b></td>
                                            </tr>
                                        </tbody>
                                    </table> 
                                    </br>
                                    <?php
                                        function tgl_indo($tanggal){
                                            $bulan = array (
                                                1 =>   'Januari',
                                                'Februari',
                                                'Maret',
                                                'April',
                                                'Mei',
                                                'Juni',
                                                'Juli',
                                                'Agustus',
                                                'September',
                                                'Oktober',
                                                'November',
                                                'Desember'
                                            );
                                            $pecahkan = explode('-', $tanggal);
                                            
                                            // variabel pecahkan 0 = tanggal
                                            // variabel pecahkan 1 = bulan
                                            // variabel pecahkan 2 = tahun
                                         
                                            return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                                        }
                                    ?>
 
                                        <p>
                                            Keterangan :
                                            <ul type="disc">
                                                <li>Data Rekap Per Tanggal <strong class="tanggal-sekarang-label"><?php echo tgl_indo(date('Y-m-d')); ?></strong></li>
                                                <li>Penghitungan PTK adalah yang sudah mendapat penugasan, berstatus aktif dan terdaftar di sekolah induk.</li>
                                                <li>
                                                    Singkatan :
                                                    <ol>
                                                        <li>PTK = Guru ditambah Tendik</li>
                                                        <li>PD = Peserta Didik</li>
                                                    </ol>
                                                </li>
                                            </ul>
                                        </p>

                                    <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                                         <thead>
                                            <tr style="box-shadow: 1px 1px 3px #400404; text-align: center;">
                                                <th>No</th>
                                                <th>Guru Kelas</th>
                                                <th>Guru Matematika</th>
                                                <th>Guru Bahasa Indonesia</th>
                                                <th>Guru Bahasa Inggris</th>
                                                <th>Guru Sejarah Indonesia</th>
                                                <th>Guru PKN</th>
                                                <th>Guru Penjaskes</th>
                                                <th>Guru Agama Budi Pekerti</th>
                                                <th>Guru Seni Budaya</th>
                                                <th>PTK Laki-laki</th>
                                                <th>PTK Perempuan</th>
                                                <th>Pegawai Laki-laki</th>
                                                <th>Pegawai Perempuan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $no=0;
                                            ?>
                                            <?php foreach(  $profile as $p => $baris) : ?>
                                            <?php 
                                                $no++;
                                            ?>
                                             <tr style="text-align: center;">
                                                <td><?php echo  $p+1; ?></td>
                                                <td><?php echo  $baris['guru_kelas']; ?></td>
                                                <td><?php echo  $baris['guru_matematika'] ?></td>
                                                <td><?php echo  $baris['guru_bahasa_indonesia']; ?></td>
                                                <td><?php echo  $baris['guru_bahasa_inggris']; ?></td>
                                                <td><?php echo  $baris['guru_sejarah_indonesia'] ?></td>
                                                <td><?php echo  $baris['guru_pkn']; ?></td>
                                                <td><?php echo  $baris['guru_penjaskes']; ?></td>
                                                <td><?php echo  $baris['guru_agama_budi_pekerti'] ?></td>
                                                <td><?php echo  $baris['guru_seni_budaya']; ?></td>
                                                <td><?php echo  $baris['ptk_laki']; ?></td>
                                                <td><?php echo  $baris['ptk_perempuan'] ?></td>
                                                <td><?php echo  $baris['pegawai_laki']; ?></td>
                                                <td><?php echo  $baris['pegawai_perempuan']; ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table> -->
                                </div></br></br>
                           </div>
                    </div> </br></br>

                    
                    <div class="row">
                        <h3 style="font-family: Calibri; color: orange; background-color: #020031; width: 100%;"><b>Data Sarpras</b></h3></br>
                           <div class="col-sm-12 col-md-6 col-lg-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tipe Sarpras</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="background-color: #e1eae3;">
                                               <td>1</td> 
                                               <td>Ruang Kelas</td> 
                                               <td><?=$profile[0]['jml_rk'];?></td> 
                                              
                                            </tr>
                                            <tr>
                                               <td>2</td> 
                                               <td>Ruang Laboratorium</td> 
                                               <td><?=$profile[0]['jml_lab'];?></td> 
                                              
                                             <tr style="background-color: #e1eae3;">
                                               <td>3</td> 
                                               <td>Ruang Perpustakaan</td>
                                               <td><?=$profile[0]['jml_perpus'];?></td>
                                             
                                            </tr>
                                            <tr>
                                               <td></td> 
                                               <td><b>Total</b></td>
                                               <td><b><?=($profile[0]['jml_rk'] + $profile[0]['jml_lab'] + $profile[0]['jml_perpus']);?></b></td>
                                            </tr>
                                        </tbody>
                                    </table> 
                                </div></br></br>
                           </div>
                    </div></br></br>

                    <div class="row">
                        <h3 style="font-family: Calibri; color: orange; background-color: #020031; width: 100%;"><b>Data Sanitasi</b></h3></br>
                           <div class="col-sm-12 col-md-6 col-lg-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Variabel</th>
                                                <th>Uraian</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="background-color: #e1eae3;">
                                               <td>1</td> 
                                               <td>Kecukupan air</td> 
                                               <td><?=$profile[0]['kecukupan_air'];?></td> 
                                              
                                            </tr>
                                            <tr>
                                               <td>2</td> 
                                               <td>Sekolah memproses air sendiri</td> 
                                               <td><?=$profile[0]['memproses_air'];?></td> 
                                              
                                             <tr style="background-color: #e1eae3;">
                                               <td>3</td> 
                                               <td>Air minum untuk siswa</td>
                                               <td><?=$profile[0]['minum_siswa'];?></td>
                                             
                                            </tr>
                                            <tr>
                                               <td>4</td> 
                                               <td>Mayoritas membawa air minum</td>
                                               <td><?=$profile[0]['siswa_bawa_air'] ;?></td>
                                            </tr>
                                            <tr style="background-color: #e1eae3;">
                                               <td>5</td> 
                                               <td>Jumlah toilet berkebutuhan khusus/td> 
                                               <td><?=$profile[0]['toilet_siswa_kk'];?></td> 
                                              
                                            </tr>
                                            <tr>
                                               <td>6</td> 
                                               <td>Sumber air sanitasi</td> 
                                               <td><?=$profile[0]['sumber_air_str'];?></td> 
                                              
                                             <tr style="background-color: #e1eae3;">
                                               <td>7</td> 
                                               <td>Ketersediaan air di lingkungan sekolah</td>
                                               <td><?=$profile[0]['ketersediaan_air'];?></td>
                                             
                                            </tr>
                                            <tr>
                                               <td>8</td> 
                                               <td>Tipe jamban</td>
                                               <td><?=$profile[0]['tipe_jamban'];?></td>
                                            </tr>
                                             <tr style="background-color: #e1eae3;">
                                               <td>9</td> 
                                               <td>Apakah sabun dan air mengalir pada tempat cuci tangan</td> 
                                               <td><?=$profile[0]['a_sabun_air_mengalir'];?></td> 
                                              
                                            </tr>
                                            <tr>
                                               <td>10</td> 
                                               <td>Jamban dapat digunakan</td> 
                                               <td><?=$profile[0]['jml_jamban_digunakan'];?></td> 
                                              
                                             <tr style="background-color: #e1eae3;">
                                               <td>11</td> 
                                               <td>Jamban tidak dapat digunakan</td>
                                               <td><?=$profile[0]['jml_jamban_tidak_digunakan'];?></td>
                                             
                                            </tr>
                                        </tbody>
                                    </table> 
                                </div></br></br>
                           </div>
                    </div></br></br>

                   
                    <div class="row">
                    <h3 style="font-family: Calibri; color: orange; background-color: #020031; width: 100%; margin-bottom: 10px;"><b>Data Rombongan Belajar</b></h3>
                         <p><b>SMP NEGERI 1 TEMON</b> memiliki <b>jumlah rombel</b> sebanyak <b><?=$profile[0]['rombel'];?></b>, dengan uraian sebagai berikut:</p>
                           <div class="col-sm-12 col-md-6 col-lg-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th colspan="3" style="text-align: center;">Rombel 7</th>
                                                <th colspan="3" style="text-align: center;">Rombel 8</th>
                                                <th colspan="3" style="text-align: center;">Rombel 9</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="background-color: #e1eae3;">
                                               <td><b>Uraian</b></td> 
                                               <td><b>L</b></td> 
                                               <td ><b>P</b></td> 
                                               <td><b>Tot</b></td> 
                                               <td><b>L</b></td> 
                                               <td><b>P</b></td> 
                                               <td><b>Tot</b></td> 
                                               <td><b>L</b></td> 
                                               <td><b>P</b></td> 
                                               <td><b>Tot</b></td> 
                                            </tr>
                                            <tr>
                                               <td>Jumlah</td> 
                                               <td><?=$profile[0]['pd_kelas_7_laki'];?></td>
                                               <td><?=$profile[0]['pd_kelas_7_perempuan'];?></td>
                                               <td><?=($profile[0]['pd_kelas_7_laki'] + $profile[0]['pd_kelas_7_perempuan']);?></td> 
                                               <td><?=$profile[0]['pd_kelas_8_laki'];?></td>
                                               <td><?=$profile[0]['pd_kelas_8_perempuan'];?></td>
                                               <td><?=($profile[0]['pd_kelas_8_laki'] + $profile[0]['pd_kelas_8_perempuan']);?></td> 
                                               <td><?=$profile[0]['pd_kelas_9_laki'];?></td>
                                               <td><?=$profile[0]['pd_kelas_9_perempuan'];?></td>
                                               <td><?=($profile[0]['pd_kelas_9_laki'] + $profile[0]['pd_kelas_9_perempuan']);?></td> 
                                           
                                        </tbody>
                                    </table> 
                                </div></br></br>
                           </div>
                    </div>
                </div>

                   <div class="col-lg-4 col-sm-4 service-item" style="margin-top: 107px;">
                    <!-- <div class="service-content"> -->
                       <!--  <div class="kalender" style="width: 100%; float: center;">
                            <table><?php echo $calendar; ?></table>
                        </div> -->
                         <!-- widget -->
                    <!-- <div class="widget">
                        <form class="search-widget">
                            <input type="text" placeholder="Search..." style="">
                            <button><i class="ti-search"></i></button>
                        </form>
                    </div> -->
                        <div class="kalender" style="border: 3px solid #a4a4a4; background-color:#a4a4a4 ">
                            <div class="border2"style="text-align: center; ">
                                <img src="<?php echo base_url('assets/img/garis1.png') ; ?>" style="width: 100%; height: 50px; z-index: 1; box-shadow: 30px 30px 30px white;"> 
                                <h3 style="text-align: center; z-index: 2; margin-top: -40px; color: white;"><b>Kalender</b></h3>
                                <img src="<?php echo base_url('assets/img/garis1.png') ; ?>">
                            </div>
                            <center>
                                <script type="text/javascript">writeCalendar()</script>
                            </center>
                            </br>
                        </div>
                        </br>
                        <section class="testimonial-section">
                            <div class="container" style="padding-left: 0px; padding-right: 0px;height: 200px; width: 100%;">
                                <div class="testimonial-slider owl-carousel">
                                     <?php foreach( $pengumuman as $peng) : ?> <!-- Mulai loop -->
                                    <div class="ts-item">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <a href="#myModal" data-toggle="modal" data-target="" class="edit-record" data-id="<?php echo $peng->id_pengumuman; ?>">
                                                <div class="ts-author-pic set-bg" data-setbg="<?=base_url()?>images/<?=$peng->gambar;?>"></div></a>
                                               <!--  <p>“<?php echo $peng->isi_pengumuman; ?>”</p> -->
                                                <!-- <h5>Mr. Peter Crough</h5> -->
                                                <!-- <span>Student’s Parent</span> -->
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?> <!-- Selesai loop -->
                                </div>
                            </div>
                        </section>
                       
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <!-- <h4 class="modal-title" id="myModalLabel">Cara Membuat Pop UP Gambar dengan Bootstrap</h4> -->
                              </div>
                              <div class="modal-body">
                                
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>   
                              </div>
                            </div>
                          </div>
                        </div>

                    </br>

                    <div class="kanan" style="">
                        <div class="border2" style="text-align: center; ">
                            <img src="<?php echo base_url('assets/img/garis1.png') ; ?>" style="width: 100%; height: 50px; z-index: 1; box-shadow: 30px 30px 30px white;"> 
                            <h3 style="text-align: center; z-index: 2; margin-top: -40px; color: white;"><b>Berita Terkini</b></h3>
                            <img src="<?php echo base_url('assets/img/garis1.png') ; ?>">
                        </div>
                        <div class="border1">
                            <?php foreach( $berita as $b ) : ?> <!-- Mulai loop -->
                             <?php $tanggal = $b->tanggal;
                                $tahun=substr($tanggal, 0,4);   
                                $bulan=substr($tanggal, 5,2);
                                $t=substr($tanggal, 8,2);
                                $tgl=$t."-".$bulan."-".$tahun;              
                            ?>
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <img class="tengah" src="<?=base_url()?>images/<?=$b->gambar;?>" style="width: 100%; ">
                                </div>
                                <div class="col-lg-8 col-sm-8" style="">
                                     <a href="<?php echo base_url('berita/edit/'.$b->id_berita) ?>"><?php echo $b->judul_berita; ?></a></br>
                                     <p><i class="fa fa-clock-o"></i> &nbsp;<?php echo $tgl; ?></p>
                                </div>
                            </div>
                            <!-- <img src="<?php echo base_url('assets/img/garis1.png') ; ?>" style="width: 100%;"> -->
                            <hr size='40' width = '100%  'color = '#1d2c41'/> 
                            <?php endforeach; ?> <!-- Selesai loop -->
                        </div>
                    </div>
                        </br>
                        <div class="border2"style="text-align: center; ">
                            <img src="<?php echo base_url('assets/img/garis1.png') ; ?>" style="width: 100%; height: 50px; z-index: 1; box-shadow: 30px 30px 30px white;"> 
                            <h3 style="text-align: center; z-index: 2; margin-top: -40px; color: white;"><b>Tautan</b></h3>
                            <img src="<?php echo base_url('assets/img/garis1.png') ; ?>">
                        </div>
                        <div class="border1">
                            <!--  <div class="row">
                                <div class="col-lg-2 col-sm-2">
                                     <img src="<?php echo base_url('assets/img/logo-dikdasmen.png') ; ?>" style="width: 100%; ">
                                </div>
                                <div class="col-lg-10 col-sm-10" style="padding-left: 0px;">
                                     <i class="fa fa-caret-right"></i><i class="fa fa-caret-right"></i>&nbsp;<a href="<?php echo base_url('dapodik/identitas') ; ?>" style="font-family: calibri;">Dapodikdasmen SMP N 1 Temon</a></br>
                                </div>
                            </div>
                            
                            <hr size='40' width = '100%  'color = '#1d2c41'/> --> 
                            <?php foreach( $tautan as $t ) : ?> <!-- Mulai loop -->
                              <div class="row">
                                <div class="col-lg-2 col-sm-2">
                                    <img class="tengah" src="<?=base_url()?>images/<?=$t->logo;?>" style="width: 100%; ">
                                </div>
                                <div class="col-lg-10 col-sm-10" style="padding-left: 0px;">
                                      <i class="fa fa-caret-right"></i><i class="fa fa-caret-right"></i>&nbsp;<a href="<?php echo $t->tujuan_tautan; ?>"><?php echo $t->judul_tautan; ?></a></br>
                                </div>
                            </div>
                            <hr size='40' width = '100%  'color = '#1d2c41'/> 
                            <?php endforeach; ?> <!-- Selesai loop -->
                        </div>
                        </br>
                    <!-- </div> -->
                    <div class="jadwal" style="background-color: #e1eae3; ">
                         <center>
                            <img src="<?php echo base_url('assets/img/garis1.png') ; ?>" style="width: 100%; height: 50px; z-index: 1; box-shadow: 30px 30px 30px white;"> 
                            <h3 style="text-align: center; z-index: 2; margin-top: -40px; color: white;"><i class="material-icons">file_download</i>&nbsp;&nbsp;&nbsp;<b>Jadwal Pelajaran</b></h3>
                            <img src="<?php echo base_url('assets/img/garis1.png') ; ?>">
                        </center>
                        </br></br>
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Kelas</th>
                                            <th style="text-align: center;">File</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $no=0;
                                        ?>
                                        <?php foreach( $jadwal as $j ) : ?> <!-- Mulai loop -->
                                        <?php 
                                            $no++;
                                        ?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $no; ?></td>
                                            <td style="text-align: center;"><?php echo $j->kelas; ?></td>
                                            <td> <a href="#myModal" data-toggle="modal" data-target="" class="jadwal" data-id="<?php echo $j->kelas; ?>" style="text-align: center;"><?php echo $j->gambar_jadwal; ?></a></td>
                                        </tr>
                                        <?php endforeach; ?> <!-- Selesai loop -->
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col 4 -->
            </div> <!-- end row -->
        </div>
    </section>
   
    <!-- Services section end -->

    <!-- Footer section -->
    <footer class="footer-section">
        <div class="container footer-top">
            <div class="row">
                <!-- widget -->
                <div class="col-sm-6 col-lg-3 footer-widget">
                    <div class="about-widget">

                        <?php foreach( $profil as $p ) : ?> <!-- Mulai loop -->
                           <h6 class="fw-title"><?php echo $p->nama_sekolah; ?></h6>
                        <p><?php echo substr($p->isi_profil ,0 ,100); ?></p>
                        <?php endforeach; ?> <!-- Selesai loop -->
                        <div class="social pt-1">
                            <?php foreach( $sosmed as $s) : ?> <!-- Mulai loop -->
                            <a href="<?php echo $s->link_sosmed; ?>"> <img src='<?=base_url()?>images/<?=$s->logo_sosmed;?>'class="animated infinite tada" style="width: 7%;"></a>
                            <?php endforeach; ?>  <!-- Selesai loop -->
                        </div>
                    </div>
                </div>
                <!-- widget -->
                <div class="col-sm-6 col-lg-2 footer-widget">
                    <h6 class="fw-title">Profil</h6>
                    <ul class="recent-post">
                       <li><a href="<?php echo base_url('profil') ; ?>" style="color: white;">Profil</a></li>
                       <li><a href="<?php echo base_url('visimisi') ; ?>" style="color: white;">Visi Misi</a></li>
                       <li><a href="<?php echo base_url('sejarah') ; ?>" style="color: white;">Sejarah</a></li>
                       <li><a href="<?php echo base_url('dapodik/identitas') ; ?>" style="color: white;">Dapodkdasmen SMP N 1 Temon</a></li>
                    </ul>
                </div><div class="col-sm-6 col-lg-2 footer-widget">
                    <h6 class="fw-title">Akademik</h6>
                    <ul class="recent-post">
                        <li><a href="<?php echo base_url('guru') ; ?>" style="color: white;">Guru</a></li>
                        <li><a href="<?php echo base_url('kurikulum') ; ?>" style="color: white;">Kurikulum</a></li>
                        <li><a href="<?php echo base_url('agenda') ; ?>" style="color: white;">Agenda</a></li>
                        <li><a href="<?php echo base_url('ekstra') ; ?>" style="color: white;">Ekstrakurikuler</a></li>
                    </ul>
                </div><div class="col-sm-6 col-lg-2 footer-widget">
                    <h6 class="fw-title">Non Akademik</h6>
                    <ul class="recent-post">
                        <li><a href="<?php echo base_url('galeri') ; ?>" style="color: white;">Galeri Foto</a></li>
                        <li><a href="<?php echo base_url('bukutamu') ; ?>" style="color: white;">Buku Tamu</a></li>
                        <li><a href="<?php echo base_url('fasilitas') ; ?>" style="color: white;">Fasilitas</a></li>

                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 footer-widget">
                    <h6 class="fw-title">KONTAK</h6>
                    <ul class="contact">
                        <?php foreach( $profil as $p ) : ?> <!-- Mulai loop -->
                        
                        <li><p style="font-size: 15px; color: white;"><i class="fa fa-map-marker"></i>&nbsp;<?php echo $p->alamat_sekolah; ?></p></li>
                        <li><p style="font-size: 15px; color: white;"><i class="fa fa-phone"></i>&nbsp;<?php echo $p->no_telp; ?></p></li>
                        <li><p style="font-size: 15px; color: white;"><i class="fa fa-envelope"></i>&nbsp;<?php echo $p->email; ?></p></li>
                        <?php 
                        function hari_ini(){
                            $hari = date ("D");
                         
                            switch($hari){
                                case 'Sun':
                                    $hari_ini = "Minggu";
                                break;
                         
                                case 'Mon':         
                                    $hari_ini = "Senin";
                                break;
                         
                                case 'Tue':
                                    $hari_ini = "Selasa";
                                break;
                         
                                case 'Wed':
                                    $hari_ini = "Rabu";
                                break;
                         
                                case 'Thu':
                                    $hari_ini = "Kamis";
                                break;
                         
                                case 'Fri':
                                    $hari_ini = "Jumat";
                                break;
                         
                                case 'Sat':
                                    $hari_ini = "Sabtu";
                                break;
                                
                                default:
                                    $hari_ini = "Tidak di ketahui";     
                                break;
                            }
                         
                            return "<b>" . $hari_ini . "</b>";
                         
                        }
                        ?>
                        <li><p style="font-size: 15px; color: white;"><i class="fa fa-clock-o"></i>&nbsp;<?php echo hari_ini(),date(' d M Y H:i:s a'); ?></p></li>

                        <?php endforeach; ?> <!-- Selesai loop -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="copyright">
            <div class="container">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Dikembangkan Oleh Dinas Komunikasi dan Informatika Kulon Progo | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            </div>      
        </div>
    </footer>
    <!-- Footer section end-->


    <!--====== Javascripts & Jquery ======-->
    <script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js') ; ?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js') ; ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.countdown.js') ; ?>"></script>
    <script src="<?php echo base_url('assets/js/masonry.pkgd.min.js') ; ?>"></script>
    <script src="<?php echo base_url('assets/js/magnific-popup.min.js') ; ?>"></script>
    <script src="<?php echo base_url('assets/js/main.js') ; ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
         $('.carousel').carousel({
         interval: 5000
         });
    });
    </script>
     <script>
        $(function(){
            $(document).on('click','.edit-record',function(e){
                e.preventDefault();
                $("#myModal").modal('show');
                $.post('<?php echo base_url('pengumuman/popup');?>',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }
                );
            });
        });
    </script>
    <script>
        $(function(){
            $(document).on('click','.jadwal',function(e){
                e.preventDefault();
                $("#myModal").modal('show');
                $.post('<?php echo base_url('jadwal/popup');?>',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }
                );
            });
        });
    </script>
    <script type="text/javascript">
        $(function(){
            $(".dropdown-menu > li > a.trigger").on("click",function(e){
                var current=$(this).next();
                var grandparent=$(this).parent().parent();
                if($(this).hasClass('left-caret')||$(this).hasClass('right-caret'))
                    $(this).toggleClass('right-caret left-caret');
                grandparent.find('.left-caret').not(this).toggleClass('right-caret left-caret');
                grandparent.find(".sub-menu:visible").not(current).hide();
                current.toggle();
                e.stopPropagation();
            });
            $(".dropdown-menu > li > a:not(.trigger)").on("click",function(){
                var root=$(this).closest('.dropdown');
                root.find('.left-caret').toggleClass('right-caret left-caret');
                root.find('.sub-menu:visible').hide();
            });
        });
    </script>
</body>
</html>