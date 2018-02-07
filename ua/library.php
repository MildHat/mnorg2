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
   </script>
      <script type="text/javascript" src="js/slick.js"></script>
   <script type="text/javascript" src="js/slick.min.js"></script>
   <style type="text/css">
   	.headBottom{
   		margin-bottom: 0;
   	}
   	.galleryBlock{
   		display: block;
		height: 100%;
   		width: 100%;
   		position: relative;
   	}
   	.localH2Gallery{
   		bottom:0;
   		position: absolute;
   	}
   	.maintitle{
   		line-height: 0.8;
   	}
   	@media screen and (max-width: 1024px){
   		#wrapper{
   			width: 80%;
   		}
   	}
   	@media screen and (max-width: 768px){
   		#wrapper{
   			width: 95%;
   		}
   		.maintitle{
   			margin-top: 12vw;
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
				<h2 class="maintitle">Список <br> літератури</h2>
					<?php
						include ("/home/mnorg2/public_html/sikret/adminka/inc/maxId.php");
						include ("/home/mnorg2/public_html/sikret/adminka/inc/connection.php");
						
					 echo"
					<div id='wrapper' class='letterJs ob'>
						<div class='listBook'>
								<div class='letter'>
									<h2 class='bookLetter'>A</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^а|А' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
											echo "
										</li>
									</ul>
								</div>
								<div class='letter'>
									<h2 class='bookLetter'>Б</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^б|Б' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
											echo "
										</li>
									</ul>
								</div>
								<div class='letter'>
									<h2 class='bookLetter'>В</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^в|В' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo" </li>
									</ul>
								</div>
								<br>
								<div class='letter'>
									<h2 class='bookLetter'>Г</h2>
									<ul class='begName'>
										<li>";

											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^г|Г' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";

										echo "</li>
									</ul>
								</div>
								<div class='letter'>
									<h2 class='bookLetter'>Д</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^д|Д' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div>
								<div class='letter'>
									<h2 class='bookLetter'>Е</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^е|Е' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div><br>
								<div class='letter'>
									<h2 class='bookLetter'>Ё</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^ё|Ё' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div><div class='letter'>
									<h2 class='bookLetter'>Ж</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^ж|Ж' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div>
								<div class='letter'>
									<h2 class='bookLetter'>З</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^з|З' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div><br>
								<div class='letter'>
									<h2 class='bookLetter'>И</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^и|И' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div>
								<div class='letter'>
									<h2 class='bookLetter'>Й</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^й|Й' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div>
								<div class='letter'>
									<h2 class='bookLetter'>К</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^к|К' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div><br>
								<div class='letter'>
									<h2 class='bookLetter'>Л</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^л|Л' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div>
								<div class='letter'>
									<h2 class='bookLetter'>М</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^м|М' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div>
								<div class='letter'>
									<h2 class='bookLetter'>Н</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^н|Н' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div>
								<div class='letter'>
									<h2 class='bookLetter'>О</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^о|О' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div>
								<div class='letter'>
									<h2 class='bookLetter'>П</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^п|П' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div>
								<div class='letter'>
									<h2 class='bookLetter'>Р</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^р|Р' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div><br>
								<div class='letter'>
									<h2 class='bookLetter'>С</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^с|С' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div>
								<div class='letter'>
									<h2 class='bookLetter'>Т</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^т|Т' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div>
								<div class='letter'>
									<h2 class='bookLetter'>У</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^у|У' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div><br>
								<div class='letter'>
									<h2 class='bookLetter'>Ф</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^ф|Ф' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div>
								<div class='letter'>
									<h2 class='bookLetter'>Х</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^х|Х' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div>
								<div class='letter'>
									<h2 class='bookLetter'>Ц</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^ц|Ц' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div><br>
								<div class='letter'>
									<h2 class='bookLetter'>Ч</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^ч|Ч' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div>
								<div class='letter'>
									<h2 class='bookLetter'>Ш</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^ш|Ш' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div>
								<div class='letter'>
									<h2 class='bookLetter'>Щ</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^щ|Щ' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div><br>
								<div class='letter'>
									<h2 class='bookLetter'>Э</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^э|Э' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div>
								<div class='letter'>
									<h2 class='bookLetter'>Ю</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^ю|Ю' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div>
								<div class='letter'>
									<h2 class='bookLetter'>Я</h2>
									<ul class='begName'>
										<li>";
											echo "<ul>";
											$counter = 0;
											for($id = $maxIdBooks; $id > 0; $id--){
													
													$query = mysqli_query($con, "SELECT * FROM books WHERE name REGEXP '^я|Я' AND `id`='$id'");
													$result = mysqli_fetch_assoc($query);
												
													
													if(!is_null($result)){
														echo "
															<li>
																<a>"; print($result['name']); echo"</a>
															</li>
															<li>";
																print($result['author']); echo	
															"</li>
														";
														$counter++;
													}

											}
											if($counter == 0){
												echo "<li>";print('Пусто');echo"</li>";
											}
											echo "</ul>";
										echo "</li>
									</ul>
								</div><br>
						</div>
					</div>
					";?>
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
<?php include("footer.php"); ?>

</body>
</html>