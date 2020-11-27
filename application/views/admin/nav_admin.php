<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      <a class="navbar-brand mr-1" href="<?php echo base_url('') ; ?>"><h1 style="font-family: Comic Sans MS;"><b>SekolahKu</b></h1></a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <!-- <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div> -->
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <font color="white" height="1%" style="font-family: Comic Sans MS; margin-right: 50px;">Welcome <?php echo $this->session->userdata("nama_admin"); ?></font>
        </li>
        <a href="<?php echo base_url('login/logout') ; ?>"><i class="fa fa-sign-out" style="color: white;"></i></a>
      </ul>

    </nav>