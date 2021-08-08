<?php

$username = $_POST['uname'];
$pass = $_POST['pass'];
$error = "";
$success = "";

if(isset($_POST['submit'])){
	if($uname == "admin"){
		if($pass == "password"){
			$error = "";
			$success = "Welcome Admin!!";

			header("Location: welcome.php");
		}
		else{
			$error = "Invalid Password!!";
			$success = "";
		}
	}
	else{
		$error = "Invalid username!!";
		$success = "";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com.jax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login Form</title>
</head>
<body>
	<div class="container">
		<div class="login-box">
			<p class="error"><?php echo $error; ?> <?php class = "success" ><?php echo $success; ?></p>
			<form method="POST">
				<div class="form-input">
					<i class="fa fa-user fa 2x cust" aria-hidden="true"></i>
					<input type="text" name="uname" value="" placeholder="Enter Username"> required><br/>
					<i class="fa fa-lock fa 2x cust" aria-hidden="true"></i>
					<input type="password" name="pass" value="" placeholder="Enter Password"> required><br/>
					<input type="submit" name="submit" value="LOGIN"><br/>
					<a href="#"> Forgot Password</a>
				</div>
			</form>
		</div>
	</div>
</body>
</html>


