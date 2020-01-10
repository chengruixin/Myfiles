<?php 
	session_start();
	if(!isset($_SESSION['user_id'])){
		header("Location: index.php?login=unauthorised");
		exit();
	}


	
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home Page</title>
 	<style>
		body{
			font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
		}

		p{

		}	
		.red{
			color: red;
		}

		.green{
			color:green;
		}
		.yellow{
			color:yellow;
		}
		.blue{
			color: blue;
		}

	</style>
 	<form align=center>
 		<a href="http://localhost/EmployeeTrainingSys/homepage.php">Employee Training System</a>
 	</form>

 	<form action="http://localhost/EmployeeTrainingSys/includes/logout.inc.php" align=right method="POST">
 		<?php echo "Hi ".$_SESSION['user_name']."<br>"; ?>
 		<button type="submit" name="logout" value="1">Log out</button>
 	</form>
 	
 	<br>
 	<HR>

 </head>
 <body>
 </body>
 </html>