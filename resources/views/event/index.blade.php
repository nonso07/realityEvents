
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>ChimexReality Event Planner </title>
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
			<h3 class="w3ls-tittle">About</h3>
			<h5>ChimexReality events is a combination of dedicated professionals 
						in event management that is willing to shade off the stress of planning in 
						your special day. We help you plan your events from the scratch. Hence
						 we also help you reduce cost and still give you the best. 
						</br> <b> You are too special to stress yourself in your special day. 
						our duty is to serve you</b> 
				</h5>
			<div class="about-grids">
				<div class="col-md-5 abt-left">
					<img src="images/logo.jpg" alt="" />
				</div>
				<div class="col-md-7 abt-right">
					<h4>How it works</h4>
					<p>. <h2>
						<ol>
						<li>First of all pick interest to partner with us and we are ready to serve you.</li>
						<li> Contact Us through any of our contacts to fix an appointment with you. 
						You can request for a call from us by sending us massage through our contact form.</li>
						<li> Book a date with us by telling us how you want your occasion to look.  </li>
						<li> After Booking and selection just go and rest. we are to give the best of your choices.</li>
						<ol>
					          </h2> </p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- services 
	<div id="services" class="services">
		<div class="container">
			<h2 class="w3ls-tittle">Services</h2>
			<div class="services-grids w3layouts-grids">
				<div class="col-md-6 services-left">
					<div class="serw3agile-grid">	
						<span class="hi-icon hi-icon-archive glyphicon glyphicon-check"> </span>
					</div>
					<div  class="ser-agiletop">
						<h4>Best Quality</h4>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
							It has roots in a piece of classical.Contrary to popular belief, Lorem Ipsum </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-left">
					<div class="serw3agile-grid">	
						<span class="hi-icon hi-icon-archive glyphicon glyphicon-music"> </span>
					</div>
					<div  class="ser-agiletop">
						<h4>Rocking Music</h4>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
							It has roots in a piece of classical.Contrary to popular belief, Lorem Ipsum </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-left">
					<div class="serw3agile-grid">	
						<span class="hi-icon hi-icon-archive glyphicon glyphicon-picture"> </span>
					</div>
					<div  class="ser-agiletop">
						<h4>Amazing Themes</h4>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
							It has roots in a piece of classical.Contrary to popular belief, Lorem Ipsum </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 services-left">
					<div class="serw3agile-grid">	
						<span class="hi-icon hi-icon-archive glyphicon glyphicon-heart-empty"> </span>
					</div>
					<div  class="ser-agiletop">
						<h4>Latest Collections</h4>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
							It has roots in a piece of classical.Contrary to popular belief, Lorem Ipsum </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- gallery 
	<div id="gallery" class="gallery">
		<div class="container">
			<h3 class="w3ls-tittle">Gallery</h3>
			<div class="gallery-wthreegrids">
				<!-- EIGHTH EXAMPLE --
				<div class="view view-eighth">
					<a href="images/g1.jpg" title="Image Title"><img src="images/g1.jpg" alt="" />
						<div class="w3lmask">
							<h4> Event Planner </h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales, leo vitae facilisis facilisis tristiq elit mauris posuere.</p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="images/g2.jpg" title="Image Title"><img src="images/g2.jpg" alt="" />
						<div class="w3lmask">
							<h4> Event Planner </h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales, leo vitae facilisis facilisis tristiq elit mauris posuere.</p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="images/g3.jpg" title="Image Title"><img src="images/g3.jpg" alt="" />
						<div class="w3lmask">
							<h4> Event Planner </h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales, leo vitae facilisis facilisis tristiq elit mauris posuere.</p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="images/g4.jpg" title="Image Title"><img src="images/g4.jpg" alt="" />
						<div class="w3lmask">
							<h4> Event Planner </h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales, leo vitae facilisis facilisis tristiq elit mauris posuere.</p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="images/g5.jpg" title="Image Title"><img src="images/g5.jpg" alt="" />
						<div class="w3lmask">
							<h4> Event Planner </h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales, leo vitae facilisis facilisis tristiq elit mauris posuere.</p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="images/g6.jpg" title="Image Title"><img src="images/g6.jpg" alt="" />
						<div class="w3lmask">
							<h4> Event Planner </h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales, leo vitae facilisis facilisis tristiq elit mauris posuere.</p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="images/g7.jpg" title="Image Title"><img src="images/g7.jpg" alt="" />
						<div class="w3lmask">
							<h4> Event Planner </h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales, leo vitae facilisis facilisis tristiq elit mauris posuere.</p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="images/g8.jpg" title="Image Title"><img src="images/g8.jpg" alt="" />
						<div class="w3lmask">
							<h4> Event Planner </h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales, leo vitae facilisis facilisis tristiq elit mauris posuere.</p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="images/g2.jpg" title="Image Title"><img src="images/g2.jpg" alt="" />
						<div class="w3lmask">
							<h4> Event Planner </h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sodales, leo vitae facilisis facilisis tristiq elit mauris posuere.</p>
						</div>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<script src="js/jquery.chocolat.js"></script> 
			<!-- light-box-files -->
			<script type="text/javascript">
			$(function() {
				$('.gallery a').Chocolat();
			});
			</script> 
		</div>
	</div>
	<!-- //gallery -->
	<!-- team --
	<div id="team" class="team">
		<div class="container">
			<h3 class="w3ls-tittle t-team">Our Team</h3>
			<ul class="ch-grid">
				<li>
					<div class="ch-item ch-img-1 agileits-w3layouts">				
						<div class="ch-info-wrap">
							<div class="ch-info">
								<div class="ch-info-front ch-img-1"></div>
								<div class="ch-info-back">
									<h4>Victoria</h4>
									<p><a href="#" class="f1"></a></p>
									<p><a href="#" class="f2"></a></p> 
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="ch-item ch-img-2 agileits-w3layouts">
						<div class="ch-info-wrap">
							<div class="ch-info">
								<div class="ch-info-front ch-img-2"></div>
								<div class="ch-info-back">
									<h4>William</h4>
									<p><a href="#" class="f1"></a></p>
									<p><a href="#" class="f2"></a></p>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="ch-item ch-img-3 agileits-w3layouts">
						<div class="ch-info-wrap">
							<div class="ch-info">
								<div class="ch-info-front ch-img-3"></div>
								<div class="ch-info-back">
									<h4>Thompson</h4>
									<p><a href="#" class="f1"></a></p>
									<p><a href="#" class="f2"></a></p>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="ch-item ch-img-4 agileits-w3layouts">
						<div class="ch-info-wrap">
							<div class="ch-info">
								<div class="ch-info-front ch-img-4"></div>
								<div class="ch-info-back">
									<h4>John Doe</h4>
									<p><a href="#" class="f1"></a></p>
									<p><a href="#" class="f2"></a></p>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- //team -->
	<!-- contact -->
	
	<?php 
	$_POST["email"]="" ;
if ($_POST["email"]<>'') { 
    $ToEmail = 'o.ugwuoke2891@gmail.com'; 
    $EmailSubject = 'Site contact form'; 
    $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Name: ".$_POST["name"].""; 
    $MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
    $MESSAGE_BODY .= "Phone: ".$_POST["Telephone"].""; 
    $MESSAGE_BODY .= "Comment: ".nl2br($_POST["comment"]).""; 
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
	
}
?> 
	<div class="contact" id="contact">
		<div class="container">
			<h3 class="w3ls-tittle">Contact</h3>
			<div class="contact-bottom w3-agileits">
			<!--	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.39147015461!2d11.968411315519182!3d51.48768331996591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a66353e6e3b99d%3A0xd664817f7142f654!2sRadio+ Event Planner!5e0!3m2!1sen!2sin!4v1446724465130" ></iframe>-->
			</div> <p></p>
			<div class="col-md-7 contact-left">
				<h3>Contact Form</h3>
				<form action="" method="post">
					<input type="text" name="Name" placeholder="Name" required="">
					<input type="text" name="email" placeholder="Email" required="">
					<input type="text" name="Telephone" placeholder="Telephone" required="">
					<textarea name="Comment" placeholder="Message" required=""></textarea>
					<input type="submit" value="Submit" >
				</form>
			</div>
			<div class="col-md-5 contact-left">
				<h3>Address</h3>
				<p> chimexRealityeality Event </p>
				<ul>
					<li> 13 Onyi Junction</li>
					<li>Nsukka,Enugu State , Nigeria</li>
					<li>Tel: +234 0815 5915 854</li>
					<li>Phone : +234-703-1239-397</li>
					<li>Mail : <a href="mailto:info@example.com">info@chimexReality.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>






        </div>
	</div>
	<!-- //contact -->
	<!-- footer -->
@include('include.footer')
</body>

</html>
