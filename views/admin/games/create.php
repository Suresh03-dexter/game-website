<?php
session_start();
if (! isset($_SESSION['is_logged_in'])) {
	header('Location: ../loginpage.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Game Management</title>
	<link rel="stylesheet" href="../css/main.css">
</head>

<body>
	<?php
	include "../sidebar.php";
	?>
	<div class="main-content">
		<h2>Add New Game</h2>
		<form method="post" action="../../../controller/admin/game/store.php" enctype="multipart/form-data">
			<div class="form-group">
				<label for="game-title">GAME TITLE</label>
				<input type="text" id="game-title" name="title" required>
			</div>
			<div class="form-group">
				<label for="game-thumbnail">GAME THUMBNAIL</label>
				<input type="file" id="game-thumbnail" name="thumbnail" accept="image/*" required>
			</div>
			<div class="form-group">
				<label for="genre">GENRE</label>
				<input type="text" id="genre" name="genre" required>
			</div>
			<div style="text-align: center;">
				<button type="submit">Add Game</button>
			</div>
		</form>
	</div>
</body>

</html>