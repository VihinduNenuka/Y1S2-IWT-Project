<?php
$rd1 = "login.php";
$log = "login.php";
$user = "LOG IN";
session_start();
if (isset($_SESSION["email"])) {
    $user = $_SESSION["email"];
    $log = "main.php";
    $rd1 = "user.php";
}

if (isset($_POST["logout"])) {
    session_destroy();
    header("location:index.php");
}
?>
<html>

<head>
    <title>
        Log Out
    </title>

    <!-- Custom Styles -->
    <link rel="stylesheet" href="styles.css">

    <!-- Font for the Website -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">

    <!-- Social Media Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body>
    <!-- Header -->
    <section class="logheader">
        <nav>
            <a href="index.php"><img src="img/iwt1.png" style="opacity: 100%;"></a>
            <!-- Navigation Bar -->
            <div class="nav-links">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="<?php echo $log; ?>">e-CHANNELING</a></li>
                    <li><a href="pharmacy.html">e-PHARMACY</a></li>
                    <li><a href="Page1.php">COVID-19</a></li>
                    <li><a href="contact.html">CONTACT US</a></li>
                    <li><a href="<?php echo $rd1; ?>"><?php echo $user; ?></a></li>
                </ul>
            </div>
        </nav>
        <div class="logtext-b">
            <h1>SEE YOU SOON!</h1>
            <p>Thanks For Using Our Portal.Come Back Again For An Awesome Service.</p>
            <form action="" method="POST">
                <input type="submit" name="logout" class="logoutbut" value="LOGOUT">
            </form>

        </div>
    </section>

    <!--Styles for the Background and text-->
    <style>
        .logheader {
            min-height: 100vh;
            width: 100%;
            background-image: url(img/logout.jpg);
            opacity: 100%;
            background-position: center;
            background-size: cover;
            position: relative;
        }

        .logtext-b {
            color: rgba(0, 195, 255, 0.904);
            position: absolute;
            top: 50%;
            left: 80%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .logtext-b h1 {
            font-size: 125px;
        }

        .logtext-b p {
            margin: 10px 0 40px;
            font-size: 35;
            color: rgba(0, 195, 255, 0.904);
        }
    </style>



    <section class="footer">
        <div class="social">
            <a href="https://bit.ly/3lSrHe4" class="fa fa-facebook"></a>
            <a href="https://www.youtube.com/channel/UCvKJzAXRHnEs1lKSukoAZUg" class="fa fa-youtube"></a>
            <a href="https://bit.ly/3hYScxu" class="fa fa-instagram"></a>
        </div>
        <ul class="foot-list">
            <li><a href="index.php">HOME</a></li>
            <li><a href="main.html">e-CHANNELING</a></li>
            <li><a href="pharmacy.html">e-PHARMACY</a></li>
            <li><a href="Page1.php">COVID-19</a></li>
            <li><a href="contact.html">CONTACT US</a></li>
        </ul>
        <p class="copy">
            All Rights Reserved.
        </p>

    </section>



</body>

</html>