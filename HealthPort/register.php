<?php
require("config.php");//connecting to database
if (isset($_POST["submit"])) {
	//Gathering User Inputs
	$email = $_POST["email"];
	$pass = $_POST["password"];
	$cpass=$_POST['cpassword'];
	$fname = $_POST["name"];
	$sql = "INSERT INTO `account`(`FullName`, `Email`, `Password`) VALUES ('$fname','$email','$pass')";
	$flag = 0;

	if ($_POST['password'] !== $_POST['cpassword']) {
		echo "<script> alert('Password Do Not Match'); window.location='register.php'</script>";
		die();
		
	 }

	if ($con->query($sql)) {
		$flag = 1;
	}
	if ($flag == 1) {
		echo "<script> alert('Registration Success!'); window.location='index.php'</script>";
	} elseif ($flag == 0) {
		echo "<script> alert('Registration Failed'); window.location='register.php'</script>";
	}
}

?>


<html>

<head>

	<link rel="stylesheet" href="styles.css">

	<title>HealthPort Registration Form</title>
	<script src="js/main.js"></script>
</head>

<body class="form-back">
	<div id="error"></div>
	<div class="login">
		<h2>Register</h2>
		<form action="" method="post" class="form" id="form">
			<div class="input">
				<label for="name" class="label">Full Name</label>
				<input type="name" name="name" id="name" class="input" placeholder="Enter your full name" required>
			</div>
			<div class="input">
				<label for="email" class="label">Email</label>
				<input type="email" name="email" id="email" class="input" placeholder="Enter your email" required>
			</div>
			<div class="input">
				<label for="password" class="label">Password</label>
				<input type="password" name="password" id="password" class="input" placeholder="Enter your password" required>
			</div>
			<div class="input">
				<label for="cpassword" class="label">Confirm Password</label>
				<input type="password" name="cpassword" id="cpassword" class="input" placeholder="Re-enter password" required>
			</div>
			<button type="su" class="logbtn" name="submit">Register</button>
			<p>You have already an account! <a href="login.php">Login</a>.</p>
		</form>
	</div>
</body>

</html>