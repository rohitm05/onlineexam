<?php
session_start();
include "con.php";
$query="delete from post where id='".$_REQUEST['id']."'";
mysqli_query($con,$query);
$_SESSION['err_msg']="Post deleted successfully";
header("Location: postmanagement.php");
?>