<?php
session_start(); 
if (isset($_SESSION["username"]) || isset($_COOKIE["username"])) {
  header("Location: index.php");
}else{?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<link href="" rel="shortcut icon" type="image/x-icon" />
    <title>Admin - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header" align="center">Login</div>
        <div class="card-body">
          <form method="post" action="loginbackend.php">
            <div class="form-group">
              <div class="form-label-group">
                Username:<input type="text" id="username" name="username" class="form-control" style="padding-top: 11px;padding-bottom: 13px;" required="required" autofocus="autofocus">
                
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
               Password: <input type="password" id="password" name="password" class="form-control" style="padding-top: 11px;padding-bottom: 13px;" required="required"  >
                
              </div>
            </div>
             <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me" name="remember" checked>
                  Remember Password
                </label>
              </div>
            </div> 
            <input type="submit"  class="btn btn-primary btn-block" name="lgn-btn" id="lgn-btn" value="Login">
          </form>
          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
<?php } ?>
