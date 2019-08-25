<?php include 'includes/header.php' ?>
<?php include 'config.php' ?>

<?php 

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE FROM students where id=$id";

	$query = mysqli_query($conn, $sql);
	if(!$query){
		die('Error:'. myslqi_error($conn));
	}
	header('Location: show.php');
}
?>



<?php include 'includes/footer.php' ?>