<?php  
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
		font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
			border:1px solid black;
		}
	</style>
</head>
<body>
	<h1>Register</h1>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="username">Username</label>
			<input type="text" name="username">
		</p>
		<p>
			<label for="username">Password</label>
			<input type="password" name="password">
		</p>
		<p>
			<label for="username">Confirm Password</label>
			<input type="password" name="confirm_password">
			<input type="submit" name="insertNewUserBtn">
		</p>
	</form>
</body>
</html>