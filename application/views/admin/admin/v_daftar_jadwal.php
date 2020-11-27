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
     tbody tr td img{
       width: 50px;
       height: 50px;
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
            </li>
            <li class="breadcrumb-item active">Jadwal</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <h2 style="color: green;">Daftar Jadwal Mata Pelajaran&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('admin/jadwal/tambah') ; ?>"class="btn btn-info">+</a></h2></br>
            <div class="card-body">
                <div class="panel-body">
                  <div class="table-responsive">
                    <div class="tambah" align="center"> 
                    </div>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                        <tr>
                            <th>No</th>
                            <th>Hari</th>
                            <th>Jam Ke</th>
                            <th>Jam</th>
                            <th>VII A</th>
                            <th>VII B</th>
                            <th>VII C</th>
                            <th>VII D</th>
                            <th>VII E</th>
                            <th>VII F</th>
                            <th>VIII A</th>
                            <th>VIII B</th>
                            <th>VIII C</th>
                            <th>VIII D</th>
                            <th>VIII E</th>
                            <th>VIII F</th>
                            <th>IX A</th>
                            <th>IX B</th>
                            <th>IX C</th>
                            <th>IX D</th>
                            <th>IX E</th>
                            <th>IX F</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no=0;
                        ?>
                        <?php foreach( $jadwal_new as $jn ) : ?> <!-- Mulai loop -->
                        <?php 
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $jn->hari; ?></td>
                            <td><?php echo $jn->jam_ke; ?></td>
                            <td><?php echo $jn->jam_mulai; ?> - <?php echo $jn->jam_selesai; ?></td>
                            <td><?php echo $jn->k7a; ?></td>
                            <td><?php echo $jn->k7b; ?></td>
                            <td><?php echo $jn->k7c; ?></td>
                            <td><?php echo $jn->k7d; ?></td>
                            <td><?php echo $jn->k7e; ?></td>
                            <td><?php echo $jn->k7f; ?></td>
                            <td><?php echo $jn->k8a; ?></td>
                            <td><?php echo $jn->k8b; ?></td>
                            <td><?php echo $jn->k8c; ?></td>
                            <td><?php echo $jn->k8d; ?></td>
                            <td><?php echo $jn->k8e; ?></td>
                            <td><?php echo $jn->k8f; ?></td>
                            <td><?php echo $jn->k9a; ?></td>
                            <td><?php echo $jn->k9b; ?></td>
                            <td><?php echo $jn->k9c; ?></td>
                            <td><?php echo $jn->k9d; ?></td>
                            <td><?php echo $jn->k9e; ?></td>
                            <td><?php echo $jn->k9f; ?></td>
                            <td>
                              <a href="<?php echo base_url('admin/jadwal/edit/'.$jn->jadwal_id) ?>"
                               class="btn btn-success"><i class="fa fa-edit"></i> </a>
                              <a href="<?php echo base_url('admin/jadwal/delete/'.$jn->jadwal_id) ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> </a>
                               
                            </td>
                        </tr>
                        <?php endforeach; ?> <!-- Selesai loop -->
                    </tbody>
                    </table>
                  </div>

                  <div class="table-responsive">
                    <div class="tambah" align="center"> 
                    </div>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelas</th>
                            <!-- <th>Jenis File</th> -->
                            <th>File</th>
                            <th>Proses</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no=0;
                        ?>
                        <?php foreach( $jadwal as $j ) : ?> <!-- Mulai loop -->
                        <?php 
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $j->kelas; ?></td>
                            <!-- <td><?php echo $j->jenis; ?></td> -->
                            <td><img src='<?=base_url()?>images/<?=$j->gambar_jadwal;?>' style="width: 300px; height: auto;"></td>
                            <td>
                              <a href="<?php echo base_url('admin/jadwal/edit/'.$j->id_jadwal) ?>"
                               class="btn btn-success"><i class="fa fa-edit"></i> </a>
                              <a href="<?php echo base_url('admin/jadwal/delete/'.$j->id_jadwal) ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> </a>
                               
                            </td>
                        </tr>
                        <?php endforeach; ?> <!-- Selesai loop -->
                    </tbody>
                    </table>
                  </div>
                </div> <!-- end panel body -->
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

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
