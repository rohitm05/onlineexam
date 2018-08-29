<?php
session_start();
include "con.php";
$query="delete from category1 where id='".$_REQUEST['id']."'";
mysqli_query($con,$query);
$query="delete from question1 where category_id='".$_REQUEST['id']."'";
mysqli_query($con,$query);
$_SESSION['err_msg']="Category deleted successfully";
header("Location: category.php");
?>