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

        mysqli_query($con, "DELETE FROM news WHERE `id` = '$id'");
    ?>
    <br/><br/>
    <h2>Новость удалена</h2>
    <a href="news.php" class="button">Обратно к новостям</a>
</center>
</div>

</body>
</html>
