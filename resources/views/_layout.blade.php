<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/default.css') }}">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<section>
		<div class="left-panel">
			<div class="logo-panel">
				<a class="logo" href="#">Admin</a>
				<div class="bars"><i>bars</i></div>
			</div>
			<ul class="side-nav">
				<li>
					<a href="{{ url('/admin') }}">
						<i class="fa fa-th"></i>
						<span>dashboard</span>
					</a>
				</li>
				<li>
					<a href="{{ url('/admin/devices/create') }}">
						<i class="fa fa-dashboard"></i>
						<span>devices</span>
					</a>
				</li>
				<li>
					<a href="">
						<i class="fa fa-cog"></i>
						<span>system</span>
					</a>
				</li>
				<li>
					<a href="">
						<i class="fa fa-user"></i>
						<span>users</span>
					</a>
				</li>
			</ul>
		</div>
		<div class="main-panel">
			<div class="header-bar">
				<ul class="user-account">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul>
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
			@yield('content')
		</div>
	</section>
	<!-- <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script> -->
	<script type="text/javascript" src="{{ asset('/js/jquery-1.11.3.js') }}"></script>
	@yield('script')
	<script type="text/javascript">
		$('.bars').click(function(event) {
			$('body').toggleClass('collapse');
		});
	</script>
</body>
</html>