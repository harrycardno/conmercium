<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Conmercium @yield('title') </title>
	<link rel="stylesheet" href="/dist/css/style.min.css">
</head>
<body ng-app="app">
 <div class="footer-wrapper">
	@include('partials.header')
	@include('partials.register')
	@include('partials.login')
	@include('partials.home')
<div class="push"></div>
</div>
<div class="footer">
	<div class="footer-holder">
		@include('partials.footer')
	</div>
</div>


	

	<main>
		@yield('page')
	</main>

	<script type="text/javascript" src="/components/jquery/dist/jquery.min.js"></script>
	<script src="jquery.validate.js"></script>

	<script type="text/javascript" src="/dist/js/overlay.js"></script>

</body>
</html>