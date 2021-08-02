<!DOCTYPE html>
<html>
<head>
	<title>php demo</title>
</head>
<body>


	<?php

	$visitor_name =$_POST["visitor_name"];
	$visitor_email =$_POST["visitor_email"];
	$visitor_phone =$_POST["visitor_phone"];
	$total_adults =$_POST["total_adults"];
	$total_children =$_POST["total_children"];
	$checkindate =$_POST["checkin"];
	$checkoutdate =$_POST["checkout"];

	echo "<h2>Booking details</h2>";

	echo "visitor_name: " .$visitor_name."<br/>";
	echo "visitor_email: " .$visitor_email."<br/>";
	echo "visitor_phone: " .$visitor_phone."<br/>";
	echo "total_adults: " .$total_adults."<br/>";
	echo "total_children: " .$total_children."<br/>";
	echo "checkin: " .$checkindate."<br/>";
	echo "checkout: " .$checkoutdate."<br/>";

	?>
</body>
</html>
