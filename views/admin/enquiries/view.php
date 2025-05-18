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
$enquiry = (new Enquiry)->selectOne($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Enquiry Management</title>
	<link rel="stylesheet" href="../css/main.css">
</head>

<body>
	<?php
	include "../sidebar.php";
	?>
	<div class="main-content">
		<h2>Enquiry view</h2>
		<div class="enquiry-details">
			<p><strong>Name:</strong> <?php echo $enquiry['name'] ?></p>
			<p><strong>Email:</strong> <?php echo $enquiry['email'] ?></p>
			<p><strong>Subject:</strong> <?php echo $enquiry['subject'] ?></p>
			<p><strong>Message:</strong><br>
				<?php echo $enquiry['message'] ?>
			</p>
		</div>
	</div>
</body>

</html>