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
        $oldPass = $_POST['oldPass'];
        $newPass = $_POST['newPass'];
        $newPass1 = $_POST['newPass1'];

            $query = mysqli_query($con, "SELECT * FROM adminka WHERE `id` = '1'");
            $result = mysqli_fetch_assoc($query);

            $dbpass = $result['password'];

            if($oldPass == $dbpass){

                var_dump(mysqli_query($con, "UPDATE adminka SET `password` = '$newPass' WHERE `id` = '1'"));

                echo "
                <br/><br/>
                <h2>Пароль успешно изменён</h2>
                <a href='options.php' class='button'>Обратно в настройки</a>
                ";

            } else {
                echo "
                <br/><br/>
                <h2>Неверно введен старый пароль</h2>
                <a href='options.php' class='button'>Обратно в настройки</a>
                ";
            }

    ?>
</center>
</div>
</html>
