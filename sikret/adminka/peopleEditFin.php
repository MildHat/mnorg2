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
        $newName = $_POST['name'];
        $newSurname = $_POST['surname'];
        $newSeat = $_POST['seat'];
        $newText = $_POST['text'];
        $newName_en = $_POST['name_en'];
        $newSurname_en = $_POST['surname_en'];
        $newSeat_en = $_POST['seat_en'];
        $newText_en = $_POST['text_en'];

        $path = 'img/projects/'; // директория для загрузки
        $preext = explode('.',$_FILES['image']['name']);
        $ext = array_pop($preext); // расширение
    	$new_name = time().'.'.$ext; // новое имя с расширением
    	$newPath = $path.$new_name; // полный путь с новым именем и расширением

        if(!is_null($_FILES)){
            if($_FILES['image']['error'] == 0){
    			if(move_uploaded_file($_FILES['image']['tmp_name'], $newPath)){
    				var_dump(mysqli_query($con, "UPDATE people SET `image` = '$newPath' WHERE `id` = '$id'"));
                    var_dump(mysqli_query($con, "UPDATE people SET `name` = '$newName', `surname` = '$newSurname', `seat` = '$newSeat', `text` = '$newText' WHERE `id` = '$id'"));
                    var_dump(mysqli_query($con, "UPDATE people SET `name_eng` = '$newName_en', `surname_eng` = '$newSurname_en', `seat_eng` = '$newSeat_en', `text_eng` = '$newText_en' WHERE `id` = '$id'"));
                }
    		}
        }
        var_dump(mysqli_query($con, "UPDATE people SET `name` = '$newName', `surname` = '$newSurname', `seat` = '$newSeat', `text` = '$newText' WHERE `id` = '$id'"));
        var_dump(mysqli_query($con, "UPDATE people SET `name_eng` = '$newName_en', `surname_eng` = '$newSurname_en', `seat_eng` = '$newSeat_en', `text_eng` = '$newText_en' WHERE `id` = '$id'"));
    ?>
    <br/><br/>
    <h2>Сотрудник изменён</h2>
    <a href="people.php" class="button">Обратно к сотрудникам</a>
</center>
</div>
</body>
</html>
