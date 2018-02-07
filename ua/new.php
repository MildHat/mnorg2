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
   <style type="text/css">
   .title{
   	width: 85%;
   	text-align: center;
   	margin-left: 7.5%;
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
   	@media screen and (max-width: 800px){
		.description{
	   		font-size: 2.05vw;
	   	}
	   	.title{
	   		margin-top: 0;
	   		font-size: 2.6vw;
	   	}
   	}
   	@media screen and (max-width: 480px){
   		.unicum ul li {
    	margin-left: 2.5%;
		}
		.title{
			margin-top: 4vw;
			font-size: 5vw;
		}
		.description{
	   		font-size: 4vw;
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
<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
		<h2 class="maintitle">Усi новини</h2>
	<div id="wrapper">
	<div class="PHPNew">
		<?php
			$id = 0;
			$page=$_GET['page'];
			$pages=10*$page;
			require("/home/mnorg2/public_html/sikret/adminka/inc/maxId.php");
			include("/home/mnorg2/public_html/sikret/adminka/inc/connection.php");
			if ($maxIdNews == 0)
			{
				echo "<h3>Новин немає</h3>";
			}
			$result = mysqli_query($con, "SELECT * FROM news ORDER BY `Date` desc LIMIT $pages, 10");
			$string = mysqli_fetch_all($result);
			$count=count($string);
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
									<input name='newsId' type='text' hidden value='"; print($string[$id][0]);echo"'>
									<img src='img/clock.png'>
										<ul>
										<li>"; print($time); echo"</li>
										</ul>
									</div>
							<p class='description'>";
						print($description);
						echo "</p>
							<button type='submit' class='button'>Детальніше</button>
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
				$idWeNeed=mysqli_query($con,"SELECT COUNT(*) from news;");
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
	var lengthNew = $(".PHPNew").children().length;
	$(".boxnavigate").css({"display":"none"})
	if(lengthNew > 10){
		$(".boxnavigate").css({"display":"block"})
	}
</script>
<?php include("/home/mnorg2/public_html/ua/footer.php"); ?>