<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{('public/fronted/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<!-- <?php 
		echo Session::get('customer_id');
		echo Session::get('shipping_id');

	?> -->
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 09 75 338 514</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> Manhkhan199x@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{URL::to('/')}}"><img src="{{('public/frontend/images/logo2.png')}}" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								
								<li><a href="#"><i class="fa fa-star"></i> Danh s??ch y??u th??ch</a></li>
								<?php
									$customer_id = Session::get('customer_id');
									$shipping_id = Session::get('shipping_id');
									if($customer_id != NULL && $shipping_id == NULL){
								?>
										<li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh to??n</a></li>

								<?php
									}else if($customer_id!=NULL && $shipping_id!=NULL){
								?>
										<li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Thanh to??n</a></li>
								<?php
									}else{
								?>
										<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i> Thanh to??n</a></li>
								<?php
									}
								?>
								



								<li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Gi??? h??ng</a></li>
								<?php
									$customer_id = Session::get('customer_id');
									if($customer_id != NULL){
								?>
										<li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> ????ng xu???t</a></li>
								<?php
									}else{
								?>
										<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> ????ng nh???p</a></li>
								<?php
									}
								?>
								
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('/trang-chu')}}" class="active">Trang ch???</a></li>
								<li class="dropdown"><a href="#">S???n ph???m<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<!-- <li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li>  -->
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Tin t???c<i class="fa fa-angle-down"></i></a>
                                    <!-- <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul> -->
                                </li> 
								<li><a href="{{URL::to('/show-cart')}}">Gi??? h??ng</a></li>
								<li><a href="contact-us.html">Li??n h???</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<form action="{{URL::to('/tim-kiem')}}" method="POST">
						{{csrf_field()}}
						<div class="search_box pull-right">
							<input type="text" name="keywords_submit" placeholder="T??m ki???m"/>
							<input type="submit" style="margin-top:0; color:black" name="search_items" class="btn btn-primary btn-sm" value="T??m ki???m" />
						</div>
						</form>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPMXI</h1>
									<h2>?????m tr???ng</h2>
									<p>?????p t??? nhi??n, t??? tin khoe c?? t??nh, th??ch h???p m???c v??o m??a h?? m??t m??? hay vui ch??i gi???i tr?? </p>
									<button type="button" class="btn btn-default get">Mua s???n ph???m</button>
								</div>
								<div class="col-sm-6">
									<img src="{{('public/frontend/images/girl1.jpg')}}" class="girl img-responsive" alt="" />
									<img src="{{('public/frontend/images/pricing.png')}}"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPMXI</h1>
									<h2>??o kho??c </h2>
									<p>Ch???t l?????ng v???i si??u gi??y, m???c ????? ???m gi??? nhi???t c?? th??? c???c t???t, kh??ng b??? g?? b?? </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="{{('public/frontend/images/girl2.jpg')}}" class="girl img-responsive" alt="" />
									<img src="{{('public/frontend/images/pricing.png')}}"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPMXI</h1>
									<h2>?????m ?????</h2>
									<p>?????m ????? lung linh, th??ch h???p cho c??c bu???i l??? hay h???n h?? v???i ai ???? trong m??a h?? </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="{{('public/frontend/images/girl3.jpg')}}" class="girl img-responsive" alt="" />
									<img src="{{('public/frontend/images/pricing.png')}}" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh m???c s???n ph???m</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							@foreach($category as $key => $cate)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
								</div>
							</div>
							@endforeach
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Th????ng hi???u s???n ph???m</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									@foreach($brand as $key => $brand)
									<li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}"> <span class="pull-right"></span>{{$brand->brand_name}}</a></li>
									@endforeach
								</ul>
							</div>
						</div><!--/brands_products-->
						
						
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					@yield('content')
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-ShopMxi</h2>
							<p>H??y ?????n v???i shop c???a ch??ng t??i ????? c?? th??? mua s???m nh???ng trang ph???c ?????ng c???p nh???t</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{('public/frontend/images/iframe1.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>??o nam</p>
								<h2>21-03-2021</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
                                    <img src="{{('public/frontend/images/iframe2.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>??o thun n???</p>
								<h2>21-03-2021</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
                                    <img src="{{('public/frontend/images/iframe3.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>??o c??ng s???</p>
								<h2>21-03-2021</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
                                    <img src="{{('public/frontend/images/iframe4.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>??o ??i ti???c</p>
								<h2>21-03-2021</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{('public/frontend/images/map.png')}}" alt="" />
							<p>V??ng La - ????ng Anh - H?? N???i</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>D???ch v???</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">H??? tr??? online</a></li>
								<li><a href="#">Li??n h??? ch??ng t??i</a></li>
								<li><a href="#">T??nh tr???ng ?????t h??ng</a></li>
								<li><a href="#">Thay ?????i ?????a ??i???m</a></li>
								<li><a href="#">C??u h???i th?????ng g???p</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>C???a h??ng nhanh ch??ng</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">??o thun</a></li>
								<li><a href="#">Nam</a></li>
								<li><a href="#">N???</a></li>
								<li><a href="#">Th??? qu?? t???ng</a></li>
								<li><a href="#">Th?????ng</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Ch??nh s??ch</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">??i???u kho???n s??? d???ng</a></li>
								<li><a href="#">Ch??nh s??ch b???o m???t</a></li>
								<li><a href="#">Ch??nh s??ch ho??n l???i ti???n</a></li>
								<li><a href="#">H??? th???ng thanh to??n</a></li>
								<li><a href="#">H??? th???ng v??</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Gi???i thi???u v??? shopmxi</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Th??ng tin c??ng ty</a></li>
								<li><a href="#">Ngh??? nghi???p</a></li>
								<li><a href="#">V??? tr?? c???a h??ng</a></li>
								<li><a href="#">Ch????ng tr??nh li??n k???t</a></li>
								<li><a href="#">B???n quy???n</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Gi???i thi???u v??? shopmxi</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="?????a ch??? email" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Nh???n c??c b???n c???p nh???t g???n ????y nh???t t???<br />trang web c???a ch??ng t??i...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Phan H???u M???nh</p>
					<p class="pull-right">Thi???t k??? <span><a target="_blank" href="http://www.themeum.com">hihihi</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	


    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
	
</body>
</html>