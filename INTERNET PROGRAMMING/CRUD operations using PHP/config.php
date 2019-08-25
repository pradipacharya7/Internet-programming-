<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'test';

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
	die('Database connection error: '.myslqi_connect_error());
}


?>