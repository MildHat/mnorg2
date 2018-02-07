<!DOCTYPE html>
<html>
<head>
	<title>Сім’я-головна</title>
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
   		.fade{
   			margin-top: 20px;
   		}
   		@media screen and (max-width: 800px){
   			#wrapper{
   				width: 100%;
   			}
   		}
   </style>
</head>
<body>
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
									<a href="SC.php">
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
				<div id="wrapper">
					<?php
					// include ("/home/mnorg2/public_html/admin.mn2004.org/query.php");
					include("/home/mnorg2/public_html/sikret/adminka/inc/connection.php");
					$mainLiveId=$_POST['liveId'];
					$resultnews = mysqli_query($con, "SELECT `id`,`path`,`title`, `text`, `title_eng`, `text_eng` FROM live where `id`=$mainLiveId;");
					$stringnews = mysqli_fetch_assoc($resultnews);
					echo "<div class='moreInfo'>
						<div class='InfoImg'>
							";
							$path = $stringnews['path'];
							echo  "<iframe width='100%' height='100%' src='" . $path . "' frameborder='0' allowfullscreen></iframe>
						</div>
						<div class='InfoRight'>
							<h2>"; print($stringnews['title']); echo"</h2>
						</div>
					</div>
					<div class='TextInfo'>
						<p class='InfoPText'>";
							print($stringnews['text']);
						echo "</p>
					</div>
					<div class='fade'>
							     <div><img src='img/library.jpg' class='imgG'>
							     		<h2 class='localH2Gallery'>Бібліотека1</h2>
							     </div>
							     <div><img src='img/library.jpg' class='imgG'>
							     	<h2 class='localH2Gallery'>Бібліотека2</h2>
							     </div>
							     <div><img src='img/library.jpg'  class='imgG'>
							     	<h2 class='localH2Gallery'>Бібліотека3</h2>
							      </div>
					</div>";
					?>
				</div>
				<script type="text/javascript">
					$('.fade').slick({
					  dots: false,
					  infinite: true,
					  speed: 1000,
					  slidesToShow: 1,
					  adaptiveHeight: true,
					  slidesToScroll: 1,
					  autoplay: false,
					  autoplaySpeed: 2000,
					});
				</script>
				<script type="text/javascript" src="js/js.js"></script>
<?php include("footer.php"); ?>