<!DOCTYPE html>
<html>
<head>
	<title>php demo</title>
</head>
<body>

	<?php

	/*Date
	h:12 hour format
	H:24 hour format
	i:minutes
	s:seconds
	u:microseconds
	a:lowercase am or pm
	I:fulltext for the day
	F:fulltext of the month
	j:day of the month
	S:suffix
	Y:year in 4 digits

	*/
	/*
	$studentName = $_POST["studentName"];
	$grade = $_POST["grade"];
	$section = $_POST["section"];
	$teacher = $_POST["TeacherName"];*/

	$username =$_POST["username"];
	$password =$_POST["password"];

	echo "<h2>Login details</h2>";

	echo "username: ".$username."<br/>";
	echo "password: ".$password;

	/*
	echo "<h1>student information</h1>";

	echo "student Name is" .$studentName;
	echo"He is in grade:" .$grade;
	echo"He studies in section" .$section;
	echo"He is taught by" .$teacher;
	*/

	?>
</body>
</html>