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
        <title> Covid-19 Symptoms</title>
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
                    <li><a href="contact.html">CONTACT US</a></li>
                    <li><a href="<?php echo $rd1; ?>"><?php echo $user; ?></a></li>
                </ul>
            </div>
        </nav>

       
       
        <!--The Side Navigation Bar-->
        <div class="sidenav">
            <a class="active" href="Page1.php"> Latest News </a>
            <a href="symptoms.php   "> COVID-19 Symptoms </a>

            <a href="Vacreg.php"> Vaccination Registration </a>
        </div>

        <!--Display-->
        <h1 style= "text-align: center;color: wheat; font-family:Garamond, serif;"> COVID-19 Symptoms</h1>
        <p style= "text-align: center;color: wheat; font-family:Garamond, serif;"> The most common symptoms are as follows. Make sure to keep safe by washing your hands frequently and avoid touching your face.</p>

        <h1 style="color: white; position: absolute; top: 300px; font-family:Garamond, serif;"> Online Medical Portal</h1>
        <br> 
        <br>
        <br>

        <!--COVID-19 Symptoms are displayed here-->
        <div class="cough"> 
            <img src="img/cough.png" alt="Cough image">
            <h2 style="text-align: center;color: wheat; font-family:Garamond, serif;"> Cough </h2>
        </div>

        <div class="fever">
            <img src="img/fever.png" alt="Fever image">
            <h2 style="text-align: center;color: wheat; font-family:Garamond, serif;"> Fever </h2>
        </div>

        <div class="breath">
            <img src="img/breath.jpg" alt="Shortness of Breath Image" width="200px" height="200px">
            <h2 style="text-align: center;color: wheat; font-family:Garamond, serif;"> Shortness of Breath</h2>
        </div>

        <div class="headache">
            <img src="img/headache.jpg" alt="Headache Image" width="200px" height="200px">
            <h2 style="text-align: center;color: wheat; font-family:Garamond, serif;"> Headache </h2>
        </div>

        <div class="runnynose">
            <img src="img/runnynose.jpg" alt="Runny nose Image" width="200px" height="200px">
            <h2 style="text-align: center;color: wheat; font-family:Garamond, serif;"> Runny Nose </h2>
        </div>

        <div class="sorethroat">
            <img src="img/sorethroat.jpg" alt="Sore Throat Image" width="200px" height="200px">
            <h2 style="text-align: center;color: wheat; font-family:Garamond, serif;"> Sore Throat</h2>
        </div>

        <!--Footer is here-->
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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