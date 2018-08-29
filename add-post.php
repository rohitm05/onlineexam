<?php
include "con.php";

session_start(); 
if (isset($_SESSION["username"]) || isset($_COOKIE["username"])) { 
  include "header-admin.php";

 ?>

      <div id="content-wrapper">

        <div class="container">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Post</li>
          </ol>
 <h2 style="text-align: center">ADD POST</h2>
          
         
   <form class="form-horizontal" action="add-post-backend.php" method="post">
  <div class="form-group">
    <label class=" col-sm-2" for="Post">Post:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="post" name="post" placeholder="post">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <input  type="submit" class="btn btn-default" style="display:block;" name="add-btn"value="Submit">
    </div>
  </div>
</form>
          

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    
<?php
include "footer-admin.php";
}
else
  {
    header("Location: admin-login.php");
  }?>