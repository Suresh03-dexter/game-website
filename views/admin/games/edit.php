<?php

use Models\Game;

session_start();
if (! isset($_SESSION['is_logged_in'])) {
	header('Location: ../loginpage.php');
}
if (! isset($_GET['id'])) {
	echo 'Id not found';
	exit;
}
$game = (new Game)->selectOne($_GET['id']);
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
		<h2>Edit Game</h2>
		<form method="post" action="../../../controller/admin/game/update.php?id=<?php echo $_GET['id'] ?>" enctype="multipart/form-data">
			<div class="form-group">
				<label for="game-title">GAME TITLE</label>
				<input type="text" id="game-title" name="title" required value="<?php echo $game['title'] ?>">
			</div>
			<div class="form-group">
				<label for="game-thumbnail">GAME THUMBNAIL</label>
				<input type="file" id="game-thumbnail" name="thumbnail" accept="image/*" value="<?php echo $game['thumbnail'] ?>">
				<img src="../../website/images/<?php echo $game['thumbnail'] ?>" alt="" srcset="" width="30%" height="30%">
			</div>
			<div class="form-group">
				<label for="genre">GENRE</label>
				<input type="text" id="genre" name="genre" required value="<?php echo $game['genre'] ?>">
			</div>
			<div style="text-align: center;">
				<button type="submit">update Game</button>
			</div>
		</form>
	</div>
</body>

</html>