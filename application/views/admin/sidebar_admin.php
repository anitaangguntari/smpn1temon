 <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <center>
          <img src="<?php echo base_url('images/'.$profil['logo_sekolah']) ?>" style="width: 50%;">
          <a href="<?php echo base_url('dashboard/halamanAdmin') ; ?>"><p style="color: white; font-size: 100%; font-family: Comic Sans MS;"><b><?php echo $profil['nama_sekolah']; ?></b></p></a>
        </center>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('dashboard/halamanAdmin') ; ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span style="font-family: Comic Sans MS;">Dashboard</span>
          </a>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span style="font-family: Comic Sans MS;">Sekolah</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown" style="font-family: Comic Sans MS;">
            <!-- <h6 class="dropdown-header"></h6> -->
            <a class="dropdown-item" href="<?php echo base_url('admin/profil') ; ?>"> Profil</a>
            <a class="dropdown-item" href="<?php echo base_url('admin/sejarah') ; ?>"> Sejarah</a>
            <a class="dropdown-item" href="<?php echo base_url('admin/visimisi') ; ?>"> Visi Misi</a>
            <a class="dropdown-item" href="<?php echo base_url('admin/kurikulum') ; ?>"> Kurikulum</a>
            <a class="dropdown-item" href="<?php echo base_url('admin/galeri') ; ?>"> Galeri</a>
            <a class="dropdown-item" href="<?php echo base_url('admin/mapel') ; ?>"> Mapel</a>
            <a class="dropdown-item" href="<?php echo base_url('admin/fasilitas') ; ?>"> Fasilitas</a>
            <a class="dropdown-item" href="<?php echo base_url('admin/kelas') ; ?>"> Kelas</a>
             <a class="dropdown-item" href="<?php echo base_url('admin/guru') ; ?>"> Guru</a>
            <a class="dropdown-item" href="<?php echo base_url('admin/bukutamu') ; ?>"> Buku Tamu</a>
            <a class="dropdown-item" href="<?php echo base_url('admin/penugasan') ; ?>"> Penugasan</a>
            <!-- <div class="dropdown-divider"></div> -->
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span style="font-family: Comic Sans MS;">Posting</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown" style="font-family: Comic Sans MS;">
            <!-- <h6 class="dropdown-header"></h6> -->
            <a class="dropdown-item" href="<?php echo base_url('admin/berita') ; ?>"> Berita</a>
            <a class="dropdown-item" href="<?php echo base_url('admin/artikel') ; ?>"> Artikel</a>
            <a class="dropdown-item" href="<?php echo base_url('admin/pengumuman') ; ?>"> Pengumuman</a>
            <a class="dropdown-item" href="<?php echo base_url('admin/agenda') ; ?>"> Agenda</a>
            <a class="dropdown-item" href="<?php echo base_url('admin/jadwal') ; ?>"> Jadwal</a>
            <a class="dropdown-item" href="<?php echo base_url('admin/ekstra') ; ?>"> Ekstrakurikuler</a>
            <!-- <div class="dropdown-divider"></div> -->
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span style="font-family: Comic Sans MS;">Web</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown" style="font-family: Comic Sans MS;">
            <a class="dropdown-item" href="<?php echo base_url('admin/admin') ; ?>"> Admin Web</a>
            <a class="dropdown-item" href="<?php echo base_url('admin/tautan') ; ?>"> Tautan</a>
            <a class="dropdown-item" href="<?php echo base_url('admin/sosmed') ; ?>"> Sosmed</a>
            <a class="dropdown-item" href="<?php echo base_url('admin/slideshow') ; ?>"> Slider</a>
          </div>
        </li>
      </ul>