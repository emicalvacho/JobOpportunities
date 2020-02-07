<?php
	$host ='localhost';
	$user = 'root';
	$password = '';
	$db = 'jobopportunities';   

	$conn = new mysqli($host,$user,$password,$db);

	if($conn->connect_error){
		echo $error -> $conn->connect_error;
	}
?>