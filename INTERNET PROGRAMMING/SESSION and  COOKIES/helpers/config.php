<?php
function connection(){
	$con = mysqli_connect('localhost','root','','MyDB');
	return $con;
}
?>