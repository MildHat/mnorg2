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

        // POST
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $seat = $_POST['seat'];
        $text = $_POST['text'];
        $name_en = $_POST['name_en'];
        $surname_en = $_POST['surname_en'];
        $seat_en = $_POST['seat_en'];
        $text_en = $_POST['text_en'];

        $path = 'img/people/'; // директория для загрузки
    	$ext = array_pop(explode('.',$_FILES['image']['name'])); // расширение
    	$new_name = time().'.'.$ext; // новое имя с расширением
    	$full_path = $path.$new_name; // полный путь с новым именем и расширением

        if(!is_null($_FILES)){
    		if($_FILES['image']['error'] == 0){
    			if(move_uploaded_file($_FILES['image']['tmp_name'], $full_path)){
    				var_dump(mysqli_query($con, "INSERT INTO people(`image`, `name`, `surname`, `seat`, `text`, `name_eng`, `surname_eng`, `seat_eng`, `text_eng`) VALUES ('$full_path', '$name', '$surname', '$seat', '$text', '$name_en', '$surname_en', '$seat_en', '$text_en')"));
    			}
    		}
    	}
    ?>
    <br/><br/>
    <h2>Сотрудник добавлен</h2>
    <a href="people.php" class="button">Обратно к сотрудникам</a>
</center>
</div>
</body>
</html>
