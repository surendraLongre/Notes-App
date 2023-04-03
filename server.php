<?php
session_start();
//connect to the database
$host='localhost';
$username='root';
$password='';
$dbname='Notes App';
$link=mysqli_connect($host, $username, $password, $dbname) or die('unable to connect'.mysqli_connect_error());
/*
$sql="SELECT * FROM users";
$result=mysqli_query($link, $sql);
if($result) echo "success";
else echo "failed";
 */
/*
$email='21b030036@iitb.ac.in';
$sql="INSERT INTO users(username, email, password)values('Surendra Longre','$email','123')";
$result=mysqli_query($link, $sql);
if($result) echo "Inserted successfully";
else echo "failed";
 */
?>
