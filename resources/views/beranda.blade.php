@extends('template_home.content')

@section('isi')

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
									<a href="{{ route('single.post', $post_update->slug) }}">
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
                    
		@endsection		