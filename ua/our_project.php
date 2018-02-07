<!DOCTYPE html>
<html>
<head>
	<title>Сім’я-головна</title>
	<link rel="stylesheet" type="text/css" href="css/style_project_city.css
	">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script
    src="http://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous">
   </script>
   <style type="text/css">
   		@media screen and (max-width: 800px){
   			#wrapper{
   				width: 100%;
   			}
   		}
   		@media screen and (max-width: 640px){
	   		#maintitle{
	   			    margin-top: -10vh;
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
									<a href="our_project.php" class="active">
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
	<div class="repeatPOC"></div>
	<h2 class="maintitle" id="maintitle">Наші проекти</h2>
	<div id="wrapper">
		<?php
			$id = 0;
			require("/home/mnorg2/public_html/sikret/adminka/inc/maxId.php");
			include("/home/mnorg2/public_html/sikret/adminka/inc/connection.php");
			$result = mysqli_query($con, "SELECT * FROM projects  ORDER BY `Date` desc");
			$string = mysqli_fetch_all($result);
			// var_dump($string);
			$count=mysqli_query($con,"SELECT COUNT(*) from projects");
			$count=mysqli_fetch_assoc($count);
			$count=$count['COUNT(*)'];
			for($id = 0; $id <$count; $id++){
				if(!is_null($string)){
					$text = $string[$id][3];
					$title = $string[$id][1];
					$image = "../sikret/adminka/" . $string[$id][2];

					echo "
						<div class='PHPProjects'>
							<div class='ItForYou'>
								<div class='itleft'>
									<img src='$image'>
								</div>
								<div class='itright'>
									<h2>";print($title);echo "</h2>
									<p>";print($text); echo "</p>
								</div>
							</div>
						</div>
						<hr>
					";
				}
			}
		?>
	</div>
	<!-- <div id="wrapper">
		<div class="boxnavigate">
		<a href="#" class="navPrev"><img src="img/prevnav.png"></a>
		<ul class="navigate">
			
		</ul>
		<a href="#" class="navNext"><img src="img/nextnav.png"></a>
		</div>
	</div> -->
<?php include("footer.php"); ?>
<!-- <script type="text/javascript">
	var PHPProjects = $(".PHPProjects").children().length;
	$(".boxnavigate").css({"display":"none"})
	if(PHPProjects > 10){
		$(".boxnavigate").css({"display":"block"})
	}

</script> -->
</body>
</html>