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

(new Game)->delete($_GET['id']);

header('Location: ../../../views/admin/games/list.php');
