<?php

use Models\Enquiry;

session_start();
require_once '../../../vendor/autoload.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$_SESSION['old'] = [
	'name' => $name,
	'email' => $email,
	'subject' => $subject,
	'message' => $message
];

$errors = [];

if (empty($name)) {
	$errors['name'] = 'name is required';
} elseif (strlen($name) > 255) {
	$errors['name'] = 'name must not be greater than 255';
}

if (empty($email)) {
	$errors['email'] = 'email is required';
} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
	$errors['email'] = 'email is must be an valid email';
} elseif (strlen($name) > 255) {
	$errors['email'] = 'email must not be greater than 255';
}

if (empty($subject)) {
	$errors['subject'] = 'subject is required';
} elseif (strlen($name) > 255) {
	$errors['subject'] = 'subject must not be greater than 255';
}

if (empty($message)) {
	$errors['message'] = 'message is required';
} elseif (strlen($name) > 2000) {
	$errors['message'] = 'message must not be greater than 2000';
}

$_SESSION['errors'] = $errors;
if (! empty($errors)) {
	header('Location: ../../../views/website/contact.php');
} else {
	(new Enquiry)->insert([
		'name' => $name,
		'email' => $email,
		'subject' => $subject,
		'message' => $message
	]);
	// dd('HI');
	unset($_SESSION['old']);
	$_SESSION['success'] = 'Your Enquiry has been sent!';

	header('Location: ../../../views/website/index.php');
}
