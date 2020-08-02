<?php
include "login_code.php";
?>
<!DOCTYPE html>
<html>
<head>
<link href="Husky_Design.css" rel="stylesheet" type="text/css" >
    <meta charset="utf-8" />
    <title>Husky Air</title>
    <link rel="shortcut icon" href="Include/Hlogo.png" />
</head>
<body class="body1">
<div class="div3">
<img src="Include/LoginLogo.png" class="imglogo">
<img src="Include/Husky Full Logo.png" class="logo">
	<div class="div1">
	<p class="plogin">To keep connected with us please login with your personal information by Username and Password</p>
	<form action="login_code.php" method="post" enctype="multipart/form-data">
	<table>
	<tr><td><input class="textboxuser" type="text" placeholder="Username" name="username"></td></tr>
	<tr><td><input class="textboxuser" type="password" placeholder="Password" name="password"></td></tr>
	<tr><td><button class="buttonuser" type="submit" name="submit">Login Now</button></td></tr>
	</table>
	</form>
	</div>
</div>
</body>
</html>