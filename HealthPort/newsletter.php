<?php 
    require('config.php');//connecting to database

    if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $insert="INSERT INTO `newsletter`(`Name`, `Email`) VALUES ('$name','$email')";

        if($con->query($insert)){
            echo "<script> alert('Subscription Success'); window.location='index.php'; </script>";
        }
        else{
            echo "<script> alert('Subscription Failed'); window.location='newsletter.php'; </script>";
        }
    }
   
?>
<html>
    <head>

    <link rel="stylesheet" href="styles.css">

    <title>HealthPort Newsletter</title>
</head>
<body class="form-back">
    <div class="login">
        <h2>Subscribe</h2>
        <form action="" method="post" class="form">
            <div class="input">
                <label for="name" class="label">Full Name</label>
                <input type="name" name="name" id="name" class="input" placeholder="Enter your full name" required>
            </div>
            <div class="input">
                <label for="email" class="label">Email</label>
                <input type="email" name="email" id="email" class="input" placeholder="Enter your email" required>
            </div>            
            <button type="submit" class="logbtn" name="submit">Subscribe</button>
        </form>
    </div>
</body>
</html>