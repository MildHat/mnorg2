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

        // POST
        $id = $_POST['id'];
        $newName = $_POST['name'];
        $newAuthor = $_POST['author'];

        var_dump(mysqli_query($con, "UPDATE books SET `name` = '$newName', `author` = '$newAuthor' WHERE `id` = '$id'"));
    ?>
    <br/><br/>
    <h2>Книга изменена</h2>
    <a href="liblary.php" class="button">Обратно в библиотеку</a>
</center>
</div>
</body>
</html>
