<!doctype html>
<html>
<head>
 <title>Signup</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
.card-header{font-family: 'Patua One', cursive;
                background: #e43a15;  /* fallback for old browsers */
                 background: -webkit-linear-gradient(to right, #e65245, #e43a15);  /* Chrome 10-25, Safari 5.1-6 */
                  background: linear-gradient(to right, #e65245, #e43a15); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                }
    .card:hover{
	       -webkit-box-shadow: 43px 34px 5px 0px rgba(0,0,0,0.75);
           -moz-box-shadow: 43px 34px 5px 0px rgba(0,0,0,0.75);
            box-shadow: 43px 34px 5px 0px rgba(0,0,0,0.75);
	     }	

</style>




</head>
<body>
<nav class="navbar navbar-light bg-light">
                <img src="logo.png" width="200" height="80" class="d-inline-block align-top" alt="">
                
                <div class="d-flex justify-content-end">


                    <a href="HOME1.php" class="btn btn-outline-danger" style="margin-right:40px; border:0px;">HOME</a>
                    <a href="Project.php" class="btn btn-outline-danger" style="margin-right:40px; border:0px;">SIGN UP </a>
                    <a href="aboutus.php"class="btn btn-outline-danger" style="border:0px;">CONTACT US</a>

                </div>
</nav>

<div class="row">
   <div class="col-3">
   
   </div>
   <div class="col-6">
   <div class="card text-center"style="margin-top:40px;">
  <div class="card-header">
     <B style font= 30px>SIGN UP</B>
  </div>
  <div class="card-body">
  <form method="POST" action="signup_backend.php">
  <input type="text" class="form-control"placeholder="Enter Username" name="Username">
  <br>
   <input type="tel" class="form-control"placeholder="Enter Contact number" name="Contact">
  <br>
   <input type="email" class="form-control"placeholder="Enter email" name="Email">
  <br>
   <input type="password" class="form-control"placeholder="Enter Password" name="Password">
  <br>
   <button type="submit" name="submit"class="btn btn-primary btn-lg btn-block">SIGN UP</button>
  
  
  </form>
    
    
  </div>
  <div class="card-footer text-muted">
    <a href="login.php"style="text decoration:none">Already have an account?Login in</a>
	
  </div>
</div>
   
   



    </div>
    <div class="col-3">
	
	</div>
</div>
</body<>
</html>
