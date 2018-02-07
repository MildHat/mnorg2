<?php
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:index.php");
}
?>
<?php include ('inc/header.php'); ?>
<style type="text/css">
input[type=text]{
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
textarea {
    width: 35%;
    height: 150px;
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
	<h3>Добавление новости</h3>
<form id = "form" enctype="multipart/form-data" method="post" action="newsAdded.php">
    <p><h4>Главная картинка</h4></p>
    <p><input type="file" name="image[]"/></p>
    <p><h4>Дополнительные картинки</h4></p>
    <p><input type="file" name="image[]"/>&nbsp;<input type="file" name="image[]"/></p>
    <p><input type="file" name="image[]"/>&nbsp;<input type="file" name="image[]"/></p>
    <p><input type="file" name="image[]"/>&nbsp;<input type="file" name="image[]"/></p>
	<p><h3>UA</h3></p>
	<p><input type="text" name="title" placeholder="Название"></p>
    <p><textarea form="form" name="description" maxlength="350" placeholder="Описание"></textarea></p>
	<p><textarea form="form" name="text" placeholder="Текст новости"></textarea></p>
  	<p><h3>EN</h3></p>
    <p><input type="text" name="title_en" placeholder="Название"></p>
    <p><textarea form="form" name="description_en" maxlength="350" placeholder="Описание"></textarea></p>
	<p><textarea form="form" name="text_en" placeholder="Текст новости"></textarea></p>
	<p><input type="submit" value="Добавить"/></p>
</form>
</center>
</div>
</body>
</html>
