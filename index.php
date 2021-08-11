<?php 

/*$host='localhost';
$user='root';
$phone='';
$db='maryds';

$con=mysqli_connect($host,$user,$phone,$db);
if($con)
	echo 'connected successfully to maryds database';

$sql="insert into mytable1 (username,phone no.,email,message) values ('mary',0748467897,'marywanjohi96@gmail.com','you offer the best services, thanks in advance!')";
$query=mysqli_query($con,$sql);
if($query)
	echo'data inserted successfully';*/
if(isset($_POST['submit']))
{
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

$hash_default_salt = password_hash($password, PASSWORD_DEFAULT);

echo "firstName ".$firstName.", lastName ".$lastName." gender ".$gender.",email ".$email." password ".$password." number ".$number;
//Database connection
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
	die("Connection Failed : " .$conn->connect_error);
} else {
	$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
	$stmt->bind_param('ssssss', $firstName, $lastName, $gender, $email, $hash_default_salt, $number);
	if($stmt->execute()){
	echo "<br>Registration successfully...<br>";
}else{
	echo "<br> <h1>Ooos</h1>";
	echo $stmt->error;
}
	$stmt->close();
	$conn->close();
}
}

 ?>

