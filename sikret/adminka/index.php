<?php
	session_start();
	include ("inc/connection.php");
	if(isset($_SESSION["session_username"])){
	// echo "Session is set"; // for testing purposes
	header("Location: options.php");
	}
	if(isset($_POST["login"])){
		if(!empty($_POST['username']) && !empty($_POST['password'])) {
			$username=$_POST['username'];
			$password=$_POST['password'];
			$query = mysqli_query($con, "SELECT * FROM adminka WHERE login='".$username."' AND password='".$password."'");
			$numrows=mysqli_num_rows($query);
			if($numrows!=0){
			while($row=mysqli_fetch_assoc($query)){
				$dbusername=$row['login'];
				$dbpassword=$row['password'];
			}
			if($username == $dbusername && $password == $dbpassword){
				$_SESSION['session_username']=$username;
				/* Redirect browser */
				header("Location: options.php");
			}
			} else {
				$message =  "Invalid username or password!";
		    }
		} else {
	    	$message = "All fields are required!";
	}
}
?>
<html>
	<head>
		<title>Adminka</title>
		<style type="text/css">
    		@import url(https://fonts.googleapis.com/css?family=Roboto:300);

			.login-page {
			  width: 360px;
			  padding: 15% 0 0;
			  margin: auto;
			}
			.form {
			  position: relative;
			  z-index: 1;
			  background: #FFFFFF;
			  max-width: 360px;
			  margin: 0 auto 100px;
			  padding: 45px;
			  text-align: center;
			  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
			}
			.form input {
			  font-family: "Roboto", sans-serif;
			  outline: 0;
			  background: #f2f2f2;
			  width: 100%;
			  border: 0;
			  margin: 0 0 15px;
			  padding: 15px;
			  box-sizing: border-box;
			  font-size: 16px;
			}
			.form #login {
			  font-family: "Roboto", sans-serif;
			  text-transform: uppercase;
			  outline: 0;
			  background: orange;
			  width: 100%;
			  border: 0;
			  padding: 15px;
			  color: #FFFFFF;
			  font-size: 14px;
			  -webkit-transition: all 0.3 ease;
			  transition: all 0.3 ease;
			  cursor: pointer;
			}
			.form #login:hover,.form #login:active,.form #login:focus {
			  background: orange;
			}
			.form .message {
			  margin: 15px 0 0;
			  color: #b3b3b3;
			  font-size: 12px;
			}
			.form .message a {
			  color: #4CAF50;
			  text-decoration: none;
			}
			.form .register-form {
			  display: none;
			}
			.container {
			  position: relative;
			  z-index: 1;
			  max-width: 300px;
			  margin: 0 auto;
			}
			.container:before, .container:after {
			  content: "";
			  display: block;
			  clear: both;
			}
			.container .info {
			  margin: 50px auto;
			  text-align: center;
			}
			.container .info h1 {
			  margin: 0 0 15px;
			  padding: 0;
			  font-size: 36px;
			  font-weight: 300;
			  color: #1a1a1a;
			}
			.container .info span {
			  color: #4d4d4d;
			  font-size: 12px;
			}
			.container .info span a {
			  color: #000000;
			  text-decoration: none;
			}
			.container .info span .fa {
			  color: #EF3B3A;
			}
			body {
			  background: silver;
			  font-family: "Roboto", sans-serif;
			  -webkit-font-smoothing: antialiased;
			  -moz-osx-font-smoothing: grayscale;
		  	}
			.error {
				color: red;
			}
		</style>
	</head>
	<body>
		<div class="login-page">
			<div class="form">
				<form class="login-form" action="" method="POST">
					<input type="text" placeholder="username" name="username"/>
					<input type="password" placeholder="password" name="password"/>
					<input id="login" type="submit" value="login" name="login"/>
				</form>
				<?php
					if (!empty($message)){
						echo "<p class=\"error\"><strong>" . $message . "</strong></p>";
					}
				?>
			</div>
		</div>
	</body>
</html>
