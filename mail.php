<?php

if (isset($_GET['submit'])) {
	$name = $_GET['name'];
	$phone = $_GET['phone'];
	$email = $_GET['mail'];	
	$subject = $_GET['subject'];
	$message = $_GET['message'];

	$fullMessage = "From : ".$name."   Phone no : ".$phone."   E-mail : ".$email."   ".$message;echo "<br>";
	
	$result = mail("yellowtom1616@gmail.com",$subject,$fullMessage);
	

	if ($result) {
		var_dump($result);
		header("Location:contact.php?mes=sent");
	}else{
		var_dump($result);
		header("Location:contact.php?mes=failed");
	}

	/*
		$result = mail("yellowtom1616@gmail.com",$subject,$fullMessage);
		$sent = var_dump($result);

		if ($sent) {
			header("Location:contact.php?mes=sent");
		}else{
			header("Location:contact.php?mes=failed");
		}
	*/
}

