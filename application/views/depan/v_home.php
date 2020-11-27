<!DOCTYPE html>
<html lang="en">
<head>
    <title>SMP Negeri 1 Temon</title>
    <meta charset="UTF-8">
    <meta name="description" content="Unica University Template">
    <meta name="keywords" content="event, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->   
    <link href="img/favicon.ico" rel="shortcut icon"/>

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
    <link href="<?php echo base_url()?>assets/css/3-col-portfolio.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
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
        z-index: 1000;
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
    
</style>
<style type="text/css">
     .hs-item {
        max-height:500px;
        position: relative;
        margin: 0 auto;
        width: 80%;
        height:100%;
        background-position: center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        /*background-size: cover;*/
    }
    .hs-item .hs-title {
        color: white;
        font-weight: bold;
        background-color: rgba(0,0,0,0.3);
        font-size: 30px;
        /*margin-bottom: 25px;*/
        bottom: 0;
        position: relative;
        left: 150px;
        opacity: 0;
        text-transform: uppercase;
    }

    .hs-item .hs-des {
        color: white;
        font-weight: bold;
        background-color: rgba(0,0,0,0.3);
        font-size: 20px;
        line-height: 2;
        position: relative;
        left: 150px;
        opacity: 0;
    }
    .hs-item .hs-subtitle {
        font-size: 20px;
        font-weight: bold;
        text-transform: uppercase;
        background-color: rgba(0,0,0,0.3);
        color: orange;
        /*font-weight: 500;*/
        letter-spacing: 2px;
        margin-bottom: 30px;
        position: relative;
        opacity: 0;
        top: 50px;
    }
    /*.hs-item1 .hs-subtitle {
        font-size: 16px;
        text-transform: uppercase;
        color: #f6783a;
        font-weight: 500;
        letter-spacing: 2px;
        margin-bottom: 30px;
        position: relative;
        opacity: 0;
        top: 50px;
    }
    .hs-item1 {
        min-height: 300px;
        position: relative;
        display: table;
        width: 100%;
        background-color:#117a8b17; 
        border-radius: 50px;
        border: 10px solid white;
        box-shadow: 3px 3px 30px;
    }

    .hs-item1 .hs-text {
        position: relative;
        display: table-cell;
        vertical-align: middle;
        z-index: 2;
    }

    .hs-item1 .hs-subtitle {
        font-size: 16px;
        text-transform: uppercase;
        color: #f6783a;
        font-weight: 500;
        letter-spacing: 2px;
        margin-bottom: 30px;
        position: relative;
        opacity: 0;
        top: 50px;
    }

    .hs-item1 .hs-title {
        color: #fff;
        font-size: 30px;
        margin-bottom: 25px;
        position: relative;
        left: 150px;
        opacity: 0;
        text-transform: uppercase;
    }

    .hs-item1 .hs-des {
        color: #fff;
        font-size: 20px;
        line-height: 2;
        position: relative;
        left: 150px;
        opacity: 0;
    }

    .hs-item1 .site-btn {
        margin-top: 30px;
        opacity: 0;
        top: 50px;
    }

    .owl-item.active .hs-item1 .hs-title,
    .owl-item.active .hs-item1 .hs-des,
    .owl-item.active .hs-item1 .hs-subtitle,
    .owl-item.active .hs-item1 .site-btn {
        left: 0;
        top: 0;
        opacity: 1;
    }

    .owl-item.active .hs-item1 .hs-subtitle {
        -webkit-transition: all 0.5s ease 0.4s;
        -o-transition: all 0.5s ease 0.4s;
        transition: all 0.5s ease 0.4s;
    }

    .owl-item.active .hs-item1 .hs-title {
        -webkit-transition: all 0.5s ease 0.6s;
        -o-transition: all 0.5s ease 0.6s;
        transition: all 0.5s ease 0.6s;
    }

    .owl-item.active .hs-item1 .hs-des {
        -webkit-transition: all 0.5s ease 0.8s;
        -o-transition: all 0.5s ease 0.8s;
        transition: all 0.5s ease 0.8s;
    }

    .owl-item.active .hs-item1 .site-btn {
        -webkit-transition: all 0.5s ease 1s;
        -o-transition: all 0.5s ease 1s;
        transition: all 0.5s ease 1s;
    }*/
</style>
<style type="text/css">
.blog-item .blog-thumb {
    width: 230px;
    height: 250px;
    float: left;
}
</style>
<style type="text/css">
    body{
      background-color: #edeff4;
      padding-top: 0px;
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
</style>
<style type="text/css">
.testimonial-slider .ts-author-pic {
    width: 100%;
    height: 500px;
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
    p {
        font-family: calibri;
        font-size: 17px;
        text-align: justify;
        color: black;
        line-height: 1;
    }
</style>
<style type="text/css">
	.enroll-list-item span {
	    position: absolute;
	    width: 30px;
	    height: 30px;
	    left: 0;
	    top: 0;
	    text-align: center;
	    border-radius: 50px;
	    background: #f6783a;
	    font-size: 16px;
	    font-weight: 500;
	    padding-top: 5px;
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
<!-- <style type="text/css">
    .testimonial-slider .ts-author-pic {
        width: 100%;
        height: 150px;
        border-radius: 0%;
        margin: 0px auto 0;
    }
</style> -->
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
                        <div class="col-lg-10 col-md-11">
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dapodikdasmen SMP N 1 Temon <!-- <span class="caret"></span> --></a>
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
    <!-- Header section end -->


    <!-- Hero section -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <?php foreach( $slideshow as $s ) : ?> <!-- Mulai loop -->
            <div class="hs-item set-bg" data-setbg="<?=base_url()?>images/<?=$s->gambar;?>" style="max-height: 500px; ">
                <div class="hs-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="hs-subtitle"><?php echo $s->judul_keterangan; ?></div>
                                <h2 class="hs-title"> <?php echo $s->keterangan; ?></h2>
                                <p class="hs-des"><?php echo $s->deskripsi; ?></p>
                                <!-- <div class="site-btn">GET STARTED</div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?> <!-- Selesai loop -->
        </div>
    </section>
    <!-- Hero section end -->


    <!-- Counter section  -->
    <section class="counter-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="big-icon">
                        <img src="<?php echo base_url('assets/img/link_icon.png') ; ?>" class="animated infinite zoomIn" >
                    </div>
                    <div class="counter-content">
                        <h2>Link Sosmed</h2>
                         <div class="main-menu">
	                        <?php foreach( $sosmed as $s) : ?> <!-- Mulai loop -->
	                       		<a href="<?php echo $s->link_sosmed; ?>" > <img src='<?=base_url()?>images/<?=$s->logo_sosmed;?>' class="animated infinite swing" style="width: 7%;"></a>
	                        <?php endforeach; ?>  <!-- Selesai loop -->
	                    </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <!-- <section class="testimonial-section">
                        <div class="container" style="padding-left: 0px; padding-right: 0px; width: 100%;">
                            <div class="testimonial-slider owl-carousel">
                                 <?php foreach( $pengumuman as $peng) : ?> 
                                <div class="ts-item">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="#myModal" data-toggle="modal" data-target="" class="edit-record" data-id="<?php echo $peng->id_pengumuman; ?>">
                                            <div class="ts-author-pic set-bg" data-setbg="<?=base_url()?>images/<?=$peng->gambar;?>"></div></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?> 
                            </div>
                        </div>
                    </section> -->
                </div>
               <!--  <div class="col-lg-5 col-md-6">
                    <center>
                     <div class="main-menu">
                        <?php foreach( $sosmed as $s) : ?>
                       <a href="<?php echo $s->link_sosmed; ?>"> <img src='<?=base_url()?>images/<?=$s->logo_sosmed;?>' style="width: 7%;"></a>
                        <?php endforeach; ?>  
                    </div>
                    </center>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Counter section end -->
 <section class="enroll-section spad set-bg" data-setbg="" style="; border-radius: 10px;">
        <div class="container">
             <div class="section-title text-center">
                <h3 style="color: black;">SAMBUTAN KEPALA SEKOLAH</h3>
                <img src="<?php echo base_url('assets1/img/garis.png') ; ?>"></br>
            </div>
            <div class="row">
                <div class="col-lg-5 col-sm-5 service-item">
                    <div class="profil">
                        <?php foreach( $kepsek as $k) : ?> <!-- Mulai loop -->
                          <img src='<?=base_url()?>images/<?=$k->foto_guru;?>' style="width: 600px; height: 450px; box-shadow: 5px 5px 3px black; border-radius: 10%;"></br></br> 
                           <p style="text-align: center;"><?php echo $k->nama_guru; ?></p>
                        <?php endforeach; ?>  <!-- Selesai loop -->
                    </div>
                </div>
                <div class="col-lg-7 col-sm-7 service-item">
                    <div class="p" style="position: static;">
                         <?php foreach( $profil as $p ) : ?> <!-- Mulai loop -->
                        <p>
                            <?php echo substr($p->isi_lainnya ,0 ,1000); ?>.....
                        </p>
                         <a href="<?php echo base_url('profil/editSambutan/'.$p->id_profil) ?>" class="btn btn-warning" style="color: white;">Baca Selengkapnya</a>
                        <?php endforeach; ?> <!-- Selesai loop -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Enroll section -->
    <section class="enroll-section spad set-bg" data-setbg="<?php echo base_url('assets1/img/garis.png') ; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title text-white">
                        <h3>Fasilitas</h3>
                        <!-- <p>Get started with us to explore the exciting</p> -->
                    </div>

                    <div class="enroll-list text-white">
                        <?php $no=0; ?>
                        <?php foreach( $fasilitas as $f) : ?> <!-- Mulai loop -->
                        <?php 
                         $no++; 
                         ?>
                        <div class="enroll-list-item">
                            <span><?php echo  $no;?></span>
                            <h5 style="padding-top: 7px; margin-bottom: 5px;"> <a href="<?php echo base_url('fasilitas/tampil/'.$f->id_fasilitas);?>"><?php echo  $f->nama_fasilitas;?></a></h5>
                            <!-- <p> <?php echo substr($f->keterangan ,0 ,100); ?></p> -->
                        </div>
                  
                        <?php endforeach; ?> <!-- Selesai loop -->
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 p-lg-0 p-4">
                        <!-- <img src="<?=base_url()?>images/<?=$g->foto_galeri;?>" alt=""> -->
                        <section class="testimonial-section">
                            <div class="container" style="padding-left: 0px; padding-right: 0px;height: 500px;width: 100%;">
                                <div class="testimonial-slider owl-carousel">
                                    <?php foreach( $fasilitas as $fa) : ?> <!-- Mulai loop -->
                                    <div class="ts-item">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <a href="#myModal" data-toggle="modal" data-target="" class="edit-record" data-id="<?php echo $fa->id_fasilitas; ?>">
                                                <div class="ts-author-pic set-bg" data-setbg="<?=base_url()?>images/<?=$fa->gambar;?>"></div></a>
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
                </div>
            </div>
        </div>
    </section>
    <!-- Enroll section end -->

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

    <!-- Blog section -->
    <section class="blog-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>Berita Terkini</h3>
                <img src="<?php echo base_url('assets1/img/garis.png') ; ?>"></br>
            </div>
            <div class="row">
                <?php foreach( $berita as $b ) : ?> <!-- Mulai loop -->
                <?php $tanggal = $b->tanggal;
                    $tahun=substr($tanggal, 0,4);   
                    $bulan=substr($tanggal, 5,2);
                    $t=substr($tanggal, 8,2);
                    $tgl=$t."-".$bulan."-".$tahun;
                ?>
                <div class="col-xl-6">
                    <div class="blog-item">
                        <div class="blog-thumb set-bg" data-setbg="<?=base_url()?>images/<?=$b->gambar;?>"></div>
                        <div class="blog-content">
                            <p><a href="<?php echo base_url('berita/edit/'.$b->id_berita) ?>"style="color: black; font-size: 19px; font-weight: bold;"><span><?php echo $b->judul_berita ?></span></a></p>
                            <div class="blog-meta">
                                <span style="color: #f6783a;"><i class='fa fa-calendar-o' ></i> <?php echo $tgl; ?></span>
                                <span><i class='fa fa-tag'></i><a href="<?php echo base_url('berita') ; ?>" style="color: #f6783a;">Berita</a></span>
                                <span><i class="fa fa-user"></i><a href="<?php echo base_url('login') ; ?>" style="color: #f6783a;">Admin</a></span>
                            </div>
                            <p><?php echo substr($b->isi_berita ,0 ,250); ?>.....</p>
                             <form action="<?php echo base_url('berita/update/'.$b->id_berita) ?>" method="post">
                                                  <input type="hidden" name="id_berita" value="<?php echo $b->id_berita ?>">
                                                  <input type="hidden" name="viewer" value="<?php echo $b->viewer ?>">
                                                <button type="submit" class="" style="color: #a94442; float: right; margin-bottom: 10px;">Selengkapnya <i class="fa fa-angle-double-right"></i></button>
                                            </form>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?> <!-- Selesai loop -->
            </div>
        </div>
    </section>
    <!-- Blog section -->

    <!-- Fact section -->
    <section class="fact-section spad set-bg" data-setbg="img/fact-bg.jpg">
        <div class="container">
            <div class="row">
            	
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-briefcase"></i>
                    </div>
                    <div class="fact-text">
                    	<?php foreach($rowG->result_array() as $guru ) : ?> <!-- Mulai loop -->
			                <?php 
			                    $jumlah=$guru['jumlah'];  
			                ?>
			               
	                        <h2><?php echo htmlentities($jumlah, ENT_QUOTES, 'UTF-8');?></h2>
	                        <p>GURU</p>
                        <?php endforeach; ?> <!-- Selesai loop -->
                    </div>
                </div>
                
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-pencil-alt"></i>
                    </div>
                    <div class="fact-text">
                    	<?php foreach($rowM->result_array() as $mapel ) : ?> <!-- Mulai loop -->
			                <?php 
			                    $jumlah=$mapel['jumlah'];  
			                ?>
                          
	                        <h2><?php echo htmlentities($jumlah, ENT_QUOTES, 'UTF-8');?></h2>
	                        <p>MATA PELAJARAN</p>
                        <?php endforeach; ?> <!-- Selesai loop -->
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-layout-list-post"></i>
                    </div>
                    <div class="fact-text">
                        <?php foreach($rowB->result_array() as $berita ) : ?> <!-- Mulai loop -->
			                <?php 
			                    $jumlah=$berita['jumlah'];  
			                ?>
                          
	                        <h2><?php echo htmlentities($jumlah, ENT_QUOTES, 'UTF-8');?></h2>
	                        <p>BERITA</p>
                        <?php endforeach; ?> <!-- Selesai loop -->
                    </div>
                </div>
                 <div class="col-sm-6 col-lg-3 fact">
                    <div class="fact-icon">
                        <i class="ti-layout-media-overlay-alt"></i>
                    </div>
                    <div class="fact-text">
                        <?php foreach($rowF->result_array() as $fasilitas ) : ?> <!-- Mulai loop -->
			                <?php 
			                    $jumlah=$fasilitas['jumlah'];  
			                ?>
                          
	                        <h2><?php echo htmlentities($jumlah, ENT_QUOTES, 'UTF-8');?></h2>
	                        <p>FASILITAS</p>
                        <?php endforeach; ?> <!-- Selesai loop -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fact section end-->


    <!-- Event section -->
    <section class="event-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>AGENDA</h3>
                <img src="<?php echo base_url('assets1/img/garis.png') ; ?>" s></br>
            </div>
            <div class="row">
                <?php foreach( $agenda as $a ) : ?> <!-- Mulai loop -->
                <div class="col-md-6 event-item">
                    <div class="event-thumb">
                        <img src="img/event/1.jpg" alt="">
                        <div class="event-date">
                            <span><?php echo $a->tanggal_agenda; ?></span>
                        </div>
                    </div>
                    <div class="event-info">
                        <h4><b><?php echo $a->judul_agenda; ?></b></h4>
                        <p class="card-text" ><?php echo substr($a->keterangan_agenda ,0 ,200); ?>.....</p>
                        <a href="<?php echo base_url('agenda/edit/'.$a->id_agenda) ?>" class="event-readmore">Baca <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
               <?php endforeach; ?> <!-- Selesai loop -->
            </div>
        </div>
    </section>
    <!-- Event section end -->


   


 
 <!-- Gallery section -->
    <center>
        <h3>GALERI FOTO</h3>
        <img src="<?php echo base_url('assets1/img/garis.png') ; ?>"></br>
    </center>
    </br></br>
    <div class="gallery-section">
        <div class="gallery">
            <div class="grid-sizer"></div>
            <?php foreach( $galeri as $g ) : ?> <!-- Mulai loop -->
            <div class="gallery-item set-bg" data-setbg="<?=base_url()?>images/<?=$g->foto_galeri;?>">
                <a class="img-popup" href="<?=base_url()?>images/<?=$g->foto_galeri;?>"><i class="ti-plus"></i></a>
            </div>
            <?php endforeach; ?> <!-- Selesai loop -->
        </div>
    </div>
    <!-- Gallery section -->

    <!-- Newsletter section -->
 <!--    <section class="newsletter-section">
        <div class="container">
        	<div id="newsletter_form">
			
			 <?php
			  
			 $name_data = array(
			  'name' => 'name',
			  'id' => 'name',
			  'value' => set_value('name')
			 );
			 ?>
			
            <div class="row">
                <div class="col-md-5 col-lg-7">
                    <div class="section-title mb-md-0"> -->
                    <!-- <h3>NEWSLETTER</h3> -->
                <!--     <p>Dapatkan postingan terbaru</p>
                </div>
                </div>
                <div class="col-md-7 col-lg-5">
                    <?php echo form_open('letter/send'); ?>
                        <input type="text" name="email" id="email" value="<?php echo set_value('email');?>" placeholder="Enter your email">
                        <button class="site-btn"><?php echo form_submit('submit', 'SUBSCRIBE'); ?></button>
                     <?php echo form_close(); ?>
			  
			 		<?php echo validation_errors('<p class="error">'); ?>
                </div>
            </div> -->
            <!-- </div> --><!--end newsletter-form-->
       <!--  </div>
    </section> -->
    <!-- Newsletter section end --> 


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
                       <li><a href="<?php echo base_url('dapodik/identitas') ; ?>" style="color: white;">Dapodikdasmen SMP N 1 Temon</a></li>
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
                <!-- <div class="col-sm-6 col-lg-2 footer-widget">
                    <h6 class="fw-title">LINK</h6>
                    <div class="dobule-link">
                        <ul>

                            <p><b style="color: orange;">PROFIL</b></p>
                            <li><a href="<?php echo base_url('profil') ; ?>" style="color: white;">Profil</a></li>
                            <li><a href="<?php echo base_url('visimisi') ; ?>" style="color: white;">Visi Misi</a></li>
                            <li><a href="<?php echo base_url('sejarah') ; ?>" style="color: white;">Sejarah</a></li>
                            </br></br></br></br></br></br>
                        </ul>
                        <ul>
                            <p><b style="color: orange;">AKADEMIK</b></p>
                            <li><a href="<?php echo base_url('guru') ; ?>" style="color: white;">Guru</a></li>
                            <li><a href="<?php echo base_url('kurikulum') ; ?>" style="color: white;">Kurikulum</a></li>
                            <li><a href="<?php echo base_url('agenda') ; ?>" style="color: white;">Agenda</a></li>
                            <li><a href="<?php echo base_url('ekstra') ; ?>" style="color: white;">Ekstrakurikuler</a></li>
                            <p><b style="color: orange;">NON AKADEMIK</b></p>
                            <li><a href="<?php echo base_url('galeri') ; ?>" style="color: white;">Galeri Foto</a></li>
                            <li><a href="<?php echo base_url('bukutamu') ; ?>" style="color: white;">Buku Tamu</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-sm-6 col-lg-3 footer-widget">
                    <h6 class="fw-title">Posting Terbaru</h6>
                    <ul class="recent-post">
                        <?php foreach( $berita1 as $b1 ) : ?>
                        <?php $tanggal = $b1->tanggal;
                            $tahun=substr($tanggal, 0,4);   
                            $bulan=substr($tanggal, 5,2);
                            $t=substr($tanggal, 8,2);
                            $tgl=$t."-".$bulan."-".$tahun;
                        ?>
                        <li>
                            <p><a href="<?php echo base_url('berita/edit/'.$b->id_berita) ?>"  ><span  style="font-size: 15px; color: white;"><?php echo $b->judul_berita ?></span></a></p>
                            <span><i class="fa fa-clock-o"></i><?php echo $tgl; ?></span>
                        </li>
                         <?php endforeach; ?> 
                    </ul>
                </div>-->

                <!-- widget -->
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