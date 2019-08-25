<!DOCTYPE html>
<html>
<head>
<title>form</title>
<style type="text/css">
caption
{
border: solid black 1px; 
background: lightblue;
}

.table
{
/*margin-top: 10px;*/
margin-left: 400px;
background-color: lightgray;
padding: 40px;
}
.form
{
margin-top: 100px;
margin-left: 800px;
background: white;
}
input:hover
{
background-color: lightblue;
}
input:valid
{
background-color: lightgreen;
}
input:focus:invalid
{
border: dotted lightpink 2px;
background-color: red;
}
</style>
</head>
<body>
<table class="table" border="border" align="center" cellspacing="20" cellpadding="5">
<caption>Please fill up  the form</caption>
<div class="form">
<form  method="post" action="fileupload.php" enctype="multipart/form-data">
<tr><td align="left">Username:</td><td><input type="text" name="username" required minlength="3" maxlength="30" placeholder="username..."></td></tr>
<tr><td align="left">Password:</td><td><input type="Password" name="password" required minlength="3" maxlength="30" placeholder="password.."></td></tr>
<tr><td align="left">Email:</td><td><input type="email" name="email" required minlength="3" maxlength="30" placeholder="email..."></td></tr>

<tr><td align="left">Upload Image</td><td><input type="file" name="profile_pic" required="image" placeholder="image..."></td>
<tr><td>Gender</td><td><input type="radio" name="gender" value="male" checked>Male
<input type="radio" name="gender" value="female">Female</td></tr>
<tr><td>Country</td><td><select name="country" >
<option value="nepal"  >Nepal</option>
<option value="usa" selected>USA</option>
<option value="uk">UK</option>
</select></td></tr>
<tr><td>Date of Birth</td><td><input type="date" name="dob" min="2000-01-02" max="2020-12-31" value="2000-01-02"></td></tr>
<tr><td>Description</td><td><textarea name="description" placeholder="description..." required rows="10" cols="40" maxlength="250"></textarea></td></tr>
<tr><td><input type="submit" name="login"></td></tr>
</form>

</div>
</table>

</body>
</html>











		
	
