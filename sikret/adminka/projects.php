<?php
	session_start();
	if(!isset($_SESSION["session_username"])){
		header("location:index.php");
	}
?>
<?php include ('inc/header.php'); ?>
		<div>
			<div class="left-menu">
				<a href="projectAdd.php" class="button buttonPos">Добавить проект</a>
			</div>
			<div class="content">
				<?php
					include ("inc/connection.php");
					include ("inc/maxId.php");

					if($maxIdProjects !== 0){
						for ($id = $maxIdProjects; $id > 0; $id--) {
							$query = mysqli_query($con, "SELECT * FROM projects WHERE `id` = '$id'");
							$result = mysqli_fetch_assoc($query);

							if(!is_null($result)){

								$title = $result['title'];
								$text = $result['text'];
								$img = $result['title image'];

								echo "
									<div class='block-content'>
										<form method='post' action='projectRem.php' class='delete-form'>
											<input name='id' value='$id' hidden/>
											<input type='image' src='img/design/delete_button.svg' width='64px'/>
										</form>
										<div class='title-img'>
											<img class='img' src='$img'/>
										</div>
										<div class='text'>
											<p class='title'><strong>"; print($title); echo "</strong></p>
											<p class='title-lang'><strong>UA</strong></p>
											<p class='description'>"; print($text); echo "</p>
										</div>
										<form class='edit-form' method='post' action='projectEdit.php'>
											<input type='text' name='id' value='$id' hidden/>
											<button type='submit' class='button'>Редактировать</button>
										</form>
									</div>
								";
							}
						}
					}
				?>
		</div>
	</div>
	</body>
</html>
