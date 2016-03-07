<?php

session_start();
$uname="root";
$host="localhost";
$pass="8787";
$db="mydb";

$conn=mysqli_connect($host,$uname,$pass,$db);

//Assuming name of the file to be searched is $tobesearched

$result = $conn->query("SELECT * FROM files WHERE filename='$tobesearched'");

if($result->num_rows>0)
{
	echo 'The file was found!' . "<br>";
	//Still have to show the details of the file and enable delete
}

else
{
	echo 'The file was not found!' . "<br>";
}

?>