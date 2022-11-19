<?php
$rd1 = "login.php";
$log = "login.php";
$user = "LOGIN";
session_start();
if (isset($_SESSION["email"])) {
	$user = $_SESSION["email"];
	$log = "main.php";
	$rd1 = "user.php";
}
?>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HealthPort</title>
	<link rel="stylesheet" href="style11.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Icons resources 
		https://fontawesome.com/v4.7/icons/-->

	<!-- Font for the Website -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">

</head>

<body>
	<form name="newform" method="GET" action="invoice.php">

		<!-- Header -->
		<nav>
			<a href="index.php"><img src="img/iwt1.png" style="opacity: 100%;"></a>
			<!-- Navigation Bar -->
			<div class="nav-links">
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="<?php echo $log; ?>">e-CHANNELING</a></li>
					<li><a href="pharmacy.php">e-PHARMACY</a></li>
					<li><a href="Page1.php">COVID-19</a></li>
					<li><a href="contact.php">CONTACT US</a></li>
					<li><a href="<?php echo $rd1; ?>"><?php echo $user; ?></a></li>
				</ul>
			</div>
		</nav>


		<div class="head1">
			<h1 class="heading">PHARMACY</h1>
		</div>
		<div class="cat">
			<div class="row">

				<div class="col1">
					<img src="Img/antibiotic.png">
					<img src="Img/vitamin.png">
					<img src="Img/Ayurvedic.png">
				</div>
			</div>
		</div>

		<table class="t1">
			<tr>
				<th>

				</th>
				<th>
					ANTIBIOTICS
				</th>
			</tr>
			<tr>
				<td>
					<center>
						<img src="Img/amoxicillin.jpg">
					</center>
				</td>
				<td>
					<center>
						<img src="Img/penicillin.jpg">
					</center>
				</td>
				<td>
					<center>
						<img src="Img/doxycycline.jpg">
					</center>
				</td>
			</tr>
			<tr>
				<td>
					<center>
						<br>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
							<i class="fa fa-star-o"></i>
						</div>
					</center>

					<br>
					<h4 align="center">Amoxicillin</h4>
					<br>
					<center>Rs.250
						<br>
						Quantity <select name="q1">
							<option value="0" selected>0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</center>

				</td>
				<td>
					<center>
						<br>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</div>
					</center>

					<br>
					<h4 align="center">Penicillin</h4>
					<br>
					<center>Rs.350
						<br>
						Quantity <select name="q2">
							<option value="0" selected>0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</center>
				</td>
				<td>
					<center>
						<br>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
						</div>
					</center>

					<br>
					<h4 align="center">Doxycycline</h4>
					<br>
					<center>Rs.300
						<br>
						Quantity <select name="q3">
							<option value="0" selected>0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</center>
				</td>
			<tr>
				<td colspan="3">
					<hr color="blue" width="100%" size="5px">
				</td>
			</tr>

			</tr>
			<tr>
				<th>
				</th>
				<th>
					<br>
					VITAMINS
				</th>
			</tr>
			<tr>
				<td>
					<br>
					<center>
						<img src="Img/c.jpg">
					</center>
				</td>
				<td>
					<center>
						<img src="Img/d.jpg">
					</center>
				</td>
				<td>
					<center>
						<img src="Img/e.jpg">
					</center>
				</td>
			</tr>

			<tr>
				<td>
					<center>
						<br>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</div>
					</center>

					<br>
					<h4 align="center">Vitamin C</h4>
					<br>
					<center>Rs.250
						<br>
						Quantity <select name="q4">
							<option value="0" selected>0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</center>
				</td>
				<td>
					<center>
						<br>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</div>
					</center>

					<br>
					<h4 align="center">Vitamin D</h4>
					<br>
					<center>Rs.500
						<br>
						Quantity <select name="q5">
							<option value="0" selected>0</option>
							<option value="1">1</option>1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</center>
				</td>
				<td>
					<center>
						<br>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
							<i class="fa fa-star-o"></i>
						</div>
					</center>

					<br>
					<h4 align="center">Vitamin E</h4>
					<br>
					<center>Rs.150
						<br>
						Quantity <select name="q6">
							<option value="0" selected>0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</center>
				</td>
			<tr>
				<td colspan="3">
					<hr color="blue" width="100%" size="5px">
				</td>
			</tr>
			</tr>
			<tr>
				<th>
				</th>
				<th>
					<br>
					AYURVEDIC
				</th>
			</tr>
			<tr>
				<td>
					<br>
					<center>
						<img src="Img/rj.jpg">
					</center>
				</td>
				<td>
					<center>
						<img src="Img/sandi.jpg">
					</center>
				</td>
				<td>
					<center>
						<img src="Img/hair.jpg">
					</center>
				</td>
			</tr>
			<tr>
				<td>
					<center>
						<br>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>
						</div>
					</center>

					<br>
					<h4 align="center">rajapura amrutha</h4>
					<br>
					<center>Rs.450
						<br>
						Quantity <select name="q7">
							<option value="0" selected>0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</center>
				</td>
				<td>
					<center>
						<br>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-half-o"></i>
							<i class="fa fa-star-o"></i>
						</div>
					</center>

					<br>
					<h4 align="center">sandhi sudha oil</h4>
					<br>
					<center>Rs.8000
						<br>
						Quantity <select name="q8">
							<option value="0" selected>0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</center>
				</td>
				<td>
					<center>
						<br>
						<div class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>
							<i class="fa fa-star-o"></i>
						</div>
					</center>

					<br>
					<h4 align="center">Hair Tone</h4>
					<br>
					<center>Rs.1500
						<br>
						Quantity <select name="q9">
							<option value="0" selected>0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</center>
				</td>
			<tr>
				<td colspan="3">
					<hr color="blue" width="100%" size="5px">
				</td>
			</tr>
			</tr>
		</table>
		<center>
			<a href="bill.html"><input type="submit" name="x" value="View Bill" class="f"></a>
		</center>


	</form>

	<!--Footer-->

	<section class="footer">
		<div class="social">
			<a href="https://www.google.com/search?q=facebook+log&oq=facebook+lo&aqs=chrome.1.69i57j35i39j0i131i433i512j0i433i512j0i20i263i512j69i60l3.7929j0j4&sourceid=chrome&ie=UTF-8" class="fa fa-facebook"></a>
			<a href="https://www.youtube.com/" class="fa fa-youtube"></a>
			<a href="https://www.google.com/search?q=instagram&oq=inste&aqs=chrome.1.69i57j0i10i512j0i512j0i10i512j0i512l5j0i10i512.4409j0j9&sourceid=chrome&ie=UTF-8" class="fa fa-instagram"></a>
		</div>
		<ul class="foot-list">
			<li><a href="index.php">HOME</a></li>
			<li><a href="<?php echo $log; ?>">e-CHANNELING</a></li>
			<li><a href="pharmacy.php">e-PHARMACY</a></li>
			<li><a href="Page1.php">COVID-19</a></li>
			<li><a href="contact.php">CONTACT US</a></li>
		</ul>
		<p class="copy">
			All Rights Reserved.
		</p>

	</section>

</body>

</html>