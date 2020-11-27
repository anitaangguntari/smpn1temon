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
              <a href="<?php echo base_url('admin/jadwal') ; ?>">Jadwal</a>
            </li>
            <li class="breadcrumb-item active">Tambah</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <h3>Tambah Jadwal</h3>
            <div class="card-body">
                <div class="panel-body">
                    <?php echo form_open_multipart('admin/jadwal/tambah_aksi'); ?>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group has-success">
                              <label class="control-label" for="inputSuccess">Hari</label>
                              <select class="form-control"  id="inputSuccess" name="hari">
                                <option value='' disabled selected>Pilih</option>
                                <option value='Senin'>Senin</option>
                                <option value='Selasa'>Selasa</option>
                                <option value='Rabu'>Rabu</option>
                                <option value='Kamis'>Kamis</option>
                                <option value='Jumat'>Jum'at</option>
                                <option value='Sabtu'>Sabtu</option>
                                <option value='Minggu'>Minggu</option>
                              </select>
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">Jam Ke</label>
                          <input class="form-control" type="number" name="jam_ke">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">Jam Mulai</label>
                          <input class="form-control" type="time" name="jam_mulai">
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">Jam Selesai</label>
                          <input class="form-control" type="time" name="jam_selesai">
                        </div>
                      </div>
                    </div>

                    <div class="row" style="margin-top: 50px;">
                      <div class="col-md-4">
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">VII A</label>
                          <input class="form-control" type="text" name="7a">
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">VII B</label>
                          <input class="form-control" type="text" name="7b">
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">VII C</label>
                          <input class="form-control" type="text" name="7c">
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">VII D</label>
                          <input class="form-control" type="text" name="7d">
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">VII E</label>
                          <input class="form-control" type="text" name="7e">
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">VII F</label>
                          <input class="form-control" type="text" name="7f">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">VIII A</label>
                          <input class="form-control" type="text" name="8a">
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">VIII B</label>
                          <input class="form-control" type="text" name="8b">
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">VIII C</label>
                          <input class="form-control" type="text" name="8c">
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">VIII D</label>
                          <input class="form-control" type="text" name="8d">
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">VIII E</label>
                          <input class="form-control" type="text" name="8e">
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">VIII F</label>
                          <input class="form-control" type="text" name="8f">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">IX A</label>
                          <input class="form-control" type="text" name="9a">
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">IX B</label>
                          <input class="form-control" type="text" name="9b">
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">IX C</label>
                          <input class="form-control" type="text" name="9c">
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">IX D</label>
                          <input class="form-control" type="text" name="9d">
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">IX E</label>
                          <input class="form-control" type="text" name="9e">
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">IX F</label>
                          <input class="form-control" type="text" name="9f">
                        </div>
                      </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-12">
                                  <button type="submit" class="btn btn-primary" style="float: right;">Simpan</button>
                                  <input type="hidden" class="form-control" id="inputSuccess" name="id_jadwal">
                           <?php echo form_close() ?>
                         </div>
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
