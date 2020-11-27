<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('assets1/vendor/bootstrap/css/bootstrap.min.css') ; ?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets1/vendor/fontawesome-free/css/all.min.css') ; ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets1/vendor/datatables/dataTables.bootstrap4.css') ; ?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets1/css/sb-admin.css') ; ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ; ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <style>
    nav img{
      height: 80px;
      width: 80px;
    }
    .bg-dark {
      background-color: #639fb7!important;
  }
  #wrapper #content-wrapper {
      /*background-color: #b3c3b6;*/
  }
  .animasi-teks {
     font-size: 100%;
    width: 100%;
    font-weight: bold;
   /* white-space:nowrap;
    overflow:hidden;
    -webkit-animation: typing 5s steps(90, end);
    animation: animasi-ketik 5s steps(90, end);*/
  }

  @keyframes animasi-ketik{
    from { width: 0; }
  }

  @-webkit-keyframes animasi-ketik{
    from { width: 0; }
  }

  .portfolio-info p {
    text-align: justify;
  }
  </style>
<body id="page-top">

    <?php
      $this->load->view('admin/nav_admin.php');
    ?>

    <div id="wrapper">
      <?php
        $this->load->view('admin/sidebar_guru.php');
      ?>
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
        <!--   <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url('dashboard/halamanGuru') ; ?>">Dashboard</a>
            </li>
          </ol> -->
          <!-- <center><img src="<?php echo base_url('assets/img/g.png') ; ?>" style="width: 100%;"><span></span></center></br>  -->
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
             <!--  <i class="fas fa-table"></i>
              DashboardKu -->
               <div class="card-footer small text-muted" style="background-color: #e3efed; padding-bottom: 0px; padding-top: 0px;"><marquee><div class="animasi-teks" style="color: black;"><?php echo $profil['alamat_sekolah']; ?></div></marquee></div>
            </div>
            <div class="card-body">
              <img src="<?php echo base_url('images/'.$banner['banner']) ?>" style="width: 100%; height: 700px;">
            </div>
            
          </div>

            <?php
              $this->load->view('admin/card.php');
            ?>
            
          <p class="small text-center text-muted my-5">
            <em>More table examples coming soon...</em>
          </p>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
   <script src="<?php echo base_url('assets1/vendor/jquery/jquery.min.js') ; ?>"></script>
    <script src="<?php echo base_url('assets1/vendor/bootstrap/js/bootstrap.bundle.min.js') ; ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets1/vendor/jquery-easing/jquery.easing.min.js') ; ?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assets1/vendor/datatables/jquery.dataTables.js') ; ?>"></script>
    <script src="<?php echo base_url('assets1/vendor/datatables/dataTables.bootstrap4.js') ; ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets1/js/sb-admin.min.js') ; ?>"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url('assets1/js/demo/datatables-demo.js') ; ?>"></script>
   
</body>
</html>
