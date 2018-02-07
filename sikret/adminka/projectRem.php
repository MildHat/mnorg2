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

        var_dump(mysqli_query($con, "DELETE FROM projects WHERE `id` = '$id'"));
    ?>
    <br/><br/>
    <h2>Проект удалён</h2>
    <a href="projects.php" class="button">Обратно к проектам</a>
</center>
</div>
</body>
</html>
