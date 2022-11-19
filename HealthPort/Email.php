<?php


    $name = $_POST["name"];
    $visitor_email = $_POST['email'];
    $message =  $_POST['message'];
    $sub = $_POST['sub'];

    if(isset($_POST["sub"])){
        echo "<script> alert('Message Sent'); window.location='contact.php'</script>";
    }


    $email_from = 'it21050008@my.sliit.lk';

    $email_subject = "Contact US Form";

    $email_body = "User name : $name. \n". 
                    "User Email: $visitor_email. \n". 
                        "User message : $message. \n";


    $to =  "dinethsassri@gmail.com";
    
    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: email.html");
?>