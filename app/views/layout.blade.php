<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<link rel="stylesheet" type="text/css" href="css/accounts.css">

		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/smoothie.js"></script>
	    <script src="script.js"></script>
		<title>@yield('title')</title>
		@yield('scripts_head')
	</head>

	<body background="@yield('background_image')">

	@yield('main_menu')
	<div id='cssmenu' class='align-center'>
		<ul>
		   {{ HTML::active_link('login', 'Login') }}
		   {{ HTML::active_link('signup', 'Create Account') }}
		   {{ HTML::active_link('get', 'Get Time Track for Your Business') }}
		   {{ HTML::active_link('about', 'About Us') }}
		   {{ HTML::active_link('/', 'Home') }}
		</ul>
	</div>
	@show

	@if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif


	@yield('body')

	</body>
	<script type="text/javascript">
	@yield('scripts_footer')
	</script>
</html>