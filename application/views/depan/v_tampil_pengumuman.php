<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
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
    /*.service-section{
        background-color: #d2dfea
     }*/
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
    .nav-switch {
        color: #bae2c3;
    }
     .atas{
        background-color: #fff;
        margin-bottom: 50px;
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
     hr {
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
        border: 0;
        border-top: 1px solid rgba(0,0,0,.1);
    }
</style>
<style type="text/css">
    p {
        font-family: calibri;
        font-size: 17px;
        text-align: justify;
    }
</style>
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

    <!-- Header section  -->
    <nav class="nav-section">
        <div class="nav-right" style="">
            <!-- <a href="<?php echo base_url('login') ; ?>">LOGIN</a> -->
            <a href="<?php echo base_url('login') ; ?>"><i class="fa fa-user"></i></a>
                    <!-- <a href=""><i class="fa fa-shopping-cart"></i></a> -->
        </div>
        <div class="container">
            <div class="main-menu">
                <button class="dropbtn" style="background-color:  #006947" ><a href="<?php echo base_url('') ; ?>" style="color: white;">BERANDA</a></button>
                <button class="dropbtn" style="background-color:  #020031" ><a href="<?php echo base_url('berita') ; ?>" style="color: white;">BERITA</a></button>
                <button class="dropbtn" style="background-color:  #020031" ><a href="<?php echo base_url('artikel') ; ?>" style="color: white;">ARTIKEL</a></button>
                <div class="dropdown">
                  <button class="dropbtn">PROFIL</button>
                  <div class="dropdown-content">
                    <a href="<?php echo base_url('profil') ; ?>">TENTANG KAMI</a>
                    <a href="<?php echo base_url('visimisi') ; ?>">VISI DAN MISI</a>
                    <a href="<?php echo base_url('sejarah') ; ?>">SEJARAH</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="dropbtn">AKADEMIS</button>
                  <div class="dropdown-content">
                    <a href="<?php echo base_url('kurikulum') ; ?>">KURIKULUM</a>
                    <a href="<?php echo base_url('agenda') ; ?>">AGENDA</a>
                    <!-- <a href="<?php echo base_url('jadwal') ; ?>">JADWAL</a> -->
                    <a href="<?php echo base_url('guru') ; ?>">GURU</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="dropbtn">NON AKADEMIS</button>
                  <div class="dropdown-content">
                    <a href="<?php echo base_url('galeri') ; ?>">GALERI FOTO</a>
                    <a href="<?php echo base_url('ekstra') ; ?>">EKSTRAKURIKULER</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="dropbtn">FASILITAS</button>
                  <div class="dropdown-content">
                    <?php foreach ($fasilitas as $f) {  ?>
                    <a href="<?php echo base_url('fasilitas/tampil/'.$f->id_fasilitas);?>"><?php echo  $f->nama_fasilitas;?></a>
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
            </div>
        </div>
    </nav>
</div>
    <!-- Header section end -->
    <!-- Services section -->
    <section class="service-section spad">
        <div class="container services">
            <div class="row">
                <div class="col-lg-9 col-sm-9 service-item"  style="">
                     <a href="<?php echo base_url('') ; ?>" style="color: black; font-family: calibri;">Home</a>&nbsp;&nbsp;<font style="color: grey;">/</font>&nbsp;&nbsp;<font style="font-family: calibri;">Pengumuman</font></br></br>
                    <div class="pengumuman">
                        <center>
                            <img src="<?php echo base_url('images/'.$peng['gambar']) ?>" style="width: 80%; height: 80%;">
                        </center></br></br>
                        <p><?php echo $peng['isi_pengumuman'] ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3 service-item" style="margin-top: 107px;">
                    <!-- <div class="service-content"> -->
                        
                        <div class="border1" style="">
                            <section class="hero-section1">
                                <div class="hero-slider owl-carousel">
                                    <?php foreach( $pengumuman as $peng) : ?> <!-- Mulai loop -->
                                    <a href="#myModal" data-toggle="modal" data-target="" class="edit-record" data-id="<?php echo $peng->id_pengumuman; ?>">
                                        <div class="hs-item set-bg" data-setbg="<?=base_url()?>images/<?=$peng->gambar;?>" style="max-height: 350px; display: block; margin-left: auto; margin-right: auto;">
                                       
                                            <div class="hs-text">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <!-- <p class="hs-des"> <?php echo $peng->isi_pengumuman; ?></p> -->
                                                            <!-- <div class="site-btn">GET STARTED</div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <?php endforeach; ?> <!-- Selesai loop -->
                                </div>
                            </section>
                        </div>
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
                            <h4>Berita Terkini</h4>
                            <img src="<?php echo base_url('assets/img/garis1.png') ; ?>">
                        </div>
                        <div class="border1">
                            <div class="row">
                                <?php foreach( $berita as $b ) : ?> <!-- Mulai loop -->
                                <div class="col-lg-4 col-sm-4" >
                                    <img src="<?=base_url()?>images/<?=$b->gambar;?>" style="">
                                </div>
                                <div class="col-lg-8 col-sm-8" style="">
                                     <a href="<?php echo base_url('berita/edit/'.$b->id_berita) ?>"><?php echo $b->judul_berita; ?></a></br>
                                     <hr/>
                                </div>
                                <?php endforeach; ?> <!-- Selesai loop -->
                            </div>
                        </div>
                    </div>
                        </br>
                        <div class="border2"style="text-align: center; ">
                            <h4>Tautan</h4>
                            <img src="<?php echo base_url('assets/img/garis1.png') ; ?>">
                        </div>
                        <div class="border1">
                            <i class="fa fa-caret-right"></i><i class="fa fa-caret-right"></i>&nbsp;<a href="<?php echo base_url('dapodik/identitas') ; ?>" style="font-family: calibri;">Dapodikdasmen SMP N 1 Temon</a></br>
                             <hr/>
                            <?php foreach( $tautan as $t ) : ?> <!-- Mulai loop -->
                             <i class="fa fa-caret-right"></i><i class="fa fa-caret-right"></i>&nbsp;<a href="<?php echo $t->tujuan_tautan; ?>"><?php echo $t->judul_tautan; ?></a></br>
                            <hr/>
                            <?php endforeach; ?> <!-- Selesai loop -->
                        </div>
                        </br>
                    <!-- </div> -->
                </div></center>
                    <!-- </div> -->
                </div>
            </div>
            
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
                <div class="col-sm-6 col-lg-3 footer-widget">
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
                <!-- widget -->
                <div class="col-sm-6 col-lg-3 footer-widget">
                    <h6 class="fw-title">Posting Terbaru</h6>
                    <ul class="recent-post">
                        <?php foreach( $berita1 as $b1 ) : ?> <!-- Mulai loop -->
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
                         <?php endforeach; ?> <!-- Selesai loop -->
                    </ul>
                </div>
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
</body>
</html>