<?php session_start(); ?>
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

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
<style type="text/css">
  .footer {
   position: absolute;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #4d3a8f;
   color: white;
  
}
@media only screen and (min-width: 768px) {
    .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #4d3a8f;
   color: white;
  
}
}

body{
  height: 100vh;
  position: relative;
  
}  
</style>
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href=""><img src="ln-logo1.svg" width="100" height="30" style="background-color: white;"></a>

     
      <!-- Navbar Search -->
      <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
      </div>

      <!-- Navbar -->
      

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
     

      <div id="content-wrapper">

        <div class="container-fluid">
<div class="container" style="">

 
<h2 align="center">Thanks for Giving the exam we will Contact you soon!!!! </h2>

<p align="center" style="font-size: 30px;">You have scored <b><?php echo $_SESSION['score']."/".$_SESSION['total'];?></b></p>
<p style="text-align: center;"><b>Please check your email, we have also sent you your Score on your email.</b></p>
        </div>
      </div>
        <!-- /.container-fluid -->
<div class="footer">
  <div class="container">
 <span>2018 All rights reserved Let's Nurture.</span></div>
</div>
        <!-- Sticky Footer -->
        

      </div>
      
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    sessionStorage.timer = "";
    });
</script>
  </body>

</html>
