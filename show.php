<?php

session_start();
$uname="root";
$host="localhost";
$pass="8787";
$db="mydb";

$conn=mysqli_connect($host,$uname,$pass,$db);
echo "Here are the contents of your account: " . "<br>" . "<br>";
$idtocheck = $_SESSION['id'];
$result = $conn->query("SELECT * FROM files WHERE userid='$idtocheck'");
$cnt=1;
	if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		echo $cnt.')'.$row['filename'];
		echo "<br>";
		$linkaddress="uploads/".$row['filename'].".".$row['format'];
		echo "<a href='$linkaddress'>File</a>";
		$cnt=$cnt+1;
	}
}
else
{
	echo '0 results!';
}


?>