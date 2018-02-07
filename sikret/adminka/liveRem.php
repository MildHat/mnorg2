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

        var_dump(mysqli_query($con, "DELETE FROM live WHERE `id` = '$id'"));
    ?>
    <br/><br/>
    <h2>Трансляция удалёна</h2>
    <a href="live.php" class="button">Обратно к трансляциям</a>
</center>
</div>
</body>
</html>
