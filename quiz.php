<?php
include "con.php";
session_start(); 
if (isset($_SESSION["email"]) ) {
	$query="select time from category";
	$result=mysqli_query($con,$query);
 $time=0;
 while ($arr=mysqli_fetch_array($result,MYSQLI_BOTH)){
$time=$time+floatval($arr['time']);

 }

	?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
<style type="text/css">
	#demo {
  text-align: center;
  font-size: 25px;
  margin-top:0px;

}
</style>
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="">Start Bootstrap</a>

     
      <!-- Navbar Search -->
      <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
      </div>

      <!-- Navbar -->
      <span style="color: white;"><b>Hello, <?php echo $_SESSION["email"]; ?></b></span>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
     

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <p id="demo"></p>

          <!-- Icon Cards-->
         <!--  <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">26 New Messages!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div> -->
<div class="container" style="">
<form method="post" action="quiz-calculate.php" id="quiz" name="quiz">
	<table class="table table-striped" border="4">
<?php
$i=0;
$query="select * from question order by rand() limit 100";
$result=mysqli_query($con,$query);
 while ($arr=mysqli_fetch_array($result,MYSQLI_BOTH)):
 $i++;                     
?>
		<tr><td>
  <input type="hidden" name="correct_ans<?php echo $i; ?>" value="<?php echo $arr['correct_ans']?>">
  <input type="hidden" name="question_id<?php echo $i; ?>" value="<?php echo $arr['id']?>">
  <p>Q<?php echo $i." "."<b>".$arr['question']."</b>";?></p>
  <input type="radio" name="quiz<?php echo $i; ?>" value="1" > <?php  echo $arr['answer1'] ?><br>
  <input type="radio" name="quiz<?php echo $i; ?>" value="2"> <?php echo $arr['answer2'] ?><br>
   <input type="radio" name="quiz<?php echo $i; ?>" value="3"> <?php echo $arr['answer3'] ?><br>
  <input type="radio" name="quiz<?php echo $i; ?>" value="4"> <?php echo $arr['answer4'] ?>
 
		</td></tr>
		 <?php
		  
		endwhile; ?>
		<input type="hidden" name="myhiddenvalue" id="myhiddenvalue" value="<?php echo $time; ?>"/>
	</table>
	<input  type="submit" class="btn btn-default" style="display:block;" name="sub-btn"value="Submit">
</form>
 </div> 

          

        </div>
        <!-- /.container-fluid -->

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
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    

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
    <!-- <script src="js/demo/chart-area-demo.js"></script> -->

    <!-- Custome JS-->
    <script>

$(document).ready(function() {
  if(sessionStorage.getItem("timer")==""){
    alert($('#myhiddenvalue').val());
    // Set the date we're counting down to
  var countDownDate = new Date($('#myhiddenvalue').val()*60*60*1000).getTime();
  var now1 = new Date().getTime()+countDownDate;
  sessionStorage.timer = now1;
    alert(sessionStorage.getItem("timer"));
  }
  else{
    now1=sessionStorage.timer ;
  }
  // Update the count down every 1 second
  var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = now1 - now;
    
    // Time calculations for days, hours, minutes and seconds
    var hours = Math.floor(distance / (1000 * 60 * 60 ));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML =  hours + "h "
    + minutes + "m " + seconds + "s ";
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        sessionStorage.timer = "";
        $("#quiz").submit();
  }
}, 1000);
  
});
  
</script>

  </body>

</html>
<?php }
else
  {
    header("Location: user-login.php");
  }?>