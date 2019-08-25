<?php
session_start();
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
	}
	if (isset($_GET['btn1'])) {
		$_SESSION['msg'] = "Session Is Set";
		header('location: session.php');
	}
	if (isset($_GET['btn2'])) {
		header('location: session.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="" action="">
		<input type="submit" name="btn1" value="SETSESSION"><br>
		<input type="submit" name="btn2" value="UNSETSESSION"><br>
	</form>
</body>
</html>