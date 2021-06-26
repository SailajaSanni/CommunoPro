<?php
session_start();
if(isset($_SESSION['uname']))
    echo '<script type="text/javascript">
	 window.location.replace("index.php");
    </script>';
?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
	

    
    </style>

    <title>Sign Up</title>
  </head>
  <body class="bgcontainer">
	  

<main>

  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
       
        <img src="signin_pic.png" style="width:450px; height:450px;">
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form method="post" action="har_backend.php" name="man" onsubmit="return validateform()" class="p-4 p-md-5 border rounded-3 bg-light">
			<h2>Hello Speak!!!</h2>
			
			<div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="name" required>
            <label for="floatingInput">Name</label>
          </div>
          	<div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="uname" required>
            <label for="floatingInput">Username ex:S160706</label>
          </div>
          
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="mail" required>
            <label for="floatingInput">Email: Sxxxxxx@rguktsklm.ac.in</label>
          </div>
          	<div class="form-floating mb-3">
            <input type="tel" class="form-control" id="floatingInput" placeholder="Mobile" pattern="^\d{10}$" name="mobile" required>
            <label for="floatingInput">Mobile</label>
          </div>
          
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="password" placeholder="Password" name="pass" onkeyup='check();' required>
            <label for="floatingPassword">Password</label>
          </div>
          
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="confirm_password" placeholder="Password" name="cpass" onkeyup='check();' required>
            <label for="floatingPassword">Confirm Password</label>
              <span id='message'></span>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          
          <button class="w-100 btn btn-lg btn-primary" type="submit" name="register">Sign Up</button>
          <hr class="my-4">
         <!-- <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>--->
         
           <div class="card-footer">
				<div class="d-flex justify-content-center links">
					Have an Account?<a href="har_signin.php"> &nbsp;&nbsp;Sign In </a>
				</div>
			
			</div>
         
        </form>
      </div>
    </div>
  </div>

 
</main>




<script>
    
     var check = function() {
      if (document.getElementById('password').value ==
          document.getElementById('confirm_password').value) {
          document.getElementById('message').style.color = 'green';
          document.getElementById('message').innerHTML = 'matching';
      } else {
      		document.getElementById('message').style.color = 'red';
          document.getElementById('message').innerHTML = 'not matching';
      }
  }
</script>








    
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

      
   <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
    
    
    
    
    
  </body>
</html>
