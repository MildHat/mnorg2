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
        $login = $_POST['newLogin'];

        var_dump(mysqli_query($con, "UPDATE adminka SET `login` = '$login' WHERE `id` = '1'"));
    ?>
    <br/><br/>
    <h2>Логин изменён</h2>
    <a href="options.php" class="button">Обратно в настройки</a>
</center>
</div>
</body>
</html>
