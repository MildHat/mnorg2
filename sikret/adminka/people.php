<?php
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:index.php");
}
?>
<?php include ('inc/header.php'); ?>
<div>
	<div class="left-menu">
		<a href="peopleAdd.php" class="button buttonPos">Добавить человека</a>
	</div>
	<div class="content">
		<?php
			include ("inc/connection.php");
			include ("inc/maxId.php");

			if($maxIdPeople !== 0){

				for ($id = $maxIdPeople; $id > 0; $id--) {

					$query = mysqli_query($con, "SELECT * FROM people WHERE `id` = '$id'");
					$result = mysqli_fetch_assoc($query);

					if(!is_null($result)){

						$name = $result['name'];
						$surname = $result['surname'];
						$seat = $result['seat'];
						$text = $result['text'];
						$image = $result['image'];

						$nameSurname = $name . " " . $surname;

						echo "
							<div class='block-content'>
								<form method='post' action='peopleRem.php' class='delete-form'>
									<input name='id' value='$id' hidden/>
									<input type='image' src='img/design/delete_button.svg' width='64px'/>
								</form>
								<div class='title-img'>
									<img class='img' src='$image'/>
								</div>
								<div class='text'>
									<p class='title'><strong>$nameSurname</strong></p>
									<p class='title-lang'><strong>$seat</strong></p>
									<p class='description'>$text</p>
								</div>
								<form class='edit-form' method='post' action='peopleEdit.php'>
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
</div>
</body>
</html>
