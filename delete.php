<?php
session_start();
include('./conn.php');
$username=$_SESSION['Username'];
$query1="DELETE FROM `user` WHERE `Username`='$username'";
$res1=mysqli_query($conn,$query1);
session_destroy();
echo("<script>alert('PROFILE DELETED')</script>");
	echo("<script> window.location='HOME1.php'</script>");


?>