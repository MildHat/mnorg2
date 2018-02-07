<?php
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:index.php");
}
?>
<?php include ('inc/header.php'); ?>
<center>
    <?php
		include ("inc/connection.php");

		$id = $_POST['id'];
		$newTitle_ua = $_POST['title'];
        $newDescription = $_POST['description'];
		$newText_ua = $_POST['text'];
		$newTitle_en = $_POST['title_en'];
        $newDescription_en = $_POST['description_en'];
		$newText_en = $_POST['text_en'];

		$path = 'img/news/title_image/'; // директория для загрузки
		$ext = explode('.',$_FILES['image']['name']); // расширение
        $ext1 = array_pop($ext);
		$new_name = time().'.'.$ext1; // новое имя с расширением
		$newPath = $path.$new_name; // полный путь с новым именем и расширением

		if(!is_null($_FILES)){
			if($_FILES['image']['error'] == 0){
				if(move_uploaded_file($_FILES['image']['tmp_name'], $newPath)){
					var_dump(mysqli_query($con, "UPDATE news SET `title image` = '$newPath', `title` = '$newTitle_ua', `text` = '$newText_ua', `title_eng` = '$newTitle_en', `text_eng` = '$newText_en', `description` = '$newDescription', `description_eng` = '$newDescription_en' WHERE `id` = $id"));
				}
			}
		}
		var_dump(mysqli_query($con, "UPDATE news SET `title` = '$newTitle_ua', `text` = '$newText_ua', `title_eng` = '$newTitle_en', `text_eng` = '$newText_en', `description` = '$newDescription', `description_eng` = '$newDescription_en' WHERE `id` = $id"));
	?>
    <br/><br/>
    <h2>Новость изменена</h2>
    <a href="news.php" class="button">Обратно к новостям</a>
</center>
</div>
</body>
</html>
