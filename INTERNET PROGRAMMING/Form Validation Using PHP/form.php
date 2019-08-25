<html>
   <head>
   	<title>Validation:PHP</title>
      <style>
        .form{
        	margin: auto;
        	padding: 50px;
        	border: solid black 5px;
        	width: 50%;
        }
      .error {
         	color: red;
         }
      </style>
   </head>
        <body>
      <?php
         // define variables and set to empty values
         $nameErr = $emailErr = $genderErr = $addressErr = "";
         $name = $email = $gender = $comment = $address = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }else {
               $name = test_input($_POST["name"]);
            }
            
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }else {
               $email = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed

               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
            
            if (empty($_POST["address"])) {
               $address = "";
            }else {
               $address = test_input($_POST["address"]);
            }
            
            if (empty($_POST["comment"])) {
               $comment = "";
            }else {
               $comment = test_input($_POST["comment"]);
            }
            
            if (empty($_POST["gender"])) {
               $genderErr = "Gender is required";
            }else {
               $gender = test_input($_POST["gender"]);
            }
         }
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
         
      ?>
      
     
      <form class='form' method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      
         <table style="border: solid black 2px; margin:auto; padding: 5px; width: 50%;" >
         	
         	<caption>	

         		<h2>Simple Form</h2>
               <p><span class = "error">* required field.</span></p>
     
     		</caption>

            <tr>
               <td>Name:</td>
               <td><input type = "text" name = "name">
                  <span class = "error">* <?php echo $nameErr;?></span>
               </td>
            </tr>
           
            <tr>
               <td>E-mail: </td>
               <td><input type = "text" name = "email">
                  <span class = "error">* <?php echo $emailErr;?></span>
               </td>
            </tr>
           
            <tr>
               <td>Address:</td>
               <td> <input type = "text" name = "address">
                  <span class = "error"><?php echo $addressErr;?></span>
               </td>
            </tr>
            
            <tr>
               <td>Message:</td>
               <td> <textarea name = "comment" rows = "5" cols = "40"></textarea></td>
            </tr>
            
            <tr>
               <td>Gender:</td>
               <td>
                  <input type = "radio" name = "gender" value = "female">Female
                  <input type = "radio" name = "gender" value = "male">Male
                  <span class = "error">* <?php echo $genderErr;?></span>
               </td>
            </tr>
				
            <td>
               <input type = "submit" name = "submit" value = "Submit"> 
            </td>
				
         </table>
			
      </form>
      
      <?php
         echo "<h2>Your given values are as:</h2>";
         echo $name;
         echo "<br>";
         
         echo $email;
         echo "<br>";
         
         echo $address;
         echo "<br>";
         
         echo $comment;
         echo "<br>";
         
         echo $gender;
      ?>
   
   </body>
</html>