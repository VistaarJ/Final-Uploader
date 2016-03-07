<?php

session_start();
$uname="root";
$host="localhost";
$pass="8787";
$db="mydb";

$conn=mysqli_connect($host,$uname,$pass,$db);

//Assuming the name of the file to be $tobedeleted
if(!isset($_GET['fname']))
die('Error!');
$filx = $_GET['fname'];
$tobedeleted = $filx;
$result = $conn->query("delete from files where filename='$tobedeleted'");

header('Location:delete.php');
?>			
