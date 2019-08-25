	<?php 	session_start(); 
	 require 'includes/header.php';
	?>
	<?php
	if (isset($_POST['btn'])) {
		$con = connection();
		$email = $_POST['email'];
		$password = $_POST['password'];
		$q = "SELECT * FROM user WHERE Email = '$email' AND Password = '$password'";
		$run = mysqli_query($con , $q);
		$row = mysqli_num_rows($run);
		if ($row == 1) {
			if (isset($_POST['checkbox'])) {

				setcookie('msg',$email,time()+3600,"/");
				setcookie('msg1',$password,time()+3600,"/");
			}else{
				if (isset($_COOKIE['msg'])) {
					setcookie('msg','',time()-10,"/");
					setcookie('msg1','',time()-10,"/");
				}
			}
			$result = mysqli_fetch_assoc($run);
			$_SESSION['userinfo'] = $result['Username'];
			header('location: dashboard.php');
		}
		else{
			echo "<div class='alert alert-danger'>
			<strong>Incorrect Username or Password :(</strong></div>";
		}
	}
	?>	
	<div class="container" style="padding-top: 50px">	
		<div class="col-md-5 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					<span class="text-danger">Login Form</span>
				</div>
				<div class="panel-body">
		<form  method="POST" action="<?php echo $_SERVER['PHP_SELF'] ; ?>">			
			<div class="input-group">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-envelope"></i>
				</span>
			<input type="email" name="email" class="form-control" value="<?php if(isset($_COOKIE['msg'])){echo $_COOKIE['msg'];} ?>" placeholder="Email">				
			</div><br>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-lock"></i>
				</span>
			<input type="password" name="password" class="form-control" value="<?php if(isset($_COOKIE['msg1'])){echo $_COOKIE['msg1'];} ?>" placeholder="Password">				
			</div><br>
			<div class="checkbox">
			<label><input type="checkbox" name="checkbox" value="checkbox" <?php if (isset($_COOKIE['msg'])){echo "checked";}
  							 ?>> Remember me</label> | <a href="signup.php">Not Registered Yet?</a>
  			</div><br>
			<center><button type="submit" class="btn btn-warning" name="btn">Login</button></center>
		</form>
	</div>
	</div>
	</div>
		</div>
		<?php require 'includes/footer.php';?>
