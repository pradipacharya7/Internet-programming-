<?php require 'helpers/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	
</head>
<body style="background-color: cyan">
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="index.php" class="navbar-brand">SD Site</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="active"><a href="index.php">Home</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Services</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		<?php

		if (isset($_SESSION['userinfo'])) 
			{ ?>
			
			<li><a href="dashboard.php">Dashboard</a></li>
			<li><a href="logout.php">Logout</a></li>
	
	<?php 	} else{ ?>
		
			<li><a href="signup.php">Sign up</a></li>
			<li><a href="login.php">Login</a></li>
		
	<?php	} ?>
	</ul>
	</div>
</nav>