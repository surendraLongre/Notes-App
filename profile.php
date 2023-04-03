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
			<div><button class='pointer'>Login</button></div>
		</div>
		
	</nav>


	<div id='profile'>
		<h2>General account Settings</h2>
		<p>Username:</p><p id='username'>KGPK</p>
		<p>Email:</p><p id='email'>kgpk2050@gmail.com</p>
		<p>Password:</p><p id='password'>hidden</p>
	</div>
	
	
<!--change username -->
	<form  method='post' id='usernameform' class='form hide'>
		<p>Edit Username</p>
		<div id='error'></div>
		<input type='text' placeholder='username' name='username'> 
		<input type='submit' value='submit' name='submit' class='pointer'>
		<button name='cancel' class='scale pointer'>Cancel</button>
	</form>
	
<!--change email -->
	<form method='post' id='emailform' class='form hide'>
		<p>Edit Email</p>
		<div id='error'></div>
		<input type='email' placeholder='email' name='email'>
		<input type='submit' value='Login' name='login'>
		<button id='cancel' class='scale pointer'>Cancel</button>
	</form>
<!-- change password -->
	<form method='post' id='passwordform' class='form hide'>
		<p>Change Password</p>
		<div id='error'></div>
		<input type='password' name='prev-password' placeholder='previous password'>
		<input type='password' name='new-pass1' placeholder='New Password'>
		<input type='password' name='new-pass2' placeholder='Confirm Password'>
		<input type='submit' value='submit' name='submit' class='pointer'>
		<button name='cancel' class='pointer'>Cancel</button>
	</form>	

	<div id='footer'>
		<div>
			<p>copyright &copy; 2022-23</p>
		</div>
	</div>
</body>
<script src='java.js'></script>
</html>
