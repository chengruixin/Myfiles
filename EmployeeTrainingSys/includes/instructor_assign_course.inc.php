<?php 
	include_once 'database_connection.inc.php';
	if(!isset($_GET['employees'])|| !isset($_GET['courses'])) {
		header("Location: ../instructor_assign_courses.php?assign=empty");
		exit();
	}
	
	$employee = $_GET['employees'];
	$string_employee = implode(", ",$employee);
	$array_employee = explode(", ", $string_employee);
	
	$course = $_GET['courses'];
	$string_course = implode(", ", $course);
	$array_course = explode(", ", $string_course);
	
// echo $string_employee;
// echo "<br>";
// echo $string_course;


	$employee_size = count($array_employee);
	for($i=0;$i<$employee_size;$i++){
		$id = $array_employee[$i];
		$sql = "UPDATE users SET required_courses = '$string_course' WHERE id = '$id'";
		mysqli_query($connection,$sql);
	}

	header("Location: ../instructor_assign_courses.php?assign=success");
 ?>