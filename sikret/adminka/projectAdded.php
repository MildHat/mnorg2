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

    	$path = 'img/projects/'; // директория для загрузки
    	$ext = array_pop(explode('.',$_FILES['image']['name'])); // расширение
    	$new_name = time().'.'.$ext; // новое имя с расширением
    	$full_path = $path.$new_name; // полный путь с новым именем и расширением

    	$title_ua = $_POST['title_ua'];
    	$text_ua = $_POST['text_ua'];
    	$title_eng = $_POST['title_en'];
    	$text_eng = $_POST['text_en'];

    	if(!is_null($_FILES)){
    		if($_FILES['image']['error'] == 0){
    			if(move_uploaded_file($_FILES['image']['tmp_name'], $full_path)){
    				var_dump(mysqli_query($con, "INSERT INTO projects(`title image`, `title`, `text`, `title_en`, `text_en`) VALUES ('$full_path','$title_ua', '$text_ua', '$title_eng', '$text_eng')"));
    			}
    		}
    	}
    ?>
    <br/><br/>
    <h2>Проект добавлен</h2>
    <a href="projects.php" class="button">Обратно к проектам</a>
</center>
</div>
</body>
</html>
