 <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <center>
          <img src="<?php echo base_url('images/'.$profil['logo_sekolah']) ?>" style="width: 50%;">
          <a href="<?php echo base_url('dashboard/halamanGuru') ; ?>"><p style="color: white; font-size: 100%; font-family: Comic Sans MS;" ><b><?php echo $profil['nama_sekolah']; ?></b></p></a>
        </center>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('dashboard/halamanGuru') ; ?>">
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
            <a class="dropdown-item" href="<?php echo base_url('gru/galeri') ; ?>"> Galeri</a>
            <a class="dropdown-item" href="<?php echo base_url('gru/mapel') ; ?>"> Mapel</a>
            <a class="dropdown-item" href="<?php echo base_url('gru/kelas') ; ?>"> Kelas</a>
            <a class="dropdown-item" href="<?php echo base_url('gru/penugasan') ; ?>"> Penugasan</a>
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
            <a class="dropdown-item" href="<?php echo base_url('gru/berita') ; ?>"> Berita</a>
            <a class="dropdown-item" href="<?php echo base_url('gru/artikel') ; ?>"> Artikel</a>
            <a class="dropdown-item" href="<?php echo base_url('gru/pengumuman') ; ?>"> Pengumuman</a>
            <a class="dropdown-item" href="<?php echo base_url('gru/agenda') ; ?>"> Agenda</a>
            <a class="dropdown-item" href="<?php echo base_url('gru/jadwal') ; ?>"> Jadwal</a>
            <!-- <div class="dropdown-divider"></div> -->
          </div>
        </li>
      </ul>