<?php
$servername = "localhost";
$username = "root";
$password = "shasisback";
$dbname="mydb";

        $_SESSION["password"]=$_POST['password'];
        $_SESSION["email"]=$_POST['email'];

/*        
$cost = 10;

// Create a random salt
$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');

// Prefix information about the hash so PHP knows how to verify it later.
// "$2a$" Means we're using the Blowfish algorithm. The following two digits are the cost parameter.
$salt = sprintf("$2a$%02d$", $cost) . $salt;

// Value:
// $2a$10$eImiTXuWVxfM37uY4JANjQ==

// Hash the password with the salt

$hash = crypt($password, $salt);

*/
$conn = mysqli_connect ($servername,$username,$password,$dbname);

$uid=uniqid();

$query="insert into devils (email,password,userid) values ('".$_POST['email']."','".$_POST['password']."','".$uid."');";
$result=$conn->query($query);


?>


~                                                                                                                                              
~               
