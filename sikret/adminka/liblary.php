<?php
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:index.php");
}
?>
<?php include ('inc/header.php'); ?>
<div>
	<div class="left-menu">
		<a href="bookAdd.php" class="button buttonPos">Добавить книгу</a>
	</div>
	<div class="content">
		<?php

			include ("inc/connection.php");
			include ("inc/maxId.php");

			if($maxIdBooks !== 0){

				for ($id = $maxIdBooks; $id > 0; $id--) {
					$query = mysqli_query($con, "SELECT * FROM books WHERE `id` = '$id'");
					$result = mysqli_fetch_assoc($query);

					if(!is_null($result)){

						$name = $result['name'];
						$author = $result['author'];

						echo "
							<div class='book'>
								<p><strong>Название: " . $name . "<br/> Автор: " . $author . "</strong></p>
								<form class='edit-book' action='bookEdit.php' method='post'>
									<input type='text' name='id' value='$id' hidden/>
									<input type='submit' value='Редактировать' class='button'/>
								</form>
								<form class='delete-book' action='bookRem.php' method='post'>
									<input type='text' name='id' value='$id' hidden/>
									<input type='image' src='img/design/delete_button.svg' width='48px'/>
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
