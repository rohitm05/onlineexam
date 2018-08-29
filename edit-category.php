<?php
include "con.php";
session_start(); 
if (isset($_SESSION["username"]) || isset($_COOKIE["username"])) {
  include "header-admin.php";?>


      <div id="content-wrapper">

        <div class="container">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Edit category</li>
          </ol>
 <h2 style="text-align: center">EDIT CATEGORY</h2>
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
         <?php $query="select id,category_name,category_des,post,time from category1 where id='".$_REQUEST['id']."'"; 
         $result=mysqli_query($con,$query);
         $arr=mysqli_fetch_array($result,MYSQLI_BOTH);
         $post=explode(",",$arr['post']); 
         ?>
   <form class="form-horizontal" action="update-category.php" method="post">
   	<input type="hidden" name="id" value="<?php echo $arr['id']?>">
  <div class="form-group">
    <label class=" col-sm-2" for="name">Category Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Category name" value="<?php echo $arr['category_name']?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="des">Description:</label>
    <div class="col-sm-10"> 

      <textarea class="form-control" rows="5" id="description" name="description" placeholder="Category description" ><?php echo $arr['category_des']; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="des">Post:</label>
    <div class="col-sm-10"> 
      <?php $query="SELECT * FROM post";
                  $result=mysqli_query($con,$query);
                 while ($arr1=mysqli_fetch_array($result,MYSQLI_BOTH)):
            ?>
              <input type="checkbox" name="post[]" <?php if(in_array($arr1['id'], $post)) echo "checked"; ?> value="<?php echo $arr1['id'] ?>"><label><?php echo $arr1['post']; ?></label><br>
              <?php endwhile; ?>
  </div>
</div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="time">Duration:</label>
      <div class="col-sm-10"> 
      <select class="form-control" id="time" name="time">
        <option <?php if($arr['time']=="0.25") echo "selected"; ?> value="0.25">15 minutes</option>
        <option <?php if($arr['time']=="0.5") echo "selected"; ?> value="0.5">30 minutes</option>
        <option <?php if($arr['time']=="1.0") echo "selected"; ?> value="1">1 hour</option>
        <option <?php if($arr['time']=="1.5") echo "selected"; ?> value="1.5">1.5 hours</option>
        <option <?php if($arr['time']=="2.0") echo "selected"; ?> value="2">2 hours</option>
      </select>
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

    <!-- Scroll to Top Button-->
   
<?php 
include "footer-admin.php";
}
else
  {
    header("Location: admin-login.php");
  }?>