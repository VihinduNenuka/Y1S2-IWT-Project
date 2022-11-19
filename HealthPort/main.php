<?php include("connection.php"); ?>

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
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles/css1.css">
    <link rel="stylesheet" href="styles/style11.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script.js"></script>

    <!-- Font for the Website -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">

    <title></title>
</head>

<body>
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

    <div class="rectangle"></div>

    <div class="em">
        <img src="img/i1.png" width="640" height="360">
    </div>

    <div class="im">
        <img src="img/16.png" width="1905" height="1080">
    </div>

    <div class="marr">
        <P class="bor"> e-Chanelling Center</P>
    </div>
    </br></br></br></br></br></br></br></br></br></br>
    <center>
        <button class="butt1"><a href="index33.php">Private Hospitals</a></button></br></br></br>
        <button class="butt2"><a href="index22.php">Public Hospitals</a></button>

    </center>

    <section class="footer">
        <div class="social">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
        <ul class="foot-list">
            <li><a href="index.php">HOME</a></li>
            <li><a href="main.php">e-CHANNELING</a></li>
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
<?php mysqli_close($connection); ?>