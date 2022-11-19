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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mediport.lk</title>
  <!--w3 schools incons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="main.css">

  <!-- Font for the Website -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">

</head>

<body>

  <!--background design- online tutorial-->

  <div class="background">
      <ul class="circles">
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
      </ul>

  <!-- Header -->
  <section class="header">
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
</section>

<!--Heading-->
  <section class="contactUs">
    <div class="fcont">
      <h1 class="heading"><span class="highlight">Contact </span>Us</h1>
      <p class="sub">want to know more? we'd love to help you out..</p>
    </div>
  </section>
  <!--clickable paths-->
  <section class="col" id="coloumns">
    <div class="colContain">
      <div class="card" style="--bg: #00c2ff ">
        <p class="mode"><a href="Email.html" style="text-decoration: none; color: white;"><i class="fa fa-envelope-o" style="font-size:36px"></i>&nbspE-MAIL </p><br>
     </div>

       <div class="card" style="--bg: #00c2ff ">
        <p class="mode"><a href="phone.html" style="text-decoration: none; color: white;"><i class="fa fa-phone" style="font-size:36px"></i>&nbspPHONE</a></p>

       <div class="card" style="--bg: #00c2ff ">
        <p class="mode"><a href="directions.html" style="text-decoration: none; color: white;"><i class="fa fa-map-marker" style="font-size:36px"></i>&nbspDIRECTIONS</a></p><br>

       </div>
    </div>
  </section>


   <!--Footer-->
   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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

</div>
</body>

</html>