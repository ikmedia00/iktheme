<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="keyword" content="">
		<!-- Shareable -->
		<meta property="og:title" content="" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="" />
		<meta property="og:image" content="" />
		<title>Mag &mdash; IKTheme Magazine</title>

		<link rel="stylesheet" href="{{ asset('public/beranda/scripts/bootstrap/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('public/beranda/scripts/ionicons/css/ionicons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('public/beranda/scripts/toast/jquery.toast.min.css') }}">
		<link rel="stylesheet" href="{{ asset('public/beranda/scripts/owlcarousel/dist/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('public/beranda/scripts/owlcarousel/dist/assets/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('public/beranda/scripts/magnific-popup/dist/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('public/beranda/scripts/sweetalert/dist/sweetalert.css') }}">
		<link rel="stylesheet" href="{{ asset('public/beranda/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('public/beranda/css/styleglobal.css') }}">
	</head>

	<body>
		<header class="primary">
			<div class="firstbar">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<div class="brand">
								<a href="index.html">
									<img src="{{ asset('public/beranda/images/logo.png') }}" alt="Magz Logo">
								</a>
							</div>						
						</div>
						<div class="col-md-6 col-sm-12">
							<form class="search" autocomplete="off">
								<div class="form-group">
									<div class="input-group">
										<input type="text" name="q" class="form-control" placeholder="Mau baca apa?">									
										<div class="input-group-btn">
											<button class="btn btn-primary"><i class="ion-search"></i></button>
										</div>
									</div>
								</div>
								<div class="help-block">
									<div>Populer:</div>
									<ul>
										<li><a href="#">HTML5</a></li>
										<li><a href="#">CSS3</a></li>
										<li><a href="#">Bootstrap 3</a></li>
										<li><a href="#">jQuery</a></li>
										<li><a href="#">AnguarJS</a></li>
									</ul>
								</div>
							</form>								
						</div>
						<div class="col-md-2 col-sm-12 text-right">
							<ul class="nav-icons">
								<li><a href="login.html"><i class="ion-person"></i><div>Login</div></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- Start nav -->
			<nav class="menu">
				<div class="container">
					<div class="brand">
						<a href="#">
							<img src="{{ asset('public/beranda/images/logo.png') }}" alt="Magz Logo">
						</a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
					</div>
					<div id="menu-list">
						<ul class="nav-list">
							<li class="for-tablet nav-title"><a>Menu</a></li>
							<li><a href="category.html">Standard</a></li>
							<li class="dropdown magz-dropdown">
								<a href="category.html">Pages <i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href="index.html">Home</a></li>
									<li><a href="category.html">Category</a></li>
									<li><a href="single.html">Single</a></li>
									<li><a href="page.html">Page</a></li>
									<li><a href="search.html">Search</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</li>
							<li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="#">Ragam <i class="ion-ios-arrow-right"></i></a>
								<div class="dropdown-menu megamenu">
									<div class="megamenu-inner">
										<div class="row">
											<div class="col-md-3">
												<ul class="vertical-menu">
													<li><a href="#"><i class="ion-ios-circle-outline"></i> A new feature</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> This example</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> For a submenu item</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> You can add</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> Your own items</a></li>
												</ul>
											</div>
											<div class="col-md-9">
												<div class="row">
													<article class="article col-md-4 mini">
														<div class="inner">
															<figure>
																<a href="">
																	<img src="{{ asset('public/beranda/images/news/img10.jpg') }}" alt="">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time">December 10, 2016</div>
																	<div class="category"><a href="">Healthy</a></div>
																</div>
																<h2><a href="">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
															</div>
														</div>
													</article>
													<article class="article col-md-4 mini">
														<div class="inner">
															<figure>
																<a href="">
																	<img src="{{ asset('public/beranda/images/news/img11.jpg') }}" alt="">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time">December 13, 2016</div>
																	<div class="category"><a href="">Lifestyle</a></div>
																</div>
																<h2><a href="">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
															</div>
														</div>
													</article>
													<article class="article col-md-4 mini">
														<div class="inner">
															<figure>
																<a href="">
																	<img src="{{ asset('public/beranda/images/news/img14.jpg') }}" alt="">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time">December 14, 2016</div>
																	<div class="category"><a href="">Travel</a></div>
																</div>
																<h2><a href="">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
															</div>
														</div>
													</article>
												</div>
											</div>
										</div>								
									</div>
								</div>
							</li>
						</ul>
                    </div>
				</div>
			</nav>
			<!-- End nav -->
		</header>