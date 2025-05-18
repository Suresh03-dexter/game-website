<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Contact Page</title>
	<link rel="stylesheet" href="css/contact.css" />
	<!-- Font Awesome CDN for icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
		integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<?php
	include 'nav.php';
	?>

	<div id="contact" class="contact-section">
		<h1>Contact Us</h1>
		<div class="contact-info">
			<form class="contact-form" action="../../controller/admin/enquiry/store.php" method="post"
				style="background: #fff; padding: 2rem; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.08); max-width: 500px; margin-bottom: 2rem;">
				<div style="margin-bottom: 1.2rem;">
					<label for="name" style="display: block; font-weight: 600; margin-bottom: 0.5rem;"><i
							class="fas fa-user" style="margin-right: 0.5rem; color: #007bff;"></i>Name</label>
					<input type="text" id="name" name="name" value="<?php echo ! empty($_SESSION['old']['name']) ? $_SESSION['old']['name'] : '' ?>"
						style="width: 100%; padding: 0.7rem; border: 1px solid #ccc; border-radius: 5px;">
					<?php
					if (isset($_SESSION['old']) && ! empty($_SESSION['errors']['name'])) {
					?>
						<p style="color: red;"><?php echo $_SESSION['errors']['name'] ?></p>
					<?php
					}
					?>
				</div>
				<div style="margin-bottom: 1.2rem;">
					<label for="email" style="display: block; font-weight: 600; margin-bottom: 0.5rem;"><i
							class="fas fa-envelope" style="margin-right: 0.5rem; color: #007bff;"></i>Email</label>
					<input type="text" id="email" name="email" value="<?php echo ! empty($_SESSION['old']['email']) ? $_SESSION['old']['email'] : '' ?>"
						style="width: 100%; padding: 0.7rem; border: 1px solid #ccc; border-radius: 5px;">
					<?php
					if (isset($_SESSION['old']) && ! empty($_SESSION['errors']['email'])) {
					?>
						<p style="color: red;"><?php echo $_SESSION['errors']['email'] ?></p>
					<?php
					}
					?>
				</div>
				<div style="margin-bottom: 1.2rem;">
					<label for="subject" style="display: block; font-weight: 600; margin-bottom: 0.5rem;"><i
							class="fas fa-tag" style="margin-right: 0.5rem; color: #007bff;"></i>Subject</label>
					<input type="text" id="subject" name="subject" value="<?php echo ! empty($_SESSION['old']['subject']) ? $_SESSION['old']['subject'] : '' ?>"
						style="width: 100%; padding: 0.7rem; border: 1px solid #ccc; border-radius: 5px;">
					<?php
					if (isset($_SESSION['old']) && ! empty($_SESSION['errors']['subject'])) {
					?>
						<p style="color: red;"><?php echo $_SESSION['errors']['subject'] ?></p>
					<?php
					}
					?>
				</div>
				<div style="margin-bottom: 1.5rem;">
					<label for="message" style="display: block; font-weight: 600; margin-bottom: 0.5rem;"><i
							class="fas fa-comment" style="margin-right: 0.5rem; color: #007bff;"></i>Message</label>
					<textarea id="message" name="message" rows="4"
						style="width: 100%; padding: 0.7rem; border: 1px solid #ccc; border-radius: 5px; resize: vertical;"><?php echo ! empty($_SESSION['old']['message']) ? $_SESSION['old']['message'] : '' ?></textarea>
					<?php
					if (isset($_SESSION['old']) && ! empty($_SESSION['errors']['message'])) {
					?>
						<p style="color: red;"><?php echo $_SESSION['errors']['message'] ?></p>
					<?php
					}
					?>
				</div>
				<button type="submit"
					style="background: #007bff; color: #fff; border: none; padding: 0.8rem 2rem; border-radius: 5px; font-size: 1rem; font-weight: 600; cursor: pointer; transition: background 0.2s;">
					<i class="fas fa-paper-plane" style="margin-right: 0.5rem;"></i>Send Message
				</button>
			</form>
		</div>
	</div>
</body>

</html>
<?php
unset($_SESSION['old']);
?>