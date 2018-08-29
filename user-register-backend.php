<?php

include "con.php";
session_start();
if(isset($_POST['reg-btn']))
{
	
		if($_POST['inputPassword']==$_POST['confirmPassword'])
		{
		$query="select id from users1 where email='".$_POST['inputEmail']."' and status='1'";
		 $result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{	

			$_SESSION['err_msg']="You have already appeared the exam";
			header("Location: user-register.php");	
		}
		else
		{

			$password=sha1($_POST['inputPassword']);
			$query="insert into users1(name,email,mobile,password,status,post,city,experience,notice,dob) values ('".$_POST['name']."','".$_POST['inputEmail']."','".$_POST['mobile']."','".$password."', '0','".$_POST['post']."','".$_POST['city']."','".$_POST['exper']."','".$_POST['notice']."','".$_POST['dob']."')";
			mysqli_query($con,$query);
			$result=mysqli_affected_rows($con);
			if($result>0)
			{
				$_SESSION['email']=$_POST['inputEmail'];
				$last_id = mysqli_insert_id($con);
				$_SESSION['id']=$last_id;
				$_SESSION['post']=$_POST['post'];
				header("Location: quiz1.php");
			}
			else
			{
				$_SESSION['err_msg']="Problem in Registration ";
				header("Location: user-register.php");
				
			}

		
		}
	
	}

}
?>