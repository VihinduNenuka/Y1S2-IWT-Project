<?php 
    require("config.php");//connecting to database
    session_start();
    if(isset($_POST["login"])){
        $email=$_POST["email"];
        $pass=$_POST["password"];

        $sql="SELECT * FROM account WHERE Email='$email'";
        $flag=0;

        if($con->query($sql)){
            $result=$con->query($sql);
            while($row=$result->fetch_assoc()){
                if($row["Email"]==$email and $row["Password"]==$pass){
                    $flag=1;
                    break;
                }
            }
            if($flag==1){
                $_SESSION["email"]=$email;
                echo "<script> alert('Login Success!'); window.location='index.php'</script>";
            }
            elseif($flag==0){
                echo "<script> alert('Login Failed!'); window.location='login.php'</script>";
            }
        }
    }  
?>

<html>
    <head>

    <link rel="stylesheet" href="styles.css">

    <title>HealthPort Log In</title>
</head>
<body class="form-back">
    <div class="login">
        <h2>Login</h2>
        <form action="" method="post" class="form">
            <div class="input">
                <label for="email" class="label">Email</label>
                <input type="email" name="email" id="email" class="input" placeholder="Enter your email" required>
            </div>
            <div class="input">
                <label for="password" class="label">Password</label>
                <input type="password" name="password" id="password" class="input" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="logbtn" name="login">Login</button>
            <p>Create Account! <a href="register.php">Register</a>.</p>
        </form>
    </div>
</body>
</html>