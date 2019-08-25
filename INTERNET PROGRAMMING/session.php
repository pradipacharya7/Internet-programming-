<?php
// Start the session

session_start();

if (isset($_SESSION['count'])) {
	$_SESSION['count']+=1;

}
else {
	$_SESSION['count']=1;
}
$msg="you have visited this site". $_SESSION['count'] .' times';
// $msg.=' times';
?>
<!DOCTYPE html>
<html>
<body>

<?php

echo $msg;

session_destroy();

?>

</body>
</html>