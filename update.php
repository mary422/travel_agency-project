<html>
<head>
	<title> Update </title>
	<style>
		body{
			background-color: whitesmoke;
		}
		input{
			width: 40%;
			height: 5%;
			border: 1px;
			border-radius: 5px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px grey;
		}

	</style>
</head>
<body>
	<center>
		<h1>Update data into database using php</h1>

		<form action="" method="post">
			<input type="text" name="id" placeholder="Enter ID"/><br/>
			<input type="text" name="fname" placeholder="Enter First Name"/><br/>
			<input type="text" name="lname" placeholder="Enter Last Name"/><br/>
			<input type="text" name="email" placeholder="Enter Email Id"/><br/>
			<input type="text" name="password" placeholder="Enter password"/><br/>
			<input type="text" name="phone" placeholder="Enter Phone number"/><br/>

			<input type="submit" name="update" value="UPDATE DATA"/>
		</form>
	</center>
</body>
</html>

<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'test');

if(isset($_POST['update']))
{
	$id = $_POST['id'];

	$query = "UPDATE 'registration' SET fname='$_POST[fname]',lname='$_POST[lname]',email='$_POST[email]',password='$_POST[password]',phone='$_POST[phone]' where id='$_POST[id]' ";
	$query_run = mysqli_query($connection,$query);

	if($query_run)
	{
		echo '<script type="text/javascript"> alert("Data Updated") </script>';
	}
	else{
		echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
	}
}

?>