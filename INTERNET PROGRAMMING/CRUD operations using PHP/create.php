<?php include 'includes/header.php' ?>
<?php include 'config.php' ?>

<?php
if(isset($_POST['submit'])){ 
	$name =  $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$sql = "INSERT into students (name,email,address) VALUES('$name', '$email', '$address')";


	$query = mysqli_query($conn, $sql);

	if(!$query){
		die('Error:'. mysqli_error($conn));
	}

	// echo '<br>Successfully data inserted.<br>';
  header('Location: show.php');
}
?>
<div class="container">
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label class="control-label col-sm-2">Fullname (*):</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" placeholder="FUllname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Email (*):</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Address (*):</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="address" placeholder="Address">
    </div>
  </div>
  <input type="submit" name="submit" value="Submit">
</form>

</div>

<?php include 'includes/footer.php' ?>