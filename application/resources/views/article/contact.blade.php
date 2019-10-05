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
		<title>Ini Game Cak | Contact</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/main.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
			  	<a class="navbar-brand" href="{{route('index')}}">Ini Game Cak</a>
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#kumpulan_menu">
				    <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="kumpulan_menu">
				<ul class="navbar-nav">
				    <li class="nav-item dropdown">
				      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
				        Category
				      </a>
				      <div class="dropdown-menu">
				        <a class="dropdown-item" href="#">Sub Menu 1</a>
				      </div>
				    </li>
					<li class="nav-item">
				      <a class="nav-link" href="{{ route('request') }}">Request</a>
				    </li>
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
		
			
		
		</header>
		<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding posisi-jumtron">
					<div class="row">
						<div class="col-lg-12">
							<div class="hero-nav-area">
								<h1 class="text-white">Contact Us</h1>
								<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="contact.html">Contact Us </a></p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End top-post Area -->
			<!-- Start contact-page Area -->
			<section class="contact-page-area pt-50 pb-120">
				<div class="container">
					<div class="row contact-wrap">
						<div class="col-lg-3 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5>Jawa Timur, Surabaya</h5>
									<p>
										Jl Kapas Krampung No 48B
									</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>0896 8748 0169</h5>
									<p>Hubungi No Telp</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>indrabintang84@gmail.com</h5>
									<p>Kirim kan laporan anda</p>
								</div>
							</div>
						</div>
						<div class="col-lg-9">
							<form class="form-area contact-form text-right" id="myForm" action="{{ route('createcontact') }}" method="post">
								{{ csrf_field() }}

								<div class="row">
									<div class="col-lg-6">
										<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
										
										<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">
										<input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
									</div>
									<div class="col-lg-6">
										<textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>
									</div>
									<div class="col-lg-12">
										<button class="primary-btn primary" onClick="return confirm('Apakah anda yakin dengan data yang akan anda inputkan?')" style="float: right;">Send Message</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- End contact-page Area -->
		</div>
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