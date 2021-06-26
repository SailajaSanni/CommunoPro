<?php
session_start();
/* code for clickong on home redorecting to login
if(!isset($_SESSION['uname']))
{
	header("location:har_signin.php");
	
	
	}
*/



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
	

.first-quote{
	
	font-size:50px;
	font-weight:700;
	font-style:italic;
}

label.radio {
    cursor: pointer
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none
}

label.radio span {
    padding: 4px 0px;
    border: 1px solid red;
    display: inline-block;
    color: red;
    width: 100px;
    text-align: center;
    border-radius: 3px;
    margin-top: 7px;
    text-transform: uppercase
}

label.radio input:checked+span {
    border-color: red;
    background-color: red;
    color: #fff
}

.ans {
    margin-left: 36px !important
}

.btn:focus {
    outline: 0 !important;
    box-shadow: none !important
}

.btn:active {
    outline: 0 !important;
    box-shadow: none !important
}



	
	<!-- Footer-->	
		.bgcontainer{
			background-color:;
			}
		
		.fa {
  padding: 10px;
  font-size: 25px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  background: #007bb5;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
}
.fa:hover {
    opacity: 0.7;
}
.fa-instagram {
  background: #DD2A7B;
  color: white;
}

    
    </style>

    <title>Communo-A Tool to Communicate</title>
  </head>
  <body class="bgcontainer">
	  
	   <!--Home Page -->
	  <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
		<img src="logo.jpg" alt="Logo" style="width:50px;height:50px; border-radius:25%;"> 
		&nbsp;&nbsp;
      <a class="navbar-brand" href="#"><u>COMMUNO</u></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#section3">Introduction</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#section4" >Activity</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#section5">Guidelines</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#section6">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#section7">Developers</a>
          </li>
         <!-- 
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
          -->
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        
        <!--Log Out -->
        
        <?php
        
        if(isset($_SESSION['uname']))
        {
        echo '<a class="nav-link" href="har_logout.php"><u><b>LOG OUT</b></u></a>';
        }
        ?>
        
        
      </div>
    </div>
  </nav>
</header>
	 
	  <!--
	  <div class="container fixed-top bg-dark navbar-expand-md container-fluid">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Login</button>
        <button type="button" class="btn btn-primary">Sign-up</button>
      </div>
    </header>
  </div>
    -->
    
    <!-- carousels starts here -->
    <div
      id="carouselExampleCaptions"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="https://source.unsplash.com/1400x600/?Students"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <!--<h2 class="text-primary"><b>Hello!!!</b></h2>-->
            <div class="first-quote ">
           The english language is a work in progress. Have fun with it.
		</div>

          </div>
        </div>
        <div class="carousel-item">
          <img
            src="https://source.unsplash.com/1400x600/?Meetings"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <div class="first-quote">
				
				
		       You keep move forward and Enjoy speaking...
		
            </div>
           
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="https://source.unsplash.com/1400x600/?Conferences"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <div class="first-quote">
            
            First learn the meaning of what you say and then speak.
            </div>
            
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    
    
    
    <!-- Intro section starts here -->
    
    <div class="px-4 py-5 my-5 text-center" id="section3">
      <img
        class="d-block mx-auto mb-4"
         src="logo.jpg" alt="Logo" style="width:100px;height:100px; border-radius:25%;"
        alt=""
        width="72"
        height="57"
      />
      <?php
        if(isset($_SESSION['uname']))
            echo  '<b><h2><u>Hello'.' '.$_SESSION['uname'].'!!!</u></h2></b>';
        else
            echo 'Hello User!!!';
      ?>
      <h1 class="display-5 fw-bold">Express Excite Expand with Communo…</h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">
         <h2><b>Is the desire to speak fluent english deep rooted in you?</b></h2>



	<br>Then you should know that it only happens when you <b> <i>Express</i>  </b>, <b> <i>Excite</i></b> and <b> <i>Expand </i></b>your limitations. 

	So start interacting with your peers and enhance your speaking skills by <br> joining in the below activities.

	<br><b>Don’t be late… | Sign Up | …</b>

        </p>
        
        <?php
        if(!isset($_SESSION['uname']))
        {
        echo '<form method="post" action="har_signin.php">
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <button type="submit" class="btn btn-primary btn-lg px-4 gap-3">
            Sign In
          </button>
          
           </form>
           
           <form method="post" action="har_signup.php">
          <button type="submit" class=" btn btn-outline-secondary btn-lg px-4">
            Sign Up
          </button>
          </form>';
        }
          ?>
          
        </div>
      </div>
    </div>
    
    
      <!-- Activities section starts from here -->
      
    <div class="container py-3 " id="section4">
      <main>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3 bg-primary">
                <h4 class="my-0 fw-normal">Group Discussion!!!</h4>
              </div>
              <div class="card-body bg-dark">
                
                <img src="gd-guide.jpg" alt="Avatar" style="width:300px;height:300px; border-radius:25%;  padding:10px;">
                
                
                
                <form method="post" action="gd_clicks.php" target="_blank">
					
					<?php
							

								if(isset($_SESSION['uname'])){
									echo "<button type='submit' class='w-100 text-white btn btn-lg btn-primary' name='click1'> Join Now </button>";
								}
								
								else{
									echo "<a href='har_signin.php' class='w-100 text-white btn btn-lg btn-primary'>Join Now</a>";
								}
							?>
							
					
					
					
							
					
					<!--<button
					  type="submit"
					  class="w-100 text-white btn btn-lg  bg-primary"
					  name="click1"
					  
                     >
                
						Join now
						
					</button>
                -->
				</form>
                
              </div>
            </div>
          </div>
          
          
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3 bg-primary">
                <h4 class="my-0 fw-normal">Debate!!!</h4>
              </div>
              <div class="card-body bg-dark">
                
               
                <img src="guide-debate.jpg" alt="Avatar" style="width:300px;height:300px; border-radius:25%;  padding:10px;">
               
                <!--
                  <img  src="https://source.unsplash.com/user/erondu/250x250">
                  -->
                  
                  
			  			<form method="post" action="debate_clicks.php" target="_blank">
							
							<?php
							

								if(isset($_SESSION['uname'])){
									echo "<button type='submit' class='w-100 text-white btn btn-lg btn-primary' name='click1'> Join Now </button>";
								}
								
								else{
									echo "<a href='har_signin.php' class='w-100 text-white btn btn-lg btn-primary'>Join Now</a>";
								}
							?>
							
								
							 
							  
							
							
						</form>
              
              </div>
              
              
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div
                class="card-header py-3 bg-primary "
              >
                <h4 class="my-0 fw-normal">Just A Minute!!!</h4>
              </div>
              
             
             
              <div class="card-body bg-dark">
                

      <img src="guide-jam.jpg" alt="Avatar" style="width:300px;height:300px; border-radius:25%; padding:10px;">
          
                <!--
                  <img  src="https://source.unsplash.com/user/erondu/250x250">
                  -->
                   
                   			<form method="post" action="jam_clicks.php" target="_blank">

								<?php
							

								if(isset($_SESSION['uname'])){
									echo "<button type='submit' class='w-100 text-white btn btn-lg btn-primary' name='click1'> Join Now </button>";
								}
								
								else{
									echo "<a href='har_signin.php' class='w-100 text-white btn btn-lg btn-primary'>Join Now</a>";
								}
							?>
								
								<!--<button type="submit" class="w-100 text-white btn btn-lg btn-primary" name="click2">
									
								  Join now
								  
								</button>
								
								-->
							</form>
							
              </div>
            </div>
          </div>
        </div>
        
        
        
        
        
    





        
    
    <!-- Guidelines section -->
   
  
 

  <div class="container col-xxl-8 px-4 py-5" id="section5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="gd-guide.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" width="800" height="533">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">What is Group Discussion?</h1>
        <p class="lead">  Group Discussion or GD is a type of discussion that involves people sharing ideas or activities.
         It is being organized to see and evaluate your thinking skills, listening abilities and how you are communicating your thoughts.
         
         <br>
         
         
         <b>Short Details....</b>
       
       <div class="d-flex flex-row">
	<ul type="none">
		   
		   
	<li><b>Your Team size:</b> 4 </li>
	<li><b>Topic:</b> Choose the given topic or Select on your own </li>
	<li><b>Language:</b> English</li>
	<li><b>Time:</b> 10 minutes at least</li>
	<li><b>Meeting Goals:</b> Coordination, Time management, Being Interactive and Being productive</li>
	</ul>
	</div>
	
	Refer Do’s and Don’ts of GD 
	
	<a href="https://www.shiksha.com/articles/do-s-don-ts-of-group-discussion-blogId-5293" target="_blank">Here</a> <br><br>
	<h4>All the best!!!</h4>

         
         
 </p>
       
       <!--
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
        -->
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>
  
  
  
  
  
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">What is Debate?</h1>
        <p class="lead">
			A formal discussion on a particular matter in a public meeting or legislative assembly, in which opposing arguments are put forward and which usually ends with a positive note. 
 It is being organized to help students understand essential critical-thinking and presentation skills. debates can nurture rational thinking, citizenship, manners, organization of thoughts, persuasion and public speaking.

        <br>
         
         
         <b>Short Details....</b>
       
       <div class="d-flex flex-row">
	<ul type="none">
		   
		  <li><b>Total Members:</b>4</li>
	<li><b>Your Team size:</b> 2 (Divide on your Own) </li>
	<li><b>Topic:</b> Choose the given topic or Select on your own </li>
	<li><b>Language:</b> English</li>
	<li><b>Time:</b> 10 minutes at least</li>
	<li><b>Meeting Goals:</b> Find a way to solve an issue, Habit of saying ‘NO’, Coordination, Time management, Being Interactive and Being productive</li>
	</ul>
	</div>
	
	Refer Do’s and Don’ts of Debate  
	
	<a href=" http://homepage.ntu.edu.tw/~karchung/debate1.htm " target="_blank">Here</a> <br><br>
	<h4>All the best!!!</h4>

        
        </p>
        
        <!--
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
        -->
      </div>
      
      <div class="col-10 col-sm-8 col-lg-6">
        <img src=" guide-debate.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" width="800" height="533">
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>
  
  

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="guide-jam.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" width="800" height="533">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">What is Just a Minute?</h1>
        <p class="lead"> Just a minute sessions are amazing for making you think on your feet.
The trick is simple...keep blabbering and connecting your words. Do
not think much let it flow the idea is not to have structure but a flow. Just keep talking about whatever comes to mind.
Lots of times in your life you will have to go on stage without preparation this helps in breaking that fear.


 <br>
         
         
         <b>Short Details....</b>
       
       <div class="d-flex flex-row">
	<ul type="none">
		   
		  
	<li><b>Your Team size:</b> 4 </li>
	<li><b>Topic:</b> Select on your own </li>
	<li><b>Language:</b> English</li>
	<li><b>Time:</b> 3 minutes at least (each)</li>
	<li><b>Meeting Goals:</b>Observing the way others speak, Being Interactive and Being productive</li>
	</ul>
	</div>
	
	Refer Do’s and Don’ts of JAM
	
	<a href=" https://www.stumagz.com/tips-and-tricks-to-clear-jam-in-the-interview-rounds-/ 
 " target="_blank">Here</a> <br><br>
	<h4>All the best!!!</h4>

  </p>
        
        <!--
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
        -->
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>
  
  
  
   <!-- faq section starts -->
    
    

    <div class="contaner" id="section6">
      <h1 class="d-flex justify-content-center">FAQ</h1>
      <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button
              class="accordion-button bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseOne"
              aria-expanded="true"
              aria-controls="panelsStayOpen-collapseOne"
            >
              What is this platform for?
            </button>
          </h2>
          <div
            id="panelsStayOpen-collapseOne"
            class="accordion-collapse collapse show"
            aria-labelledby="panelsStayOpen-headingOne"
          >
            <div class="accordion-body">
              This platform is essentially for making the students to break the glossophobia out of inferiority complex and let them speak fluent english louder than a lion with utmost confidence and clarity of thought to pursue their dreams.

            </div>
          </div>
        </div>
        
        
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button
              class="accordion-button collapsed bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseTwo"
              aria-expanded="false"
              aria-controls="panelsStayOpen-collapseTwo"
            >
           What kind of environment should I have before joining?
            </button>
          </h2>
          <div
            id="panelsStayOpen-collapseTwo"
            class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingTwo"
          >
            <div class="accordion-body">
              It’s crucial to have a stable internet connection, headphones and be a noiseless place before you  join in the activities. Make sure your peers don't hesitate with your environment.

            </div>
          </div>
        </div>
        
        
        
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button
              class="accordion-button collapsed bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseThree"
              aria-expanded="false"
              aria-controls="panelsStayOpen-collapseThree"
            >
              Do I need to be fluent enough to join in the activities?
            </button>
          </h2>
          <div
            id="panelsStayOpen-collapseThree"
            class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingThree"
          >
            <div class="accordion-body">
				Not at all. Moreover It is for enhancing your fluency and making sure it’s possible only if you start expressing yourself with your peers by joining in the activities everyday. 

      
            </div>
          </div>
        </div>
        
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingFour">
            <button
              class="accordion-button collapsed bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseFour"
              aria-expanded="false"
              aria-controls="panelsStayOpen-collapseFour"
            >
              How can I join?
            </button>
          </h2>
          <div
            id="panelsStayOpen-collapseFour"
            class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingFour"
          >
            <div class="accordion-body">
               <ul >
        
       
              <li>Get registered yourself first </li>
			<li>Choose any one of the activities that you are interested in</li>
		<li>Check out the topic provided</li>
		<li>Click on Join and wait for your team members</li>
		 </ul>
            </div>
          </div>
        </div>
        
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingFive">
            <button
              class="accordion-button collapsed bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseFive"
              aria-expanded="false"
              aria-controls="panelsStayOpen-collapseFive"
            >
              Where are my team members?
            </button>
          </h2>
          <div
            id="panelsStayOpen-collapseFive"
            class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingFive"
          >
            <div class="accordion-body">
              Team members will be allocated based on their order of joining. So, you no need to worry about your team members, If they are online they will join soon in your meeting. 
            </div>
          </div>
        </div>
        
        
        
         <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingSix">
            <button
              class="accordion-button collapsed bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseSix"
              aria-expanded="false"
              aria-controls="panelsStayOpen-collapseSix"
            >
             Do I need to know anything about GDs, Debates and Jam sessions before joining?
            </button>
          </h2>
          <div
            id="panelsStayOpen-collapseSix"
            class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingSix"
          >
            <div class="accordion-body">
              Yes, It’s highly recommended to have a detailed view on what is what. So, better if you go through the references provided in the guidelines section.

            </div>
          </div>
        </div>
        
        
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
            <button
              class="accordion-button collapsed bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseSeven"
              aria-expanded="false"
              aria-controls="panelsStayOpen-collapseSeven"
            >
			How many times can I participate in each activity in a day?

            </button>
          </h2>
          <div
            id="panelsStayOpen-collapseSeven"
            class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingSeven"
          >
            <div class="accordion-body">
              It’s up to your interest and enthusiasm. You can join and participate as many times as you want in a day. Make sure your day should be productive. 

            </div>
          </div>
        </div>
        
        
                
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingEight">
            <button
              class="accordion-button collapsed bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseEight"
              aria-expanded="false"
              aria-controls="panelsStayOpen-collapseEight"
            >
             What if I want to participate in all the activities at a time?
            </button>
          </h2>
          <div
            id="panelsStayOpen-collapseEight"
            class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingEight"
          >
            <div class="accordion-body">
              It’s ridiculous and you can't join concurrently in all the activities. Rather You can participate in each activity one by one.

            </div>
          </div>
        </div>
        
        
                 
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingNine">
            <button
              class="accordion-button collapsed bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseNine"
              aria-expanded="false"
              aria-controls="panelsStayOpen-collapseNine"
            >
			Who will judge my speaking skills?
            </button>
          </h2>
          <div
            id="panelsStayOpen-collapseNine"
            class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingNine"
          >
            <div class="accordion-body">
             Nobody.  You are the only fighter and judge for your speaking skills. Eventually it’s up to you and you can ask your team members to provide you with humble feedback. 

            </div>
          </div>
        </div>
        
        
        
           <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingTen">
            <button
              class="accordion-button collapsed bg-dark text-white"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#panelsStayOpen-collapseTen"
              aria-expanded="false"
              aria-controls="panelsStayOpen-collapseTen"
            >
              Where do I give feedback about my experience?

            </button>
          </h2>
          <div
            id="panelsStayOpen-collapseTen"
            class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingTen"
          >
            <div class="accordion-body">
              It is highly recommendable. You can give the feedback in the feedback section. It helps us to put some enlightenment on the platform for further assisting you.

            </div>
          </div>
        </div>
        
        
        
        
        
        
        
        
        
        
      </div>
    </div>
</div>   
    
<br>
<br>
<br>    
  
    

<!--

  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Vertically centered hero sign-up form</h1>
        <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
          <hr class="my-4">
          <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
        </form>
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">Border hero with cropped image and shadows</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Primary</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="bootstrap-docs.png" alt="" width="720">
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
      <h1 class="display-5 fw-bold text-white">Dark mode hero</h1>
      <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Custom button</button>
          <button type="button" class="btn btn-outline-light btn-lg px-4">Secondary</button>
        </div>
      </div>
    </div>
  </div>

  <div class="b-example-divider mb-0"></div>
</main>
-->









<!-- Developers section -->



<div class="container marketing" id="section7">

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h3 class="featurette-heading">Hello Speak!!! <!-- <span class="text-muted">It’ll blow your mind.</span> --></h3>
        <p class="lead">
      We believe that it really helps in enhancing your speaking skills. If you feel inferior to speak, then stop being negative and start your journey with a positive and confident note.

      <br><b>Have a great journey ahead!!!</b>
	<div class="d-flex flex-row justify-content-end">
	
	<ul type="none">
	<li>M.Naga Sudheer</li>
	<li>S160706</li>
	<li>Department of Computer Sciences</li>
	<li>RGUKT-Sklm.</li>
	</ul>
	
	</div>
	
</p>
      </div>
      <div class="col-md-5">
		  
       <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
        -->
          <img src="sudh.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" width="200" height="200">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h3 class="featurette-heading">Hello User!!! <!-- <span class="text-muted">See for yourself.</span>--></h3>
        <p class="lead">It’s difficult to face the public but make sure when you are good at something that you desire, All of them will go away.
         So start speaking and set a path to attain your goal. 

	<br><b>Have a great journey ahead!!!</b>
	<div class="d-flex flex-row justify-content-end">
	
	<ul type="none">
	<li>M.Mangamma</li>
	<li>S160019</li>
	<li>Department of Computer Sciences</li>
	<li>RGUKT-Sklm.</li>
	</ul>
	
	</div>

</p>
      </div>
      <div class="col-md-5 order-md-1">
		  
		  <!--
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
		-->
		   <img src="manga.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" width="200" height="200">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h3 class="featurette-heading">Hello Geek!!! <!-- <span class="text-muted">Checkmate.</span>--></h3>
        <p class="lead"> We are happy to have you here.  Build your professional career with the help of communo and be productive. Participate more and earn more. 

       <br><b>Have a great journey ahead!!!</b>
       
       <div class="d-flex flex-row justify-content-end">
	
	<ul type="none">
	<li>S.Sailaja</li>
	<li>S160236</li>
	<li>Department of Computer Sciences</li>
	<li>RGUKT-Sklm.</li>
	</ul>
	
	</div>
       
</p>
      </div>
      <div class="col-md-5">
		  
		  <!--
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
			-->
		<img src="sailu.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" width="200" height="200">

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div>
    
    
    
    </div>
    






<div class="b-example-divider"></div>



<div class="bg-dark text-secondary px-1 py-1 text-center">
    <footer class="pt-4 my-md-5 pt-md-5 border-top ">
        <div class="row">
          <div class="col-12 col-md">
            <img
              class="mb-2"
              src="logo.jpg"
              alt="logo"
              width="24"
              height="19"
            />
            <small class="d-block mb-3 text-muted">© 2021</small>
          </div>
          <div class="col-6 col-md">
            <h5>Quick Links</h5>
            <ul class="list-unstyled text-small">
              <li class="mb-1">
                <a class="link-secondary text-decoration-none" href="#section3"
                  >Introduction</a
                >
              </li>
              <li class="mb-1">
                <a class="link-secondary text-decoration-none" href="#section4"
                  >Activities</a
                >
              </li>
              <li class="mb-1">
                <a class="link-secondary text-decoration-none" href="#section5"
                  >Guidelines</a
                >
              </li>
              <li class="mb-1">
                <a class="link-secondary text-decoration-none" href="#section6"
                  >FAQ</a
                >
              </li>
              <li class="mb-1">
                <a class="link-secondary text-decoration-none" href="#section7"
                  >Developers</a
                >
              </li>
              
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
                
                 <li class="mb-1">
                <a class="link-secondary text-decoration-none" href="https://www.youtube.com/watch?v=EzGH3hZuJVk" target="_blank"
                  >Tell Me About Yourself</a
                >
              </li>
              <li class="mb-1">
                <a class="link-secondary text-decoration-none" href="https://www.youtube.com/watch?v=BguYUJ7cWrs" target="_blank"
                  >How to Prepare For Group Discussions</a
                >
              </li>
              <li class="mb-1">
                <a class="link-secondary text-decoration-none" href="https://www.youtube.com/watch?v=Ji46s5BHdr0" target="_blank"
                  > Interview Questions & Answers</a
                >
              </li>
             
              <li class="mb-1">
                <a class="link-secondary text-decoration-none" href="https://www.youtube.com/watch?v=BOvAAoxM4vg" target="_blank" 
                  > Last Minute Interview Tips and Tricks </a
                >
              </li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li class="mb-1">
                <a class="link-secondary text-decoration-none" href="#section7">Team</a>
              </li>
              <li class="mb-1">
                <a class="link-secondary text-decoration-none" href="#"
                  >Locations</a
                >
              </li>
              <li class="mb-1">
                <a class="link-secondary text-decoration-none" href="#"
                  >Privacy</a
                >
              </li>
              <li class="mb-1">
                <a class="link-secondary text-decoration-none" href="#"
                  >Terms</a
                >
              </li>
            </ul>
          </div>
        </div>
      </footer>
      
      
      <footer class="footer mt-auto py-3 bg-light">
      <div class="container">
        <span class="text-muted">Follow us on <a href="#" class="fa fa-linkedin"></a><a href="#" class="fa fa-facebook"></a> <a href="#" class="fa fa-instagram"></a></span>
      </div>
    </footer>
  </div>











    
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

      
   <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
    
    
    
    
    
  </body>
</html>
