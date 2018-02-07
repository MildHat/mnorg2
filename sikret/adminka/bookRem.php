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

        var_dump(mysqli_query($con, "DELETE FROM books WHERE `id` = '$id'"));
    ?>
    <br/><br/>
    <h2>Книга удалена</h2>
    <a href="liblary.php" class="button">Обратно в библиотеку</a>
</center>
</div>
</body>
</html>
