<?php
	session_start();
	include('server.php');

	//get the id of the note through Ajax
	$id=$_POST['id'];
	//run a query to delete the note
	$sql="DELETE from notes WHERE id='$id'";
	$result=mysqli_query($link, $sql);
	if(!$result) echo "error";
	echo $id;
?>
