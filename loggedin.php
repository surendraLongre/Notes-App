<?php
	session_start();
	if(!isset($_SESSION['user_id'])){
		header("location: index.php");
	};
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF=8'>
	<title>Create notes</title>
	<link rel="stylesheet" href="style.css">
	
</head>
<body>
	<nav>
		<div id="left">
			<div id="brand"><a href='loggedin.php'>Online Notes</a></div>
			<div><a href='index.php'>Home</a></div>
			<div><a href='help.php'>Help</a></div>
			<div><a href='contact_us.html'>Contact us</a></div>
		</div>
		

		<div id="right">
			<div><button><a href='index.php?logout=1'>Logout</a></button></div>
		</div>
		
	</nav>
	
	<div id='notes'>
		<div class='flex space-between margin5'>
			<button class='blue add-note text-white padding15 border10 border-transparent font120 pointer'>Add note</button>
			<button id='edit-btn' class='blue text-white padding15 border10 border-transparent font120 pointer'>Edit</button>
		</div>
		<div class='textarea hide width100'>
			<textarea placeholder='write your text' class='border-purple width100 sans-serif padding15' rows=10></textarea>
		</div>
		
		<div id='display-notes' class='flex column gap5 width100'>
				
		</div>
	</div>	

	<div id='footer'>
		<div>
			<p>copyright &copy; 2022-23</p>
		</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</body>
<script src='java.js'></script>
</html>
