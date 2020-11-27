<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript" src="<?php echo base_url('assets1/ckeditor/style.js') ; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets1/ckeditor/ckeditor.js') ; ?>"></script>
  

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('assets1/vendor/bootstrap/css/bootstrap.min.css') ; ?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets1/vendor/fontawesome-free/css/all.min.css') ; ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets1/vendor/datatables/dataTables.bootstrap4.css') ; ?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets1/css/sb-admin.css') ; ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ; ?>"/>
  </head>
  <style>
    nav img{
      height: 80px;
      width: 80px;
    }
    .bg-dark {
      background-color: #425246!important;
    }
    #wrapper #content-wrapper {
        background-color: #b3c3b6;
    }
  </style>
<body id="page-top">
    <?php
      $this->load->view('admin/nav_admin.php');
    ?>

    <div id="wrapper">

      <?php
        $this->load->view('admin/sidebar_admin.php');
      ?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url('dashboard/halamanAdmin') ; ?>">Dashboard</a>
            </li><li class="breadcrumb-item">
              <a href="<?php echo base_url('admin/slideshow') ; ?>">Slideshow</a>
            </li>
            <li class="breadcrumb-item active"><?php echo $slideshow['judul_keterangan']?></li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <h3>Edit Slide Show</h3>
            <div class="card-body">
                <div class="panel-body">
                  <form role="form" action="<?php echo base_url('admin/slideshow/update') ; ?>" enctype="multipart/form-data" method="post">
                   
                    <div class="row">
                       <div class="col-md-6">
                         <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">Gambar</label>
                          <img src="<?php echo base_url('images/'.$slideshow['gambar']) ?>" width="100">
                        </div>
                        <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">Ganti Gambar</label>
                          <input type="file" name="gambar" "></br>
                          <font color="red" >(File bertipe jpg/png/gif dengan ukuran maksimal 2 MB)</font>
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">Judul Keterangan</label>
                          <input type="text" class="form-control" id="inputSuccess" name="judul_keterangan" value="<?php echo $slideshow['judul_keterangan'] ?>">
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">Keterangan</label>
                          <input type="text" class="form-control" id="inputSuccess" name="keterangan" value="<?php echo $slideshow['keterangan'] ?>">
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">Deskripsi</label>
                          <input type="text" class="form-control" id="inputSuccess" name="deskripsi" value="<?php echo $slideshow['deskripsi'] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <center>
                                 <button type="submit" class="btn btn-info">Update<i class="icon-check position-right"></i></button>
                               <input type="hidden" name="id_slideshow" value="<?php echo $slideshow['id_slideshow'] ;?>">
                              </form>
                            </center>
                         </div>
                      <!-- <?php echo form_close() ?> -->
                    </div><!--  end row -->
                </div> <!-- end panel body -->
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

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
    <script>
    $(function () {
        CKEDITOR.replace('ckeditor1');
    });
</script>
</body>
</html>
