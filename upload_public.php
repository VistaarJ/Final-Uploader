<?php
session_start();
//connect to database
$db_user="root";
$host="localhost";
$pass="8787";
$db="mydb";

$conn=mysqli_connect($host,$db_user,$pass,$db);


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["myfile"]["name"]);
$uploadOk = 1;

$filedata = pathinfo($target_file);


// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], "./".$target_file)) {
        echo "The file ". basename( $_FILES["myfile"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$fid=uniqid();


//$file_extension=$filedata['extension'];
$a=$filedata['filename'];
$b=$filedata['extension'];
$qw=100;
$query="insert into files (fileid,filename,format,userid) values ('$fid','$a','$b','$qw');";;


$query_run=$conn->query($query);

header("Location:index.php");


?>