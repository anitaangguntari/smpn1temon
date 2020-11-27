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
    /*.edit{
      width: 500px;
      height: 200px;
      background-color: pink;
    }*/
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
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo base_url('dashboard/halamanGuru') ; ?>">Dashboard</a>
            </li><li class="breadcrumb-item">
              <a href="<?php echo base_url('gru/jadwal') ; ?>">Jadwal</a>
            </li>
            <li class="breadcrumb-item active"><?php echo $jadwal['kelas']?></li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <h3>Edit Admin</h3>
            <div class="card-body">
                <div class="panel-body">
                  <form role="form" action="<?php echo base_url('gru/jadwal/update') ; ?>" method="post">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess">Kelas</label>
                             <select name="kelas" required style="width:  100%;">
                              <option value='' disabled selected>Pilih</option>
                                <option value='7A' <?php if($jadwal['kelas'] == '7A'){ echo 'selected'; } ?> >7A</option>
                                <option value='7B' <?php if($jadwal['kelas'] == '7B'){ echo 'selected'; } ?> >7B</option>
                                <option value='7C' <?php if($jadwal['kelas'] == '7C'){ echo 'selected'; } ?> >7C</option>
                                <option value='7D' <?php if($jadwal['kelas'] == '7D'){ echo 'selected'; } ?> >7D</option>
                                <option value='7E' <?php if($jadwal['kelas'] == '7E'){ echo 'selected'; } ?> >7E</option>
                                <option value='7F' <?php if($jadwal['kelas'] == '7F'){ echo 'selected'; } ?> >7F</option>
                                <option value='8A' <?php if($jadwal['kelas'] == '8A'){ echo 'selected'; } ?> >8A</option>
                                <option value='8B' <?php if($jadwal['kelas'] == '8B'){ echo 'selected'; } ?> >8B</option>
                                <option value='8C' <?php if($jadwal['kelas'] == '8C'){ echo 'selected'; } ?> >8C</option>
                                <option value='8D' <?php if($jadwal['kelas'] == '8D'){ echo 'selected'; } ?> >8D</option>
                                <option value='8E' <?php if($jadwal['kelas'] == '8E'){ echo 'selected'; } ?> >8E</option>
                                <option value='8F' <?php if($jadwal['kelas'] == '8F'){ echo 'selected'; } ?> >8F</option>
                                <option value='9A' <?php if($jadwal['kelas'] == '9A'){ echo 'selected'; } ?> >9A</option>
                                <option value='9B' <?php if($jadwal['kelas'] == '9B'){ echo 'selected'; } ?> >9B</option>
                                <option value='9C' <?php if($jadwal['kelas'] == '9C'){ echo 'selected'; } ?> >9C</option>
                                <option value='9D' <?php if($jadwal['kelas'] == '9D'){ echo 'selected'; } ?> >9D</option>
                                <option value='9E' <?php if($jadwal['kelas'] == '9E'){ echo 'selected'; } ?> >9E</option>
                                <option value='9F' <?php if($jadwal['kelas'] == '9F'){ echo 'selected'; } ?> >9F</option>
                            </select>
                          </div>
                         <!-- <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess">Jenis</label>
                             <select name="jenis" required style="width:  100%;">
                              <option value="" disabled>Pilih</option>
                              <option value="pdf" <?php if($jadwal['jenis'] == 'pdf'){ echo 'selected'; } ?>>Pdf</option> 
                              <option value="doc" <?php if($jadwal['jenis'] == 'doc'){ echo 'selected'; } ?>>Doc</option>
                              <option value="docx" <?php if($jadwal['jenis'] == 'docx'){ echo 'selected'; } ?>>Docx</option>
                              <option value="jpg" <?php if($jadwal['jenis'] == 'jpg'){ echo 'selected'; } ?>>Jpg</option>
                              <option value="png" <?php if($jadwal['jenis'] == 'png'){ echo 'selected'; } ?>>Png</option>
                              <option value="gif" <?php if($jadwal['jenis'] == 'gif'){ echo 'selected'; } ?>>Gif</option>
                            </select>
                          </div> -->
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">File</label>
                          <img src="<?php echo base_url('images/'.$jadwal['gambar_jadwal']) ?>" width="100">
                        </div>
                        <input type="checkbox" name="ubah" value="true"> Ceklis jika ingin mengubah file<br>
                        <div class="form-group has-success">
                          <label for="exampleInputFile">File </label>
                              <input type="file" name="userfile" class="filestyle" data-buttonName="btn-primary"/>
                              <span class="label label-danger">Maksimal 3MB dengan tipe (png, jpg, pdf)</span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <center>
                                  <button type="submit" class="btn btn-primary">Update</button>
                                  <input type="hidden" class="form-control" id="inputSuccess" name="id_jadwal" value="<?php echo $jadwal['id_jadwal']?>">
                            </form>
                            </center>
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
