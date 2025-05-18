<?php

use Models\Game;

require_once '../../../vendor/autoload.php';
session_start();
if (! isset($_SESSION['is_logged_in'])) {
	header('Location: ../loginpage.php');
	exit;
}

$games = (new Game)->selectAll();

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
		<h2>Games list</h2>
		<table border="1" cellpadding="5" cellspacing="0">
			<tr>
				<th>Title</th>
				<th>Thumbnail</th>
				<th>Genre</th>
				<th>Action</th>
			</tr>
			<?php
			foreach ($games as $game) {
			?>
				<tr>
					<td><?php echo $game['title'] ?></td>
					<td><img src="../../website/images/<?php echo $game['thumbnail'] ?>" alt="" srcset="" width="40%" height="40%"></td>
					<td><?php echo $game['genre'] ?></td>
					<td>
						<a href="edit.php?id=<?php echo $game['id']; ?>">Edit</a>
						|
						<form action="../../../controller/admin/game/delete.php?id=<?php echo $game['id']; ?>" method="post">
							<input type="submit" onclick="return confirm('Are you sure you want to delete this game?');" value="Delete">
						</form>
					</td>
				</tr>
			<?php
			}
			?>
		</table>
	</div>
</body>

</html>