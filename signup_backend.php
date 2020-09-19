<?php
 include('./conn.php');
 if(isset($_POST['submit'])){
 $name=$_POST['Username'];
 $phone=$_POST['Contact'];
 $emailid=$_POST['Email'];
 $password=$_POST['Password'];
 $query1="INSERT INTO `user`(`Username`, `Phone_no`, `email`, `password`) VALUES ('$name','$phone','$emailid','$password')";
 $req1=mysqli_query($conn,$query1);
 echo("<script>alert('U Have Successfully Registered')</script>");
 echo("<script>window.location='login.php'</script>");
 }
 else{
	 echo'Do not be oversmart';
 }
?>