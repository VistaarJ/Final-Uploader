<?php
session_start();
$uname="root";
$host="localhost";
$pass="shasisback";
$db="mydb";

$conn=mysqli_connect($host,$uname,$pass,$db);

if(isset($_POST['email'])&&isset($_POST['password']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	if(!empty($email)&&!empty($password))
	{
		//Check whether the given email and password exist in the directory
		$query = "SELECT * FROM devils WHERE email='$email' AND Password='$password'";
		$query_run=$conn->query($query);
	//echo $query_run;	
		if(!$query_run)
			echo 'The query is invalid!' . ' ' . mysql_error() . ' ' . $query;
		else{
		$query_rows = $query_run->num_rows;
		if($query_rows==0)
			echo 'The email/password combination is invaid!';
		else
		{
			$user_id =$conn->query("select userid from devils where email='$email' and password='$password'");
			$user_id=mysqli_fetch_assoc($user_id);
			$id = $user_id['userid'];

 //gives the 0th row of the 1-row query run and gives column corressponding to id
            //Now we have the user id of the person to use for log-in sessions
         	 $_SESSION['email']=$email;
		   	 $_SESSION['password']=$password;
			 $_SESSION['id']=$id;
		
		header('Location: handleupload.php');
		}}
	}
	else
		echo 'Please enter both the email and password!';
}

        

?>

</fieldset>
</div>
