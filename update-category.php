<?php
include "con.php";
session_start(); 
if (isset($_POST['add-btn'])) 
{
	$post=implode(",",$_POST['post']);
	$query="update category1 set category_des='".$_POST['description']."', time='".$_POST['time']."',post='".$post."' where id='".$_POST['id']."'";
	$result=mysqli_query($con,$query);
	if($result)
	{
		$_SESSION['msg']="Category updated successfully";
		header("Location: category.php");
	}
	else
	{
		$_SESSION['err_msg']="Category was not updated";
		header("Location: category.php");	
	}
} 



?>