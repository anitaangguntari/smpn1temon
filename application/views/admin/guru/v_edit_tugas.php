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
              <a href="<?php echo base_url('admin/penugasan') ; ?>">Penugasan</a>
            </li>
            <li class="breadcrumb-item active"><?php echo $tugas['kelas']?></li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <h3>Edit Admin</h3>
            <div class="card-body">
                <div class="panel-body">
                  <form role="form" action="<?php echo base_url('admin/penugasan/update') ; ?>" method="post">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess">Kelas</label>
                             <select name="kelas" required style="width:  100%;">
                              <option value='' disabled selected>Pilih</option>
                                <option value='7' <?php if($tugas['kelas'] == '7'){ echo 'selected'; } ?> >7</option>
                                <option value='8' <?php if($tugas['kelas'] == '8'){ echo 'selected'; } ?> >8</option>
                                <option value='9' <?php if($tugas['kelas'] == '9'){ echo 'selected'; } ?> >9</option>
                            </select>
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">Guru <?php  echo $this->uri->segment('4'); ?></label><br>
                          <select class="form-control"  id="inputSuccess" name="guru_id" style="width: 100%;" required="required">
                              <option value='' disabled selected>Pilih</option>
                              <?php 
                              $guru_id = $this->m_penugasan->tampilguru($this->uri->segment('4'));
                              foreach ($guru as $g) {  
                              ?>
                                  <option value="<?php echo $g->guru_id;?>" <?php if($g->guru_id == $guru_id ){ echo 'selected'; } ?> value="<?php echo $g->nama_guru; ?>"><?php echo $g->nama_guru; ?>
                                  </option>
                              <?php } ?>
                          </select>
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">Mapel</label><br>
                          <select class="form-control"  id="inputSuccess" name="id_mapel" style="width: 100%;" required="required">
                              <option value='' disabled selected>Pilih</option>
                              <?php 
                              $id_mapel = $this->m_penugasan->tampilmapel($this->uri->segment('4'));
                              foreach ($mapel as $m) {  
                              ?>
                                  <option value="<?php echo $m->id_mapel;?>" <?php if($m->id_mapel == $id_mapel ){ echo 'selected'; } ?> value="<?php echo $m->nama_mapel ?>"><?php echo $m->nama_mapel; ?>
                                  </option>
                              <?php } ?>
                          </select>
                        </div>
                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">File</label><br>
                          <img src="<?php echo base_url('file/'.$tugas['isi_tugas']) ?>"  style="width:  100%;">
                        </div>
                        
                        <input type="checkbox" name="ubah" value="true"> Ceklis jika ingin mengubah file<br>
                        <div class="form-group has-success">
                          <label for="exampleInputFile">File </label>
                              <input type="file" name="userfile" class="filestyle" data-buttonName="btn-primary"/><br><br>
                              <span class="label label-danger">Maksimal 3MB dengan tipe (png, jpg, pdf)</span>
                        </div>

                        <div class="form-group has-success">
                          <label class="control-label" for="inputSuccess">Keterangan Tugas</label><br>
                          <input type="text" name="ket_tugas" value="<?php echo $tugas['ket_tugas']?>" style="width:  100%;">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <center>
                                  <button type="submit" class="btn btn-primary">Update</button>
                                  <input type="hidden" class="form-control" id="inputSuccess" name="id_tugas" value="<?php echo $tugas['id_tugas']?>">
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
