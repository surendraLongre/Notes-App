<?php
	session_start();
	include('server.php');

	//get the id of the note sent through Ajax
	$id=$_POST['id'];
	//get the content of the note
	$note=$_POST['note'];
	//get the time
	$time=time();
	//run a query to update the note
	$sql="UPDATE notes SET notes='$note', time='$time' WHERE id='$id'";
	$results=mysqli_query($link, $sql);
	if(!$results) echo 'error';
	echo $note;
?>
