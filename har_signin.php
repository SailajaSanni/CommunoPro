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
	
.quote{
	font-size:25px;
	}
    
    </style>

    <title>Sign In</title>
  </head>
  <body class="bgcontainer">
	  

<main>

  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <!--<h1 class="display-4 fw-bold lh-1 mb-3">Sign-in to Communo</h1>-->
       
       
       <!-- <p class="col-lg-10 fs-4 "> 
        <div class="quote">
       
        <ul type="none">
			
			<li> If you can't fly then run </li>
				<li>	If you can't run then walk</li>
					<li>If you cat walk then crawl</li>
				<li>	But whatever you do</li>
					<li>You keep move forward</li>
			
        </ul>
         </div>
        </p>
        -->
        <img src="signin_pic.png" style="width:450px; height:450px;">
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form method="post" action="har_signinbackend.php" class="p-4 p-md-5 border rounded-3 bg-light">
			<h2>Hello Speak!!!</h2>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="User name" name="uname" >
            <label for="floatingInput">User Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div><br>
          
          
         <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span><b class='text-danger'>$error</b></span>";
                    }
                ?>   
                <br>
          
          <!--<span id='message'></span>-->
          
          <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Sign in</button>
          <hr class="my-4">
          <!--<small class="text-muted">Did n't Sign up before... </small>-->
          
          
          <div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an Account?<a href="har_signup.php"> &nbsp;&nbsp;Sign Up </a>
				</div>
			
			
		<!--	<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
			
			</div>
			-->
			
			</div>
          
          
          
        </form>
      </div>
    </div>
  </div>

 
</main>













    
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

      
   <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
    
    
    
    
    
  </body>
</html>
<?php
    unset($_SESSION["error"]);
?>