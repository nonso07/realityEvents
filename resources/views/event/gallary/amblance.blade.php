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
							<h3>Amblance services</h3>
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
							<h3>Amblance services</h3>
							<h4>We help you plan your special day</h4>								
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner -->
	
	
	
	<!-- gallery -->
	<div id="gallery" class="gallery">
		<div class="container">
			<h3 class="w3ls-tittle">Gallery</h3>
			<div class="gallery-wthreegrids">
				<!-- EIGHTH EXAMPLE --
				<div class="view view-eighth">
					<a href="images/mg1.jpg" title="Image Title"><img src="images/mg1.jpg" alt="" />
						<div class="w3lmask">
							<h4>ChimexReality Event </h4>
							<p><b>Wedding Decoration</b></br> One of our classic decorations is your right to choices your own colour. </p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="images/mg4.jpg" title="Image Title"><img src="images/mg4.jpg" alt="" />
						<div class="w3lmask">
							<h4> ChimexReality Event </h4>
							<p><b>Wedding Decoration</b></br> Your Wish is our command so as to give the best.</p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="images/mg6.jpg" title="Image Title"><img src="images/mg6.jpg" alt="" />
						<div class="w3lmask">
							<h4> ChimexReality Event </h4>
							<p><b>Wedding Decoration</b></br> We customise Your dreams into reality. Our professional are at your services</p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="images/tg1.jpg" title="Image Title"><img src="images/tg1.jpg" alt="" />
						<div class="w3lmask">
							<h4> ChimexReality Event </h4>
							<p><b>Traditional Wedding Decoration</b></br> our professional gives natural african setiing.</p>
						</div>
					</a>
				</div>
				<!--addition of gallery--
				<div class="view view-eighth">
					<a href="images/tg2.jpg" title="Image Title"><img src="images/tg2.jpg" alt="" />
						<div class="w3lmask">
							<h4> ChimexReality Event </h4>
							<p><b>Traditional Wedding Decoration</b></br> Our professionals are at your services </p>
						</div>
					</a>
				</div>
				
				<div class="view view-eighth">
					<a href="images/tg3.jpg" title="Image Title"><img src="images/tg3.jpg" alt="" />
						<div class="w3lmask">
							<h4> ChimexReality Event </h4>
							<p><b>Traditional Wedding Decoration</b></br> We give you the beauty of our Green Land in Nigeria.</p>
						</div>
					</a>
				</div>
				
				<div class="view view-eighth">
					<a href="images/cg1.jpg" title="Image Title"><img src="images/cg1.jpg" alt="" />
						<div class="w3lmask">
							<h4> ChimexReality Event </h4>
							<p><b>Catring Services</b></br> We offer both local and continetal dishes for your geust.</p>
						</div>
					</a>
				</div>
				
				<div class="view view-eighth">
					<a href="images/cg2.jpg" title="Image Title"><img src="images/cg2.jpg" alt="" />
						<div class="w3lmask">
							<h4> ChimexReality Event </h4>
							<p><b>Catring Services</b></br>Your satisfaction is our watch word.</p>
						</div>
					</a>
				</div>
				
				<div class="view view-eighth">
					<a href="images/cg3.jpg" title="Image Title"><img src="images/cg3.jpg" alt="" />
						<div class="w3lmask">
							<h4> ChimexReality Event </h4>
							<p><b>Catring Services</b></br>Check out our unreasistable roasted meat.</p>
						</div>
					</a>
				</div>
				
				<div class="view view-eighth">
					<a href="images/cg4.jpg" title="Image Title"><img src="images/cg4.jpg" alt="" />
						<div class="w3lmask">
							<h4> ChimexReality Event </h4>
							<p><b>Catring Services</b></br> Our continetal dishes are upto standard.</p>
						</div>
					</a>
				</div>
				
				<div class="view view-eighth">
					<a href="images/ug1.jpg" title="Image Title"><img src="images/ug1.jpg" alt="" />
						<div class="w3lmask">
							<h4> ChimexReality Event </h4>
							<p><b>Ushering Services</b></br> Graceing your ocassion with smart ushers.</p>
						</div>
					</a>
				</div>
				
				<div class="view view-eighth">
					<a href="images/ug2.jpg" title="Image Title"><img src="images/ug2.jpg" alt="" />
						<div class="w3lmask">
							<h4> ChimexReality Event </h4>
							<p><b>Ushering Services</b></br> Our ushers are well cultured with good manners.</p>
						</div>
					</a>
				</div>
				
				<div class="view view-eighth">
					<a href="images/lg1.jpg" title="Image Title"><img src="images/lg1.jpg" alt="" />
						<div class="w3lmask">
							<h4> ChimexReality Event </h4>
							<p><b>M.C </b></br>  Nice organization of your occasion with our professional radio presenter .</p>
						</div>
					</a>
				</div>
				
				<!--/ addition--
				<div class="view view-eighth">
					<a href="images/lg2.jpg" title="Image Title"><img src="images/lg2.jpg" alt="" />
						<div class="w3lmask">
							<h4> ChimexReality Event </h4>
							<p><b>Life Band</b></br> Oranization of performances in praise concerts.</p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="images/lg3.jpg" title="Image Title"><img src="images/lg3.jpg" alt="" />
						<div class="w3lmask">
							<h4> ChimexReality Event </h4>
							<p><b>Life Band</b></br> Entertaining your guest with soft and cool musics</p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="images/pg1.jpg" title="Image Title"><img src="images/pg1.jpg" alt="" />
						<div class="w3lmask">
							<h4> ChimexReality Event </h4>
							<p><b> Pallbearers</b></br> This services is popular known as funeral undertakers.</p>
						</div>
					</a>
				</div>--
				<div class="view view-eighth">
					<a href="images/pg2.jpg" title="Image Title"><img src="images/pg2.jpg" alt="" />
						<div class="w3lmask">
							<h4> ChimexReality Event </h4>
							<p><b>Pallbearers. </b></br> funeral undertakers services with band troops.</p>
						</div>
					</a>
				</div>-->
				<!---============-->
				@if (count($out_photo)> 0)
					
				@foreach ($out_photo as $out_photos)					
				<div class="view view-eighth">
					<a href="storage/services_photo/{{ $out_photos->image}} " title="Image Title"><img src="storage/services_photo/{{ $out_photos->image}}" alt="image {{ $out_photos->catigory}}" />
						<div class="w3lmask">
							<h4> ChimexReality Event </h4>
							<p><b> {{ $out_photos->title}} </b></br> {{ $out_photos->body}} </p>
						</div>
					</a>
				</div>
				@endforeach
				{{--{{ $out_photo->links()}}--

				@else --}}
				

				<!-- second additon--
				<div class="view view-eighth">
					<a href="images/pg3.jpg" title="Image Title"><img src="images/pg3.jpg" alt="" />
						<div class="w3lmask">
							<h4> ChimexReality Event </h4>
							<p><b>Pallbearers</b></br> Our nices flower girls puts smiles in your face with their charming smiles.</p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="images/bg1.jpg" title="Image Title"><img src="images/bg1.jpg" alt="" />
						<div class="w3lmask">
							<h4> ChimexReality Event </h4>
							<p><b>Brass Band Troop </b></br> Our Brass band entertainment will beat your imagination.</p>
						</div>
					</a>
				</div>
				<div class="view view-eighth">
					<a href="images/bg2.jpg" title="Image Title"><img src="images/bg2.jpg" alt="" />
						<div class="w3lmask">
							<h4> ChimexReality Event </h4>
							<p><b> Brass Band Troops </b></br> Our Brass band entertainment gives the best mobile music.</p>
						</div>
					</a>
				</div>-->
				
				<!--//second addition-->
				<!--<div class="view view-eighth">
					<a href="images/bg3.jpg" title="Image Title"><img src="images/bg3.jpg" alt="" />
						<div class="w3lmask">
							<h4> ChimexReality Event </h4>
							<p><b> Brass Band Troops </b></br> Brass band enterainment in political campaign.<p>
						</div>
					</a>
				</div>-->
				<div class="clearfix"></div>
			</div>
			
		<div  class="pagination-bar text-center">
		{{ $out_photo->links()}}
	</div>
	@else 
				<p> <h2> Sorry we are yet to update this gallery. </h2>  </p>
				@endif

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
	@include('include.contact')
	<!-- contact -->
	
	<!-- //contact -->
	<!-- footer -->
	<!--<div class="footer">
		<div class="container">
			<div class="footer-left agileits-w3layouts">
				<p>&copy; Chimexreality Event. All Rights Reserved | Design by  <a href="#http://w3layouts.com/"> W3layouts</a></p>
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
	</div>-->
	<!-- //footer --> 
    @include('include.footer')
</body>
</html>
	