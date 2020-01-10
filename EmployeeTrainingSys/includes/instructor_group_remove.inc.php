<?php 
	include_once 'database_connection.inc.php';
	$id = $_GET['id'];
	$sql = "UPDATE users SET required_courses=NULL WHERE id='$id'";
	mysqli_query($connection,$sql);
	$sql = "DELETE FROM log WHERE user_id='$id'";
	mysqli_query($connection,$sql);
	header("Location: ../instructor_assign_courses.php?remove=success");


 ?>