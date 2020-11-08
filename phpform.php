<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Don Allah ka cika nan!!!";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["web"])) {
    $website = "";
  } else {
    $website = test_input($_POST["web"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
	<style type="text/css">

		body {

			background: #ff0000;
		}
		
		.container {

			width: 700px;
			height: auto;
			border: 1px solid #fff;
			padding: 100px auto;
			margin: 100px auto;
			background: #fff;
			border-radius: 10px;
		}

		.style1 {

			margin: 50px auto;
			padding: 100px auto;
			width: 450px;
		}

		.input {
			width: 400px;
			height: 30px;
		}

	</style>
</head>
<body>

	<div class="container">

		<?php //echo "<h2>".$_SERVER["PHP_SELF"]."</h2>";
		echo "<p style='color: black;'>";
		echo "<br>";
		echo "$name";
		echo "<br>";
		echo "$email";
		echo "<br>";
		echo "$website";
		echo "<br>";
		echo "$comment";
		echo "<br>";
		echo "$gender";
		echo "</p>";

		?>
		<form class="style1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

		<label>Name:</label><br>
		<input class="input" type="text" name="name">
		<span class="error">* <?php echo $nameErr;?></span><br>
		<label>Email:</label><br>
		<input class="input" type="text" name="email">
		<span class="error">* <?php echo $emailErr;?></span><br>
		<label>Website:</label><br>
		<input class="input" type="text" name="web">
		<span class="error"><?php echo $websiteErr;?></span><br>
		<label>Comment:</label><br>
		<textarea name="comments" rows="5" cols="50"></textarea><br>
		<label>Gender:</label><br>
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male">Male
		<span class="error">* <?php echo $genderErr;?></span>

		<center>
			<input type="submit" name="Submit">&nbsp;
			<input type="reset" name="Reset">
		</center>
		
	</form>

	</div>

</body>
</html>