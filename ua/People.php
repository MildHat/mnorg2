<link rel="stylesheet" type="text/css" href="css/style_project_city.css
	">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
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
   		#maintitle{
   	    	background-size: 30% 9px,30% 9px;
   		}
   	}		
   	@media screen and (max-width: 640px){
   		#maintitle{
   	    	background-size: 30% 9px,30% 9px;
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
									<a href="People.php" class="active">
										Люди
									</a>
								</li>
							</ul>
						</div>
				</div>
				</header>
<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
		<div class="repeatPOC"></div>
		<h2 class="maintitle" id="maintitle">Люди</h2>
		<div id="wrapper">
		<div class="PHPPeople">
		
			<?php
			$id = 0;
			$page=$_GET['page'];
			$pages=10*$page;
			require("/home/mnorg2/public_html/sikret/adminka/inc/maxId.php");
			include("/home/mnorg2/public_html/sikret/adminka/inc/connection.php");
			if ($maxIdPeople == 0)
			{
				echo "<h3>Людей немає</h3>";
			}
			$result = mysqli_query($con, "SELECT * FROM people ORDER BY `Date` desc LIMIT $pages, 10");
			$string = mysqli_fetch_all($result);
			// var_dump($string);
			$count=count($string);
			for($id=0;$id<$count;$id++)
			{
				
				
				// var_dump($string);
				$fullName=$string[$id][1]." ".$string[$id][2];
				if (!is_null($string))
				{
				$title_image = $string[$id][4];
				$fullTitleImage="../sikret/adminka/" . $title_image;
				echo "<div class='people'>
					<div class='peopleImg'>
						<div class='imageWidth'>
							<a href='#'>
								<img src='"; print($fullTitleImage);echo"'>
							</a>
								<div class='hoverBlockImg'>
								<h2>
									";print($string[$id][3]);echo"
								</h2>
								</div>
						</div>
					</div>
					<div class='peopleBlockRight'>
						<h2 class='title'>";print($fullName);echo"</h2>
				<p class='description'>";print($string[$id][5]);echo"</p>
					</div>
				</div>";
				}
			}
				
			?>
			</div>
		</div>
			<div id="wrapper">
		<div class="boxnavigate">
		<!-- <a href="#" class="navPrev"><img src="img/prevnav.png"></a> -->
		<ul class="navigate">
			<li>
			<?php
				$idWeNeed=mysqli_query($con,"SELECT COUNT(*) from people;");
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
	var lengthPeople = $(".PHPPeople").children().length;
	$(".boxnavigate").css({"display":"none"})
	if(lengthPeople > 10){
		$(".boxnavigate").css({"display":"block"})
	}

</script>
<?php include("footer.php"); ?>
</body>
</html>