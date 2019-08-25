<?php

	if (isset($_GET['btn1'])) {
		setcookie('color','red',time()+60);
		header('location: cookie.php');
	}
	if (isset($_GET['btn2'])) {
		setcookie('color','green',time()+60);
		header('location: cookie.php');
	}
?>

	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body style="background-color: <?php if (isset($_COOKIE['color'])) {
		echo $_COOKIE['color'];
	}  ?>">
		<form method="" action="">
			<input type="submit" name="btn1" value="SETCOOKIE"><br>
			<input type="submit" name="btn2" value="DESTROYCOOKIE"><br>
		</form>
	</body>
	</html>