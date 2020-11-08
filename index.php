<?php
error_reporting(0);

function displayLogo() {
	echo "<img height='100px' width='90px' src='YSU-transparent.png'>";
}

?>

<html>

	<head>

		<title>Admin Login Form</title>

		<link rel="stylesheet" type="text/css" href="style.css">

	</head>

	<body>

		<div class="container">

			<center>

				<?php

				displayLogo();

				?>

				
				<h1>CSC 3411 Registration System</h1>

				<h2>Login Form</h2>

			</center>

			<div class="entry">
				
				<form action="loginprocess.php" method="post">

					<label>User Id:</label><br>

					<input class="login" type="text" name="adminid" placeholder="Enter Admin Id" required><br><br>

					<label>Password:</label><br>

					<input class="login" type="password" name="password" placeholder="Enter Password"  required><br><br>


					<center>

						<input class="btn-submit" type="submit" name="submit" value="Login">

						&nbsp; &nbsp;

						<input class="btn-submit" type="reset" value="Reset"><br><br>

						<a href="registration_form.php" style="text-align: left;">Create an Account</a>

					</center>
					
				</form>

			</div>

			<?php include('footer.php'); ?>
			
		</div>

	</body>

</html>
