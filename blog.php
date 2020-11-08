<?php
error_reporting(0);

function displayLogo() {
	echo "<img height='100px' width='90px' src='YSU-transparent.png'>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
	<link rel="stylesheet" type="text/css" href="home_style.css">

</head>


<body>
	<center>
		<?php displayLogo(); ?>
		<h1>CSC 3411 Registration System</h1>

    	<h2>Blog</h2>
	</center>

	<hr width="800px">

	<center>
		<div id='cssmenu'>
		<ul>
			<li class='active'><a href='home.php'>Home</a></li>
			<li><a href='aboutus.php'>About Us</a></li>
			<li><a href='gallery.php'>Gallery</a></li>
			<li><a href='blog.php'>Our Blog</a></li>
			<li><a href='contact.php'>Contact Us</a></li>
			<li><a href='logout.php'>Logout</a></li>
		</ul>
	</div>
	</center>



	<div class="container">


			<div style="border: 1px solid #fff; border-radius: 10px; background: #fff; width: 800px; height: auto; margin: 50px auto;">


				<div class="content-panel">

                        <table align="center">
                          <tr>
                            <td>
                              <div style="border: none; width: 0 auto; height: 300px; margin: 0 auto;">

                                
                              </div>
                            </td>
                          </tr>
                        </table>


                      </div>
				


			</div>

			<?php include('footer.php'); ?>

	</div>

</body>
</html>