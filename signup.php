<?php
	session_start();
	include('server.php');
	$missing_username='<p>Please enter username</p>';
	$missing_email='<p>Please enter email</p>';
	$missing_password='<p>Pleae enter password</p>';
	$invalid_password='<p>Please enter a valid password</p>';
	$different_password='<p>Password do not match</p>';
	$invalid_email='<p>Please enter a valid email</p>';
	$missing_confirm_password='<p>Please confirm password</p>'; 

	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$confirm_password=$_POST['confirm-password'];
	$user_exists="<p>User already exists. Please login</p>";
	$error='';
	$exists=false;
	if(!strlen($username)){
		$error.=$missing_username;
	}
	else $username=filter_var($username, FILTER_SANITIZE_STRING);

	if(!strlen($email)) {
		$error.=$missing_email;
	}
	else {
		$email=filter_var($email, FILTER_SANITIZE_EMAIL);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $error.=$invalid_email;
	}


	if(!strlen($password)) $error.=$missing_password;
	if(!strlen($confirm_password)) $error.=$missing_confirm_password;
	elseif($password!=$confirm_password) $error.=$different_password;


	if($error) echo $error;

	else {
		$sql="SELECT * FROM users WHERE email='$email'";
		$result=mysqli_query($link, $sql);
		$row=mysqli_fetch_array($result, MYSQLI_NUM);
		if($row) $error.=$user_exists;
	}

	if($error) echo $error;
	

	if(!$error){
		$sql="INSERT INTO users(username, email, password)values('$username','$email','$password')";
		$result=mysqli_query($link, $sql);
/*		if($result) echo "Inserted successfully";
else echo "failed";*/
	}
?>
