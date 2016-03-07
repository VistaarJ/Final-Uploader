<?php

 
echo "</br>";

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["myfile"]["name"]);
$uploadOk = 1;



$filedata = pathinfo($target_file);

print_r($filedata);

echo "<br>";


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

//connect to database
$db_user="root";
$host="localhost";
$pass="Smdnerdscape";
$db="Files";

if($conn=mysql_connect($host,$db_user,$pass,$db))
	echo "connected";
else
	echo "not connected";

$fid=uniqid();

$file_name=$filedata['filename'];
//$file_extension=$filedata['extension'];

$query= "insert into files (id,name,userid) values ('$fid','$file_name',NULL);";


$query_run=$conn->query($query);


?>