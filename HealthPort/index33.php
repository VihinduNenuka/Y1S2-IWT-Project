<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles/styleCss2.css">
        <title>
            Private Hospitals
        </title>
    </head>
    <style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  left: 500px;
  top:850px;
  position: absolute;
  border-radius:15px;
  font-family:Arial, Helvetica, sans-serif;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}
.closebtn:hover {
  color: black;
}

.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  left: 725px;
  top:850px;
  position: absolute;
  border-radius:15px;
  font-family:Arial, Helvetica, sans-serif;
}
</style>

<body>

    <div class="rectangle"></div>
    
    <div class="em">
        <img src="img/i1.png" width="640" height="360">
    </div>
    
    <?php
    //private hospital appointment message
        if(isset($_SESSION['succes3']) && $_SESSION['succes3']!=''){
            ?>
            <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong><?php echo $_SESSION['succes3']; ?></strong> 
          </div>
        
          <?php
          
          unset($_SESSION['succes3']);  
          
       } 
   
   ?> 

<div class="lll">

    <form method="post" action="server.php">
        <div class=precb>
    </div>

    <div class="sshape">
        <b>Private Hospitals</b>
    </div>

    <div class="pdatee">
        <p><b>Hospital Name</b></p>
    </div>

    <div class="pdatee3">
        <p><b>Apointment Time</b></p>
    </div>

    <input class="pdat"  type="date" name="date">
    </br></br>
    <input class="pcon" type="submit" name="book3">

    <div class="p3">
        <div class="select">
            <select name="hospital_name" id="hospital_name">
            <option selected disabled>Choose your Hospital</option>
            <option value="Asiri Hospital">Asiri Hospital</option>
            <option value="Lanka Hospital">Lanka Hospital</option>
            <option value="Nawaloka Hospital">Nawaloka Hospital</option>
            <option value="Royal Hospital">Royal Hospital</option>
            <option value="Durdans Hospital">Durdans Hospital</option>
            </select>
        </div>
    </div>

    <div class="pdatee4">
        <p><b>Docter Name</b></p>
    </div>
    
    <div class="p4">
        <div class="select">
            <select name="doctor_name" id="doctor_name">
            <option selected disabled>Choose your Doctor</option>
            <option value="Dr.Nimal Siripala">Dr.Nimal Siripala</option>
            <option value="Dr.Kamal Karunadasa">Dr.Kamal Karunadasa</option>
            <option value="Dr.Bimal Sirisena">Dr.Bimal Sirisena</option>
            <option value="Dr.Mahinda Perera">Dr.Mahinda Perera</option>
            <option value="Dr.Ranil Rajapaksha">Dr.Ranil Rajapaksha</option>
            </select>
            </div>
        </div>
    </form> 
</div>

<div class="mm">
        <img src="img/a1.png">
    </div>                                                                     
</body>
</html>     