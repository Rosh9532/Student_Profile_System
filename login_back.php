<?php
    session_start();
   include('./conn.php');
 
    if(isset($_POST['submit'])){
	 $name=$_POST['username'];
	 $password=$_POST['password'];
	 $query1="SELECT * FROM `user` WHERE `Username`='$name'";
	 $res1=mysqli_query($conn,$query1);
	 echo"$name";
	 if(mysqli_num_rows($res1)){
		 $data=mysqli_fetch_assoc($res1);
		 if(strcmp($data['password'],$password)==0){
			 $_SESSION['Username']=$data['Username'];
			 $_SESSION['email']=$data['email'];
			 $_SESSION['Phone_no']=$data['Phone_no'];
			 echo("<script> window.location='homepage.php'</script>");
		 }else{
		 
			 echo("<script>alert('Password not found .Please LOGIN')</script>");
	         echo("<script> window.location='login.php'</script>");
			 
		 }
	 }else{
     
		 echo("<script>alert('Username not found .Please REGISTER')</script>");
	     echo("<script> window.location='Project.php'</script>");
		 
	 }	 
 }else{
 
	 echo("<script>alert('Do not  be oversmart')</script>");
	 echo("<script> window.location='HOME1.php'</script>");
 }
 
 
 
 ?>
  