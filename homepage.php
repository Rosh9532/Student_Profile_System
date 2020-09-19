<?php
   session_start();
  
 ?>
 
 <!DOCTYPE HTML>
 <html>
 <head>
 <title>Profile page</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.s/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
 <div class="jumbotron">
  <h1 class="display-4">Hello <?php echo($_SESSION['Username']);  ?></h1>
  <br>
  <p class="lead">Contact:<?php echo($_SESSION['Phone_no']);?></p>
  <hr class="my-4">
  <p> </p>
  <a class="btn btn-primary btn-lg" href="HOME1.php" role="button">See the home page</a>
</div>

<div class="row">
  <div class="col-1">
  
  </div>
  
  <div class="col-4">
      <div class="card text-center"style="margin-top:40px;">
         <div class="card-header">
         UPDATE PROFILE
         </div>
        <div class="card-body">
             <form method="POST" action="update_profile.php">
			 
	             <input type="tel" class="form-control"placeholder="Enter Contact number" name="Contact">
                <br>
				<br>
               <input type="email" class="form-control"placeholder="Enter email" name="Email">
                <br>
				<br>
               <input type="password" class="form-control"placeholder="Enter Password" name="Password">
                <br>
                <br>
				<button type="submit" name="submit"class="btn btn-primary btn-lg btn-block">UPDATE</button>

	         </form>  
        </div>
		
  
      </div>
  </div>
  <div class="col-3">
  <div class="card text-center">
  <div class="card-header">
    DELETE PROFILE
  </div>
  <div class="card-body">
    <h5 class="card-title">Don't want to be here anymore</h5>
	
    <p class="card-text">Press the button below</p>
	
    
	
	<p>Will Miss U </p>
  </div>
     <div class="card-footer text-muted">
        <button type="submit" name="submit"class="btn btn-primary btn-lg btn-block"><a href="delete.php">DELETE</a></button>
  </div>
  
  </div>
  
  </div>
  <div class="col-3">
     <div class="card text-center"style="margin-top:40px;">
  <div class="card-header">
    LOG OUT
  </div>
  <div class="card-body">
    <h5 class="card-title">Meet u in next session</h5>
	
    <p class="card-text">Press the button below</p>
	
   
	
	
  </div>
    <div class="card-footer text-muted">
        <button type="submit" name="submit"class="btn btn-primary btn-lg btn-block"><a href="log_out.php">LOG OUT</a></button>
  </div>
  
  </div>
  
  </div>
   <div class="col-1">
   
  </div>
  
  
</div>



 
 
 </body>
 </html>
 