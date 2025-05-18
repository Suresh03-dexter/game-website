<?php

use Models\Enquiry;

require_once '../../../vendor/autoload.php';
session_start();
if (! isset($_SESSION['is_logged_in'])) {
	header('Location: ../loginpage.php');
	exit;
}

$enquiries = (new Enquiry)->selectAll();

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
		<h2>Enquiry list</h2>
		<table border="1" cellpadding="5" cellspacing="0">
			<tr>
				<th>name</th>
				<th>email</th>
				<th>subject</th>
				<th>Action</th>
			</tr>
			<?php
			foreach ($enquiries as $enquiry) {
			?>
				<tr>
					<td><?php echo $enquiry['name'] ?></td>
					<td><?php echo $enquiry['email'] ?></td>
					<td><?php echo $enquiry['subject'] ?></td>
					<td>
						<a href="view.php?id=<?php echo $enquiry['id']; ?>">View</a>
						|
						<form action="../../../controller/admin/enquiry/delete.php?id=<?php echo $enquiry['id']; ?>" method="post">
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