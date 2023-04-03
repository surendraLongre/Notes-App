<?php
	session_start();
	include('logout.php');
	include('server.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF=8'>
	<title>Create notes</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
	<nav>
		<div id="left">
			<div id="brand"><a href='index.php'>Online Notes</a></div>
			<div><a href='index.php'>Home</a></div>
			<div><a href='help.php'>Help</a></div>
			<div><a href='contact_us.html'>Contact us</a></div>
		</div>
		

		<div id="right">
			<div><button id='login-btn' class='pointer'>Login</button></div>
		</div>
		
	</nav>
	
	<div id='content'>
		<h1>Online NOtes App</h1>
		<h3>your notes with you wherever you go.</h3>
		<h3>Easy to use. protects all your notes.!</h3>
		<button id='sign-up' class='pointer'>Sign up it's free</button>
	 </div>
	
<!--sign up form -->
	<form  method='post' id='signupform' class='form hide' action='signup.php'>
		<p>Sign up today and start using our Online Notes App</p>
		<div id='error'></div>
		<input type='text' placeholder='username' name='username'> 
		<input type='email' placeholder='email' name='email'>
		<input type='password' placeholder='password' name='password'>
		<input type='text' placeholder='confirm password' name='confirm-password'>
		<input type='submit' value='Sign Up' name='submit'>
		<button name='cancel' class='scale pointer'>Cancel</button>
	</form>
	
<!--login form -->
	<form method='post' id='loginform' class='form hide'>
		<p>Login</p>
		<div id='login-error'></div>
		<input type='email' placeholder='email' name='email'>
		<input type='password' placeholder='password' name='password'>
		<div>
			<input type='checkbox' name='checkbox'><label>Remember me</label>
			<a href='#'>Forgot password</a>
		</div>
		
		<input type='submit' value='Login' name='login'>
		<button id='cancel' class='scale pointer'>Cancel</button>
	</form>	

	<div id='footer'>
		<div>
			<p>copyright &copy; 2022-23</p>
		</div>
	</div>
</body>
<script src='java.js'></script>
</html>
