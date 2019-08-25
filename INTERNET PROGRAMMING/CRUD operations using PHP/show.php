<?php include 'includes/header.php' ?>
<?php include 'config.php' ?>
<table class="table">
<thead>
	<th>ID</th>
	<th>NAME</th>
	<th>EMAIL</th>
	<th>ADDRESS</th>
	<th>Actions</th>
</thead>
<tbody>
	<?php 

	$sql = "SELECT * FROM students";

	$query = mysqli_query($conn, $sql);
	

	if(!$query){
		die('Error:'. myslqi_error($conn));
	}

	if(mysqli_num_rows($query)>0) {

		while($rows = mysqli_fetch_assoc($query)){
			echo '<tr>';
				echo '<td>'.$rows['id'].'</td>';
				echo '<td>'.$rows['name'].'</td>';
				echo '<td>'.$rows['email'].'</td>';
				echo '<td>'.$rows['address'].'</td>';
				echo '<td><a class="btn btn-danger btn-xs" href="delete.php?id='.$rows['id'].'">Delete</a> <a  class="btn btn-primary btn-xs" href="edit.php?id='.$rows['id'].'">Edit</a>';
			echo "</tr>";
		}
	}

	?>
</tbody>
</table>


<?php include 'includes/footer.php' ?>