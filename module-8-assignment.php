<!DOCTYPE html>
<html>
<head>
	<title>Registration and Login Form</title>
</head>
<body>

<?php
	// define variables and set to empty values
	$firstName = $lastName = $email = $password = $confirmPassword = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $firstName = test_input($_POST["firstName"]);
	  $lastName = test_input($_POST["lastName"]);
	  $email = test_input($_POST["email"]);
	  $password = test_input($_POST["password"]);
	  $confirmPassword = test_input($_POST["confirmPassword"]);

	  // validation for required fields
	  if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword)) {
	  	echo "<p>Please fill in all fields.</p>";
	  } 
	  // validation for email format
	  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  	echo "<p>Please enter a valid email address.</p>";
	  }
	  // validation for password match
	  elseif ($password !== $confirmPassword) {
	  	echo "<p>Passwords do not match.</p>";
	  }
	  // successful registration
	  else {
	  	echo "<p>Registration successful.</p>";
	  	// TODO: save user data to database or file
	  }
	}

	// helper function to test input data and sanitize it
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>

<h2>Registration Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<label>First Name:</label>
	<input type="text" name="firstName"><br><br>

	<label>Last Name:</label>
	<input type="text" name="lastName"><br><br>

	<label>Email Address:</label>
	<input type="email" name="email"><br><br>

	<label>Password:</label>
	<input type="password" name="password"><br><br>

	<label>Confirm Password:</label>
	<input type="password" name="confirmPassword"><br><br>

	<input type="submit" name="submit" value="Register">
</form>

<hr>

<?php
	// define variables and set to empty values
	$email = $password = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $email = test_input($_POST["email"]);
	  $password = test_input($_POST["password"]);

	  // validation for required fields
	  if (empty($email) || empty($password)) {
	  	echo "<p>Please enter your email and password.</p>";
	  } 
	  // successful login
	  elseif ($email === "example@email.com" && $password === "password") {
	  	echo "<p>Login successful.</p>";
	  	// TODO: redirect to welcome page and pass user data
	  }
	  // invalid login credentials
	  else {
	  	echo "<p>Invalid login credentials.</p>";
	  }
	}
?>

<h2>Login Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<label>Email Address:</label>
	<input type="email" name="email"><br><br>

	<label>Password:</label>
	<input type="password" name="password"><br><br>

	<input type="submit" name="submit" value="Login">
</form>
</body>
</html>
