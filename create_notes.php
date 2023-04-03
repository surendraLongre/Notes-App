<?php
	session_start();
	include('server.php');

	//get user_id
	$user_id=$_SESSION['user_id'];
	//get the current time
	
	$time=time();
	//run a querty to create new ntoe
	$sql="INSERT into notes(user_id, notes, time)values('$user_id', '$note', '$time')";
	$result=mysqli_query($link, $sql);
	if(!$result) echo 'error';
	echo mysqli_insert_id($link);

	

?>
