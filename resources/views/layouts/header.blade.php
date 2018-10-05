
<!DOCTYPE html>
<html>
   <head>
	   <title>Main Page</title>

	    <!-- meta -->
		<meta charset="utf-8" />
   		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- css -->
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/pace.css')}}">
	    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
		<link rel="stylesheet" href="{{asset('css/style.css')}}">  
		<link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
		<link rel='stylesheet' media='screen and (min-width: 100px) and (max-width: 799px)' href="{{asset('css/mobile-style.css')}}" />

		<link rel="stylesheet" href="{{asset('css/sf-webfont.css')}}">

	    <!-- js -->
	    <script src="{{asset('js/jquery-2.1.3.min.js')}}"></script>
	    <script src="{{asset('js/bootstrap.min.js')}}"></script>
			<script src="{{asset('js/pace.min.js')}}"></script>
			<script src="{{asset('js/modernizr.custom.js')}}"></script>
			<script src="{{asset('js/swiper.min.js')}}"></script>

		</head>
		<body>
        <style>
    
    .swiper-container {
        width: 100%;
        height: 100%;
        margin-left: auto;
        margin-right: auto;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    </style>
    <!-- Swiper -->
  



        <div class="overlay overlay-hugeinc" style="z-index:100000000000;">
			<button type="button" class="overlay-close"><span  class="ion-ios-close-empty"></span></button>
			<nav>
				<ul>
					<li><a href = "{{url('news')}}">Новости</a></li>
					<li><a asp-controller="Home" asp-action="Courses">Исследования</a></li>
					<li><a asp-controller="Home" asp-action="Projects">Видео</a></li>
					<li><a asp-controller="Home" asp-action="About">Архив</a></li>
				</ul>
			</nav>
		</div>
     
			<div class="container">	
				<header id="site-header">
					<div class="row">
						<div class="col-md-4 col-sm-5 col-xs-8">
							<div class="logo" >
								<a asp-controller="Home" asp-action="Index"><img id = "log" src="{{asset('img/smalllogo.svg')}}" class="svg_logo" style=""></a>
							</div>
						</div><!-- col-md-4 -->
						<div class="col-md-8 col-sm-7 col-xs-4">
							<nav class="main-nav" role="navigation">
								<div class="navbar-header">
									<button style="margin-top:-4px;"type="button" id="trigger-overlay" class="navbar-toggle">
										<span  class="ion-navicon"></span>
									</button>
								</div>

								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav navbar-right" style="margin-top:-0.4em;">
										<li class="cl-effect-11"><a asp-controller="Article" asp-action="List" style="font-weight: 600;">Новости</a></li>
										<li class="cl-effect-11"><a asp-controller="Home" asp-action="Supplies" style="font-weight: 600;">Услуги</a></li>
										<li class="cl-effect-11"><a asp-controller="Home" asp-action="Courses" style="font-weight: 600;">Курсы</a></li>
									<li class="cl-effect-11"><a asp-controller="Home" asp-action="Projects" style="font-weight: 600;">Проекты</a></li>
									<li class="cl-effect-11"><a asp-controller="Home" asp-action="About" style="font-weight: 600;">О центре</a></li>
  								</ul>
								  <style>
									  
									  .cl-effect-11
									  {
									  }
									  </style>
							</div><!-- /.navbar-collapse -->
						</nav>
				
						<div  id="header-search-box" style="margin-top:-6px;">
							<a id="search-menu" href="#"><span onclick="deletez()" id="search-icon" class="ion-ios-search-strong"></span></a>
<div style="width:337px; margin-right:30px;margin-top:-41px;  " id="search-form" class="search-form">
								<form role="search" method="get" id="searchform" action="#">
<input style="border-radius: 0.1em; padding-left:3%; width:100%;height:40px;  background: #dcddd8;" type="search" placeholder="Search" required>
									<button  type="submit"  style="margin-top:-20px;">
										</button>
								</form>				
							</div>
						</div>
					</div><!-- col-md-8 -->
				</div>
			
			</header>
		</div>

   <div class="sweeper-nav">  
         <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src = "{{asset('img/web-apps.svg ')}}" width="100%" height="100%" ></div>
            <div class="swiper-slide"><img src = "{{asset('img/intro-cs.svg ')}}" width="100%" height="100%"></div>
            <div class="swiper-slide"><img src = "{{asset('img/gamedev.svg ')}}" width="100%" height="100%"></div>
        </div>
   
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
   </div>
    <!-- Swiper JS -->
    <script src="~/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true
        
    });
    </script>