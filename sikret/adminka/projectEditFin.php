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
        // POST
        $newTitle = $_POST['title_ua'];
        $newTitleEn = $_POST['title_en'];
        $newText = $_POST['text_ua'];
        $newTextEn = $_POST['text_en'];

        $path = 'img/projects/'; // директория для загрузки
    	$ext = array_pop(explode('.',$_FILES['image']['name'])); // расширение
    	$new_name = time().'.'.$ext; // новое имя с расширением
    	$newPath = $path.$new_name; // полный путь с новым именем и расширением

        if(!is_null($_FILES)){
            if($_FILES['image']['error'] == 0){
    			if(move_uploaded_file($_FILES['image']['tmp_name'], $newPath)){
    				var_dump(mysqli_query($con, "UPDATE projects SET `title image` = '$newPath' WHERE `id` = '$id'"));
                    var_dump(mysqli_query($con, "UPDATE projects SET `title` = '$newTitle', `title_en` = '$newTitleEn', `text` = '$newText', `text_en` = '$newTextEn' WHERE `id` = '$id'"));
    			}
    		}
        }
        var_dump(mysqli_query($con, "UPDATE projects SET `title` = '$newTitle', `title_en` = '$newTitleEn', `text` = '$newText', `text_en` = '$newTextEn' WHERE `id` = '$id'"));
    ?>
    <br/><br/>
    <h2>Проект изменён</h2>
    <a href="projects.php" class="button">Обратно к проектам</a>
</center>
</div>
</body>
</html>
