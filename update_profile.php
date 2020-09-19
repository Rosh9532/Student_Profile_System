<?php
session_start();
include('./conn.php');
if(isset($_POST['submit'])){
	$email=$_POST['Email'];
	$password=$_POST['Password'];
	$phone=$_POST['Contact'];
	$username=$_SESSION['Username'];
	$query1="UPDATE `user` SET `Phone_no`='$phone',`email`='$email',`password`='$password' WHERE `Username`='$username'";
	$res1=mysqli_query($conn,$query1);
	$_SESSION['email']=$email;
	$_SESSION['Phone_no']=$phone;
	echo("<script>alert('PROFILE UPDATED')</script>");
	echo("<script> window.location='HOME1.php'</script>");
}   
 

?>