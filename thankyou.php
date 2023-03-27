<!DOCTYPE html>
<html>
<head>
	<title>Thank You!</title>
</head>
<body>

	<?php
	error_reporting(E_ALL);
ini_set('display_errors', 1);
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$complete_name = $_POST["complete_name"];
			$email = $_POST["email"];
			$type = $_POST["type"];
			$satisfaction_level = $_POST["satisfaction_level"];
			$message = $_POST["message"];
	?>
	<h1>Thank You!</h1>
	<p>Received <?php echo $type; ?> message from <?php echo $complete_name; ?> (<?php echo $email; ?>)</p>
	<p><?php echo $message; ?></p>
	<p>Satisfaction Level: <?php echo $satisfaction_level; ?></p>
	<?php
		}
	?>

</body>
</html>