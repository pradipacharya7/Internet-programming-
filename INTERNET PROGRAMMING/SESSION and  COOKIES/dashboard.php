<?php
session_start();
if (!isset($_SESSION['userinfo'])) {
	header('location: login.php');
}
require 'includes/header.php';
?>
	<div class="container">
			<h3><ul>
			Welcome ,<span style="color: tomato"><?php if (isset($_SESSION['userinfo'])) {
				echo $_SESSION['userinfo'];
			}  ?></span> :)
		</ul></h3>
	</div>
<?php require 'includes/footer.php';?>