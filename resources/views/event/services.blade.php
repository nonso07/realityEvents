<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title> ChimexReality Event Planner</title>
<!-- meta tags -->
@include('include.nav')
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner">
		<div class="container">
			<script src="js/responsiveslides.min.js"></script>
			<script>
			// You can also use "$(window).load(function() {"
			$(function () {
				// Slideshow 4
				$("#slider3").responsiveSlides({
					auto: true,
					pager: true,
					nav: false,
					speed: 500,
					namespace: "callbacks",
					before: function () {
						$('.events').append("<li>before event fired.</li>");
					},
					after: function () {
						$('.events').append("<li>after event fired.</li>");
					}
				});
			});
			</script>
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-agileinfo">
							<h3>WELCOME</h3>
							<h4>Event planning & wedding coordination</h4> 
						</div>
					</li>
					<li>
						<div class="banner-agileinfo">
							<h3>WELCOME</h3>
							<h4>Fallow new ideas for your wedding</h4>							
						</div>
					</li>
					<li>
						<div class="banner-agileinfo">
							<h3>WELCOME</h3>
							<h4>We help you plan your special day</h4>								
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner -->
	
	<!-- about -->
	<div id="about" class="about">
		<div class="container">
			<h3 class="w3ls-tittle"> Services</h3>
			<!--<h5>Nam libero tempore, cum soluta nobis est eligendi optio cumque 
				nihil impedit quo minus id quod maxime placeat facere possimus, 
				omnis voluptas assumenda est, omnis dolor repellendus. Temporibus 
				autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe. 
				Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
				impedit quo minus id quod maxime placeat facere.</h5>-->
			<div class="about-grids">
				<div class="col-md-5 abt-left">
					<img src="images/logo.jpg" alt="" />
				</div>
				<div class="col-md-7 abt-right">
					<h4> ChimexReality Events</h4>
					<p> We are kin to bring your dream event to reality with our first class teams. 
						Give us your special day and we will beat your imagination. we work with 
						professionals in the following event area:
						 
						.</p>
					<p> <ul>
					        <li class="dropdown">
  <button class="dropbtn"><strong> Decorations for</strong></button>
  <div class="dropdown-content">
    <a href="#">Traditional Marriage</a>
    <a href="#">White Wedding </a>
    <a href="#">Lying in state</a>
  </div>
</li>			</br>		        
				        <li class="dropdown">
  <button class="dropbtn"><strong> Cake for</strong></button>
  <div class="dropdown-content">
    <a href="#">Traditional Marriage</a>
    <a href="#">White Wedding </a>
    <a href="#">Birthday </a>
	<a href="#">Anniversary </a>
  </div>
</li>
					       <li><strong> bakery</strong></li>
					       <li><strong>HighLife Band/ Gosple band</strong></li>
					       <li><strong>Traditional music</strong></li>
                           <li><strong>Cultural dance group</strong></li>
                           <li><strong> D.J</strong></li>
                           <li><strong>Media Covrage</strong></li>
                           <li><strong>Event lighting system engineers</strong></li>
                           <li><strong>Catering Services</strong></li>
                           <li><strong>Makeover</strong></li>
                           <li><strong> Rentals</strong></li>
                           <li><strong>Brass Band Entertainment</strong></li>
                           <li><strong>pallbearers and band troop( undertakers)</strong></li>
                           <li><strong>Ambulance services of all kind</strong></li>
                           <li><strong>And lost more.....</strong></li>

					        
					          </ul>  
			
                           </p>
				
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //about -->
	
	<!-- services -->
	<div id="services" class="services">
		<div class="container">
			<h2 class="w3ls-tittle">We Give You</h2>
			<div class="services-grids w3layouts-grids">
				<div class="col-md-6 services-left">
					<div class="serw3agile-grid">	
						<span class="hi-icon hi-icon-archive glyphicon glyphicon-check"> </span>
					</div>
					<div  class="ser-agiletop">
						<h4>Best Quality</h4>
						<p>We give the best quality of all our services beacause we choose the best 
							 vendor of the needed services within our area.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-left">
					<div class="serw3agile-grid">	
						<span class="hi-icon hi-icon-archive glyphicon glyphicon-music"> </span>
					</div>
					<div  class="ser-agiletop">
						<h4>Rocking Music</h4>
						<p>You are sure of quality music from our musical entertainment vendors beacause 
							we have professional with degree in music in our managing board </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-left">
					<div class="serw3agile-grid">	
						<span class="hi-icon hi-icon-archive glyphicon glyphicon-picture"> </span>
					</div>
					<div  class="ser-agiletop">
						<h4>Amazing Media</h4>
						<p>Our media section management has recived credit for award winning feedback form 
							our client. </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!--======--
				<div class="col-md-6 services-left">
					<div class="serw3agile-grid">	
						<span class="hi-icon hi-icon-archive glyphicon glyphicon-picture"> </span>
					</div>
					<div  class="ser-agiletop">
						<h4>Amazing Media</h4>
						<p>Our media section management has recived credit for award winning feedback form 
							our client. </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				
				<div class="col-md-6 services-left">
					<div class="serw3agile-grid">	
						<span class="hi-icon hi-icon-archive glyphicon glyphicon-picture"> </span>
					</div>
					<div  class="ser-agiletop">
						<h4>Amazing Media</h4>
						<p>Our media section management has recived credit for award winning feedback form 
							our client. </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- =====-->
				<div class="col-md-6 services-left">
					<div class="serw3agile-grid">	
						<span class="hi-icon hi-icon-archive glyphicon glyphicon-heart-empty"> </span>
					</div>
					<div  class="ser-agiletop">
						<h4>Latest Collections</h4>
						<p> our vendors are uptodate and we review our standard to measure up with the 21 century 
						    event management services.
						    </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //services -->
	
	
	<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">
			<h3 class="w3ls-tittle">Contact</h3>
			<div class="contact-bottom w3-agileits">
				<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.39147015461!2d11.968411315519182!3d51.48768331996591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a66353e6e3b99d%3A0xd664817f7142f654!2sRadio+ Event Planner!5e0!3m2!1sen!2sin!4v1446724465130" ></iframe>-->
			</div> 
			<div class="col-md-7 contact-left">
				<h3>Contact Form</h3>
				<form action="#" method="post">
					<input type="text" name="Name" placeholder="Name" required="">
					<input type="text" name="Email" placeholder="Email" required="">
					<input type="text" name="Telephone" placeholder="Telephone" required="">
					<textarea name="Message" placeholder="Message" required=""></textarea>
					<input type="submit" value="Submit" >
				</form>
			</div>
			<div class="col-md-5 contact-left">
				<h3>Address</h3>
				<p> ChimexReality Event </p>
				<ul>
					<li>13 Onuiy Nsukka,</li>
					<li>Enugu State, Nigeria</li>
					<li>+234 0815 5915 854</li>
					<li>Phone : +234-703-1239-397</li>
					<li>Mail : <a href="mailto:info@example.com">info@ChimexReality.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //contact -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-left agileits-w3layouts">
				<p>&copy; 2017 Event Planner. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> HabaTech</a></p>
			</div> 
			<div class="footer-right">
				<ul>
					<li><a href="#" class="f1"></a></li>
					<li><a href="#" class="f2"></a></li>
					<li><a href="#" class="f3"></a></li>
					<li><a href="#" class="f4"></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //footer --> 
	@include('include.footer')
</body>
</html>
	