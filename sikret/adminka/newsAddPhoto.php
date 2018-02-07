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

		$path = 'img/news/';
        $ext = explode('.',$_FILES['image']['name']);
        $ext = array_pop($ext);
        $new_name = time().'.'.$ext;
        $full_path = $path.$new_name;

        move_uploaded_file($_FILES['image']['tmp_name'], $full_path);
		
		var_dump(mysqli_query($con,"INSERT INTO newsPhoto(`id`,`path`) VALUES ('$id','$full_path')"));
    ?>

    <br/><br/>
    <h2>Изображения добавлено</h2>
    <a href="news.php" class="button">Обратно к новостям</a>
</center>
</div>
</body>
</html>
