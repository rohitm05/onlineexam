<?php
include "con.php";
session_start();

	$query="select count(question) from question";
	$result=mysqli_query($con,$query);
	$arr=mysqli_fetch_array($result,MYSQLI_BOTH);
	$j=0;
	for ($i=1; $i <=$arr['count(question)'] ; $i++) 
	{ 
		if($_POST['quiz'.$i]==$_POST['correct_ans'.$i])
			$j++;
		$query="insert into user_answer(user_id,question_id,answer) values('".$_SESSION['id']."','".$_POST['question_id'.$i]."','".$_POST['quiz'.$i]."')";
		mysqli_query($con,$query);
	}
	$query="update users set result='".$j."',status='1' where id='".$_SESSION['id']."'";
	$result=mysqli_query($con,$query);
	if ($result) {
		session_destroy();
		$query="select count(question) from question";
	$result=mysqli_query($con,$query);
	$arr=mysqli_fetch_array($result,MYSQLI_BOTH);
		session_start();
		$_SESSION['score']=$j;
		$_SESSION['total']=$arr['count(question)'];
		header("Location: thanks.php");
	}

?>