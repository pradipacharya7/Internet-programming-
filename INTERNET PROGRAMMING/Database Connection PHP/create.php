<?php
session_start();

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sunway';

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
	die('Database connection error: '.mysqli_connect_error());
}


if(isset($_POST['submit']))
{ 
	$name =  $_POST['name'];
	$email = $_POST['email'];
	
	$sql = "INSERT into records (name,email) VALUES('$name', '$email')";


	$query = mysqli_query($conn, $sql);
	if($query==true)
	{
	$_SESSION['message']='Data inserted.';
   }
	if(!$query)
	{
		$_SESSION['message']='Data not inserted.';
		die('Error:'. mysqli_error($conn));
	}

	// echo '<br>Successfully data inserted.<br>';
  header('Location: show.php');
}
?>