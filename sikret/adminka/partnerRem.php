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

        var_dump(mysqli_query($con, "DELETE FROM AboutUs_partners WHERE `id` = '$id'"));
    ?>
    <br/><br/>
    <h2>Партнёр удалён</h2>
    <a href="partners.php" class="button">Обратно к партнёрам</a>
</center>
</div>
</body>
</html>
