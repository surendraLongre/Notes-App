<?php
	session_start();
	include('server.php');
	$missing_email='<p>Please enter email</p>';
	$missing_password='<p>Please enter password</p>';
	$wrong_details='<p>password or email incorrect</p>';
	$unregistered='<p>your account not found</p>';

	$email=$_POST['email'];
	$password=$_POST['password'];

	if(!$email) $error.=$missing_email;	
	else $email=filter_var($email, FILTER_SANITIZE_EMAIL);
	
	if(!$password)$error.=$missing_password;
	if(!$error) {
		$sql="SELECT * from users WHERE email='$email'";
		$result=mysqli_query($link, $sql);
		$row=mysqli_fetch_array($result, MYSQLI_NUM);
		if(!$row) $error.=$unregistered;
		else {
			if($password==$row[3]){
			       	echo "success";
				$_SESSION['user_id']=$row[0];
				$_SESSION['email']=$row[2];
			}
			else $error.=$wrong_details;
		}
	}
	echo $error;

?>
