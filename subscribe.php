<?php

$userEmail = "";
if(isset($_POST['subscribe'])){
	$userEmail = $_POST['email'];
	if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
		$subject = "Thanks for subscribing us - codingNepal";
		$message = "Thanks for subscribing to our blog. You'll always receive updates from us. And we wont share or sell your information.";
		$sender = "From: hellotravelo.com";
		if(mail($userEmail, $subject, $message, $sender)){
			?>
			<div class="alert success"><"Thanks for subscribing us."</div>
			<?php
			$userEmail = "";

	}else{
		?>
		<div class="alert error"><"Failed while sending your email."</div>
		<?php
		}
	}else{
		?>
		<div class="alert"><?php echo $userEmail ?> is not a valid email</div>
		<?php
		}
?>