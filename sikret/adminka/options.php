<?php
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:index.php");
}
?>
<?php include ('inc/header.php'); ?>
    <div class="left-menu">
        <a href="loginEdit.php" id='loginEdit' class="button buttonPos">Изменить логин</a>
        <a href="passEdit.php" id='passEdit' class="button buttonPas">Изменить пароль</a>
    </div>
    <div class="content">
        <div class='preview'>
            <center><p><h2>Админ-панель сайта "Социальный центр «Семья»"</h2></p></center>
        </div>
        <?php
            include ("inc/connection.php");

            $query = mysqli_query($con, "SELECT * FROM adminka WHERE `id` = '1'");
            $result = mysqli_fetch_assoc($query);

            $login = $result['login'];

            echo "
                <div class='options'><center><h3><strong>Текущий логин: " . $login . "</strong></h3></center></div>
            ";
        ?>
    </div>
</div>
</body>
</html>
