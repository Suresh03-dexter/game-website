<?php
require_once '../../vendor/autoload.php';
session_start();

$config = require dirname(__DIR__, 2) . '/config.php';

if ($_POST['username'] == $config['admin']['username'] && $_POST['password'] == $config['admin']['password']) {
	$_SESSION['is_logged_in'] = true;
	header('Location: games/create.php');
} else {
	header('Location: games/create.php');
}
