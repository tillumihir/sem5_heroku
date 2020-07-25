
<html>
<head>
	<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/login_u.css">
<link rel="icon" type="image/png" href="css/images/icon1.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="box">
		<div class="formin">
			<h3 align="center">User Login</h3>
			<div class="image">
				</div>
			<form method="POST" >
				<label for="name">Name :</label><input type="text" name="name" placeholder="Enter your name"><br><br>
				<label for="email">Email :</label><input type="email" name="email" placeholder="Enter your email"><br><br>
				<label for="password">Password :</label><input type="password" name="password" placeholder="Enter your password"><br><br><br>
				<input type="submit" name="button" value="Login"> 

		<?php
			if (isset($_POST['button'])) {
				echo '<script type="text/javascript">';
				echo ' alert("Login Successful")'; 
				echo '</script>';
				header("location:home.php");
			}
			?>

			</form>
			<p align="center">Not registered ?<br> <a href="register.php"> Click here to register</a></p>
		</div>
	</div>

</body>
</html>