<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Formula 1 Vietnam</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="apple-touch-icon" sizes="57x57" href="/public/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/public/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/public/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/public/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/public/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/public/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/public/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/public/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/public/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/public/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/public/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/public/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/public/favicon/favicon-16x16.png">
	<link rel="manifest" href="/public/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet"> 

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('/public/dist/app/css/bootstrap.min.css')}}"/>

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="{{asset('/public/dist/app/css/owl.carousel.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('/public/dist/app/css/owl.theme.default.css')}}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{asset('/public/dist/app/css/font-awesome.min.css')}}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('/public/dist/app/css/style.css')}}"/>
	<link rel="stylesheet" href="{{asset('/public/dist/swipper/css/swiper.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/public/css/swiper.css')}}">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

		<!-- Header -->
		<header id="header">
			<!-- Top Header -->
			<div id="top-header">
				<div class="container">
					<div class="header-links">
						<ul>
							<li><a href="#">About us</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Advertisement</a></li>
							<li><a href="#">Privacy</a></li>
							<li><a href="#"><i class="fa fa-sign-in"></i> Login</a></li>
						</ul>
					</div>
					<div class="header-social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Top Header -->
			
			<!-- Center Header -->
			<div id="center-header">
				<div class="container">
					<div class="header-logo">
						<a href="#" class="logo"><img src="{{asset('/public/dist/app/img/F1_logo.svg')}}" alt=""></a>
					</div>
					<div class="header-ads">
						<img class="center-block" src="{{asset('/public/dist/app/img/ad-2.jpg')}}" alt=""> 
					</div>
				</div>
			</div>
			<!-- /Center Header -->
			
			<!-- Nav Header -->
			<div id="nav-header">
				<div class="container">
					<nav id="main-nav">
						<div class="nav-logo">
							<a href="#" class="logo"><img src="{{asset('/public/dist/app/img/logo-alt.png')}}" alt=""></a>
						</div>
						<ul class="main-nav nav navbar-nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Sport</a></li>
							<li><a href="#">Lifestyle</a></li>
							<li><a href="#">Fashion</a></li>
							<li><a href="#">Music</a></li>
							<li><a href="#">Business</a></li>
						</ul>
					</nav>
					<div class="button-nav">
						<button class="search-collapse-btn"><i class="fa fa-search"></i></button>
						<button class="nav-collapse-btn"><i class="fa fa-bars"></i></button>
						<div class="search-form">
							<form>
								<input class="input" type="text" name="search" placeholder="Search">
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /Nav Header -->
		</header>
		<!-- /Header -->
		
		<!-- Owl Carousel 1 -->
		<div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">
			<?php $i=0; ?>
			@foreach($listNews as $key=>$news)
			<!-- ARTICLE -->
			<article class="article thumb-article">
				<div class="article-img">
					<img src="{{$news->img_news}}" alt="">
				</div>
				<div class="article-body">
					<ul class="article-info">
						<li class="article-category"><a href="#">{{$news->tag_news}}</a></li>
						<li class="article-type"><i class="fa fa-camera"></i></li>
					</ul>
					<h2 class="article-title"><a href="#">{{$news->caption_news}}</a></h2>
					<ul class="article-meta">
						<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
						<li><i class="fa fa-comments"></i> 33</li>
					</ul>
				</div>
			<?php if($key == 3){
				break;
			} ?>
			</article>
			<!-- /ARTICLE -->
			@endforeach
		</div>
		<!-- /Owl Carousel 1 -->
		
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">Trending Posts</h2>
							<!-- tab nav -->
							<ul class="tab-nav pull-right">
								<li class="active"><a data-toggle="tab" href="#tab1">All</a></li>
								<li><a data-toggle="tab" href="#tab1">News</a></li>
								<li><a data-toggle="tab" href="#tab1">Sport</a></li>
								<li><a data-toggle="tab" href="#tab1">Music</a></li>
								<li><a data-toggle="tab" href="#tab1">Business</a></li>
								<li><a data-toggle="tab" href="#tab1">Lifestyle</a></li>
							</ul>
							<!-- /tab nav -->
						</div>
						<!-- /section title -->
						
						<!-- Tab content -->
						<div class="tab-content">
							<!-- tab1 -->
							<div id="tab1" class="tab-pane fade in active">
								<!-- row -->
								<div class="row">
									<!-- Column 1 -->
									<div class="col-md-3 col-sm-6">
										<!-- ARTICLE -->
										<article class="article">
											<div class="article-img">
												<a href="#">
													<img src="{{asset('/public/dist/app/img/img-md-1.jpg')}}" alt="">
												</a>
												<ul class="article-info">
													<li class="article-type"><i class="fa fa-camera"></i></li>
												</ul>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<!-- /Column 1 -->
									
									<!-- Column 2 -->
									<div class="col-md-3 col-sm-6">
										<!-- ARTICLE -->
										<article class="article">
											<div class="article-img">
												<a href="#">
													<img src="{{asset('/public/dist/app/img/img-md-2.jpg')}}" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<!-- /Column 2 -->
									
									<!-- Column 3 -->
									<div class="col-md-3 col-sm-6">
										<!-- ARTICLE -->
										<article class="article">
											<div class="article-img">
												<a href="#">
													<img src="{{asset('/public/dist/app/img/img-md-3.jpg')}}" alt="">
												</a>
												<ul class="article-info">
													<li class="article-type"><i class="fa fa-file-text"></i></li>
												</ul>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<!-- /Column 3 -->
									
									<!-- Column 4 -->
									<div class="col-md-3 col-sm-6">
										<!-- ARTICLE -->
										<article class="article">
											<div class="article-img">
												<a href="#">
													<img src="{{asset('/public/dist/app/img/img-md-4.jpg')}}" alt="">
												</a>
												<ul class="article-info">
													<li class="article-type"><i class="fa fa-file-text"></i></li>
												</ul>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<!-- Column 4 -->
								</div>
								<!-- /row -->
								
								<!-- row -->
								<div class="row">
									<!-- Column 1 -->
									<div class="col-md-4 col-sm-6">
										<!-- ARTICLE -->
										<article class="article widget-article">
											<div class="article-img">
												<a href="#">
													<img src="{{asset('/public/dist/app/img/img-widget-1.jpg')}}" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
										
										<!-- ARTICLE -->
										<article class="article widget-article">
											<div class="article-img">
												<a href="#">
													<img src="{{asset('/public/dist/app/img/img-widget-2.jpg')}}" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<!-- /Column 1 -->
									
									<!-- Column 2 -->
									<div class="col-md-4 col-sm-6">
										<!-- ARTICLE -->
										<article class="article widget-article">
											<div class="article-img">
												<a href="#">
													<img src="{{asset('/public/dist/app/img/img-widget-3.jpg')}}" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
										
										<!-- ARTICLE -->
										<article class="article widget-article">
											<div class="article-img">
												<a href="#">
													<img src="{{asset('/public/dist/app/img/img-widget-4.jpg')}}" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<!-- /Column 2 -->
									
									<!-- /Column 3 -->
									<div class="col-md-4 hidden-sm">
										<!-- ARTICLE -->
										<article class="article widget-article">
											<div class="article-img">
												<a href="#">
													<img src="{{asset('/public/dist/app/img/img-widget-5.jpg')}}" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
										
										<!-- ARTICLE -->
										<article class="article widget-article">
											<div class="article-img">
												<a href="#">
													<img src="{{asset('/public/dist/app/img/img-widget-6.jpg')}}" alt="">
												</a>
											</div>
											<div class="article-body">
												<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
												<ul class="article-meta">
													<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
										</article>
										<!-- /ARTICLE -->
									</div>
									<!-- /Column 3 -->
								</div>
								<!-- /row -->
							</div>
							<!-- /tab1 -->
						</div>
						<!-- /tab content -->
					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
		
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-8">
						<!-- row -->
						<div class="row">
							<!-- Column 1 -->
							<div class="col-md-6 col-sm-6">
								<!-- section title -->
								<div class="section-title">
									<h2 class="title">News</h2>
								</div>
								<!-- /section title -->
								
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="{{asset('/public/dist/app/img/img-sm-1.jpg')}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
										<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui, ne accommodare theophrastus reprehendunt vel. Et commodo menandri eam.</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="{{asset('/public/dist/app/img/img-widget-7.jpg')}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
								
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="{{asset('/public/dist/app/img/img-widget-8.jpg')}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 1 -->
							
							<!-- Column 2 -->
							<div class="col-md-6 col-sm-6">
								<!-- section title -->
								<div class="section-title">
									<h2 class="title">Sport</h2>
								</div>
								<!-- /section title -->
								
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="{{asset('/public/dist/app/img/img-sm-2.jpg')}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-file-text"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
										<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui, ne accommodare theophrastus reprehendunt vel. Et commodo menandri eam.</p>
									</div>
								</article>
								<!-- /ARTICLE -->
								
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="{{asset('/public/dist/app/img/img-widget-9.jpg')}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
								
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="{{asset('/public/dist/app/img/img-widget-10.jpg')}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 2 -->
						</div>
						<!-- /row -->
						
						<!-- row -->
						<div class="row">
							<!-- section title -->
							<div class="col-md-12">
								<div class="section-title">
									<h2 class="title">News</h2>
								</div>
							</div>
							<!-- /section title -->
							
							<!-- Column 1 -->
							<div class="col-md-6 col-sm-6">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="{{asset('/public/dist/app/img/img-sm-3.jpg')}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
										<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui, ne accommodare theophrastus reprehendunt vel. Et commodo menandri eam.</p>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 1 -->
							
							<!-- /Column 2 -->
							<div class="col-md-6 col-sm-6">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="{{asset('/public/dist/app/img/img-sm-4.jpg')}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
										<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui, ne accommodare theophrastus reprehendunt vel. Et commodo menandri eam.</p>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 2 -->
						</div>
						<!-- /row -->
						
						<!-- row -->
						<div class="row">
							<!-- Column 1 -->
							<div class="col-md-4 col-sm-4">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="{{asset('/public/dist/app/img/img-md-1.jpg')}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-file-text"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 1 -->
							
							<!-- Column 2 -->
							<div class="col-md-4 col-sm-4">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="{{asset('/public/dist/app/img/img-md-2.jpg')}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-file-text"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 2 -->
							
							<!-- Column 3 -->
							<div class="col-md-4 col-sm-4">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="{{asset('/public/dist/app/img/img-md-3.jpg')}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-file-text"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 3 -->
						</div>
						<!-- /row -->
					</div>
					<!-- /Main Column -->
					
					<!-- Aside Column -->
					<div class="col-md-4">
						<!-- Ad widget -->
						<div class="widget center-block hidden-xs">
							<img class="center-block" src="{{asset('/public/dist/app/img/ad-1.jpg')}}" alt=""> 
						</div>
						<!-- /Ad widget -->
						
						<!-- social widget -->
						<div class="widget social-widget">
							<div class="widget-title">
								<h2 class="title">Stay Connected</h2>
							</div>
							<ul>
								<li><a href="#" class="facebook"><i class="fa fa-facebook"></i><br><span>Facebook</span></a></li>
								<li><a href="#" class="twitter"><i class="fa fa-twitter"></i><br><span>Twitter</span></a></li>
								<li><a href="#" class="google"><i class="fa fa-google"></i><br><span>Google+</span></a></li>
								<li><a href="#" class="instagram"><i class="fa fa-instagram"></i><br><span>Instagram</span></a></li>
								<li><a href="#" class="youtube"><i class="fa fa-youtube"></i><br><span>Youtube</span></a></li>
								<li><a href="#" class="rss"><i class="fa fa-rss"></i><br><span>RSS</span></a></li>
							</ul>
						</div>
						<!-- /social widget -->
						
						<!-- subscribe widget -->
						<div class="widget subscribe-widget">
							<div class="widget-title">
								<h2 class="title">Subscribe to Newslatter</h2>
							</div>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="input-btn">Subscribe</button>
							</form>
						</div>
						<!-- /subscribe widget -->
						
						<!-- article widget -->
						<div class="widget">
							<div class="widget-title">
								<h2 class="title">Most Read</h2>
							</div>
							
							<!-- owl carousel 3 -->
							<div id="owl-carousel-3" class="owl-carousel owl-theme center-owl-nav">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="{{asset('/public/dist/app/img/img-md-3.jpg')}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-file-text"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
								
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="{{asset('/public/dist/app/img/img-md-4.jpg')}}" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-file-text"></i></li>
										</ul>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /owl carousel 3 -->
							
							<!-- ARTICLE -->
							<article class="article widget-article">
								<div class="article-img">
									<a href="#">
										<img src="{{asset('/public/dist/app/img/img-widget-1.jpg')}}" alt="">
									</a>
								</div>
								<div class="article-body">
									<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
										<li><i class="fa fa-comments"></i> 33</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
							
							<!-- ARTICLE -->
							<article class="article widget-article">
								<div class="article-img">
									<a href="#">
										<img src="{{asset('/public/dist/app/img/img-widget-2.jpg')}}" alt="">
									</a>
								</div>
								<div class="article-body">
									<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
										<li><i class="fa fa-comments"></i> 33</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
							
							<!-- ARTICLE -->
							<article class="article widget-article">
								<div class="article-img">
									<a href="#">
										<img src="{{asset('/public/dist/app/img/img-widget-3.jpg')}}" alt="">
									</a>
								</div>
								<div class="article-body">
									<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
										<li><i class="fa fa-comments"></i> 33</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
						</div>
						<!-- /article widget -->
					</div>
					<!-- /Aside Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
		
		<!-- AD SECTION -->
		<div class="visible-lg visible-md">
			<img class="center-block" src="{{asset('/public/dist/app/img/ad-3.jpg')}}" alt="">
		</div>
		<!-- /AD SECTION -->
		<div class="container-swiper">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					@foreach($races as $race)
					<?php 
					date_default_timezone_set('Asia/Ho_Chi_Minh');
					$calendarOfRace = [];
					foreach ($calendars as $value) {
						if($race->id == $value->id_race){
							$calendarOfRace[] = $value;
						}
					}
  			// echo  date('d.m.Y H:i:s', $calendarOfRace[0]->start+$calendarOfRace[0]->difference*3600);die;
					?>
					<?php $data = json_decode($race->country,true);?>
					<div class="swiper-slide" data-slide-id="{{$race->id}}">
						<div class="img-country">
							<img src="https://www.formula1.com/<?php echo $data['image']; ?>">
						</div>
						<div class="name-country"><?php echo $data['name']; ?></div>
						<div id="content-race">
							<div class="name-race"><a href="https://www.formula1.com/{{$race->url_detail_race}}">{{$race->name_race}}</a></div>
							<div class="time-race">{{$race->date_from}} -  {{$race->date_to}}</div>
							<div class="calendar-race">
								<?php  ?>
								<ul class="practice-race">
									<li>
										<span class="race-type">Practice 1</span>
										<time class="day" datetime="Aug 24 2018 11:00">
											Fri
										</time>
										<span class="race-time">
											<time class="clock-24" datetime="Aug 24 2018 11:00">
												<?php  echo date('H:i',$calendarOfRace[0]->start + $calendarOfRace[0]->difference*3600); ?>
											</time>
											–
											<time class="clock-24" datetime="Aug 24 2018 12:30">
												<?php echo date('H:i',$calendarOfRace[0]->end + $calendarOfRace[0]->difference*3600); ?>
											</time>
										</span>
									</li>
									<li>
										<span class="race-type">Practice 2</span>
										<time class="day" datetime="Aug 24 2018 11:00">
											Fri
										</time>
										<span class="race-time">
											<time class="clock-24" datetime="Aug 24 2018 11:00">
												<?php echo date('H:i',$calendarOfRace[1]->start + $calendarOfRace[1]->difference*3600); ?>
											</time>
											–
											<time class="clock-24" datetime="Aug 24 2018 12:30">
												<?php echo date('H:i',$calendarOfRace[1]->end + $calendarOfRace[1]->difference*3600); ?>
											</time>
										</span>
									</li>
									<li>
										<span class="race-type">Practice 3</span>
										<time class="day" datetime="Aug 24 2018 11:00">
											Fri
										</time>
										<span class="race-time">
											<time class="clock-24" datetime="Aug 24 2018 11:00">
												<?php echo date('H:i',$calendarOfRace[2]->start + $calendarOfRace[2]->difference*3600); ?>
											</time>
											–
											<time class="clock-24" datetime="Aug 24 2018 12:30">
												<?php echo date('H:i',$calendarOfRace[2]->end + $calendarOfRace[2]->difference*3600); ?>
											</time>
										</span>
									</li>
								</ul>
								<ul class="main-race">
									<li>
										<span class="race-type">Qualifying</span>
										<time class="day" datetime="Aug 24 2018 11:00">
											Sat
										</time>
										<span class="race-time">
											<time class="clock-24" datetime="Aug 24 2018 11:00">
												<?php echo date('H:i',$calendarOfRace[3]->start + $calendarOfRace[3]->difference*3600); ?>
											</time>
											–
											<time class="clock-24" datetime="Aug 24 2018 12:30">
												<?php echo date('H:i',$calendarOfRace[3]->end + $calendarOfRace[3]->difference*3600); ?>
											</time>
										</span>
									</li>
									<li>
										<span class="race-type">Main race</span>
										<time class="day" datetime="Aug 24 2018 11:00">
											Sun
										</time>
										<span class="race-time">
											<time class="clock-24" datetime="Aug 24 2018 11:00">
												<?php echo date('H:i',$calendarOfRace[4]->start + $calendarOfRace[4]->difference*3600); ?>
											</time>
											–
											<time class="clock-24" datetime="Aug 24 2018 12:30">
												<?php echo date('H:i',$calendarOfRace[4]->end + $calendarOfRace[4]->difference*3600); ?>
											</time>
										</span>
									</li>
									<div class="container-clock">
										<article class="clock">
											<div class="hours-container">
												<div class="hours" style="transform: rotateZ(458.5deg);"></div>
											</div>
											<div class="minutes-container" data-second-angle="306">
												<div class="minutes" style="transform: rotateZ(102deg);"></div>
											</div>
											<div class="seconds-container">
												<div class="seconds" style="transform: rotateZ(306deg);"></div>
											</div>
										</article>
									</div>
								</ul>
							</div>
						</div>
						<div class="time-main-race">
							{{$race->date_to}}
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">Popular Video</h2>
							<div id="nav-carousel-2" class="custom-owl-nav pull-right"></div>
						</div>
						<!-- /section title -->
						
						<!-- owl carousel 2 -->
						<div id="owl-carousel-2" class="owl-carousel owl-theme">
							<!-- ARTICLE -->
							<article class="article thumb-article">
								<div class="article-img">
									<img src="{{asset('/public/dist/app/img/img-thumb-1.jpg')}}" alt="">
								</div>
								<div class="article-body">
									<ul class="article-info">
										<li class="article-category"><a href="#">News</a></li>
										<li class="article-type"><i class="fa fa-video-camera"></i></li>
									</ul>
									<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
										<li><i class="fa fa-comments"></i> 33</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
							
							<!-- ARTICLE -->
							<article class="article thumb-article">
								<div class="article-img">
									<img src="{{asset('/public/dist/app/img/img-thumb-2.jpg')}}" alt="">
								</div>
								<div class="article-body">
									<ul class="article-info">
										<li class="article-category"><a href="#">News</a></li>
										<li class="article-type"><i class="fa fa-video-camera"></i></li>
									</ul>
									<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
										<li><i class="fa fa-comments"></i> 33</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
							
							<!-- ARTICLE -->
							<article class="article thumb-article">
								<div class="article-img">
									<img src="{{asset('/public/dist/app/img/img-thumb-3.jpg')}}" alt="">
								</div>
								<div class="article-body">
									<ul class="article-info">
										<li class="article-category"><a href="#">News</a></li>
										<li class="article-type"><i class="fa fa-video-camera"></i></li>
									</ul>
									<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
										<li><i class="fa fa-comments"></i> 33</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
							
							<!-- ARTICLE -->
							<article class="article thumb-article">
								<div class="article-img">
									<img src="{{asset('/public/dist/app/img/img-thumb-4.jpg')}}" alt="">
								</div>
								<div class="article-body">
									<ul class="article-info">
										<li class="article-category"><a href="#">News</a></li>
										<li class="article-type"><i class="fa fa-video-camera"></i></li>
									</ul>
									<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
									<ul class="article-meta">
										<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
										<li><i class="fa fa-comments"></i> 33</li>
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
						</div>
						<!-- /owl carousel 2 -->
					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
		
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-8">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">Popular Posts</h2>
						</div>
						<!-- /section title -->
						
						<!-- ARTICLE -->
						<article class="article row-article">
							<div class="article-img">
								<a href="#">
									<img src="{{asset('/public/dist/app/img/img-md-1.jpg')}}" alt="">
								</a>
							</div>
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="#">News</a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
								<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
									<li><i class="fa fa-comments"></i> 33</li>
								</ul>
								<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui.</p>
							</div>
						</article>
						<!-- /ARTICLE -->
						
						<!-- ARTICLE -->
						<article class="article row-article">
							<div class="article-img">
								<a href="#">
									<img src="{{asset('/public/dist/app/img/img-md-2.jpg')}}" alt="">
								</a>
							</div>
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="#">News</a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
								<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
									<li><i class="fa fa-comments"></i> 33</li>
								</ul>
								<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui.</p>
							</div>
						</article>
						<!-- /ARTICLE -->
						
						<!-- ARTICLE -->
						<article class="article row-article">
							<div class="article-img">
								<a href="#">
									<img src="{{asset('/public/dist/app/img/img-md-3.jpg')}}" alt="">
								</a>
							</div>
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="#">News</a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
								<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
									<li><i class="fa fa-comments"></i> 33</li>
								</ul>
								<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui.</p>
							</div>
						</article>
						<!-- /ARTICLE -->
						
						<!-- ARTICLE -->
						<article class="article row-article">
							<div class="article-img">
								<a href="#">
									<img src="{{asset('/public/dist/app/img/img-md-4.jpg')}}" alt="">
								</a>
							</div>
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="#">News</a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
								<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
									<li><i class="fa fa-comments"></i> 33</li>
								</ul>
								<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui.</p>
							</div>
						</article>
						<!-- /ARTICLE -->
						
						<!-- pagination -->
						<div class="article-pagination">
							<ul> 
								<li class="active"><a href="#" class="active">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /pagination -->
					</div>
					<!-- /Main Column -->
					
					<!-- Aside Column -->
					<div class="col-md-4">
						<!-- article widget -->
						<div class="widget">
							<div class="widget-title">
								<h2 class="title">Featured Posts</h2>
							</div>
							
							<!-- owl carousel 4 -->
							<div id="owl-carousel-4" class="owl-carousel owl-theme">
								<!-- ARTICLE -->
								<article class="article thumb-article">
									<div class="article-img">
										<img src="{{asset('/public/dist/app/img/img-thumb-1.jpg')}}" alt="">
									</div>
									<div class="article-body">
										<ul class="article-info">
											<li class="article-category"><a href="#">News</a></li>
											<li class="article-type"><i class="fa fa-video-camera"></i></li>
										</ul>
										<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->

								<!-- ARTICLE -->
								<article class="article thumb-article">
									<div class="article-img">
										<img src="{{asset('/public/dist/app/img/img-thumb-2.jpg')}}" alt="">
									</div>
									<div class="article-body">
										<ul class="article-info">
											<li class="article-category"><a href="#">News</a></li>
											<li class="article-type"><i class="fa fa-video-camera"></i></li>
										</ul>
										<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /owl carousel 4 -->
						</div>
						<!-- /article widget -->
						
						<!-- galery widget -->
						<div class="widget galery-widget">
							<div class="widget-title">
								<h2 class="title">Flickr Photos</h2>
							</div>
							<ul>
								<li><a href="#"><img src="{{asset('/public/dist/app/img/img-widget-3.jpg')}}" alt=""></a></li>
								<li><a href="#"><img src="{{asset('/public/dist/app/img/img-widget-4.jpg')}}" alt=""></a></li>
								<li><a href="#"><img src="{{asset('/public/dist/app/img/img-widget-5.jpg')}}" alt=""></a></li>
								<li><a href="#"><img src="{{asset('/public/dist/app/img/img-widget-6.jpg')}}" alt=""></a></li>
								<li><a href="#"><img src="{{asset('/public/dist/app/img/img-widget-7.jpg')}}" alt=""></a></li>
								<li><a href="#"><img src="{{asset('/public/dist/app/img/img-widget-8.jpg')}}" alt=""></a></li>
								<li><a href="#"><img src="{{asset('/public/dist/app/img/img-widget-9.jpg')}}" alt=""></a></li>
								<li><a href="#"><img src="{{asset('/public/dist/app/img/img-widget-10.jpg')}}" alt=""></a></li>
							</ul>
						</div>
						<!-- /galery widget -->
						
						<!-- tweets widget -->
						<div class="widget tweets-widget">
							<div class="widget-title">
								<h2 class="title">Recent Tweets</h2>
							</div>
							<ul>
								<li class="tweet">
									<i class="fa fa-twitter"></i>
									<div class="tweet-body">
										<p><a href="#">@magnews</a> Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis <a href="#">https://t.co/DwsTbsmxTP</a></p>
									</div>
								</li>
								<li class="tweet">
									<i class="fa fa-twitter"></i>
									<div class="tweet-body">
										<p><a href="#">@magnews</a> Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis <a href="#">https://t.co/DwsTbsmxTP</a></p>
									</div>
								</li>
								<li class="tweet">
									<i class="fa fa-twitter"></i>
									<div class="tweet-body">
										<p><a href="#">@magnews</a> Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis <a href="#">https://t.co/DwsTbsmxTP</a></p>
									</div>
								</li>
							</ul>
						</div>
						<!-- /tweets widget -->
					</div>
					<!-- /Aside Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
		
		<!-- FOOTER -->
		<footer id="footer">
			<!-- Top Footer -->
			<div id="top-footer" class="section">
				<!-- CONTAINER -->
				<div class="container">
					<!-- ROW -->
					<div class="row">
						<!-- Column 1 -->
						<div class="col-md-4">
							<!-- footer about -->
							<div class="footer-widget about-widget">
								<div class="footer-logo">
									<a href="#" class="logo"><img src="{{asset('/public/dist/app/img/logo-alt.png')}}" alt=""></a>
									<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui.</p>
								</div>
							</div>
							<!-- /footer about -->
							
							<!-- footer social -->
							<div class="footer-widget social-widget">
								<div class="widget-title">
									<h3 class="title">Follow Us</h3>
								</div>
								<ul>
									<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="google"><i class="fa fa-google"></i></a></li>
									<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
									<li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
							<!-- /footer social -->
							
							<!-- footer subscribe -->
							<div class="footer-widget subscribe-widget">
								<div class="widget-title">
									<h2 class="title">Subscribe to Newslatter</h2>
								</div>
								<form>
									<input class="input" type="email" placeholder="Enter Your Email">
									<button class="input-btn">Subscribe</button>
								</form>
							</div>
							<!-- /footer subscribe -->
						</div>
						<!-- /Column 1 -->
						
						<!-- Column 2 -->
						<div class="col-md-4">
							<!-- footer article -->
							<div class="footer-widget">
								<div class="widget-title">
									<h2 class="title">Featured Posts</h2>
								</div>

								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="{{asset('/public/dist/app/img/img-widget-1.jpg')}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
								
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="{{asset('/public/dist/app/img/img-widget-2.jpg')}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
								
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="{{asset('/public/dist/app/img/img-widget-3.jpg')}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /footer article -->
						</div>
						<!-- /Column 2 -->
						
						<!-- Column 3 -->
						<div class="col-md-4">
							<!-- footer galery -->
							<div class="footer-widget galery-widget">
								<div class="widget-title">
									<h2 class="title">Flickr Photos</h2>
								</div>
								<ul>
									<li><a href="#"><img src="{{asset('/public/dist/app/img/img-widget-3.jpg')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('/public/dist/app/img/img-widget-4.jpg')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('/public/dist/app/img/img-widget-5.jpg')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('/public/dist/app/img/img-widget-6.jpg')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('/public/dist/app/img/img-widget-7.jpg')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('/public/dist/app/img/img-widget-8.jpg')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('/public/dist/app/img/img-widget-9.jpg')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('/public/dist/app/img/img-widget-10.jpg')}}" alt=""></a></li>
								</ul>
							</div>
							<!-- /footer galery -->
							
							<!-- footer tweets -->
							<div class="footer-widget tweets-widget">
								<div class="widget-title">
									<h2 class="title">Recent Tweets</h2>
								</div>
								<ul>
									<li class="tweet">
										<i class="fa fa-twitter"></i>
										<div class="tweet-body">
											<p><a href="#">@magnews</a> Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis <a href="#">https://t.co/DwsTbsmxTP</a></p>
										</div>
									</li>
								</ul>
							</div>
							<!-- /footer tweets -->
						</div>
						<!-- /Column 3 -->
					</div>
					<!-- /ROW -->
				</div>
				<!-- /CONTAINER -->
			</div>
			<!-- /Top Footer -->
			
			<!-- Bottom Footer -->
			<div id="bottom-footer" class="section">
				<!-- CONTAINER -->
				<div class="container">
					<!-- ROW -->
					<div class="row">
						<!-- footer links -->
						<div class="col-md-6 col-md-push-6">
							<ul class="footer-links">
								<li><a href="#">About us</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">Advertisement</a></li>
								<li><a href="#">Privacy</a></li>
							</ul>
						</div>
						<!-- /footer links -->
						
						<!-- footer copyright -->
						<div class="col-md-6 col-md-pull-6">
							<div class="footer-copyright">
								<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
									Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
								</div>
							</div>
							<!-- /footer copyright -->
						</div>
						<!-- /ROW -->
					</div>
					<!-- /CONTAINER -->
				</div>
				<!-- /Bottom Footer -->
			</footer>
			<!-- /FOOTER -->

			<!-- Back to top -->
			<div id="back-to-top"></div>
			<!-- Back to top -->

			<!-- jQuery Plugins -->
			<script src="{{asset('/public/dist/app/js/jquery.min.js')}}"></script>
			<script src="{{asset('/public/dist/app/js/bootstrap.min.js')}}"></script>
			<script src="{{asset('/public/dist/app/js/owl.carousel.min.js')}}"></script>
			<script src="{{asset('/public/dist/app/js/main.js')}}"></script>
			<script src="{{asset('/public/dist/swipper/js/swiper.min.js')}}"></script>
			<!-- Initialize Swiper -->
			<script>
				var races = <?php echo json_encode($races); ?>;
				var lastRace = <?php echo json_encode($lastRace); ?>;
				var calendars = <?php echo json_encode($calendars); ?>;

				var swiper = new Swiper('.swiper-container', {
					slidesPerView: 'auto',
					spaceBetween: 0,
					pagination: {
						el: '.swiper-pagination',
						clickable: true,
					},on: {
						init: function () {
							$('[data-slide-id="'+lastRace.id+'"]').addClass('active-slider');
							this.slideTo(lastRace.id-5);
							var country = JSON.parse(lastRace.country);

							$(".swiper-slide #content-race").hide();
							$(".active-slider .time-main-race").hide();
							$(".active-slider #content-race").show();

      		// $('.active-slider').html(html);
      		
      	},
      	click:function(){	
      		var index = swiper.clickedIndex+1;
      		$(".swiper-slide").removeClass("active-slider");
      		$(".swiper-slide .time-main-race").show();
      		$('[data-slide-id="'+index+'"]').addClass('active-slider');
      		swiper.slideTo(swiper.clickedIndex-4);

      		$(".swiper-slide #content-race").hide();
      		$(".active-slider .time-main-race").hide();
      		$(".active-slider #content-race").show();

      	},
      	
      }

  });


</script>
<script type="text/javascript">
	
	this.initLocalClocks();
	function initLocalClocks() {	
		var date = new Date;
		var seconds = date.getSeconds();
		var minutes = date.getMinutes();
		var hours = date.getHours();
		var hands = [
		{
			hand: 'hours',
			angle: (hours * 30) + (minutes / 2)
		},
		{
			hand: 'minutes',
			angle: (minutes * 6)
		},
		{
			hand: 'seconds',
			angle: (seconds * 6)
		}
		];
		for (var j = 0; j < hands.length; j++) {
			var elements = document.querySelectorAll('.' + hands[j].hand);
			for (var k = 0; k < elements.length; k++) {
				elements[k].style.webkitTransform = 'rotateZ('+ hands[j].angle +'deg)';
				elements[k].style.transform = 'rotateZ('+ hands[j].angle +'deg)';
				if (hands[j].hand === 'minutes') {
					elements[k].parentNode.setAttribute('data-second-angle', hands[j + 1].angle);
				}
			}
		}
	}
</script>

		</body>
		</html>
