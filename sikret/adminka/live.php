<?php
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:index.php");
}
?>
<?php include ('inc/header.php'); ?>
<div>
	<div class="left-menu">
		<a href="liveAdd.php" class="button buttonPos">Добавить Трансляцию</a>
	</div>
	<div class="content">
		<?php
			include ("inc/connection.php");
			include ("inc/maxId.php");

			if($maxIdLive !== 0){

				for ($id = $maxIdLive; $id > 0; $id--) {

					$query = mysqli_query($con, "SELECT * FROM live WHERE `id` = '$id'");
					$result = mysqli_fetch_assoc($query);

					if(!is_null($result)){

						$title = $result['title'];
						$text = $result['text'];
						$path = $result['path'];

						echo "
							<div class='block-content'>
								<form method='post' action='liveRem.php' class='delete-form'>
									<input name='id' value='$id' hidden/>
									<input type='image' src='img/design/delete_button.svg' width='64px'/>
								</form>
								<p class='title'><strong>$title</strong></p>
								<div class='youtube'>
									<iframe width='35%' height='230'
									src='$path'
									frameborder='0' allowfullscreen class='video'>
									</iframe>
								</div>
								<div class='text'>
									<p class='title-lang'><strong>UA</strong></p>
									<p class='description'>$text</p>
								</div>
								<form class='edit-form' method='post' action='liveEdit.php'>
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
