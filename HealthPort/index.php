<!--Resources
Header & Footer Font :- https://fonts.google.com/
Images for the website:- https://www.freepik.com/
Social Media Icons :- https://fontawesome.com/v4.7/icons/
-->

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
    <title>
        HealthPort
    </title>

    <!-- Custom Styles -->
    <link rel="stylesheet" href="styles.css">

    <!-- Font for the Website -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">

    <!-- Social Media Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Icons resources 
		https://fontawesome.com/v4.7/icons/-->

</head>


<body>
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
        <div class="text-b">
            <h1>WELCOME</h1>
            <p>BEST MEDICAL PORTAL EVER</p>
            <a href="contact.php" class="headerbutt">CONTACT US</a>
        </div>
    </section>





    <!-- Covid-19 Updates -->


    <section class="covid" style="text-align:center;">
        <h1 style="font-size: 36px;  font-weight: 600;  color: black;   padding-bottom: 15px; ">COVID-19</h1>
        <p>Check Out Live Covid-19 Updates<br><a href="https://hpb.health.gov.lk/covid19-dashboard/" style="text-decoration: none; color:aqua; padding: bottom 15px;">Visit Original Page</a></p>
        <div>
            <iframe src="https://hpb.health.gov.lk/covid19-dashboard/" frameborder="0" ;></iframe>
        </div>

    </section>




    <!-- About Us -->

    <section class="about">
        <h1>About Us</h1>
        <p>HealthPort is the best free to use medical portal available in the internet.We started the page as an assignment project and now it has devoloped into a full commercial site.<br>
            "Team DHV" has devoloped the website and its operating under Allen Designs (Pvt) Ltd.<br>Weblinks,Icons & media we got from the internet belongs to original authors.</p>

        <div class="row">
            <div class="about-col">
                <img src="img/responsive.jpg">
                <p>Quick Responses</p>
            </div>

            <div class="about-col">
                <img src="img/updated.jpg">
                <p>Updated Information</p>
            </div>

            <div class="about-col">
                <img src="img/saving.jpg">
                <p>Time Saving</p>
            </div>
        </div>

    </section>


    <!-- Why We Are The Best -->

    <section class="fac">
        <h1>Our Services</h1>
        <p>We provide our clients with the most effective and efficient services in the best way.</p>

        <div class="row">
            <div class="fac-col">
                <img src="img/channel.jpg">
                <h3><a href="<?php echo $log; ?>">e-Channeling</a></h3>
                <p>We respond and take actions to our clients</p>
            </div>

            <div class="fac-col">
                <img src="img/medi.jpg">
                <h3><a href="pharmacy.php">e-Pharmacy</a></h3>
                <p>We respond and take actions to our clients</p>
            </div>

            <div class="fac-col">
                <img src="img/covid.jpg">
                <h3><a href="Page1.php">COVID-19 Help</a></h3>
                <p>We respond and take actions to our clients</p>
            </div>
        </div>
    </section>




    <!-- User Reviews -->

    <section class="review">
        <h1>Recent Reviews</h1>
        <p>See What Our Clients Are Saying.</p>

        <div class="row">
            <div class="review-col">
                <img src="img/20210910_234635.jpg">
                <div>
                    <p>
                        Best online medical web I have seen so far.Interface is so simple even my mom,
                        whos with a little technical knowledge is using to channel her doctors and buy medicine.
                        <br>
                        <!--All icon credits goes to original authors-->
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    <h3>Selena Allen</h3>

                    </p>
                </div>
            </div>

            <div class="review-col">
                <img src="img/LTB_8306.jpg">
                <div>
                    <p>
                        Highly recommended if you are looking for a online channeling and buying medicine,
                        Easy to use.Great!
                        <br>
                        <!--All icon credits goes to original authors-->
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    <h3>Rajeesh Guptha</h3>
                    </p>
                </div>
            </div>


        </div>
    </section>




    <!-- Subscribe to Newsletter -->

    <section class="news">
        <h1>Subscribe To Our Newsletter</h1>
        <p>Subscribe to our newsletter to get latest medical news updates,new technologies,<br>home fitness instruction,health insurance pland and much more.</p>
        <a href="newsletter.php" class="headerbutt">Subscribe</a>
    </section>

    <!--Footer-->

    <section class="footer">
        <div class="social">
            <!--Social links-->
            <a href="https://bit.ly/3lSrHe4" class="fa fa-facebook"></a>
            <a href="https://www.youtube.com/channel/UCvKJzAXRHnEs1lKSukoAZUg" class="fa fa-youtube"></a>
            <a href="https://bit.ly/3hYScxu" class="fa fa-instagram"></a>
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