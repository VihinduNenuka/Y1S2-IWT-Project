<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" href="styles/styleCss1.css">
           <title>
            Public Hospitals
           </title>
    </head>
    <style>
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

</style>

<body>

<?php
    //public hospital appointment message
        if(isset($_SESSION['succes']) && $_SESSION['succes']!=''){
            ?>
            <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong><?php echo $_SESSION['succes']; ?></strong> 
          </div>
        
          <?php
          
          unset($_SESSION['succes']);  
          
       } 
   
   ?> 

<?php
    
    //ayurvedic hospital appointment message
    if(isset($_SESSION['succes2']) && $_SESSION['succes2']!=''){
        ?>
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <strong><?php echo $_SESSION['succes2']; ?></strong> 
      </div>
    
      <?php
      
      unset($_SESSION['succes2']);  
      
   } 
   
   ?> 

<form method="post" action="server.php">


    <div class="rectangle"></div>

<div class="em">
    <img src="img/i1.png" width="640" height="360">
</div>


<div class=reca>
</div>
<div class=recb>  
</div>

<div class="gshape">   
    <b>General Hospitals</b>
</div>

<div class="ashape">
    <b>Ayurvedic Hospitals</b>
</div>

<div class="datee">
    <p><b>Hospital Name</b></p>
</div>

<div class="datee1">
    <p><b>Hospital Name</b></p>
</div>

<div class="datee3">
    <p><b>Apointment Time</b></p>
</div>

<div class="datee4">
    <p><b>Apointment Time</b></p>
</div>


<input class="dat"  type="date" name="date" > 
</br></br>
<input class="con" name="book1" type="submit">

<input class="dat1"  type="date" name="date" >
</br></br>
<input class="con1" name="book2" type="submit">


<div class="p1">
<div class="select">
    <select name="hospital_name" id="hospital_name">
       <option selected disabled>Choose your Hospital</option>
       <option value="Piliyandala Hospital">Piliyandala Hospital</option>
       <option value="Homagama Hospital">Homagama Hospital</option>
       <option value="Kalubowila Hospital">Kalubowila Hospital</option>
       <option value="Raagama Hospital">Raagama Hospital</option>
       <option value="Karapitiya Hospital">Karapitiya Hospital</option>
    </select>
 </div>
</div>

<div class="p2">
    <div class="select">
        <select name="hospital_name" id="hospital_name">
           <option selected disabled>Choose your Hospital</option>
           <option value="Mansuva Ayurveda Hospital">Mansuva Ayurveda Hospital</option>
           <option value="Winsetha Ayurveda Hospital">Winsetha Ayurveda Hospital</option>
           <option value="Meegoda Ayurveda Hospital">Meegoda Ayurveda Hospital</option>
           <option value="Aniyakanda Ayurveda Hospital">Aniyakanda Ayurveda Hospital</option>
           <option value="Lunawa Ayurvedic Hospital">Lunawa Ayurvedic Hospital</option>
        </select>
     </div>
    </div>
   
    <div class="l1"></div>
    </form>
</body>
</html>