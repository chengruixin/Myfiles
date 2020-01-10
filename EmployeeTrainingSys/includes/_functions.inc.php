<?php 
	#get objects from database
	function getObjects($connection,$sql){
		$result = mysqli_query($connection,$sql);
		return $result;
	}

	#get objects size
	function getObjectsSize($connection, $sql){
		$result = mysqli_num_rows( mysqli_query($connection,$sql) );
		return $result;
	}

 ?>