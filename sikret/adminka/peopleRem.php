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

        var_dump(mysqli_query($con, "DELETE FROM people WHERE `id` = '$id'"));
    ?>
    <br/><br/>
    <h2>Сотрудник удалён</h2>
    <a href="people.php" class="button">Обратно к сотрудникам</a>
</center>
</div>
</body>
</html>
