<!DOCTYPE html>
<html>
<head>
	<title>Сім’я-SC</title>
	<link rel="stylesheet" type="text/css" href="css/style_project_city.css
	">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script
    src="http://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous">
   </script>
   <script type="text/javascript" src="js/slick.js"></script>
   <script type="text/javascript" src="js/slick.min.js"></script>
   <style type="text/css">
   .rozklad{
   	border: 2.5px solid #00953e;
   }
   .birth{
   		position: relative;
   		background: none;
   }
  	.headBottom > #wrapper{
  		width: 60.8854167%;
  		margin: 0 auto;
  	}
  	.h2TextBirth{
  		padding-top: 0;
  		left: 21%;
  		z-index: 9;
  		position: absolute;
  		width: 58%;
  		top: 25%;
  		margin: 0 auto;
  		border: none;
  	}
  	#main{
  		position: absolute;
  		z-index: 10;
  	}
  	.fade div{
  		width: 100%;
  		height: 100vh;
  	}
  	.fade div:nth-child(2){
  		background: url(img/cz.jpg) no-repeat;
  		background-size: cover;
  	}
  	.fade div:nth-child(4){
  		background: url(img/kz.jpg) no-repeat;
  		background-size: cover;
  	}
  	.fade div:nth-child(3){
  		background: url(img/kidsG.jpg) no-repeat;
  		background-size: cover;
  	}
  	.fade div:nth-child(1){
  		background: url(img/library.jpg) no-repeat;
  		background-size: cover;
  	}
  	.slick-arrow{
  		display: none!important;
  	}
	@media screen and (max-width: 4000px){
		#wrapper{
			width: 100%;
		}
	}
	@media screen and (max-width: 1680px){
  		.listWrap div img{
			margin:.5vw auto .3vw;
			width: 24%;
		}
		.listWrap div h2{
			font-size: 1.4vw;
			margin-bottom: .3vw;
		}
		.listWrap div p{
			font-size: 1.2vw;
		}
	}
	@media screen and (max-width: 1024px){
		.h2TextBirth{
			font-size: 4vw;
			padding-top: 0;
			top: 25%;
		}
	}
	@media screen and (max-width: 800px){
		.headBottom > #wrapper{
			width: 100%;
		}
		#wrapper{
			width: 100%;
		}
		.maintitle {
    		background-size: 20% 9px,20% 9px;
		}
	}
	@media screen and (max-width: 768px){
		.h2TextBirth{
			top: 34%;
		}
	}
	@media screen and (max-width: 640px){
		.h2TextBirth{
			top: 40%;
			width: 80%;
			left: 6%;
			font-size: 3.6vw;
		}
		.listWrap div img{
			margin:.5vw auto .3vw;
			width: 22%;
		}
		.listWrap div h2{
			font-size: 2.1vw;
			margin-bottom: .3vw;
		}
		.listWrap div p{
			text-align: justify;
			font-size: 1.8vw;
		}
	}
	@media screen and (max-width: 480px){
		.listWrap div{
			width: 50%;
			margin: 0 auto;
			display:none;
		}
		.fade{
			height: 100%;
		}
		.fade div{
			height: 100%;
		}
		.listWrap{
			overflow: hidden;
		}
		.h2TextBirth{
			padding: 0;
			left: 0;
			width: 100%;
			margin: 0;
			top: 32%;
			font-size: 5.8vw;
		}
		.birth .fade .slick-slide{
			background-size: cover;

		}
		.listWrap{
			justify-content: space-around;
		}
		.listWrap div img{
			margin:5% auto 1vw;
			height: 40%;
			width: auto;
		}
		.listWrap div h2{
			font-size:5vw;
			margin-bottom: .3vw;
		}
		.GalleryBoxSC{
			height: unset;
		}
	}
	.GalleryBoxSC{
		box-sizing:padding-box;
		padding-top:20px;
		padding-bottom:20px;
	}
	@media screen and (orientation: portrait){
		.fade{
			height: 100%;
		}
		.fade div{
			height: 100%;
			background-size: 100% auto;
		}

	}
	
	@media screen and (orientation: portrait) , screen and (max-width: 480px){
	.galleryBirth .birth{
		max-height: 100vh;
	}
	.GalleryBoxSC{
  		min-height: 1px;
  		max-height: 300px;
  		height:unset;
	}
}.loading{
	background:gray;
	display:block;
	height:5px;
	position:absolute;
	width:100%;
	z-index:10;
	bottom:0;
	-moz-animation-duration: 4.4s;
  -webkit-animation-duration: 4.4s;
  animation-duration: 4.4s;
  -moz-animation-name: load;
  -webkit-animation-name: load;
  animation-name: load;
animation-iteration-count: infinite;
}
@keyframes load {
	0% {right:100%;}
	100% {right:0;}
}
   </style>
</head>
<body>
					<div class="galleryBirth">
						<div class="birth">
							<header id="main">
										<div class="headBottom">
												<div id="wrapper">
												<h1 id="logo"><a href="index.php">logo</a></h1>
													<ul id="nav">
														<li>
															<a href="AboutUs.php">
																Про нас 
															</a>
														</li>
														<li>
															<a href="SC.php" class="active">
																Соціальний центр "Сім’я"
															</a>
														</li>
														<li>
															<a href="our_project.php">
																Проекти
															</a>
														</li>
														<li>
															<a href="LIVE.php">
																LIVE
															</a>
														</li>
														<li>
															<a href="People.php">
																Люди
															</a>
														</li>
													</ul>
												</div>
										</div>
										</header>
										<div class="filter"></div>
											<h2 class="h2TextBirth">Комунікаційний та комунікативний простір для Харків’ ян</h2>
											<div class="fade">
												<div>
													
												</div>
												<div>
												</div>
												<div>
												</div>
												<div>
												</div>
											</div>
											<div class="loading"></div>
											<div class="GalleryBoxSC">
												<div class="listWrap">
													<div>
														<img src="img/bookListW.png">
														<h2>Бібліотека</h2>
													</div>
													<div>
														<img src="img/desctop.png">
														<h2>Комп’ютерна зона</h2>
													</div>
													<div>
														<img src="img/kidsBlockL.png">
														<h2>Дитячя кімната</h2>
													</div>
													<div>
														<img src="img/VideoL.png">
														<h2>Конференц-зал</h2>
													</div>
												</div>
											</div>
										</div>
								</div>
				<!-- !!! -->
					
					<h2 class="maintitle">Розклад</h2>
						<div class="rozklad">
							<div class="malenkaiaPalka"></div>
							<iframe src="https://calendar.google.com/calendar/embed?title=%D0%A0%D0%BE%D0%B7%D0%BA%D0%BB%D0%B0%D0%B4&amp;showDate=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%2333cc00&amp;src=family246a%40gmail.com&amp;color=%231B887A&amp;ctz=Europe%2FKiev" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no">
							<div class="malenkaiaPalka"></div>
							</iframe>
						</div>
						<p class="align">
							<a href="library.php">Перейти до бібліотеки</a>
						</p>
	<script type="text/javascript">
	  $('.fade').slick({
	  fade:true,
	  dots: false,
	  infinite: true,
	  speed: 1000,
	  slidesToShow: 1,
	  adaptiveHeight: false,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 4000,
	});

	  if($(".listWrap > div").css("display") == "none"){
	  	$(".listWrap > div:eq("+$(".slick-active").attr("data-slick-index")+")").css({"display":"block"})}
	  	var intervalID = setInterval(function(){$(".slick-slide").css("background-position","center "+(-$(".GalleryBoxSC").height())+"px");$(".listWrap > div").css("display","none"); $(".listWrap > div:eq("+$(".slick-active").attr("data-slick-index")+")").css({"display":"block"});$(".listWrap > div > p").css({"display":"none"});if($(".listWrap").css("overflow")!= "hidden"){$(".listWrap > div").css("display","block");$(".listWrap > div > p").css({"display":"block"});clearInterval(intervalID);}}, 90);
	  
	
	  $(".slick-slide").css("background-position","center "+(-$(".GalleryBoxSC").height())+"px")
	  $(window).resize(function(){
	  	$(".slick-slide").css("background-position","center "+(-$(".GalleryBoxSC").height())+"px")



	  	if($(".listWrap > div").css("display") == "none"){
	  	$(".listWrap > div:eq("+$(".slick-active").attr("data-slick-index")+")").css({"display":"block"})
	  }
	  var intervalID = setInterval(function(){$(".slick-slide").css("background-position","center "+(-$(".GalleryBoxSC").height())+"px");$(".listWrap > div").css("display","none"); $(".listWrap > div:eq("+$(".slick-active").attr("data-slick-index")+")").css({"display":"block"});$(".listWrap > div > p").css({"display":"none"});if($(".listWrap").css("overflow")!= "hidden"){$(".listWrap > div").css("display","block");$(".listWrap > div > p").css({"display":"block"});clearInterval(intervalID);}}, 90);
	  	

	  });
	

	 </script>
<?php include("footer.php"); ?>