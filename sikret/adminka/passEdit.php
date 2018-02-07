<?php
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:index.php");
}
?>
<?php include ('inc/header.php'); ?>
<style type="text/css">
input[type=text], input[type=password]{
	width: 25%;
    padding: 12px 20px;
    margin: 8px 8px;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
	font-size: 15px;
}
input[type=text]:focus {
    border: 3px solid orange;
}
input[type=password]:focus {
    border: 3px solid orange;
}
textarea {
    width: 25%;
    height: 130px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid orange;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
	font-size: 15px;
}
input[type=button], input[type=submit], input[type=reset] {
    background-color: orange;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
	font-size: 15px;
}
input[type="file"] {
	-webkit-appearance: none;
	background-color: #f8f8f8;
	border: 2px solid orange;
	border-radius: 10px;
	padding: 4px 0;
	color: black;
	width: 23%;
	vertical-align: middle;
}
input[type="file"]::-webkit-file-upload-button {
	-webkit-appearance: none;
	margin: -4px;
	font-size: 12px;
	border-radius: 10px;
	color: white;
	padding: 5px 10px;
	border: 4px solid orange;
	font-weight: bold;
	width: 130px;
	background: orange;
}
</style>
<center>
	<h3>Редактирование пароля</h3>
    <?php
        include ("inc/connection.php");

        echo "
            <form method='POST' action='passEditFin.php'>
                <p><input type='password' name='oldPass' placeholder='Старый пароль' pattern='^[A-Za-z0-9]+$' required/></p>
                <p><input type='password' name='newPass' placeholder='Новый пароль' pattern='^[A-Za-z0-9]+$' required/></p>
                <p><input type='password' name='NewPass1' placeholder='Повторите новый пароль' pattern='^[A-Za-z0-9]+$' required/></p>
                <p><input type='submit' value='Изменить'/></p>
            </form>
        ";
    ?>
</center>
</div>
</body>
</html>
