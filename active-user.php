<?php
include "con.php";
session_start();
$query="update users1 set status='1' where id='".$_REQUEST['id']."'";
$result=mysqli_query($con,$query);
if($result)
	{
		$_SESSION['msg']="User unactivated successfully";
		header("Location: usermanagement.php");
	}
	else
	{
		$_SESSION['err_msg']="User was not unactivated";
		header("Location: usermanagement.php");	
	}
?>