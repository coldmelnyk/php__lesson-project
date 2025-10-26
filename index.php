<?php
	$title = 'PHP - Local - Home';

	include "blocks/header.php" // doesn't stop code below if error
?>

	<h1>Home</h1>

<?php
	echo 'Query array: ' . print_r($_GET, true); // it shows us a query params; $_GET is an array with all of queries;
	require "blocks/footer.php" // stops code below if error
?>