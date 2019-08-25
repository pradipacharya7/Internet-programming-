<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sunway';

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
	die('Database connection error: '.myslqi_connect_error());
}
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$sql = "DELETE FROM records where id=$id";

	$query = mysqli_query($conn, $sql);
	if(!$query){
		die('Error:'. myslqi_error($conn));
	}
	header('Location: show.php');
}
?>