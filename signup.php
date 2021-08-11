<?php
/*session_start();
include "login.php";

if (isset($_POST['uname']) && isset($_POST['password'])
&& isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'uname'. $uname. '$name'. $name;

	echo "user_data";


	if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&user_data");
		exit();

	}else if(empty($pass)){
		header("Location: signup.php?error=Password is required&user_data");
		exit();

	}else if(empty($re_pass)){
		header("Location: signup.php?error=Re Password is required&user_data");
		exit();

	}else if(empty($name)){
		header("Location: signup.php?error=Name is required&user_data");
		exit();
	}
	}/*else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $mysql);

		if (mysqli_num_rows($result) === 1){
			$row = mysqli_fetch_assoc($result);
			if ($row['user_name'] === $uname && $row['password'] === $pass)
			{
				$_SESSION['user_name'] = $row['user_name'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['id'] = $row['id'];
				header("Location: signup.php");
				exit();
			}else{
				header("Location: signup.php?error=Incorrect user name or passsword");
				exit();
			}
		}else{
			header("Location: signup.php?error=Incorrect user name or passsword");
				exit();
		}else if{
		header("Location: signup.php");
		exit();
	}*/
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$re_password = $_POST['re_password'];

if ($password !=$re_password) {
	# code...
	die("Passwords must match");
}
$hash_default_salt = password_hash($password, PASSWORD_DEFAULT);
echo "name ".$name.", username ".$username." password: ".$password.",re_password ".$re_password;
//Database connection
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
	die("Connection Failed : " .$conn->connect_error);
} else {
	$stmt = $conn->prepare("insert into signup(name, username, password) values(?,?,?)");
	$stmt->bind_param('sss', $name, $username, $hash_default_salt);
	if($stmt->execute()){
	echo "<br>Signup successfully...<br>";
	}
	else{
		echo "<br> <h1>Ooops</h1>";
		echo $stmt->error;
	}
	$stmt->close();
	$conn->close();

}


/*
//lazy ISSET - Checking one variable
if(isset($_POST['name']))
$Name = $_POST['name'];
$UserName = $_POST['username'];
$password = $_POST['password'];
$re_password = $_POST['re_password'];

 
 //check passwords for a match
if($password != $re_password) {
	$out = "PW  dont match. Try again.";
 } else {
 	//salt and hash password
 	password = password_hash(password, PASSWORD_DEFAULT)
 	$out = "Thanks for registering";

 	try {
 		//bind parameters and execute
 		$sql ="INSERT INTO signup (name, username, password) VALUES (?, ?, ?)";
 		$result = $pdo->prepare($sql);
 		$result->execute(array($name, $username, $password));
		} catch (PDOEception $e) {
			if($e->getCode() == 2300) {
				$out = "Invalid username. Pick a new one";
			} else {
				$out = $e->getMessage();
			}
		} finally {
			echo $out;
		}//catch
 }*/
?>

