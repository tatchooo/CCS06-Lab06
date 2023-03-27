<!DOCTYPE html>
<html>
<head>
	<title>Feedback Form</title>
</head>
<body>
	<h1>Feedback Form</h1>
	<form action="thankyou.php" method="post">
		<label>Complete Name:</label><br>
		<input type="text" name="complete_name"><br><br>

		<label>Email Address:</label><br>
		<input type="email" name="email"><br><br>

		<label>Type:</label><br>
		<select name="type">
			<option value="inquiry">Inquiry</option>
			<option value="feedback">Feedback</option>
			<option value="other">Other</option>
		</select><br><br>

		<label>Satisfaction Level:</label><br>
		<input type="range" name="satisfaction_level" min="0" max="10"><br><br>

		<label>Feedback Message:</label><br>
		<textarea name="message"></textarea><br><br>

		<input type="submit" value="Submit">
	</form>
</body>
</html>