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

        $title = $_POST['title'];
        $text = $_POST['text'];
        $title_en = $_POST['title_en'];
        $text_en = $_POST['text_en'];

        $path = $_POST['path'];
        $video = str_replace("https://youtu.be/", "https://www.youtube.com/embed/", $path);

        if ($video == $path){
            $video = str_replace("https://www.youtube.com/watch?v=", "https://www.youtube.com/embed/", $path);
        }

        var_dump(mysqli_query($con, "UPDATE live SET `path` = '$video', `title` = '$title', `text` = '$text', `title_eng` = '$title_en', `text_eng` = '$text_en' WHERE `id` = '$id'"));

    ?>

    <br/><br/>
    <h2>Трансляция изменена</h2>
    <a href="live.php" class="button">Обратно к трансляциям</a>
</center>
</div>
</body>
</html>
