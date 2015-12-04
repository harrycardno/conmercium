<header> 
	<nav class="header-flex-container">
	<h1 class="header-h1">Conmercium</h1>
		<ul class="header-flex-container">
			@if(Auth::check())
				<li><a href="/user/{{ Auth::user()->name }}" class="a-header">{{ Auth::user()->name }}</a></li>
				<li><a href="/logout" class="a-header">Logout</a></li>
				<li><a href="/" class="a-header">Home</a></li>
			@else
				<li class="header-flex-item"><a href='#register' class="a-header">Register</a></li>
				<li class="header-flex-item"><a href="#openLogin" class="a-header">Login</a></li>
			@endif
	  	</ul>
	</nav>
</header>

