<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Item</title>

	<?php include "parts/web_meta.php"; ?>

</head>
<body>
	
	<?php include "parts/header.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>Product Item</h2>

			<p>This is Item # <?= $_GET['id'] ?> </p>
		</div>
	</div>

</body>
</html>