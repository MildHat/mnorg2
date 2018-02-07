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
   		.center{
   			width: 90%;
   			margin:20px auto 0;
   		}
		#img{
			margin-right: 4%;
			float: left;
			width: 40%;
		}
		.InfoImg{
			width: 100%;
		}
		.InfoImg h2{
			text-align: center;
    		margin-bottom: 3vw;
			font-family: "Open Sans";
		}
		.InfoPText{
			box-sizing: border-box;
			padding-right: 5%;
			padding-left: 5%;
			text-align: justify;
		}
		.imgG{
			width: 90%;
		}
		.center .slick-next{
   				margin-right: 6%;
   			}
   			.center .slick-prev{
   				margin-left: 6%;
   			}
   		@media screen and (max-width: 800px){
   			#wrapper{
   				width: 100%;
   			}
   			.center .slick-next{
   				margin-right: 6%;
   			}
   			.center .slick-prev{
   				margin-left: 6%;
   			}

   			#img {
    			width: 60%;
			}
   		}
   		@media screen and (max-width: 640px){
   			.InfoImg h2{
    			margin-top: -7vh;
    			margin-bottom: 3vw;
			}
   		}
   		@media screen and (max-width: 480px){
   			.center .slick-next{
   				margin-right: 12%;
   			}
   			.center .slick-prev{
   				margin-left: 12%;
   			}
   			#img {
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
					$mainNewsId=$_POST['newsId'];
					$resultnews = mysqli_query($con, "SELECT `id`,`title image`,`title`, `text`, `title_eng`, `text_eng`, `Date` FROM news where `id`=$mainNewsId;");
					$stringnews = mysqli_fetch_assoc($resultnews);
					$maxIdPhotos=mysqli_query($con,"SELECT max(`realId`) FROM newsPhoto WHERE `id`=$mainNewsId;");
				 	$maxIdPhotos= mysqli_fetch_assoc($maxIdPhotos);
				 	$maxIdPhotos=$maxIdPhotos['max(`realId`)'];
				 
					$firstPhoto=mysqli_query($con,"SELECT `path` FROM newsPhoto WHERE `realId`=($maxIdPhotos-5);");
					$firstPhoto=mysqli_fetch_assoc($firstPhoto);
					$secondPhoto=mysqli_query($con,"SELECT `path` FROM newsPhoto WHERE `realId`=($maxIdPhotos-4);");
					$secondPhoto=mysqli_fetch_assoc($secondPhoto);
					$thirdPhoto=mysqli_query($con,"SELECT `path` FROM newsPhoto WHERE `realId`=($maxIdPhotos-3);");
					$thirdPhoto=mysqli_fetch_assoc($thirdPhoto);
					$forthPhoto=mysqli_query($con,"SELECT `path` FROM newsPhoto WHERE `realId`=($maxIdPhotos-2);");
					$forthPhoto=mysqli_fetch_assoc($forthPhoto);
					$fifthPhoto=mysqli_query($con,"SELECT `path` FROM newsPhoto WHERE `realId`=($maxIdPhotos-1);");
					$fifthPhoto=mysqli_fetch_assoc($fifthPhoto);
					$sixthPhoto=mysqli_query($con,"SELECT `path` FROM newsPhoto WHERE `realId`=($maxIdPhotos);");
					$sixthPhoto=mysqli_fetch_assoc($sixthPhoto);
					echo "<div class='moreInfo'>
						<div class='InfoImg'>
						<!--</div>
						<div class='InfoRight'>-->
							<h2>"; print($stringnews['title']); echo"</h2>

								<!--<div class='TextInfo'>-->
						<p class='InfoPText'>
						<img id='img' src='"; $x="../sikret/adminka/" . $stringnews['title image']; print($x); echo"'/>";
							print($stringnews['text']);
						echo "</p>
					</div>

						</div>
					</div>";
					
					if(!is_null($firstPhoto) || !is_null($secondPhoto) || !is_null($thirdPhoto) || !is_null($forthPhoto) || !is_null($fifthPhoto) || !is_null($sixthPhoto)){
								echo "<div class='center'>";
								if(!is_null($firstPhoto)){
							    echo "<div><img src='"; $ph1="../sikret/adminka/" . $firstPhoto['path']; print($ph1); echo"' class='imgG'></div>";}
							    if(!is_null($secondPhoto)){echo "
							    <div><img src='"; $ph2="../sikret/adminka/" . $secondPhoto['path']; print($ph2); echo"' class='imgG'></div>";}
								if(!is_null($thirdPhoto)){ echo "
							    <div><img src='"; $ph3="../sikret/adminka/" . $thirdPhoto['path']; print($ph3); echo"' class='imgG'></div>";}
								if(!is_null($forthPhoto)){;echo "
							    <div><img src='"; $ph4="../sikret/adminka/" . $forthPhoto['path']; print($ph4); echo"' class='imgG'></div>";}
								if(!is_null($fifthPhoto)){ echo "
							    <div><img src='"; $ph5="../sikret/adminka/" . $fifthPhoto['path']; print($ph5); echo"' class='imgG'></div>";}
								if(!is_null($sixthPhoto)){echo "
							    <div><img src='"; $ph6="../sikret/adminka/" . $sixthPhoto['path']; print($ph6); echo"' class='imgG'></div>";}
					echo "</div>";}
					?>
				</div>
				<script type="text/javascript">
					$('.center').slick({
					  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
});
				</script>
<?php include("footer.php"); ?>