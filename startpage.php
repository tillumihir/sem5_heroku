<html>
<head>
	<title>Select User</title>
	<link rel="stylesheet" type="text/css" href="css/startpage.css">
	<link rel="icon" type="image/png" href="css/images/icon1.png">
	<meta name="viewport" content="width=device-width, initial-scale=-1">
</head>
<body>
<div class="box">
	<pre>
			<p align="center">Select login</p>
			<div class="image">
				<img src="css/images/lock.png">
	</div>
	<div class="formin">
	<form method="post">
		<input type="submit" name="user" value="User"><br>
		<input type="submit" name="admin" value="Admin"><br>
		<input type="submit" name="owner" value="Owner"><br>
		<input type="submit" name="manager" value="Manager">
		
		<?php
if (isset($_POST['user'])) {
	header("location:login_u.php");
}
if (isset($_POST['admin'])) {
	header("location:login_a.php");
}
if (isset($_POST['owner'])) {
	header("location:login_o.php");
}
if (isset($_POST['manager'])) {
	header("location:login_m.php");
}

?>
	</form>
</div>
<footer>
</pre>
	<p align="center">2020 Web design PBL-sem 5 </p>
</footer>
	</div>
</body>
</html>
