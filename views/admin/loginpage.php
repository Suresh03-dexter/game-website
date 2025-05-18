<?php
session_start();
if (isset($_SESSION['is_logged_in'])) {
	header('Location: games/create.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background: #f4f4f4;
		}

		.login-container {
			width: 300px;
			margin: 80px auto;
			padding: 30px;
			background: #fff;
			border-radius: 6px;
			box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
		}

		.login-container h2 {
			text-align: center;
			margin-bottom: 20px;
		}

		.login-container label {
			display: block;
			margin-bottom: 6px;
		}

		.login-container input[type="text"],
		.login-container input[type="password"] {
			width: 100%;
			padding: 8px;
			margin-bottom: 14px;
			border: 1px solid #ccc;
			border-radius: 4px;
		}

		.login-container input[type="submit"] {
			width: 100%;
			padding: 10px;
			background: #007bff;
			color: #fff;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		.login-container input[type="submit"]:hover {
			background: #0056b3;
		}
	</style>
</head>

<body>
	<div class="login-container">
		<h2>Admin Login</h2>
		<form method="post" action="login.php">
			<label for="username">Username</label>
			<input type="text" id="username" name="username" required>
			<label for="password">Password</label>
			<input type="password" id="password" name="password" required>
			<input type="submit" value="Login">
		</form>
	</div>
</body>

</html>
<?php
unset($_SESSION['old']);
?>