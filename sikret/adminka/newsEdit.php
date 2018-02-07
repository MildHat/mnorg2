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
	<h3>Редактирование новости</h3>
    <?php
        include ("inc/connection.php");
        $id = $_POST['id'];

        $query = mysqli_query($con, "SELECT * FROM news WHERE `id` = '$id'");
        $result = mysqli_fetch_assoc($query);

        $title = $result['title'];
        $description = $result['description'];
        $text = $result['text'];
        $title_en = $result['title_eng'];
        $description_en = $result['description_eng'];
        $text_en = $result['text_eng'];
        $image = $result['title image'];

        echo "
            <form id = 'form' enctype='multipart/form-data' method='post' action='newsEditFin.php'>
                <p><h4>Главная картинка</h4></p>
                <p><img src='$image' width='30%' height='auto'/></p>
                <p><input type='file' name='image'/></p>
            	<p><h3>UA</h3></p>
            	<p><input type='text' name='title' placeholder='Название' value='$title'></p>
                <p><textarea form='form' name='description' maxlength='350' placeholder='Описание'>$description</textarea></p>
            	<p><textarea form='form' name='text' placeholder='Текст новости'>$text</textarea></p>
              	<p><h3>EN</h3></p>
                <p><input type='text' name='title_en' placeholder='Название' value='$title_en'></p>
                <p><textarea form='form' name='description_en' maxlength='350' placeholder='Описание'>$description_en</textarea></p>
            	<p><textarea form='form' name='text_en' placeholder='Текст новости'>$text_en</textarea></p>
                <p><input type='text' name='id' value='$id' hidden/></p>
            	<p><input type='submit' value='Изменить'/></p>
            </form>
        ";
        echo "
            <p><h4>Удаление дополнительных фото из новости</h4></p>
            <form method='post' action='newsRemPhotos.php'>
                <input type='text' name='id' value='$id' hidden/>
                <p><input type='submit' value='Удалить все фото'/></p>
            </form>
        ";
        echo "
            <p><h4>Добавление дополнительной картинки</h4></p>
            <form method='post' enctype='multipart/form-data' action='newsAddPhoto.php'>
                <p><input type='file' name='image'/></p>
                <input type='text' name='id' value='$id' hidden/>
                <p><input type='submit' value='Добавить картинку'/></p>
            </form>
        ";
    ?>
</center>
</div>
</body>
</html>
