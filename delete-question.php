<?php
session_start();
include "con.php";
$query="delete from question1 where id='".$_REQUEST['id']."'";
mysqli_query($con,$query);
$_SESSION['err_msg']="Question deleted successfully";
header("Location: questionmanagement.php?id=".$_REQUEST['cid']);
?>