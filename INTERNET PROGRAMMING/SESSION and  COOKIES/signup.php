	<?php require 'includes/header.php';?>
	<?php
	$nameErr = $EmailErr = $pwdErr = "";
	if (isset($_POST['btn'])) {
		//Validation & Sanitization
		if ( isset($_POST['username'])){ 
			if (empty($_POST['username'])){
				$nameErr = 'Empty Field';
			}
			elseif (strlen($_POST['username']) < 3){
				$nameErr = 'Must Contain at least 4';
			}
			elseif (!preg_match('/^[a-zA-Z0-9]{3,10}\s{1}[a-zA-Z0-9]{3,10}$/',$_POST['username'])){
					$nameErr = 'Must contain space between first & last name';
			}
			else {
				$username = sanitize($_POST['username']);
			}
		}

		if ( isset($_POST['password'])){ 
			if (empty($_POST['password'])){
				$pwdErr = 'Empty Field';
			}
			elseif (strlen($_POST['password']) < 6){
				$pwdErr = 'Weak Password';
			}
			elseif (preg_match('/[@*\'\*#!+=%)()]/',$_POST['password'])){
					$pwdErr = 'Invalid Passsword';
			}
			else {
				$password = sanitize($_POST['password']);
			}
		}
		if ( isset($_POST['email'])){ 
			if(empty($_POST['email'])){
				$EmailErr = 'Empty Field';
			}
			elseif (!preg_match('/^[a-zA-Z0-9]{3,10}+@[a-z]{5,6}+.com$/',$_POST['email'])){
					$EmailErr = 'Invalid Email';
			}
			else {
				$email =sanitize($_POST['email']);
			}
		}
		if ($nameErr == "" && $EmailErr == "" && $pwdErr == "") {
		$con = connection();
		$uname = mysqli_real_escape_string($con , $username);
		$email = mysqli_real_escape_string($con , $email);
		$password = mysqli_real_escape_string($con , $password);
		$q = "SELECT * FROM user WHERE Username = '$uname' OR Email = '$email'";
		$run = mysqli_query($con , $q);
		$row = mysqli_num_rows($run);
		if($row >=1){
			echo "<div class='alert alert-danger'>
			<strong>User Already Exists</strong></div>";
		}
		else{
		$q1 = "INSERT INTO user (Username , Email , Password) VALUES ('$uname' , '$email' , '$password')";
		$run1 = mysqli_query($con , $q1);
		if ($run) {
			header('location: login.php');
		}
	}
	mysqli_close($con);
}
}	
		function sanitize($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>
	
	<div class="container" style="padding-top: 50px">
	
		<div class="col-md-5 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					<span class="text-danger">Registration Form</span>
				</div>
				<div class="panel-body">
		<form  method="POST" action="<?php echo $_SERVER['PHP_SELF'] ; ?>">
			<div class="input-group">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-user"></i>
				</span>
			<input type="text" name="username" class="form-control" placeholder="Username">				
			</div><br>
			<span><?php echo $nameErr; ?></span>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-envelope"></i>
				</span>
			<input type="email" name="email" class="form-control" placeholder="Email">				
			</div><br>
			<span><?php echo $EmailErr; ?></span>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-lock"></i>
				</span>
			<input type="password" name="password" class="form-control" placeholder="Password">				
			</div><br>
			<span><?php echo $pwdErr; ?></span><br>
			 <a href="login.php">Already Registred?</a><br>
			<center><button type="submit" class="btn btn-warning" name="btn">Signup</button></center>
		</form>
	</div>
	</div>
	</div>
		</div>

		<?php require 'includes/footer.php';?>
