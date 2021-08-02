<?php 

//create database tables
	$conn = mysqli_connect('127.0.0.1','root','');

	if(! $conn ) {
		echo'not connected to server';
	}


	if(!mysqli_select_db($conn,'maryds') ){
		echo 'database not selected';
	}


	$name = $_POST['visitorname'];
	$email = $_POST['email'];

	$sql = "INSERT INTO person (Name,Email) VALUES ('$Name','$Email')";

	if(!mysqli_query($conn,$sql)){
		echo ' Not Inserted';
	}
	else{
		echo 'Inserted';
	}
	header("refresh:2; url=index.html");

 ?>
