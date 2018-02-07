<!DOCTYPE html>
<html>
<head>
	<title>Головна</title>
	<link rel="stylesheet" type="text/css" href="css/style_project_city.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script
	src="http://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous">
   </script>
   <style type="text/css">
   	.headBottom{
   		margin-bottom: 0;
   	}
	.button{
		display:block;
		margin:0 auto;
	}
   	@media screen and (max-width: 1680px){
		#wrapper{
			width:80%;
		}
		.description{
			padding-right:15%;
			line-height:unset;
   		}
   	}
	@media screen and (max-width:1280px){
		#wrapper{
			width:60%;
		}
		.description{
   			font-size: 1.4vw;
   		}
	}
   	.unicum{
   		position: static;
   		background: none;
   		-webkit-transform: rotate(0deg);

		-ms-transform: rotate(0deg);

		transform: rotate(0deg);
   		padding: 0;
   		height: unset;
   		margin-top: -0.4vw;
   	}
   	.unicum img{
   		display: none;
   	}
   	.unicum ul{
   		margin: 0;
   		-webkit-transform: rotate(0deg);

		-ms-transform: rotate(0deg);

		transform: rotate(0deg);
   	}
   	.unicum ul li{
   		color: #a7a7a7;
   	}

   	.description{
   		font-size: 1.05vw;
   	}
   	@media screen and (max-width: 1024px){
		.elblock{
			width:40%;
		}
   		.title{
   			font-size: 3vw;
   		}
   		.unicum ul li {
    		font-size: 1.7vw;
		}
   	}
	@media screen and (max-width: 800px){
		#wrapper{
			width:100%;
		}
		.description{
   			font-size: 2vw;
   		}
	}
   	@media screen and (max-width: 640px){
		.description{
			padding-left:10px;
			padding-right:10px;
   			font-size: 3vw;
   		}
   		.title{
			margin-top:0;
   			font-size: 5vw;
   		}
   		.unicum ul li {
    		font-size: 2vw;
		}
   	}
   	@media screen and (max-width: 480px){
		.title{
			margin-top:5px;
   		}
   		.unicum ul li {
    	margin-left: 2.5%;
		}
		.unicum ul li {
    		font-size: 3vw;
		}
		.elblock{
			width:100%;
		}
		.description{
   			font-size: 4vw;
   		}
   	}
   </style>
</head>
<body>
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
					<h2 class="h2TextBirth">Від народження ми всі різні <br> Турбота про якість життя людей<br>Небайдужість до майбутнього рідної країни<br> Об'єднує нас.</h2>
				</div>
</div>
<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
		<h2 class="maintitle">Наші новини</h2>
		<!-- <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkhmgs&tabs=timeline&width=300&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> -->
	<div id="wrapper" class="stoProc">
		<div class="Box">
			<?php
			$id = 0;
			require("/home/mnorg2/public_html/sikret/adminka/inc/maxId.php");
			include("/home/mnorg2/public_html/sikret/adminka/inc/connection.php");
			if ($maxIdNews == 0)
			{
				echo "<h3>Новин немає</h3>";
			}
			$result = mysqli_query($con, "SELECT * FROM news ORDER BY `Date` desc LIMIT 0,3");
			$string = mysqli_fetch_all($result);
			$count=count($string);
			// var_dump($string);
			for($id = 0; $id < $count; $id++)
			{
				if (!is_null($string))
				{
				$title_image = $string[$id][2];
				$fullTitleImage="../sikret/adminka/" . $title_image;
				$time =  substr($string[$id][4], 0, 16);
				$description = $string[$id][7];
				echo "
                <form method='post' action='moreinfo.php'>
				<div class='xelement'>
					<div class='elblock'>
							<div class='bgtime'>
								<img id='img' src='$fullTitleImage' width='30%' height='auto'>
							</div>
					</div>";
					echo "
					<div class='rblock'>
						<h2 class='title'>";

					print($string[$id][1]);
					echo "</h2>
						<div class='unicum'>
                                <input name='newsId' type='text' hidden value='"; print($string[$id][0]);echo"' />
								<img src='img/clock.png'>
									<ul>
									<li>"; print($time); echo"</li>
									</ul>
								</div>
						<p class='description'>";
					print($description);
					echo "</p>
						<button type='submit' class='button'>Детальніше</a>
						</div>
						</div>
                        </form>
					";
				}
			}
		?>
		
		</div>
		</div>
		<p class="align">
			<a href="new.php">
				
				Читати всі новини
			
			</a>
		</p>
	</div>
<?php include("footer.php"); ?>