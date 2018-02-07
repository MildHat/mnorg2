<!DOCTYPE html>
<html>
<head>
	<title>Сім’я-LIVE</title>
	<link rel="stylesheet" type="text/css" href="css/style_project_city.css
	">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="css/orbit.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script
    src="http://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous">
   </script>
   <script type="text/javascript" src="js/slick.min.js"></script>
   <script type="text/javascript" src="js/slick.js"></script>
   <style type="text/css">
   .button{
   		display: none;
   	}
   	@media screen and (max-width: 1024px){
		.rblock .unicum ul li {
	    	font-size: 1.6vw;
		}
	}
   	@media screen and (max-width: 640px){
		.description {
	   		font-size: 2.7vw;
		}
		.rblock .unicum ul li {
	    	font-size: 3.5vw;
		}
		.title{
			font-size: 5vw;
		}
		.unicum ul li {
    		width: 80%;
    		text-align: left;
    		font-size:;
		}
		#maintitle{
   	    	background-size: 30% 9px,30% 9px;
   	    	margin-top: -10vh;
   		}	
	}
   	@media screen and (max-width: 480px){
   		.rblock {
    		width: 70%;
		}
		.description {
	   		font-size: 3.5vw;
		}
		.rblock .unicum ul li {
	    	font-size: 3vw;
		}
		.title{
			font-size: 5vw;
		}
	}
	.gallery{
		border:2px solid #009540;
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
									<a href="LIVE.php" class="active">
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
	<div class="repeatPOC"></div>
	<h2 class="maintitle" id="maintitle">LIVE</h2>
		<?php
			
			require("/home/mnorg2/public_html/sikret/adminka/inc/maxId.php");
			include("/home/mnorg2/public_html/sikret/adminka/inc/connection.php");

			$id = $maxIdLive;

			$query = mysqli_query($con, "SELECT * FROM live WHERE `id` = '$id'");
			$result = mysqli_fetch_assoc($query);
		
			if(!is_null($result)){
					
				$path = $result['path'];
				$time =  substr($result['time'], 0, 16);
				$text = $result['text'];
			
				echo "
					<div class='gallery'><!--
						<div class='ramka ramka1'></div>
						<div class='ramka ramka2'></div>
						<div class='ramka ramka3'></div>
						<div class='ramka ramka4'></div>-->
					<div class='greentitle'>
					<img src='img/right.png'>
						<p>Пряма трансляція засідання директорату "; print($time); echo "</p>
						<img src='img/left.png'>
					</div>
					<div class='compumpuaxter'>
						<div class='unicum'>
								<input name='liveId' type='text' hidden value='$id' />
								<img src='img/clock.png'>
									<ul>
									<li>"; print($time); echo"</li>
									</ul>
								</div>
			 			<iframe width='100%' src='";print($path);echo "' frameborder='0' allowfullscreen></iframe>
					</div>
				";
				echo "</div>";
				}
		?>
		</div>
	<div id="wrapper">
	<div class="PHPNew">
		<?php
			$id = 0;
			$page=$_GET['page'];
			$pages=10*$page;
			require("/home/mnorg2/public_html/sikret/adminka/inc/maxId.php");
			include("/home/mnorg2/public_html/sikret/adminka/inc/connection.php");
			if ($maxIdLive == 0)
			{
				echo "<h3>Новин немає</h3>";
			}
			$result = mysqli_query($con, "SELECT * FROM live ORDER BY `time` desc LIMIT $pages, 10");
			$string = mysqli_fetch_all($result);
			// var_dump($string);
			$count=count($string);
			for($id=1;$id<$count;$id++)
			{

				if (!is_null($string))
				{
				$path = $string[$id][3];
				$time =  substr($string[$id][6], 0, 16);
				$text = $string[$id][2];
				echo "
				<form method='post' action='moreinfo_live.php'>
				<div class='xelement'>
					<div class='elblock'>
							<div class='bgtime'>
								<iframe width='100%' height='auto' src='" . $path . "' frameborder='0' allowfullscreen></iframe>
							</div>
					</div>";
					echo "
					<div class='rblock'>
						<h2 class='title'>";
					print($string[$id][1]);
					echo "</h2>
					<div class='unicum'>
								<input name='liveId' type='text' hidden value='$id' />
								<img src='img/clock.png'>
									<ul>
									<li>"; print($time); echo"</li>
									</ul>
								</div>
						<p class='description'>";
					print($text);
					echo "</p>
						<button type='submit' class='button'>Детальніше...</button>
						</div>
						</div>
						</form>
					";
				}
			}
		?>
		</div>
		<div class="boxnavigate">
		<!-- <a href="#" class="navPrev"><img src="img/prevnav.png"></a> -->
		<ul class="navigate">
			<li>
			<?php
				$idWeNeed=mysqli_query($con,"SELECT COUNT(*) from live;");
				$idWeNeed=mysqli_fetch_assoc($idWeNeed);
				$liMaxId=$idWeNeed['COUNT(*)']/10;
				$liMaxId=(int)$liMaxId;
				for($i=0;$i<=$liMaxId;$i++){
					echo"<a href='?page=$i' class='href1'>"; print($i+1);echo"</a>";
				}
			 ?>
			</li>
		</ul>
		<!-- <a href="#" class="navNext"><img src="img/nextnav.png"></a> -->
		</div>
	</div>
	<script type="text/javascript">
	var PHPNew = $(".PHPNew").children().length;
	$(".boxnavigate").css({"display":"none"})
	if(PHPNew > 10){
		$(".boxnavigate").css({"display":"block"})
	}

</script>
<?php include("/home/mnorg2/public_html/ua/footer.php"); ?>
	<script type="text/javascript">
		$('.fade').slick({
		  dots: false,
		  infinite: true,
		  speed: 1000,
		  slidesToShow: 1,
		  adaptiveHeight: true,
		  slidesToScroll: 1,
		  autoplay: true,
		  autoplaySpeed: 5000,
		});
	</script>
</body>
</html>
