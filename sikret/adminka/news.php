<?php
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:index.php");
}
?>
<?php include ('inc/header.php'); ?>
<div>
	<div class="left-menu">
		<a href="newsAdd.php" class="button buttonPos">Добавить новость</a>
	</div>
	<div class="content">
		<?php

			include ("inc/connection.php");
			include ("inc/maxId.php");

			if($maxIdNews !== 0){

				for ($id = $maxIdNews; $id > 0; $id--) {

					$query = mysqli_query($con, "SELECT * FROM news WHERE `id` = '$id'");
					$result = mysqli_fetch_assoc($query);

					if(!is_null($result)){

						$title = $result['title'];
						$description = $result['description'];
						$image = $result['title image'];

						echo "
							<div class='block-content'>
								<form method='post' action='newsRem.php' class='delete-form'>
									<input name='id' value='$id' hidden/>
									<input type='image' src='img/design/delete_button.svg' width='64px'/>
								</form>
								<div class='title-img'>
									<img class='img' src='$image'/>
								</div>
								<div class='text'>
									<p class='title'><strong>$title</strong></p>
									<p class='title-lang'><strong>UA</strong></p>
									<p class='description'>$description</p>
								</div>
								<form class='edit-form' method='post' action='newsEdit.php'>
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
<script type="text/javascript">
	$(".delete-form").submit(function(){
		if(confirm("Вы действительно хотите удалить новость?")){
			return true;
		}
		else{
			return false;
		}

	});
</script>
</body>
</html>
