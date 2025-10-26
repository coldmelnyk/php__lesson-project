<?php
	$title = 'PHP - Local - About';

	include_once "blocks/header.php"; // rendered
	include_once "blocks/header.php"; // not rendered because of the once method
?>

	<div class="container">
		<h1>About us</h1>

		<form class="" method="POST" action="check_post.php">
			<input name="username" class="form-control" placeholder="Enter name" type="text"><br>
			<input name="email" class="form-control" placeholder="Enter email" type="email"><br>
			<input name="password" class="form-control" placeholder="Enter password" type="password"><br>

			<textarea class="form-control" placeholder="Enter message" name="message"></textarea><br>

			<input type="submit" value="Send" class="btn btn-success">
		</form>
	</div>

	<br>

<?php
	require "blocks/footer.php";
?>