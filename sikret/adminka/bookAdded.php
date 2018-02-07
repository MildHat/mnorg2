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

        $name = $_POST['name'];
        $author = $_POST['author'];

        var_dump(mysqli_query($con, "INSERT INTO books(`name`, `author`) VALUES ('$name', '$author')"));
    ?>
    <br/><br/>
    <h2>Книга добавлена</h2>
    <a href="liblary.php" class="button">Обратно в библиотеку</a>
</center>
</div>
</body>
</html>
