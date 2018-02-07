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

        $title = $_POST['title'];
        $text = $_POST['text'];
        $title_en = $_POST['title_en'];
        $text_en = $_POST['text_en'];
        $path = $_POST['path'];
        $video = str_replace("https://youtu.be/", "https://www.youtube.com/embed/", $path);

        if ($video == $path){
            $video = str_replace("https://www.youtube.com/watch?v=", "https://www.youtube.com/embed/", $path);
        }

        var_dump(mysqli_query($con, "INSERT INTO live(`path`, `title`, `text`, `title_eng`, `text_eng`) VALUES ('$video', '$title', '$text', '$title_en', '$text_en')"));

    ?>
    <br/><br/>
    <h2>Трансляция добавлена</h2>
    <a href="live.php" class="button">Обратно к трансляциям</a>
</center>
</div>
</body>
</html>
