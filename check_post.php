<?php
//	print_r($_POST);

$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$message = $_POST['message'];

if (trim($name) === '' || strlen(trim($name)) <= 1 ) {
	echo 'Error: not valid username';
} else if (trim($email) === '' || strlen(trim($email)) <= 1 ) {
	echo 'Error: not valid email';
} else if (trim($password) === '' || strlen(trim($password)) <= 1 ) {
	echo 'Error: not valid password';
} else if (trim($message) === '' || strlen(trim($message)) <= 1 ) {
	echo 'Error: not valid message';
} else {
	$_POST['password'] = md5($password);

	echo "<h1>All data:</h1>";
	foreach ($_POST as $key => $value) {
		echo "<p>Key: $key; Value: $value</p>";
	}

	header('Location: index.php'); // relocating to index.php if success
	exit; // leaving from this file
}