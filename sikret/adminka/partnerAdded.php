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

        $name = $_POST['name'];
        $path_partner = $_POST['path'];

        $path = 'img/projects/'; // директория для загрузки
    	$ext = array_pop(explode('.',$_FILES['image']['name'])); // расширение
    	$new_name = time().'.'.$ext; // новое имя с расширением
    	$full_path = $path.$new_name; // полный путь с новым именем и расширением

        if(!is_null($_FILES)){
    		if($_FILES['image']['error'] == 0){
    			if(move_uploaded_file($_FILES['image']['tmp_name'], $full_path)){
    				var_dump(mysqli_query($con, "INSERT INTO AboutUs_partners(`partner_image`, `partner_name`, `path`) VALUES ('$full_path', '$name', '$path_partner')"));
    			}
    		}
    	}
    ?>
    <br/><br/>
    <h2>Партнёр добавлен</h2>
    <a href="partners.php" class="button">Обратно к партнёрам</a>
</center>
</div>
</body>
</html>
