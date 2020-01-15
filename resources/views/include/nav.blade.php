<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Event Planner Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!-- custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/chocolat.css" rel="stylesheet">
<!-- //custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
<!-- //web-fonts --> 

<!-- favicon -->
<link rel="icon" href="images/favicon.gif" type="image/gif" size="16X16">

<!--//favicon-->
</head>
<body>
	<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-w3left">
				<p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +234-811-5473-101 | +234-703-1239-397 </p>
			</div>
			<div class="header-w3right">
				<ul>
					<li><a href="mailto:sample@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> info@ChimexReality.com</a></li>
					<li>|</li>
                    <li><a class="scroll" href="#contact">Contact</a></li>
					<!--==========-->
					@if (Auth::guest())
					<li><a href="{{ route('login') }}">Login</a></li>
					<li><a href="{{ route('register') }}">Register</a></li>
				@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>

					{{--	<ul class="dropdown-menu" role="menu">--}}
								<ul class="dropdown-menu">

							<li>
								<a href="{{ route('logout') }}"
									onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
									Logout
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
				@endif

                    <!---=========-->

				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation">
		<div class="container">
			<div class="agileits-logo">
				<h1><a href="/"><span>RealityEvent</span>Planner</a></h1> 
			</div>
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="hvr-bounce-to-bottom button"><a href="index.php"><!-- class="scroll">-->About</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallary<b class="caret"></b></a>
							 <ul class="dropdown-menu">
								<li><a href="/decoration">Decorations </a></li>
								<li><a href="/cake">Cake</a></li>
								<li><a href="/catering">Catering services</a></li>
								<li><a href="/lifeBand">Live Band/cultural dance</a></li>
								<li><a href="/makeOver">Makeover/ Makeup</a></li>
								<li><a href="/usherSecurity">Ushers/protocol security</a></li>
								<li><a href="/under></li>taker">Pall bears/undertaker</a></li>
								<li><a href="/amblance">Amblance</a></li> 
								<li><a href="/casket">Casket</a></li>
							 </ul>
						</li>
						<!--============-->
						<li class="hvr-bounce-to-bottom button"><a href="/services"><!-- class="scroll">-->Services<span class="sr-only">(current)</span></a></li>				
					    <li class="hvr-bounce-to-bottom button"><a href="/home" ><!--class="scroll">-->Bookings</a></li>
						
					</ul>
					<div class="social-icons">
						<ul>
							<li><a href="#" class="f1"></a></li>
							<li><a href="#" class="f2"></a></li>
							<li><a href="#" class="f3"></a></li>
							<li><a href="#" class="f4"></a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>