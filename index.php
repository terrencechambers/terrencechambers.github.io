<!DOCTYPE html>
<html lang="en">
	<head>
		
		
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<title>TerrenceChambers.com</title>
		<meta name="description" content="Welcome to TerrenceChambers.com where you will learn about the work of Terrence Chambers." />

			
		
		<?php
			require('z-head.php');
		?>
		
		<style type="text/css">
		
			@media screen and (min-width: 768px) {
			  .equal, .equal > div[class*='col-'] {  
			      display: -webkit-box;
			      display: -moz-box;
			      display: -ms-flexbox;
			      display: -webkit-flex;
			      display: flex;
			      flex:1 1 auto;
			  }
			}

		</style>

	</head>
	<body>
		<header>
			<span id="nav">
				<?php
					require('z-top-nav.php');
				?>
			</span>
		
		</header>
	    	
		<main id="home">
			<div class="container">		
			  <span id="logo">
			  
			  </span>
			  
			  <?php
					require('z-header.php');
				?>
			  	
			  		<img src="images/terrence-2014-cir.png" alt="Terrence Chambers" width="315" height="322" class="img-responsive center-block" />
			  	
			    <h1 class="text-center">Terrence Chambers</h1>
			    <h2 class="text-center">Technical Analyst && Web Developer && Life Hacker
			    </h2>
			  
			 </div>
		</main>
		<section id="about">
			<div class="container">	 
			  
			  <h2 class="text-center">About Me</h2>
			  <div class="row equal">
				  <div class=" col-md-6">
				  	<div class="well blueText">
					  <p>I'm a Positive and Fun (and funny) Technical Analyst in the Kansas City area looking for a Technical Support role or Entry Level Web Developer role with a company that will allow me to grow into a web developer role.  I have experience at Desk-side and Helpdesk roles troubleshooting hardware and software issues on operating systems Windows XP, 7, and Mac OSX. I have used ticketing systems like HP Service Desk, Remedy, and proprietary systems.</p>
					  </div>
				  </div>
				  <div class=" col-md-6">
				  	<div class="well blueText">
					  <p>I've been doing Front End Web Development since 2008 working with HTML, CSS, some javascript and PHP.  I decided to grow my skills and started taking Web Development classes at Johnson County Community College in 2013 P/T and currently have a GPA of 3.0.</p>
					  
					  <p>I'm also learning Full Stack Development and Software Engineering (HTML, CSS, Bootstrap, javascript, jQuery) at FreeCodeCamp.com</p>
					  </div>
				  </div>
			  </div>
			</div>
		</section>
		<section id="portfolio">
			<div class="container">
				<h2 class="text-center">Portfolio & Projects</h2>
			  <div class="row equal">
			    <div class="col-md-4">
			    	<div class="thumbnail">
				      <h3>ADHDAwareness.com</h3>
				      <a href="http://www.adhdawareness.com/" target="_blank"><img class='img-responsive' src='images/adhdawareness-com.png'></a>
				      <p>
				        <a href="http://www.adhdawareness.com/" target="_blank">ADHDawareness.com</a>, my website, is dedicated to helping people with ADHD reduce their symptoms naturally. I have been working on this since 2006 and was my first website.
				      </p>
			      </div>
			    </div>
			    <div class="col-md-4">
			    	<div class="thumbnail">
				      <h3>Painless Cooking Store</h3>
				      <a href="images/painless-cooking-store.png" target="_blank"><img class='img-responsive' src='images/painless-cooking-thumb.jpg'></a>
				      <p>
				         I helped <a href="http://www.painlesscooking.com/" target="_blank">Painlesscooking.com</a> accomplish cohesive branding between their store and website. I also setup the digital download plugin, products, and configured all the settings.  I helped many clients with these types of projects on various stores and blogs like: Wordpress, Shopify, Blogger, and Cubecart.
				      </p>
				     </div>
			    </div>
			    <div class="col-md-4">
			    	<div class="thumbnail">
				      <h3>HealthStudio.com</h3>
				      <a href="http://www.healthstudio.com" target="_blank"><img class='img-responsive' src='images/healthstudio.png'></a>
				      <p>
				       <a href="http://www.healthstudio.com" target="_blank">HealthStudio.com</a> is a Wordpress site I designed for a friend and mentor after her last design was compromised by hackers.  I also cleaned up a lot of the injected code.  This is a site that I do ongoing work on.
				      </p>
				    </div>
			    </div>
			  </div> <!-- end row -->
			  <div class="row equal">
			  	<div class="col-md-4">
			  		<div class="thumbnail">
			  			<h3>Random Quote Machine</h3>
			  			<a href="random-quote-machine.html" title="Random Quote Machine">
			  				<img src="/images/random-quote-machine.png" title="Random Quote Machine Thumbnail" class='img-responsive' />
			  			</a>
			  			<p>I created the <a href="random-quote-machine.html" title="Random Quote Machine">Random Quote Machine</a> from an API using javascript and JSONP.  I also created the Tweet button using the Twitter Intent url to add the dynamic content to share. Also, if there are too many characters, the content is shortened.</p>
			  		</div>
			  	</div>
			  	<div class="col-md-4">
			  		<div class="thumbnail">
			  			<h3>Local Weather App</h3>
			  			<a href="local-weather.html" title="Local Weather App">
			  				<img src="/images/weather-app.png" title="Local Weather App" class="img-responsive" />
			  			</a>
			  			<p>I created this <a href="local-weather.html">Local Weather App</a> using javascript and an API from wunderground.com.  The API auto-detects the user's location and pulls the weather data in.  It defaults to the visitor's country's metric system with an option to change it with a click.  </p>
			  		</div>
			  	</div>
			  	<div class="col-md-4">
			  		<div class="thumbnail">
			  			<h3>Rock, Paper, Scissors Game</h3>
			  			
			  			<a href="rock-paper-scissors.html" title="Play rock, paper, scissors">
			  				<img src="images/rock-paper-scissors.png" title="Rock Paper Scissors Game image" class="img-responsive" />
			  			</a>
			  			<p>The <a href="rock-paper-scissors.html" title="Play rock, paper, scissors">Rock, Paper, Scissors Game</a> is the first game I created.  The computer's choice is random and the user makes their own choice each time.  It also keeps score to see who wins.</p>
			  		</div>
			  	</div>
			  </div><!-- end row -->
			  <div class="row equal">
			  	<div class="col-md-4">
			  		<div class="thumbnail">
			  			<h3>Pomodor Timer</h3>
			  			<a href="pomodoro-timer.html" title="Pomodoro Timer">
			  				<img src="/images/pomodoro-timer.png" title="Pomodoro Timer Thumbnail" class='img-responsive' />
			  			</a>
			  			<p>I created the <a href="pomodoro-timer.html" title="Pomodoro Timer">Pomodoro Timer</a> using the FlipClock.js script.  This timer counts down from the set time.  There is a visual and auditory notification (audio not working on mobile), then the break timer starts.  At the end of the break timer, there are the same notifications and the Session timer starts again.</p>
			  		</div>
			  	</div>
			  	<div class="col-md-4">
			  		<div class="thumbnail">
			  			<h3>Jquery Javascript Calculator</h3>
			  			<a href="javascript-calculator.html" title="jQuery Javascript Calculator">
			  				<img src="/images/javascript-jquery-calculator.jpg" title="jQuery Javascript Calculator Thumbnail" class='img-responsive' />
			  			</a>
			  			<p>
			  				I created a <a href="javascript-calculator.html" title="jQuery Javascript Calculator">calculator using jQuery and Javascript</a> The math operations can be chained together or a single operation can be performed.
			  			</p>
			  		</div>
			  	</div>
			  	<div class="col-md-4">
			  		<div >
			  		</div>
			  	</div>
			  </div><!-- end row -->
			</div> <!-- end container-->
		</section>
		<section id="education">
			<div class="container">
				<div class="row center-block text-center">
					
					<h2>Education</h2>					
					
					<div class="col-md-12 ">
						<p>Johnson County Community College - Web Development - Currently Attending - 22 credits earned</p>
						<p><a href="http://www.freecodecamp.com" title="FreeCodeCamp.com website" target="_blank">FreeCodeCamp.com</a> - Fullstack Web Development / Software Engineering - Currently Attending</p>
					</div>
				</div>
			</div>
		</section>
		<section id="contact">
			<div class="container">
				<h2 class='text-center'>Contact or Connect With Me</h2>
				<p class="text-center">Visit my pages below to view my work and history or to email me.</p>
			  <div class='row'>
			    
			      <div class='col-md-3'>
			        <button href="#email" class="btn btn-block btn-primary" type="button" data-toggle="collapse" data-target="#email" aria-expanded="false" aria-controls="email"><i class="fa fa-envelope-o"></i> Email</button>
			       	<div id="email" class="collapse">
			        	<p>Email: Terrence[at]TerrenceChambers[dot]com</p>
			        </div> 
			      </div>
			      <div class='col-md-3'>
			        <button class='btn btn-block btn-primary' onClick="window.open('https://www.linkedin.com/in/terrencechambers', '_blank');"><i class="fa fa-linkedin-square"></i> LinkedIn</button>
			      </div>
			      <div class='col-md-3'>
			        <button class='btn btn-block btn-primary' onClick="window.open('https://github.com/terrencechambers', '_blank');"><i class="fa fa-github"></i> GitHub</button>
			      </div>
			      <div class='col-md-3'>
			        <button class='btn btn-block btn-primary' onClick="window.open('http://www.freecodecamp.com/terrencechambers', '_blank');"><i class="fa fa-code"></i> Free Code Camp</button>
			      </div>
			   </div>
			  </div>
			</section>
			<footer class="footer">
			   	<div class="container">
			   		<span id="bottom">
			   		</span>
			   			
			   		<?php
						require('z-footer.php');
					?>
			   			
				</div>
		</footer>
  	
  	
  		<?php
			require('z-bot-body.php');
		?>
	</body>
</html>