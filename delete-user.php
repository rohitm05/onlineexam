<?php
session_start();
include "con.php";
$query="delete from user_answer1 where user_id='".$_REQUEST['id']."'";
mysqli_query($con,$query);
$query="delete from users1 where id='".$_REQUEST['id']."'";
mysqli_query($con,$query);
$_SESSION['err_msg']="User deleted successfully";
header("Location: usermanagement.php");
?>