<!doctype html>
<html>
<head>
 <title>Signup</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
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
<img src ="logo.png" width="200"height="80"alt="">
  <div class="d-flex justify-content-right">
  <a href="HOME1.php" class="btn btn-outline-danger" style="margin-right:40px;border:0px;">HOME</a>
  <a href="login.php" class="btn btn-outline-danger" style="margin-right:40px;border:0px;">LOGIN</a>
  <a href="aboutus.php" class="btn btn-outline-danger" style="margin-right:40px;border:0px;">CONTACT US</a>


   </div>
</nav>
<div class="row">

        <div class="col-5">
            <!-- blank column of 5 units -->
            <img src="authentication.svg" style="margin-left:50px;" width="450" height="500"></img>
        </div>

        <div class="col-6">

            <div class="card text-center" style="margin-top:60px;">
                        <div class="card-header" >
                            LOG IN 
                        </div>
                        
                        <div class="card-body">
                                <form method="POST" action="login_back.php">
                                            <br>
                                            <input type="text" class="form-control" placeholder="Enter Username" name="username" required>
                                            <br>
                                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                                            <br>
                                            <br>
                                            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">SUBMIT</button>
                                </form>
                        </div>
                    
                    <div class="card-footer text-muted">
                        <a href="Project.php" style="text-decoration: none;">New here? Register</a>
                    </div>
            </div>

        </div>
        
        <div class="col-1">
            <!-- blank column of 1 units -->
        </div>
</div>

  
</body>
</html>  