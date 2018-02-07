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
        $newPath_partner = $_POST['path'];

        $path = 'img/projects/'; // директория для загрузки
    	$ext = array_pop(explode('.',$_FILES['image']['name'])); // расширение
    	$new_name = time().'.'.$ext; // новое имя с расширением
    	$newPath = $path.$new_name; // полный путь с новым именем и расширением

        if(!is_null($_FILES)){
            if($_FILES['image']['error'] == 0){
    			if(move_uploaded_file($_FILES['image']['tmp_name'], $newPath)){
    				var_dump(mysqli_query($con, "UPDATE AboutUs_partners SET `partner_image` = '$newPath' WHERE `id` = '$id'"));
                    var_dump(mysqli_query($con, "UPDATE AboutUs_partners SET `partner_name` = '$newName', `path` = '$newPath_partner' WHERE `id` = '$id'"));
    			}
    		}
        }
        var_dump(mysqli_query($con, "UPDATE AboutUs_partners SET `partner_name` = '$newName', `path` = '$newPath_partner' WHERE `id` = '$id'"));
    ?>
    <br/><br/>
    <h2>Проект изменён</h2>
    <a href="partners.php" class="button">Обратно к партнёрам</a>
</center>
</div>
</body>
</html>
