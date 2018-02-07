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

        //POST
        $title = $_POST['title'];
		$description = $_POST['description'];
		$text = $_POST['text'];

		$title_en = $_POST['title_en'];
		$description_en = $_POST['description_en'];
		$text_en = $_POST['text_en'];

        // PHOTO
        $path_title = 'img/news/title_image/';

    	$ext = explode('.',$_FILES['image']['name'][0]);
    	$ext0 = array_pop($ext);
    	$new_name = time().'0.'.$ext0;
    	sleep(0.01);

        // PHOTO+
        $path = 'img/news';
        // 1
    	$ext = explode('.',$_FILES['image']['name'][1]);
    	$ext1 = array_pop($ext);
    	$new_name1 = time().'1.'.$ext1;
    	sleep(0.01);
        // 2
    	$ext = explode('.',$_FILES['image']['name'][2]);
    	$ext2 = array_pop($ext);
    	$new_name2 = time().'2.'.$ext2;
    	sleep(0.01);
        // 3
    	$ext = explode('.',$_FILES['image']['name'][3]);
    	$ext3 = array_pop($ext);
    	$new_name3 = time().'3.'.$ext3;
    	sleep(0.01);
        // 4
    	$ext = explode('.',$_FILES['image']['name'][4]);
    	$ext4 = array_pop($ext);
    	$new_name4 = time().'4.'.$ext4;
    	sleep(0.01);
        // 5
    	$ext = explode('.',$_FILES['image']['name'][5]);
    	$ext5 = array_pop($ext);
    	$new_name5 = time().'5.'.$ext5;
        sleep(0.01);
        // 6
    	$ext = explode('.',$_FILES['image']['name'][6]);
    	$ex6 = array_pop($ext);
    	$new_name6 = time().'6.'.$ext6;
        // NAMES PHOTO
    	$full_path = $path_title . $new_name;

    	$full_path1 = $path . $new_name1;
    	$full_path2 = $path . $new_name2;
    	$full_path3 = $path . $new_name3;
    	$full_path4 = $path . $new_name4;
    	$full_path5 = $path . $new_name5;
    	$full_path6 = $path . $new_name6;

        move_uploaded_file($_FILES['image']['tmp_name'][0], $full_path);
		move_uploaded_file($_FILES['image']['tmp_name'][1], $full_path1);
		move_uploaded_file($_FILES['image']['tmp_name'][2], $full_path2);
		move_uploaded_file($_FILES['image']['tmp_name'][3], $full_path3);
		move_uploaded_file($_FILES['image']['tmp_name'][4], $full_path4);
		move_uploaded_file($_FILES['image']['tmp_name'][5], $full_path5);
		move_uploaded_file($_FILES['image']['tmp_name'][6], $full_path6);

        var_dump(mysqli_query($con, "INSERT INTO news(`title image`, `title`, `description`, `text`, `title_eng`, `description_eng`, `text_eng`) VALUES ('$full_path', '$title', '$description', '$text', '$title_en', '$description_en', '$text_en')"));
        sleep(0.5);

        $maxIdNews = mysqli_query($con, "SELECT max(`id`) FROM news");
        $maxIdNews = mysqli_fetch_assoc($maxIdNews);
        $maxIdNews = $maxIdNews['max(`id`)'];

        if($ext1 != ""){
            mysqli_query($con, "INSERT INTO newsPhoto(`id`,`path`) VALUES ('$maxIdNews','$full_path1')");
        }
		if($ext2 != ""){
            mysqli_query($con, "INSERT INTO newsPhoto(`id`,`path`) VALUES ('$maxIdNews','$full_path2')");
        }
		if($ext3 != ""){
            mysqli_query($con, "INSERT INTO newsPhoto(`id`,`path`) VALUES ('$maxIdNews','$full_path3')");
        }
		if($ext4 != ""){
            mysqli_query($con, "INSERT INTO newsPhoto(`id`,`path`) VALUES ('$maxIdNews','$full_path4')");
        }
		if($ext5 != ""){
            mysqli_query($con, "INSERT INTO newsPhoto(`id`,`path`) VALUES ('$maxIdNews','$full_path5')");
        }
		if($ext6 != ""){
            mysqli_query($con, "INSERT INTO newsPhoto(`id`,`path`) VALUES ('$maxIdNews','$full_path6')");
        }


    ?>
    <br/><br/>
    <h2>Новость добавлена</h2>
    <a href="news.php" class="button">Обратно к новостям</a>
</center>
</div>
</body>
</html>
