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
            <li class="breadcrumb-item active">Add category</li>
          </ol>
 <h2 style="text-align: center">ADD CATEGORY</h2>
          <!-- Icon Cards-->
           <!--<div class="row">
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
         
   <form class="form-horizontal" action="add-category-backend.php" method="post">
  <div class="form-group">
    <label class=" col-sm-2" for="name">Category Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Category name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="des">Description:</label>
    <div class="col-sm-10"> 
      <textarea class="form-control" rows="5" id="description" name="description" placeholder="Category description"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="des">Post:</label>
    <div class="col-sm-10"> 
      <?php $query="SELECT * FROM post";
                  $result=mysqli_query($con,$query);
                 while ($arr=mysqli_fetch_array($result,MYSQLI_BOTH)):
            ?>
              <input type="checkbox" name="post[]" value="<?php echo $arr['id'] ?>"><label><?php echo $arr['post'] ?></label><br>
              <?php endwhile; ?>
  </div>
</div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="time">Duration:</label>
      <div class="col-sm-10"> 
      <select class="form-control" id="time" name="time">
      	<option style="display: none;">Select</option>
        <option value="0.25">15 minutes</option>
        <option value="0.5">30 minutes</option>
        <option value="1">1 hour</option>
        <option value="1.5">1.5 hours</option>
        <option value="2">2 hours</option>
      </select>
  </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <input  type="submit" class="btn btn-success"  name="add-btn"value="Submit">
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

    <!-- Scroll to Top Button-->
    
<?php
include "footer-admin.php"; 
}
else
  {
    header("Location: admin-login.php");
  }?>