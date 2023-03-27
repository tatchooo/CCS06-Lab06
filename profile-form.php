<!DOCTYPE html>
<html>
<head>
	<title>Profile Form</title>
</head>
<body>
	<?php
		// Define variables and set to empty values
		$name = $birthdate = $email = $program = $color = $superpower = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		  $name = test_input($_POST["complete_name"]);
		  $birthdate = test_input($_POST["birthdate"]);
		  $email = test_input($_POST["email"]);
		  $program = test_input($_POST["program"]);
		  $color = test_input($_POST["favorite_color"]);
		  $superpower = test_input($_POST["superpower_level"]);
		}

		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}
	?>

	<h2>Profile Form</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="complete_name">Complete Name:</label>
		<input type="text" id="complete_name" name="complete_name" required><br><br>

		<label for="birthdate">Birthdate:</label>
		<input type="date" id="birthdate" name="birthdate" required><br><br>

		<label for="email">Email Address:</label>
		<input type="email" id="email" name="email" required><br><br>

		<label for="program">Program:</label>
		<select id="program" name="program" required>
			<option value="">--Select Program--</option>
			<option value="BSCS">BSCS</option>
			<option value="BSIT">BSIT</option>
		</select><br><br>

		<label for="favorite_color">Favorite Color:</label>
		<input type="color" id="favorite_color" name="favorite_color" required><br><br>

		<label for="superpower_level">Superpower Level:</label>
		<input type="range" id="superpower_level" name="superpower_level" min="0" max="100" required><br><br>

		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			echo "<h2>Your Profile</h2>";
			echo "<p>Name: " . $name . "</p>";
			echo "<p>Birthdate: " . $birthdate . "</p>";
			echo "<p>Email: " . $email . "</p>";
			echo "<p>Program: " . $program . "</p>";
			echo "<p>Favorite Color: <span style='background-color:" . $color . ";padding: 10px;'>" . $color . "</span></p>";
			echo "<p>Superpower Level: " . $superpower . "</p>";
		}
	?>
</body>
</html>