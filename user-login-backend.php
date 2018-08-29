<?php
include "con.php";
session_start();

	if(isset($_REQUEST["lgn-btn"]))
	{

		$email=mysqli_real_escape_string($con,$_REQUEST["inputEmail"]);
		$password=mysqli_real_escape_string($con,$_REQUEST["inputPassword"]);
		$result=mysqli_query($con,"select id,email,password from users1 where email='".$email."' and password='".sha1($password)."'");
		if ($arr=mysqli_fetch_array($result,MYSQLI_BOTH)) 
		{

			if ($arr["email"]==$_REQUEST["inputEmail"] && $arr["password"]==sha1($_REQUEST["inputPassword"])) 
			{
				

				$query="select status,post from users1 where id='".$arr["id"]."'";
				$result=mysqli_query($con,$query);
				if ($arr1=mysqli_fetch_array($result,MYSQLI_BOTH))
					{
						
						if($arr1['status']=='1')
							{
								$_SESSION['err_msg']="You have blocked by Administrator";
								header("Location: user-login.php");				
							}
							else
							{
								$_SESSION['post']=$arr1['post'];
								$_SESSION['email']=$_POST['inputEmail'];
								$_SESSION['id']=$arr["id"];
								header("Location: quiz1.php");
							}
					}
			}
		}
		else

		{ 	$_SESSION['err_msg']="You have not registered in our quiz";
			header("Location: user-login.php"); }
	}
