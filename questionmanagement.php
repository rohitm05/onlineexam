<?php
include "con.php";
session_start(); 
if (isset($_SESSION["username"]) || isset($_COOKIE["username"])) {
  include "header-admin.php";?>


      <div id="content-wrapper">

        <div class="container-fluid">
        	<?php if (isset($_SESSION['msg'])) { ?>
            <div class="alert alert-success" role="alert"><?php echo $_SESSION['msg']; unset($_SESSION['msg']);?></div>
        <?php } ?>
        <?php if (isset($_SESSION['err_msg'])) { ?>
            <div class="alert alert-danger" role="alert"><?php echo $_SESSION['err_msg']; unset($_SESSION['err_msg']);?></div>
        <?php } ?>
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">List Question</li>
          </ol>

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
<!-- DataTables Example -->
		  <?php 
          $query="select id, question from question1 where category_id='".$_REQUEST['id']."'";
          $result=mysqli_query($con,$query);
           ?>
                <div  style="float: right; padding-bottom: 5px;">
              
              <a class="btn btn-success" href="add-question.php?id=<?php echo $_REQUEST['id']; ?>">
  Add Question
</a>
</div>
            <div class="clearfix"></div>  
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Question Table </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Question Id</th>
                      <th>Question</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Question Id</th>
                      <th>Question</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                     <?php while ($arr=mysqli_fetch_array($result,MYSQLI_BOTH)):
                      ?>

                    <tr>
                      <td><?php echo $arr['id'] ?></td>
                      <td><?php echo $arr['question'] ?></td>
                      <td><a href="edit-question.php?id=<?php echo $arr['id']; ?>&&cid=<?php echo $_REQUEST['id']; ?>"><i class="fas fa-edit" style="color: green;"></i></a>&nbsp&nbsp<a href="delete-question.php?id=<?php echo $arr['id']; ?>&&cid=<?php echo $_REQUEST['id']; ?>"><i class="fas fa-trash-alt" style="color: red;"></i></a></td>
                    </tr>
                    <?php endwhile; ?>
                  </tbody>
                </table>
              </div>
            </div>
            
          </div>

          

        </div>
          

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