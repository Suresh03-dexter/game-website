<?php

use Models\Enquiry;

session_start();
require_once '../../../vendor/autoload.php';
if (! isset($_SESSION['is_logged_in'])) {
	header('Location: ../loginpage.php');
}

if (! isset($_GET['id'])) {
	echo 'Id not found';
	exit;
}

(new Enquiry)->delete($_GET['id']);

header('Location: ../../../views/admin/enquiries/list.php');
