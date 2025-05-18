<?php

use Models\Game;
require_once '../../../vendor/autoload.php';

session_start();
if (! isset($_SESSION['is_logged_in'])) {
	header('Location: ../loginpage.php');
}

if (! isset($_GET['id'])) {
	echo 'Id not found';
	exit;
}

$data = [
	'title' => $_POST['title'],
	'genre' => $_POST['genre'],
];

if (! empty($_FILES['thumbnail']['tmp_name'])) {
	$imageName = time() . '.' . pathinfo($_FILES['thumbnail']['name'], PATHINFO_EXTENSION);
	$imagePath = '/var/www/html/Test/views/website/images/' . $imageName;
	move_uploaded_file($_FILES['thumbnail']['tmp_name'], $imagePath);
	$thumbnailQuery = ", thumbnail = '$imageName'";
	$data['thumbnail'] = $imageName;
}

(new Game)->update($_GET['id'], $data);

header('Location: ../../../views/admin/games/list.php');
