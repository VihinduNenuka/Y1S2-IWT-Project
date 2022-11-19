<!DOCtype html>

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
?>

<html>

<head>
    <title> Online Medical Portal </title>

    <link rel="stylesheet" href="styles/styles.css">

    <!-- Social Media Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="javascript.js"> </script>

    <!-- Font for the Website -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
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



    <h1 style="color: white; position: absolute; top: 300px; font-family:Garamond, serif;"> Online Medical Portal</h1>


    <!--Side Navigation Bar-->
    <div class="sidenav">
        <a class="active" href="Page1.php"> Latest News </a>
        <a href="symptoms.php"> COVID-19 Symptoms </a>

        <a href="Vacreg.php"> Vaccination Registration </a>
    </div>

    <?php

    include("Pg1PHP.php"); //connecting to a small php file 


    ?>

    <h1 style="text-align: center;color: wheat; font-family:Garamond, serif;"> COVID-19 : LIVE SITUATION DASHBOARD IN SRI LANKA </h1>

    <!--Live News Statistics-->

    <iframe src="https://hpb.health.gov.lk/covid19-dashboard/" style="width:100% ; height:560px;"></iframe>


    <!--Footer-->
    <div class="footer">


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