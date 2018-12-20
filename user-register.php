<?php 
include "con.php";
session_start(); 
if (isset($_SESSION["email"])) {
  header("Location: quiz1.php");
}else{
$query="select * from post";
$result=mysqli_query($con,$query);?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="" rel="shortcut icon" type="image/x-icon" />
    <title>Welcome to Our Recruitment Program</title>
    
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script> 
      
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <link href="mystyle.css" rel="stylesheet">
<style type="text/css">

</style>
  </head>

  <body class="bg-light">
    <div style="width:100%;text-align: center;">
    <img src="ln-logo1.svg" width="250" height="83" >
    </div>
    <div class="clear-fix"></div>
<div class="patch"></div>
    <div class="container-fluid">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header" align="center">Register here to start your journey with SOA Family</div>
        <div class="card-body" >
           
          <form method="post"  name="reg-form" id="reg-form" action="user-register-backend.php">
            <div class="form-group">
              <div class="form-row">
                <div class="col-sm-6">
                  <div class="form-label-group">
                    Name:<input type="text" id="name" name="name" style="padding-top: 11px;padding-bottom: 13px; margin-top: 5px;" class="form-control" placeholder="name"  autofocus="autofocus" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-label-group">
                    Date of Birth:<input type="text" style="padding-top: 0px;padding-bottom:;margin-top: 5px;" id="dob" name="dob" class="form-control datepicker" placeholder="dob"  autofocus="autofocus">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-sm-6">
              <div class="form-label-group">
                Email address:<input type="email" id="inputEmail" style="padding-top: 11px; padding-bottom: 13px;margin-top: 5px;" name="inputEmail" class="form-control" style=" " placeholder="Email address" value="<?php if(isset($_POST['inputEmail'])) echo $_POST['inputEmail']; ?>">
              </div>
            </div>
            
           
               <div class="col-sm-6">
              <div class="form-label-group">
                Mobile Number:<input type="text" id="mobile" style="padding-top: 11px;padding-bottom: 13px; margin-top: 5px;" name="mobile" class="form-control" style=" " placeholder="Mobile Number" value="<?php if(isset($_POST['mobile'])) echo $_POST['mobile']; ?>">
              </div>
              </div>
            </div>
</div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-sm-6">
              <div class="form-label-group">
               Post Applying For:<select class="form-control" id="post" name="post" style="margin-top: 5px;">
        <option style="display: none;">Select</option>
        <?php while($arr=mysqli_fetch_array($result,MYSQLI_BOTH)):  ?>
        <option value="<?php echo $arr['id']; ?>"><?php echo $arr['post']; ?></option>
         <?php endwhile; ?>
      </select>
              </div>
            </div>
            <?php
            //$query="select id,city_name from cities";
            //$result=mysqli_query($con,$query);?>
            <div class="col-sm-6">
              <div class="form-label-group">
               City:<input type="text" id="city" style="padding-top: 11px;padding-bottom: 13px; margin-top: 5px;" name="city" class="form-control" style=" " placeholder="City" value="<?php if(isset($_POST['city'])) echo $_POST['city']; ?>">
              </div>
            </div>
          </div>
        </div>
        <?php
        $query="select value,experience from experience";
        $result=mysqli_query($con,$query);
?>
              <div class="form-group">
              <div class="form-row">
                <div class="col-sm-6">
              <div class="form-label-group">
               Experience:<select class="form-control" id="exper" name="exper" style="margin-top: 5px; ">
        <option style="display: none;">Select</option>
        <?php while($arr=mysqli_fetch_array($result,MYSQLI_BOTH)):  ?>
        <option value="<?php echo $arr['value']; ?>"><?php echo $arr['experience']; ?></option>
         <?php endwhile; ?>
      </select>
              </div>
            </div>
            <?php
            $query="select id,city_name from cities";
            $result=mysqli_query($con,$query);?>
            <div class="col-sm-6">
              <div class="form-label-group">
               Notice Period:<select class="form-control" id="notice" name="notice" style=" margin-top: 5px;">
        <option style="display: none;">Select</option>
        <option value="1"  >1 Week</option>


                    <option value="2" >2 Weeks</option>

                    <option value="4" >4 Weeks</option>

                    <option value="6" >6 Weeks</option>

                    <option value="8" >8 Weeks</option>

                    <option value="10" >10 Weeks</option>

                    <option value="12" >12 Weeks</option>

      </select>
              </div>
            </div>
          </div>
        </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    Password:<input type="password" id="inputPassword" name="inputPassword" class="form-control" style="padding-top: 4px;margin-top: 5px;" placeholder="Password" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    Confirm password:<input type="password" id="confirmPassword" name="confirmPassword" class="form-control" style="padding-top: 4px;margin-top: 5px;" placeholder="Confirm password" >
                  </div>
                </div>
              </div>
            </div>
            <?php if(isset($_SESSION['err_msg'])) { ?>
            <div class="alert alert-danger" role="alert"><?php echo $_SESSION['err_msg']; unset($_SESSION['err_msg']);?></div>
        <?php } ?>
            <input type="submit" name="reg-btn" class="btn btn-primary btn-block" value="Register">
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="user-login.php">Login Page</a>
          </div>
        </div>
      </div>
    </div>

<div class="footer">
  <div class="container">
 <span>2018 All rights reserved SOA.
                </span></div>
</div>



        <script>
  $(document).ready(function() {
     $("#reg-form").validate({
        errorClass: "text-red",
        errorElement: 'span',
        rules: {
            name: {
              required: true,
              lettersonly: true
              },
            inputEmail: {
                required: true,
                email: true
            },
            mobile: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 12
            },
            dob: "required",
            post: "required",
            city: "required",
            exper: "required",
            notice: "required",
            inputPassword: {
                required: true,
                minlength: 7
            },
            confirmPassword: {
                required: true,
                minlength: 7,
                equalTo: "#inputPassword"
            },
        },
        messages: {
            name: {
                required: "Please enter your name",
            },
            email: {
                required: "Please enter your email",
                email: "Please enter only valid email",
            },
            mobile: {
                required: "Please enter your phone number",
                number: "Please enter only numeric value",
            },
            dob: "Please enter a date of Birth",
            post: "Please enter select your post applying for",
            city: "Please enter your city",
            exper: "Please enter select your experience level",
            notice: "Please enter select notice period",
            inputPassword: {
                required: "Please provide a password",
                minlength: "Your password must be at least 7 characters long",
            },
            confirmPassword: {
                required: "Please provide a password",
                minlength: "Your password must be at least 7 characters long",
                equalTo: "Please enter the same password as above",
            },
        },
        
    });
});



      </script>
      
      
    <!-- Bootstrap core JavaScript-->
    
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
  sessionStorage.timer = "";
 }); 
</script>
<script type="text/javascript">
 $(document).ready(function() {
  var d = new Date(); // current date
  $("#dob").datepicker({ 
         changeYear: true,
        changeMonth: true,
        yearRange: '1972:-20',
        dateFormat: 'dd/mm/yy',
        
  });  
});
 $(document).ready(function(){
    $("#name").keypress(function(event){
        var inputValue = event.which;
        // allow letters and whitespaces only.
        if(!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0 && inputValue != 46 && inputValue != 127)) { 
            event.preventDefault(); //a-z,A-Z,space,null,.,del
        }
    });
    $("#mobile").keypress(function(event){
        var inputValue = event.which;
        // allow letters and whitespaces only.
        if(!(inputValue >= 48 && inputValue <= 57) && (inputValue != 43 && inputValue != 0 && inputValue != 45 && inputValue != 127)) { 
            event.preventDefault(); //0-9,+,null,-,del
        }
    });
});
</script>

  </body>
</html>
<?php } ?>
