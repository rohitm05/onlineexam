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
            <li class="breadcrumb-item active">View Paper</li>
          </ol>

         
        <table class="table table-striped" border="4">
        	<?php $i=1; 
        	$query="select question1.question,question1.answer1,question1.answer2,question1.answer3,question1.answer4,question1.correct_ans,user_answer1.answer from user_answer1 inner join question1 on user_answer1.question_id=question1.id where user_id='".$_REQUEST['id']."'"; 
        	$result=mysqli_query($con,$query);
        	while ($arr=mysqli_fetch_array($result,MYSQLI_BOTH)):
        	?>
        		<tr><td>
  <p>Q<?php echo $i." "."<b>".$arr['question']."</b>";?></p>
  <input type="radio"  <?php if($arr['answer']=='1') echo "checked";?> value="1" ><span <?php if($arr['answer']=='1') {  if($arr['answer']==$arr['correct_ans']){ echo 'style="color:green;"'; }else{ echo 'style="color:red;"';}} if($arr['correct_ans']=='1'){ echo 'style="color:green;"'; } ?> ><?php  echo $arr['answer1'] ?></span> <br>
  <input type="radio"  <?php if($arr['answer']=='2') echo "checked";?> value="2"> <span <?php if($arr['answer']=='2') {  if($arr['answer']==$arr['correct_ans']){ echo 'style="color:green;"'; }else{ echo 'style="color:red;"';}} if($arr['correct_ans']=='2'){ echo 'style="color:green;"'; } ?> ><?php  echo $arr['answer2'] ?></span> <br>
   <input type="radio" <?php if($arr['answer']=='3') echo "checked";?> value="3"> <span <?php if($arr['answer']=='3') {  if($arr['answer']==$arr['correct_ans']){ echo 'style="color:green;"'; }else{ echo 'style="color:red;"';}} if($arr['correct_ans']=='3'){ echo 'style="color:green;"'; } ?> ><?php  echo $arr['answer3'] ?></span> <br>
  <input type="radio"  <?php if($arr['answer']=='4') echo "checked";?> value="4"> <span <?php if($arr['answer']=='4') {  if($arr['answer']==$arr['correct_ans']){ echo 'style="color:green;"'; }else{ echo 'style="color:red;"';}} if($arr['correct_ans']=='4'){ echo 'style="color:green;"'; } ?> ><?php  echo $arr['answer4'] ?></span> 
 
		</td></tr>
		 <?php
		  $i++;
		endwhile; ?>
        </table>

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