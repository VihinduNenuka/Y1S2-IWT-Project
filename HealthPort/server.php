<?php 

session_start();

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'echanneling';
    //$connection = mysqli_connect('dbserver','dbuser','dbpassword','dbname');
    $connection = mysqli_connect('localhost','root','','healthport');

    //checking the connection
    if (mysqli_connect_error()){
        die('Database Connection Failed' . mysqli_connect_error());
    }else{
        echo"Connection Succesfull.";
    }

 ?>

<?php 

//public hospital
if (isset($_POST['book1']))
 {
   
    $hospital_name=$_POST['hospital_name'];
    $date=$_POST['date'];
    

    $query="INSERT INTO appointment (hospital_name,date)
    VALUES ('$hospital_name','$date')";
    $query_run=mysqli_query($connection,$query);
     if($query_run)
     {
        $_SESSION['succes2']="Your appointment for $hospital_name booked";
        header('Location:index22.php');
     }else
     {
        (!mysqli_query($connection, $query)); {
                echo("Error description: " . mysqli_error($connection));;
   
     }
  }
}

//ayurvedic hospital
if (isset($_POST['book2']))
 {
   
    $hospital_name=$_POST['hospital_name'];
    $date=$_POST['date'];
    

    $query="INSERT INTO appointment (hospital_name,date)
    VALUES ('$hospital_name','$date')";
    $query_run=mysqli_query($connection,$query);
     if($query_run)
     {
        $_SESSION['succes2']="Your appointment for $hospital_name booked";
        header('Location:index22.php');
     }else
     {
        (!mysqli_query($connection, $query)); {
                echo("Error description: " . mysqli_error($connection));;
   
     }
  }
}

//private hospital
if (isset($_POST['book3']))
 {
   
    $hospital_name=$_POST['hospital_name'];
    $doctor_name=$_POST['doctor_name'];
    $date=$_POST['date'];
    

    $query="INSERT INTO private_hospital (hospital_name,doctor_name,date)
    VALUES ('$hospital_name','$doctor_name','$date')";
    $query_run=mysqli_query($connection,$query);
     if($query_run)
     {
        $_SESSION['succes3']="Your appointment for $hospital_name and $doctor_name booked";
        header('Location:index33.php');
     }else
     {
        (!mysqli_query($connection, $query)); {
                echo("Error description: " . mysqli_error($connection));;
   
     }
  }
}

 ?>
