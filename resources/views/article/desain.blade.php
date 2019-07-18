<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Ini Game Cak @yield('title')</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->

		<link rel="stylesheet" href="{!! asset('template/css/linearicons.css') !!}" media="screen">
		<link rel="stylesheet" href="{!! asset('template/css/font-awesome.min.css') !!}" media="screen">
		<link rel="stylesheet" href="{!! asset('template/css/bootstrap.css') !!}" media="screen">
		<link rel="stylesheet" href="{!! asset('template/css/magnific-popup.css') !!}" media="screen">
		<link rel="stylesheet" href="{!! asset('template/css/nice-select.css') !!}" media="screen">
		<link rel="stylesheet" href="{!! asset('template/css/animate.min.css') !!}" media="screen">
		<link rel="stylesheet" href="{!! asset('template/css//owl.carousel.css') !!}" media="screen">
		<link rel="stylesheet" href="{!! asset('template/css/jquery-ui.css') !!}" media="screen">
		<link rel="stylesheet" href="{!! asset('template/css/main.css') !!}" media="screen">
		<link rel="stylesheet" href="{!! asset('dashboard/css/editan.css') !!}" media="screen">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	</head>
	<body>
		<header>
			<!-- Start bagian navbar -->
			<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
			  	<a class="navbar-brand" href="{{route('index')}}">Ini Game Cak</a>
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#kumpulan_menu">
				    <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="kumpulan_menu">
				<ul class="navbar-nav">
					<!-- Dropdown start -->
				    <li class="nav-item dropdown">
				      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				        Category
				      </a>
				      <div class="dropdown-menu">
				        @foreach($category as $data)
				        <a class="dropdown-item" href="{{ route('category', $data->id_category) }}">{{ $data->category }}</a>
				        @endforeach
				      </div>
				    </li>
					<li class="nav-item">
				      <a class="nav-link" href="{{ route('request') }}">Request</a>
				    </li>
				    <!-- Dropdown end -->
				    <li class="nav-item">
				      <a class="nav-link" href="#">About</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" href="{{ route('contact') }}">Contact</a>
				    </li>
				</ul>
				
				</div>
				<form class="form-inline" action="{{ route('search') }}">
				    <input class="form-control" type="text" placeholder="Search">
				    <button class="btn btn-success" type="submit">Search</button>
			 	</form>
			</nav>
			<!-- End Bagian navbar -->
			<div class="logo">
				<img src="{!! asset('template/img/jumbotron.png') !!}" class="img-fluid logo-img" alt="">
			</div>
		</header>
		
			<!-- Start top-post Area -->
			<!-- End top-post Area -->
			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start latest-post Area -->
							@yield('content')
							<!-- End latest-post Area -->
							
							<!-- Start banner-ads Area -->
							<!-- End banner-ads Area -->
							<!-- Start popular-post Area -->
								
							<!-- End popular-post Area -->
							<!-- Start relavent-story-post Area -->
							
							<!-- End relavent-story-post Area -->
						</div>
						<!-- Start editor pick -->
						<div class="col-lg-4">
							<div class="sidebars-area">
								<div class="single-sidebar-widget editors-pick-widget">
									<h6 class="title">Most Popular</h6>
									<div class="editors-pick-post">
										<div class="feature-img-wrap relative">
											<ul class="tags">
											</ul>
										</div>
										
										<div class="post-lists">
											@foreach($randompick as $data)
											<div class="single-post d-flex flex-row">
												<div class="thumb thumbs">
													<img src="{!! asset('storage/'. $data->cover) !!}" alt="">
												</div>
												<div class="detail">
													<a href="{{ route('article', $data->id_article) }}"><h6> {{$data->judul}} </h6></a>
													<ul class="meta">
														<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ $data->created_at->diffForHumans() }}</a></li>
														<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
													</ul>
												</div>
											</div>
											@endforeach
										</div>
									</div>
								</div>
								<div class="single-sidebar-widget ads-widget">
									<img class="img-fluid" src="" alt="">
								</div>
								
								<div class="single-sidebar-widget most-popular-widget">
									<h6 class="title"> Random Pick </h6>
									@foreach($most_popular as $data)
									<div class="single-list flex-row d-flex">
										<div class="thumb thumbs">
											<img src="{{ asset('storage/'. $data->cover )}}" alt="">
										</div>
										<div class="details">
											<a href="{{ route('article', $data->id_article) }}">
												<h6>{{ $data->judul }}</h6>
											</a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-calendar-full"></span>{{ $data->created_at->diffForHumans() }}</a></li>
												<li><a href="#"><span class="lnr lnr-bubble"></span>06</a></li>
											</ul>
										</div>
									</div>
									@endforeach
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End latest-post Area -->
		</div>
		@include('sweet::alert')

		<!-- start footer Area -->
			<nav class="navbar bg-dark navbar-fixed-bottom navbar-inverse">
				<div class="container">
					<p class="footer-text m-0 col-lg-8 col-md-12 footer-text-deit"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is edit with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">Ini Game Cak</a>
				</div>
			</nav>
		<!-- End footer Area -->
		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="js/easing.min.js"></script>
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/mn-accordion.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/mail-script.js"></script>
		<script src="js/main.js"></script>

		<script src="{!! asset('dashboard/js/vendor/jquery-2.2.4.min.js') !!}"></script>
		<script src="{!! asset('dashboard/js/vendor/bootstrap.min.js') !!}"></script>
		<script src="{!! asset('dashboard/js/easing.min.js') !!}"></script>
		<script src="{!! asset('dashboard/js/hoverIntent.js') !!}"></script>
		<script src="{!! asset('dashboard/js/superfish.min.js') !!}"></script>
		<script src="{!! asset('dashboard/js/jquery.ajaxchimp.min.js') !!}"></script>
		<script src="{!! asset('dashboard/js/jquery.magnific-popup.min.js') !!}"></script>
		<script src="{!! asset('dashboard/js/mn-accordion.js') !!}"></script>
		<script src="{!! asset('dashboard/js/jquery-ui.js') !!}"></script>
		<script src="{!! asset('dashboard/js/jquery.nice-select.min.js') !!}"></script>
		<script src="{!! asset('dashboard/js/owl.carousel.min.js') !!}"></script>
		<script src="{!! asset('dashboard/js/mail-script.js') !!}"></script>
		<script src="{!! asset('dashboard/js/main.js') !!}"></script>
	</body>
</html>