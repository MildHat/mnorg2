<?php
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:index.php");
}
?>
<?php include ('inc/header.php'); ?>
<style type="text/css">
input[type=text], input[type=number]{
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
input[type=number]:focus {
    border: 3px solid orange;
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
</style>
<center>
    <h3><strong>Добавление сотрудника</strong></h3>
    <form id="form" enctype="multipart/form-data" method="post" action="peopleAdded.php">
      	<p><input type="file" name="image"/></p>
    	<p><h3>UA</h3></p>
    	<p><input type="text" name="name" placeholder="Имя"></p>
        <p><input type="text" name="surname" placeholder="Фамилия"></p>
        <p><input type="text" name="seat" placeholder="Должность"></p>
    	<p><textarea form="form" name = "text" maxlength="250"></textarea></p>
      	<p><h3>EN</h3></p>
        <p><input type="text" name="name_en" placeholder="Имя"></p>
        <p><input type="text" name="surname_en" placeholder="Фамилия"></p>
    	<p><input type="text" name="seat_en" placeholder="Должность"></p>
    	<p><textarea form="form" name = "text_en" maxlength="250"></textarea></p>
    	<p><input type="submit" value="Добавить"/></p>
    </form>
</center>
</div>
</body>
</html>
