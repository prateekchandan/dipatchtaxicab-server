<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Dispatch taxicab</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="{{URL::asset('HTML/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
		
		<!-- THEME CSS -->
		<link href="{{URL::asset('HTML/assets/css/essentials.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{URL::asset('HTML/assets/css/layout.css')}}" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="{{URL::asset('HTML/assets/css/header-1.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{URL::asset('HTML/assets/css/color_scheme/green.css')}}" rel="stylesheet" type="text/css" id="color_scheme" />
	</head>

	
	<body class="smoothscroll enable-animation">

		

		<!-- wrapper -->
		<div id="wrapper">

		


			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
			<div id="header" class="sticky clearfix">

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

					
						<!-- Logo -->
						<a class="logo pull-left" href="{{URL::Route('home')}}">
							<h1 style="margin-bottom:10px;margin-top:25px;font-size:2em">DISPATCH TAXI CAB</h1>
						</a>

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse">
							<nav class="nav-main">

								<!--
									NOTE
									
									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example: 

									<li>
										<a href="#">HOME</a>
									</li>
								-->
								<ul id="topMain" class="nav nav-pills nav-main">
									<li><!-- HOME -->
										<a  href="{{URL::Route('home')}}">
											HOME
										</a>
										
									</li>
									@if(Auth::check())
									<li><!-- HOME -->
										<a  href="{{URL::Route('edit')}}">
											Edit
										</a>
										
									</li>
									<li><!-- HOME -->
										<a  href="{{URL::Route('logout')}}">
											Logout
										</a>
										
									</li>
									@endif
								</ul>

								

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>

	
			@yield('content')



			<!-- FOOTER -->
			<footer id="footer">
				
				<div class="copyright">
					<div class="container">
						<ul class="pull-right nomargin list-inline mobile-block">
							<li><a href="#">Terms &amp; Conditions</a></li>
							<li>&bull;</li>
							<li><a href="#">Privacy</a></li>
						</ul>
						&copy; All Rights Reserved, Company LTD
					</div>
				</div>
			</footer>
			<!-- /FOOTER -->

		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = "{{URL::asset('HTML/assets/plugins')}}/";</script>
		<script type="text/javascript" src="{{URL::asset('HTML/assets/plugins/jquery/jquery-2.1.4.min.js')}}"></script>

		<script type="text/javascript" src="{{URL::asset('HTML/assets/js/scripts.js')}}"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		@yield('script')
	</body>
</html>