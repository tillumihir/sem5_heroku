<?php
session_start();
?>

<html>
<head>
	<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/login_m.css">
<link rel="icon" type="image/png" href="css/images/icon1.png">
<meta name="viewport" content="width=device-width initial-scale=1">
</head>
<body>
	<div class="box">
		<div class="formin">
			<h3 align="center">Manager Login</h3>
			<div class="image"></div>
			<form method="get" action="">
				<label for="name">Name :</label><input type="text" name="name" placeholder="Enter your name"><br><br>
				<label for="email">Email :</label><input type="email" name="email" placeholder="Enter your email"><br><br>
				<label for="password">Password :</label><input type="password" name="password" placeholder="Enter your password"><br><br><br>
			<input type="submit" name="submit" value="Login"> 
			</form>

		</div>
	</div>

</body>
</html>