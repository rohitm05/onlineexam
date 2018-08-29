<?php session_start(); 
if (isset($_SESSION["email"])) {
  header("Location: quiz1.php");
}else{?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://www.letsnurture.com.au/wp-content/themes/letsnutrure/img/favicon/favicon-16x16.png" rel="shortcut icon" type="image/x-icon" />
    <title>Welcome to Our Recruitment Program</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-light">

    <div class="container">
       <?php if (isset($_SESSION['err_msg'])) { ?>
            <div class="alert alert-danger" role="alert"><?php echo $_SESSION['err_msg']; unset($_SESSION['err_msg']);?></div>
        <?php } ?>
      <div class="card card-login mx-auto mt-5">
        <div class="card-header" align="center">Login</div>
        <div class="card-body">
          <form method="post" action="user-login-backend.php">
            <div class="form-group">
              <div class="form-label-group">
                Email:<input type="text" id="inputEmail" name="inputEmail" class="form-control"  style="padding-top: 11px;padding-bottom: 13px;" required="required" autofocus="autofocus">
                
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
               Password: <input type="password" id="inputPassword" name="inputPassword" style="padding-top: 11px;padding-bottom: 13px;" class="form-control"  required="required"  >
                
              </div>
            </div>
             <!-- <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me" name="remember">
                  Remember Password
                </label>
              </div>
            </div> --> 
            <input type="submit"  class="btn btn-primary btn-block" name="lgn-btn" id="lgn-btn" value="Login">
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="user-register.php">Register an Account</a>
            
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
  sessionStorage.timer = "";
  });
</script>
  </body>

</html>
<?php } ?>