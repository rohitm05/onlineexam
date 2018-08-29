<?php
include "con.php";
session_start(); 
if (isset($_SESSION["email"]) ) {
$time=0;

$id = array();
  $query="select id,time,post from category1";
  $result=mysqli_query($con,$query);
  while($arr=mysqli_fetch_array($result,MYSQLI_BOTH)){
  $post=explode(",",$arr['post']);
  
  
    if(in_array($_SESSION['post'], $post)){
  
  $time=$time+floatval($arr['time']);
  array_push($id, $arr['id']);
  
 }

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
	#demo {
  text-align: center;
  font-size: 25px;
  margin-top:0px;

}

    .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #4d3a8f;
   color: white;
  
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
      <span style="color: white;"><b>Hello, <?php echo $_SESSION["email"]; ?></b></span>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
     

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <p id="demo"></p>

<div class="container" style="">
<form method="post" action="quiz-calculate1.php" id="quiz" name="quiz">
	
<?php
$i=0;
foreach ($id as $cid ) {?>
<table class="table table-striped" border="4">
  <?php $query="select category_name from category1 where id='".$cid."'";
  $result=mysqli_query($con,$query); 
  $arr=mysqli_fetch_array($result,MYSQLI_BOTH);?>
  <tr><th style="text-align: center; font-size: 20px;"><?php echo $arr['category_name']; ?></th></tr>
<?php $query="select * from question1  where category_id='".$cid."' order by rand()";
$result=mysqli_query($con,$query);

 while ($arr=mysqli_fetch_array($result,MYSQLI_BOTH)):
 $i++;                     
?>
		<tr><td>
  <input type="hidden" name="correct_ans<?php echo $i; ?>" value="<?php echo $arr['correct_ans']?>">
  <input type="hidden" name="question_id<?php echo $i; ?>" value="<?php echo $arr['id']?>">
  <p>Q<?php echo $i.") "."<b>".$arr['question']."</b>";?></p>
  <div class="form-row">
      <div class="col-sm-6">
  <input type="radio" name="quiz<?php echo $i; ?>" value="1" > <?php  echo $arr['answer1'] ?></div>
  <div class="col-sm-6"><input type="radio" name="quiz<?php echo $i; ?>" value="2"> <?php echo $arr['answer2'] ?></div> </div><div class="form-row"><div class="col-sm-6">
   <input type="radio" name="quiz<?php echo $i; ?>" value="3"> <?php echo $arr['answer3'] ?></div>
  <div class="col-sm-6"><input type="radio" name="quiz<?php echo $i; ?>" value="4"> <?php echo $arr['answer4'] ?></div> </div>
 
		</td></tr>

		 <?php
		endwhile;?>
    </table>
   <?php } ?>
<input type="hidden" name="total" value="<?php echo $i?>">
		<input type="hidden" name="myhiddenvalue" id="myhiddenvalue" value="<?php echo $time; ?>"/>
	<input  type="submit" class="btn btn-default" style="display:block; align-self: center;" name="sub-btn" value="Submit">
</form>
 </div> 

          

        </div>
        <!-- /.container-fluid -->
<div class="footer">
  <div class="container">
 <span>2018 All rights reserved Let's Nurture.
                </span></div>
</div>
        <!-- Sticky Footer -->
        

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    
    

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
    
    // Set the date we're counting down to
  var countDownDate = new Date($('#myhiddenvalue').val()*60*60*1000).getTime();
  var now1 = new Date().getTime()+countDownDate;
  sessionStorage.timer = now1;
    
  }
  else{
    now1=sessionStorage.timer ;
  }
  console.log(now1);
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
    document.getElementById("demo").innerHTML =  "Time left "+hours + "h " + minutes + "m " + seconds + "s ";
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