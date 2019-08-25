<?php include 'includes/header.php' ?>
<?php include 'config.php' ?>

<?php
$id=$_GET['id'];
$sql="SELECT * FROM students WHERE id='$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);


if(isset($_POST['submit'])){ 
  $id = $_POST['id'];
	$name =  $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$sql = "UPDATE students set name='$name', email='$email', address='$address' where id='$id'";


	$query = mysqli_query($conn, $sql);

	if(!$query){
		die('Error:'. mysqli_error($conn));
	}

	// echo '<br>Successfully data inserted.<br>';
  header('Location: show.php');
}
?>

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label class="control-label col-sm-2">Fullname (*):</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" placeholder="<?php echo $row['name'];?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Email (*):</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" placeholder="<?php echo $row['email'];?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Address (*):</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="address" placeholder="<?php echo $row['address'];?>">
    </div>
  </div>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name="submit" value="Submit">
</form>



<?php include 'includes/footer.php' ?>