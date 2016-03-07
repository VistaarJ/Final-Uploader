
<?php
session_start(); 
//print_r($_POST);

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["myfile"]["name"]);
$uploadOk = 1;
?>


<?php

$filedata = pathinfo($target_file);

?>


<?php

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
	//$var checks whether we have to compress or not 0-->compress, 1-->don't comrpess
	
    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], "./".$target_file)) {
        echo "The file ". basename( $_FILES["myfile"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }}
    

//adding information about the file in mysql table
$conn=mysqli_connect("localhost","root","8787","mydb");

$userid=$_SESSION['id']; 

$fid=uniqid();

//echo $fid,$filedata['filename'],$userid;

$a=$filedata['filename'];
$b=$filedata['extension'];

$query= "insert into files (fileid,filename,format,userid) values ('$fid','$a','$b','$userid');";


$query_run=$conn->query($query);


header('Location:upload_dashboard.php');
?>


<br><br>


