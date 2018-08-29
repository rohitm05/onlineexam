<?php
include_once 'con.php';
session_start();

	if(isset($_REQUEST["lgn-btn"]))
	{

		$username=mysqli_real_escape_string($con,$_REQUEST["username"]);
		$password=mysqli_real_escape_string($con,$_REQUEST["password"]);
		$result=mysqli_query($con,"select * from admin where username='".$username."' and password='".sha1($password)."'");
		if ($arr=mysqli_fetch_array($result,MYSQLI_BOTH)) 
		{
			
			if ($arr["username"]==$_REQUEST["username"] && $arr["password"]==sha1($_REQUEST["password"])) 
			{
				$_SESSION["username"]=$arr["username"];
				if(isset($_REQUEST["remember"]))
				setcookie("username", $arr["username"]);
				header('Location:index.php');
			}
		}
		else
		{ header("Location: admin-login.php"); }
	}







?>