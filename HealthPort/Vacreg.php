<!DOCTYPE html>

<!--This code disables e-channeling function if the user is not logged in-->
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



require('config.php'); //connecting config file

if (isset($_POST["btn"])) {

  //assigning the form entered values into variables
  $first = $_POST['fname'];
  $last = $_POST['lname'];
  $birthdate = $_POST['birthday'];
  $add = $_POST['address'];
  $num = $_POST['phone'];

  $flag = 0;

  //have to insert form values into database
  $sql = "INSERT INTO `vaccine`(`first`, `last`, `DOB`,`address`,`phone`) VALUES ('$first','$last','$birthdate','$add','$num')";

  if ($con->query($sql)) {
    $flag = 1;
  }
  if ($flag == 1) {
    echo "<script> alert('Registration Success!'); window.location='index.php'</script>";
  } elseif ($flag == 0) {
    echo "<script> alert('Registration Failed'); window.location='Vacreg.php'</script>";
  }
}




?>



<html>



<head>
  <title> Vaccination Registration </title>
  <link rel="stylesheet" href="styles/styles.css">

  <!-- Social Media Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!--a banner on top-->
  <div class="heroImage">
    <div class="heroContents">



    </div>
  </div>
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





  <!-- Side nav bar is here-->
  <div class="sidenav">
    <a class="active" href="Page1.php"> Latest News </a>
    <a href="symptoms.php"> COVID-19 Symptoms </a>

    <a href="Vacreg.php"> Vaccination Registration </a>
  </div>

  <!--Heading Titles-->
  <h1 style="color: white; position: absolute; top: 300px; font-family:Garamond, serif;"> Online Medical Portal</h1>

  <h1 style="text-align: center; color: wheat; font-family:Garamond, serif;"> Vaccination Registration Form </h1>

  <!-- The PHP Form Begins-->
  <div class="container">
    <form action="" method="post">

      <!--First Name-->
      <div class="row">
        <div class="col-25">
          <label for="fname">First Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="fname" name="fname" placeholder="Your name..">
        </div>
      </div>

      <!--Last Name-->
      <div class="row">
        <div class="col-25">
          <label for="lname">Last Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="lname" name="lname" placeholder="Your last name..">
        </div>
      </div>

      <!--Date of Birth-->
      <div class="row">
        <div class="col-25">
          <label for="birthday">Date of Birth</label>
        </div>
        <div class="col-75">
          <input type="date" id="birthday" name="birthday">
        </div>
      </div>

      <!--Address-->
      <div class="row">
        <div class="col-25">
          <label for="address"> Address</label>
        </div>
        <div class="col-75">
          <textarea id="address" name="address" placeholder="Enter your address.." style="height:200px"></textarea>
        </div>
      </div>

      <!--Telephone Number-->
      <div class="row">
        <div class="col-25">
          <label for="phone"> Telephone No </label>
        </div>
        <div class="col-75">
          <input type="tel" id="phone" name="phone" maxlength="10">
        </div>

        <!--Enter Button-->
        <h3 style="text-align: center; color: black; font-family:Garamond, serif"> Please scroll down after clicking 'Enter' </h3>
      </div>

      <div>
        <button class="button" name="btn"> Enter </button>
      </div>

    </form>
  </div>




  <!--Footer-->

  <section class="footer">
    <div class="social">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-youtube"></a>
      <a href="#" class="fa fa-instagram"></a>
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