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

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets1/css/sb-admin.css') ; ?>" rel="stylesheet">

  </head>
  <style type="text/css">
  	.bg {
	    background-image: url("assets/img/bg-login.jpg");
	    height: 100%;
	    background-position: center;
	    background-repeat: no-repeat;
	    background-size: cover;
	}
  </style>
  <body class="bg">

    <div class="container" style="margin-top: 15%;">
      <div class="card card-login mx-auto mt-5" style="box-shadow: 2px 2px 5px black;">
        <div class="card-header" style="text-align: center; font-size: 50px; color: blue;"><b>SekolahKu</b></div>
        <div class="card-body">
          <form action="<?php echo site_url().'login/aksi_login'?>" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" class="form-control" placeholder="Username" required="required" autofocus="autofocus" name="username">
                <label for="inputEmail">Username</label>
              </div>
            </div>
            <div class="form-group" style="margin-top: 30px;"> 
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="***********" required="required" name="password">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <button class="btn btn-primary btn-block" style="margin-top: 50px;">Login</button>  
          </form>
          <div class="text-center">
            <!-- <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets1/vendor/jquery/jquery.min.js') ; ?>"></script>
    <script src="<?php echo base_url('assets1/vendor/bootstrap/js/bootstrap.bundle.min.js') ; ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets1/vendor/jquery-easing/jquery.easing.min.js') ; ?>"></script>

  </body>

</html>
