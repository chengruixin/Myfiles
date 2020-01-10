<?php
	include_once '_header.php'; 

 ?>
<li>
	<a href="personalInfo.php">Personal information</a>
</li>
 
 <?php 
 	if($_SESSION['user_position'] == "Admin"){
 		echo ' <p><li><a href="admin_manage_employees.php">Manage your employees</a></li></p> ';
 	}

 	else if($_SESSION['user_position'] == "Employee"){
 		echo ' <p><li><a href="employee_courses.php">Take courses</a></li></p> ';
 	}

 	else if($_SESSION['user_position'] == "Instructor"){
 		echo ' <p><li><a href="instructor_manage_courses.php">Manage courses</a></li></p> ';

 		echo ' <p><li><a href="instructor_assign_courses.php">Assign courses</a></li></p> ';
 		
 	}
  ?>
