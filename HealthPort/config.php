<!--Connection with phpMyAdmin Database-->
<?php
    $con = new mysqli("localhost", "root", "", "healthport");

    //Chechking if connected
    if($con->connect_error){
        die("Connection Failed : ".$con->connect_error);
    }
?>