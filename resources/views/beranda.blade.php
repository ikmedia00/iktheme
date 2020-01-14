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

		<section class="home">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="headline">
							<div class="nav" id="headline-nav">
								<a class="left carousel-control" role="button" data-slide="prev">
									<span class="ion-ios-arrow-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" role="button" data-slide="next">
									<span class="ion-ios-arrow-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<div class="owl-carousel owl-theme" id="headline">							
								<div class="item">
									<a href="#"><div class="badge">Tip!</div> Vestibulum ante ipsum primis in faucibus orci</a>
								</div>
								<div class="item">
									<a href="#">Ut rutrum sodales mauris ut suscipit</a>
								</div>
							</div>
						</div>
						<div class="owl-carousel owl-theme slide" id="featured">
							<div class="item">
								<article class="featured">
									<div class="overlay"></div>
									<figure>
										<img src="{{ asset('public/beranda/images/news/img04.jpg') }}" alt="">
									</figure>
									<div class="details">
										<div class="category"><a href="">Computer</a></div>
										<h1><a href="single.html">Phasellus iaculis quam sed est elementum vel ornare ligula venenatis</a></h1>
										<div class="time">December 26, 2016</div>
									</div>
								</article>
							</div>
							<div class="item">
								<article class="featured">
									<div class="overlay"></div>
									<figure>
										<img src="{{ asset('public/beranda/images/news/img14.jpg') }}" alt="">
									</figure>
									<div class="details">
										<div class="category"><a href="">Travel</a></div>
										<h1><a href="">Class aptent taciti sociosqu ad litora torquent per conubia nostra</a></h1>
										<div class="time">December 10, 2016</div>
									</div>
								</article>
							</div>
							<div class="item">
								<article class="featured">
									<div class="overlay"></div>
									<figure>
										<img src="{{ asset('public/beranda/images/news/img13.jpg') }}" alt="">
									</figure>
									<div class="details">
										<div class="category"><a href="">International</a></div>
										<h1><a href="">Maecenas accumsan tortor ut velit pharetra mollis</a></h1>
										<div class="time">October 12, 2016</div>
									</div>
								</article>
							</div>
							<div class="item">
								<article class="featured">
									<div class="overlay"></div>
									<figure>
										<img src="{{ asset('public/beranda/images/news/img05.jpg') }}" alt="">
									</figure>
									<div class="details">
										<div class="category"><a href="">Lifestyle</a></div>
										<h1><a href="">Mauris elementum libero at pharetra auctor Fusce ullamcorper elit</a></h1>
										<div class="time">November 27, 2016</div>
									</div>
								</article>
							</div>
						</div>
						<div class="line">
							<div>Latest News</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="row">
									<article class="article col-md-12">
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
									<article class="article col-md-12">
										<div class="inner">
											<figure>
												<a href="">
													<img src="{{ asset('public/beranda/images/news/img06.jpg') }}" alt="">
												</a>
											</figure>
											<div class="padding">
												<div class="detail">
													<div class="time">December 22, 2016</div>
													<div class="category"><a href="">Healthy</a></div>
												</div>
												<h2><a href="">Exercitation ullamco laboris nisi ut aliquip</a></h2>
											</div>
										</div>
									</article>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="row">
									<article class="article col-md-12">
										<div class="inner">
											<figure>                                
												<a href="">
													<img src="{{ asset('public/beranda/images/news/img05.jpg') }}" alt="">
												</a>
											</figure>
											<div class="padding">
												<div class="detail">
													<div class="time">December 09, 2016</div>
													<div class="category"><a href="">Lifestyle</a></div>
												</div>
												<h2><a href="">Mauris elementum libero at pharetra auctor</a></h2>
											</div>
										</div>
									</article>
									<article class="article col-md-12">
										<div class="inner">
											<figure>
												<a href="">
													<img src="{{ asset('public/beranda/images/news/img07.jpg') }}" alt="">
												</a>
											</figure>
											<div class="padding">
												<div class="detail">
													<div class="time">December 21, 2016</div>
													<div class="category"><a href="">Sport</a></div>
												</div>
												<h2><a href="">Sed do eiusmod tempor incididunt ut labore</a></h2>
											</div>
										</div>
									</article>
								</div>
							</div>
						</div>
						<div class="banner">
							<a href="">
								<img src="{{ asset('public/beranda/images/ads.png') }}" alt="">
							</a>
						</div>
						<div class="line top">
							<div>News Update</div>
						</div>
						<div class="row">
							@foreach($data as $post_update)
							<article class="col-md-12 article-list">
								<div class="inner">
									<figure>
										<a href="">
											<img src="{{ $post_update->gambar }}" alt="">
										</a>
									</figure>
									<div class="details">
										<div class="detail">
											<div class="category">
												<a href="#">{{ $post_update->category->name }}</a>
											</div>
											<div class="time">{{ $post_update->created_at->diffForHumans() }}</div>
										</div>
										<h1><a href="">{{ $post_update->judul }}</a></h1>
										<p>
										Donec consequat, arcu at ultrices sodales, quam erat aliquet diam, sit amet interdum libero nunc accumsan nisi.
										</p>
									</div>
								</div>
							</article>
							@endforeach
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="line top">
                                    <div>News Category</div>
                                </div>
                                <article class="article-fw">
                                    <div class="inner">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('public/beranda/images/news/img16.jpg') }}" alt="">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <div class="detail">
                                                <div class="time">December 31, 2016</div>
                                                <div class="category"><a href="">Sport</a></div>
                                            </div>
                                            <h1><a href="single.html">Donec congue turpis vitae mauris</a></h1>
                                            <p>
                                                Donec congue turpis vitae mauris condimentum luctus. Ut dictum neque at egestas convallis. 
                                            </p>
                                        </div>
                                    </div>
                                </article>
                                <div class="line"></div>
                                <article class="article-mini">
                                    <div class="inner">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('public/beranda/images/news/img05.jpg') }}" alt="">
                                            </a>
                                        </figure>
                                        <div class="padding">
                                            <h1><a href="">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                                            <div class="detail">
                                                <div class="category"><a href="">Lifestyle</a></div>
                                                <div class="time">December 22, 2016</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="article-mini">
                                    <div class="inner">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('public/beranda/images/news/img02.jpg') }}" alt="">
                                            </a>
                                        </figure>
                                        <div class="padding">
                                            <h1><a href="">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
                                            <div class="detail">
                                                <div class="category"><a href="">Travel</a></div>
                                                <div class="time">December 21, 2016</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="article-mini">
                                    <div class="inner">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('public/beranda/images/news/img10.jpg') }}" alt="">
                                            </a>
                                        </figure>
                                        <div class="padding">
                                            <h1><a href="">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                                            <div class="detail">
                                                <div class="category"><a href="">Healthy</a></div>
                                                <div class="time">December 20, 2016</div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
            
                            <div class="col-md-6">
                                    <div class="line top">
                                        <div>News Blogs</div>
                                    </div>
                                    <article class="article-fw">
                                        <div class="inner">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('public/beranda/images/news/img16.jpg') }}" alt="">
                                                </a>
                                            </figure>
                                            <div class="details">
                                                <div class="detail">
                                                    <div class="time">December 31, 2016</div>
                                                    <div class="category"><a href="">Sport</a></div>
                                                </div>
                                                <h1><a href="single.html">Donec congue turpis vitae mauris</a></h1>
                                                <p>
                                                    Donec congue turpis vitae mauris condimentum luctus. Ut dictum neque at egestas convallis. 
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                    <div class="line"></div>
                                    <article class="article-mini">
                                        <div class="inner">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('public/beranda/images/news/img05.jpg') }}" alt="">
                                                </a>
                                            </figure>
                                            <div class="padding">
                                                <h1><a href="">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                                                <div class="detail">
                                                    <div class="category"><a href="">Lifestyle</a></div>
                                                    <div class="time">December 22, 2016</div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="article-mini">
                                        <div class="inner">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('public/beranda/images/news/img02.jpg') }}" alt="">
                                                </a>
                                            </figure>
                                            <div class="padding">
                                                <h1><a href="">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
                                                <div class="detail">
                                                    <div class="category"><a href="">Travel</a></div>
                                                    <div class="time">December 21, 2016</div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="article-mini">
                                        <div class="inner">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('public/beranda/images/news/img10.jpg') }}" alt="">
                                                </a>
                                            </figure>
                                            <div class="padding">
                                                <h1><a href="">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                                                <div class="detail">
                                                    <div class="category"><a href="">Healthy</a></div>
                                                    <div class="time">December 20, 2016</div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                            </div>
						</div>
                    </div>

					<div class="col-xs-6 col-md-4 sidebar" id="sidebar">
                        <div class="sidebar-title for-tablet">Sidebar</div>
                        <aside>
							<div class="aside-body">
								<form class="newsletter">
									<div class="icon">
										<i class="ion-ios-email-outline"></i>
										<h1>Newsletter</h1>
									</div>
									<div class="input-group">
										<input type="email" class="form-control email" placeholder="Your mail">
										<div class="input-group-btn">
											<button class="btn btn-primary"><i class="ion-paper-airplane"></i></button>
										</div>
									</div>
									<p>By subscribing you will receive new articles in your email.</p>
								</form>
							</div>
						</aside>
						<aside>
							<h1 class="aside-title">Popular <a href="#" class="all badge badge-secondary">See All <i class="ion-ios-arrow-right"></i></a></h1>
							<div class="aside-body">
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="">
												<img src="{{ asset('public/beranda/images/news/img07.jpg') }}" alt="">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="">
												<img src="{{ asset('public/beranda/images/news/img14.jpg') }}" alt="">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="">
												<img src="{{ asset('public/beranda/images/news/img09.jpg') }}" alt="">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="">Aliquam et metus convallis tincidunt velit ut rhoncus dolor</a></h1>
										</div>
									</div>
								</article>
							</div>
                        </aside>
                        <aside>
                            <h1 class="title-col">Trending Tags</h1>
                            <div class="body-col">
                                <ol class="tags-list">
                                    <li><a href="#">HTML5</a></li>
                                    <li><a href="#">CSS3</a></li>
                                    <li><a href="#">JavaScript</a></li>
                                    <li><a href="#">jQuery</a></li>
                                    <li><a href="#">Bootstrap</a></li>
                                    <li><a href="#">Responsive</a></li>
                                </ol>
                            </div>
                        </aside>

						<aside>
							<h1 class="aside-title">Videos
								<div class="carousel-nav" id="video-list-nav">
									<div class="prev"><i class="ion-ios-arrow-left"></i></div>
									<div class="next"><i class="ion-ios-arrow-right"></i></div>
								</div>
							</h1>
							<div class="aside-body">
								<ul class="video-list" data-youtube='"carousel":true, "nav": "#video-list-nav"'>
									<li><a data-youtube-id="JvN6-bAsNJQ&t=17s" data-action="magnific"></a></li>
									<li><a data-youtube-id="9cVJr3eQfXc" data-action="magnific"></a></li>
									<li><a data-youtube-id="DnGdoEa1tPg" data-action="magnific"></a></li>
								</ul>
							</div>
                        </aside>
                        
						<aside>
							<h1 class="aside-title">
                                Hot News
                                <div class="carousel-nav" id="hot-news-nav">
                                    <div class="prev">
                                        <i class="ion-ios-arrow-left"></i>
                                    </div>
                                    <div class="next">
                                        <i class="ion-ios-arrow-right"></i>
                                    </div>
                                </div>
                            </h1>
							<div class="aside-body">
                                <div class="body-col vertical-slider" data-max="4" data-nav="#hot-news-nav" data-item="article">
                                    <article class="article-mini">
                                        <div class="inner">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('public/beranda/images/news/img09.jpg') }}" alt="">
                                                </a>
                                            </figure>
                                            <div class="padding">
                                                <h1><a href="">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                                                <div class="detail">
                                                    <div class="category"><a href="">Lifestyle</a></div>
                                                    <div class="time">December 22, 2016</div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="article-mini">
                                        <div class="inner">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('public/beranda/images/news/img01.jpg') }}" alt="">
                                                </a>
                                            </figure>
                                            <div class="padding">
                                                <h1><a href="">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                                                <div class="detail">
                                                    <div class="category"><a href="">Lifestyle</a></div>
                                                    <div class="time">December 22, 2016</div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="article-mini">
                                        <div class="inner">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('public/beranda/images/news/img05.jpg') }}" alt="">
                                                </a>
                                            </figure>
                                            <div class="padding">
                                                <h1><a href="">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                                                <div class="detail">
                                                    <div class="category"><a href="">Lifestyle</a></div>
                                                    <div class="time">December 22, 2016</div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="article-mini">
                                        <div class="inner">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('public/beranda/images/news/img02.jpg') }}" alt="">
                                                </a>
                                            </figure>
                                            <div class="padding">
                                                <h1><a href="">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
                                                <div class="detail">
                                                    <div class="category"><a href="">Travel</a></div>
                                                    <div class="time">December 21, 2016</div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="article-mini">
                                        <div class="inner">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('public/beranda/images/news/img13.jpg') }}" alt="">
                                                </a>
                                            </figure>
                                            <div class="padding">
                                                <h1><a href="">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                                                <div class="detail">
                                                    <div class="category"><a href="">International</a></div>
                                                    <div class="time">December 20, 2016</div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="article-mini">
                                        <div class="inner">
                                            <figure>
                                                <a href="">
                                                    <img src="{{ asset('public/beranda/images/news/img08.jpg') }}" alt="">
                                                </a>
                                            </figure>
                                            <div class="padding">
                                                <h1><a href="">Aliquam et metus convallis tincidunt velit ut rhoncus dolor</a></h1>
                                                <div class="detail">
                                                    <div class="category"><a href="">Computer</a></div>
                                                    <div class="time">December 19, 2016</div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</section>

		<!-- Start footer -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Company Info</h1>
							<div class="block-body">
								<figure class="foot-logo">
									<img src="{{ asset('public/beranda/images/logo-light.png') }}" class="img-responsive" alt="Logo">
								</figure>
								<p class="brand-description">
									Magz is a HTML5 &amp; CSS3 magazine template based on Bootstrap 3.
								</p>
								<a href="" class="btn btn-magz white btn-sm">About Us <i class="ion-ios-arrow-thin-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Popular Tags <div class="right"><a href="#">See All <i class="ion-ios-arrow-thin-right"></i></a></div></h1>
							<div class="block-body">
								<ul class="tags">
									<li><a href="#">HTML5</a></li>
									<li><a href="#">CSS3</a></li>
									<li><a href="#">Bootstrap 3</a></li>
									<li><a href="#">Web Design</a></li>
									<li><a href="#">Creative Mind</a></li>
									<li><a href="#">Standing On The Train</a></li>
									<li><a href="#">at 6.00PM</a></li>
								</ul>
							</div>
						</div>
						<div class="line"></div>
					</div>
					<div class="col-md-4 col-xs-12 col-sm-6">
						<div class="block">
							<h1 class="block-title">Follow Us</h1>
							<div class="block-body">
								<p>Follow us and stay in touch to get the latest news</p>
								<ul class="social trp">
									<li>
										<a href="#" class="facebook">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#" class="twitter">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-twitter-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="youtube">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-youtube-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="instagram">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-instagram-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="linkedin">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-linkedin"></i>
										</a>
									</li>
									<li>
										<a href="#" class="rss">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-rss"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="block mt-3">
							<div class="block-body">
								<ul class="footer-nav-horizontal">
									<li><a href="index.html">Home</a></li>
									<li><a href="#">Partner</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="page.html">About</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="copyright">
							COPYRIGHT &copy; IK Theme 2020. ALL RIGHT RESERVED.
							<div>
								Made with <i class="ion-heart"></i> by <a href="http://kodinger.com">Kodinger</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer -->

		<script src="{{ asset('public/beranda/js/jquery.js') }}"></script>
		<script src="{{ asset('public/beranda/js/jquery.migrate.js') }}"></script>
		<script src="{{ asset('public/beranda/scripts/bootstrap/bootstrap.min.js') }}"></script>
		<script src="{{ asset('public/beranda/scripts/jquery-number/jquery.number.min.js') }}"></script>
		<script src="{{ asset('public/beranda/scripts/owlcarousel/dist/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('public/beranda/scripts/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('public/beranda/scripts/easescroll/jquery.easeScroll.js') }}"></script>
		<script src="{{ asset('public/beranda/scripts/sweetalert/dist/sweetalert.min.js') }}"></script>
		<script src="{{ asset('public/beranda/scripts/toast/jquery.toast.min.js') }}"></script>
		<script src="{{ asset('public/beranda/js/e-magz.js') }}"></script>
	</body>
</html>