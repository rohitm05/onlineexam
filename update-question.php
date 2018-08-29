<?php
include "con.php";
session_start(); 
if (isset($_POST['add-btn'])) 
{ 
	$query="update question1 set question='".addslashes($_POST['question'])."', answer1='".addslashes($_POST['answer1'])."', answer2='".addslashes($_POST['answer2'])."', answer3='".addslashes($_POST['answer3'])."', answer4='".addslashes($_POST['answer4'])."', correct_ans='".$_POST['correct']."' where id='".$_POST['id']."'";
	$result=mysqli_query($con,$query);
	if($result)
	{
		$_SESSION['msg']="Question updated successfully";
		header("Location: questionmanagement.php?id=".$_POST['category_id']);
	}
	else
	{
		$_SESSION['err_msg']="Question was not updated";
		header("Location: questionmanagement.php?id=".$_POST['category_id']);	
	}
} 



?>