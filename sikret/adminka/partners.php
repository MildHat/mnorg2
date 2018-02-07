<?php
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:index.php");
}
?>
<?php include ('inc/header.php'); ?>
<div>
	<div class="left-menu">
		<a href="partnerAdd.php" class="button buttonPos">Добавить партнёра</a>
	</div>
	<div class="content">
			<?php
				include ("inc/connection.php");
				include ("inc/maxId.php");

				if($maxIdPartners !== 0){

					for ($id = $maxIdPartners; $id > 0; $id--) {

						$query = mysqli_query($con, "SELECT * FROM AboutUs_partners WHERE `id` = '$id'");
						$result = mysqli_fetch_assoc($query);

						if(!is_null($result)){

							$name = $result['partner_name'];
							$image = $result['partner_image'];

							echo "
								<div class='partner'>
									<div class='name-partner'><h2>$name</h2></div>
									<img src='$image' width='96px'/>
									<form class='edit-partner' action='partnerEdit.php' method='post'>
										<input type='text' name='id' value='$id' hidden/>
										<input type='submit' value='Редактировать' class='button'/>
									</form>
									<form class='delete-partner' action='partnerRem.php' method='post'>
										<input type='text' name='id' value='$id' hidden/>
										<input type='image' src='img/design/delete_button.svg' width='64px'/>
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
