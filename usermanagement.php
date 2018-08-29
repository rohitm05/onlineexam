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
            <li class="breadcrumb-item active">User List</li>
          </ol>
          <?php
          $query="select count(question) from question";
          $result=mysqli_query($con,$query);
          $arr3=mysqli_fetch_array($result,MYSQLI_BOTH);
          $query="select users1.id,users1.name,users1.email,users1.mobile,users1.status,users1.result,users1.total,users1.update_at,post.post from users1 inner join post on users1.post=post.id";
          $result=mysqli_query($con,$query);
          ?>
<!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              User Table </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>User Id</th>
                      <th>User Name</th>
                      <th>User Email</th>
                      <th>Mobile Number</th>
                      <th>Post Applied</th>
                      <th>Result</th>
                      <th>Total Score</th>
                      <th>Test Date</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>User Id</th>
                      <th>User Name</th>
                      <th>User Email</th>
                      <th>Mobile Number</th>
                      <th>Post Applied</th>
                      <th>Result</th>
                      <th>Total Score</th> 
                       <th>Test Date</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                     <?php while ($arr=mysqli_fetch_array($result,MYSQLI_BOTH)):
                      $dt = new DateTime($arr['update_at']);
                      ?>
                       <tr>
                      <td><?php echo $arr['id']; ?></td>
                      <td><?php echo $arr['name']; ?></td>
                      <td><?php echo $arr['email']; ?></td>
                      <td><?php echo $arr['mobile']; ?></td>
                      <td><?php echo $arr['post']; ?></td>
                      <td><?php if($arr['result']==NULL) echo " "; else echo $arr['result'];?></td>
                       <td><?php if($arr['total']==NULL) echo " "; else echo $arr['total'];?></td>
                       <td><?php echo $dt->format('d-m-y'); ?></td>
                      <td>
                            <?php if($arr['status']==1){?>
              <a  href="unactive-user.php?id=<?php echo $arr['id']; ?>">
                <i class="fas fa-thumbs-down" style="font-size: 20px; color: red; text-align: center; "></i>  
              </a>
                            <?php }else{ ?>
                             <a  href="active-user.php?id=<?php echo $arr['id']; ?>">
                <i class="fas fa-thumbs-up" style="font-size: 20px; color: green; text-align: center;"></i>  
              </a>
                            <?php } ?>
                          </td>
                
                      <td><a href="delete-user.php?id=<?php echo $arr['id']; ?>"><i class="fas fa-trash-alt" style="color: red;"></i></a>&nbsp&nbsp<a href="viewpaper.php?id=<?php echo $arr['id']; ?>"><i class="far fa-eye" style="color: #0099ff;"></i></td>
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
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
<?php }
else
  {
    header("Location: admin-login.php");
  }?>