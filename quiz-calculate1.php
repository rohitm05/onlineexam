<?php
include "con.php";
session_start();
	$j=0;
	for ($i=1; $i <=$_POST['total'] ; $i++) 
	{ 
		if($_POST['quiz'.$i]==$_POST['correct_ans'.$i])
			$j++;
		$query="insert into user_answer1(user_id,question_id,answer) values('".$_SESSION['id']."','".$_POST['question_id'.$i]."','".$_POST['quiz'.$i]."')";
		mysqli_query($con,$query);
	}
	$query="update users1 set result='".$j."',total='".$_POST['total']."',status='1' where id='".$_SESSION['id']."'";
	$result=mysqli_query($con,$query);
	if ($result) {
		include "mail.php";
		session_destroy();
		
	$arr=mysqli_fetch_array($result,MYSQLI_BOTH);
		session_start();
		$_SESSION['score']=$j;
		$_SESSION['total']=$_POST['total'];
		
		header("Location: thanks.php");
	}

?>