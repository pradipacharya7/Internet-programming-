<?php

// print_r($_POST);
// exit();
    if(isset($_POST["login"]))
    {
    $username=$_POST['username'];
	$email=$_POST['email']; 
	echo $username.'<br>';
	echo $email.'<br>';
	$img= 'uploads/'.$_FILES['profile_pic']['name'];
	echo $_FILES['profile_pic']['name'].'<br>';
	echo $_POST['gender'].'<br>';
	echo $_POST['country'].'<br>';
	echo $_POST['description'].'<br>';
	

			if(!empty($_FILES['profile_pic']))
			{
			    $path = "uploads/";
			    $path = $path . basename( $_FILES['profile_pic']['name']);

				    if(move_uploaded_file($_FILES['profile_pic']['tmp_name'], $path)) 
				    	{
				      	echo "The file ".  basename( $_FILES['profile_pic']['name'])." has been uploaded";
				    	} 
			   		else  echo "There was an error uploading the file, please try again!";
			    	
			}

	echo'<img src='.$img.' height="200" width="150"/>';	
}

else echo "Sorry ;) <br>";


// if ($_SERVER["REQUEST_METHOD"] == "POST") {  
//   $name = test_input($_POST["name"]);
//   $email = test_input($_POST["email"]);
//   }


?>