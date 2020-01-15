<div class="header">
	<div class="logo">
		<a href="<?php //echo BASE_URL .'admin/dashboard.php' ?>">
			<h1>HabaTech - Admin</h1>
		</a>
	</div>
	<div class="user-info">
			<span class="caret">{{ Auth::user()->name }} </span> &nbsp; &nbsp; <a class="logout-btn" href="{{ route('logout') }}"
			onclick="event.preventDefault();
					 document.getElementById('logout-form').submit();">
			Logout
		</a>
			 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			{{ csrf_field() }}
		</form>
      
		<!--=============================================--------->
		{{--@if (Auth::guest())
					<li><a href="{{ route('login') }}">Login</a></li>
					<li><a href="{{ route('register') }}">Register</a></li>
				@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>

					{{--	<ul class="dropdown-menu" role="menu">-
								<ul class="dropdown-menu">

							<li>
							{{-	<a href="{{ route('logout') }}"
									onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
									Logout
								</a>

							{{-}	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>-
							</li>
						</ul>
					</li>
				@endif--}}
<!---=======================================--->
	</div>
</div>