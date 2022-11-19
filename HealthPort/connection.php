<?php 

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'echanneling';
	//$connection = mysqli_connect('dbserver','dbuser','dbpassword','dbname');
	$connection = mysqli_connect('localhost','root','','healthport');

	//checking the connection
	if (mysqli_connect_error()){
		die('Database Connection Failed' . mysqli_connect_error());
	}else {
		//echo 'Database connection sucessaful!';
	}


//date_default_timezone_set('Asia/Kolkata');

 ?>