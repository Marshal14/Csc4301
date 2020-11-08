<?php

function displayLogo() {
	echo "<img height='100px' width='90px' src='YSU-transparent.png'>";
}

?>

<html>

	<head>

		<title>Registration Form</title>

		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="menu.css">

	</head>

	<body>

		<div class="container">

			<center>

				<?php displayLogo(); ?>

				<h1>CSC 3411 Registration System</h1> 

				<h2>Registration Form</h2>

			</center>

			<hr width="800px">
			
			<div class="entry">
				
				<form action="regprocess.php" method="POST">

					<label>First Name:</label><br>

					<input class="login" type="text" name="fname" placeholder="Enter First Name" required><br><br>

					<label>Middle Name:</label><br>

					<input class="login" type="text" name="mname" placeholder="Enter Middle Name"><br><br>

					<label>SurName:</label><br>

					<input class="login" type="text" name="sname" placeholder="Enter SurName" required><br><br>

					<label>Address:</label><br>

					<textarea class="address" name="address" placeholder="300 Words" required></textarea><br><br>

					<label>Date of Birth:</label><br>

					<input class="login" type="date" name="dob" required><br><br>

					<label>Gender:</label><br>

					Male<input type="radio" name="gender" value="male"> &nbsp;&nbsp;&nbsp;

					Female<input type="radio" name="gender" value="female">

					<br><br>

					<label>Phone:</label><br>

					<input class="login" type="text" name="phone" placeholder="Phone Number" required><br><br>

					<label>Email:</label><br>

					<input class="login" type="email" name="email" placeholder="Email Address" required><br><br>


					<label>Username:</label><br>

					<input class="login" type="text" name="username" placeholder="Choose username (max. 20 charcaters)" required><br><br>

					<label>Password:</label><br>

					<input class="login" type="password" name="password" required><br><br>
					<center>
						
						<input class="btn-submit" type="submit" name="register" value="Register">

						&nbsp; &nbsp;

						<input class="btn-submit" type="reset" value="Reset">

					</center>

				</form>

			</div>

			<?php include('footer.php'); ?>

		</div>

	</body>

</html>