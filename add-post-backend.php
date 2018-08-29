<?php
session_start();
include 'con.php';
if (isset($_POST['add-btn'])) {
	$query="insert into post (post) values('".$_POST['post']."')";
	mysqli_query($con,$query);
	$result=mysqli_affected_rows($con);
	if($result>0)
	{
		$_SESSION['msg']="Post added successfully";
		header("Location: postmanagement.php");
	}
	else
	{
	  $_SESSION['err_msg']="Post was not added";
		header("Location: postmanagement.php");	
	}

}


?>