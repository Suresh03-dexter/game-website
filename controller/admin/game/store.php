<?php

use Models\Game;
require_once '../../../vendor/autoload.php';

session_start();
if (! isset($_SESSION['is_logged_in'])) {
	header('Location: ../loginpage.php');
}

$imageName = time() . '.' . pathinfo($_FILES['thumbnail']['name'], PATHINFO_EXTENSION);
$imagePath = '/var/www/html/Test/views/website/images/' . $imageName;
move_uploaded_file($_FILES['thumbnail']['tmp_name'], $imagePath);
(new Game)->insert([
	'title' => $_POST['title'],
	'genre' => $_POST['genre'],
	'thumbnail' => $imageName
]);

header('Location: ../../../views/admin/games/list.php');
