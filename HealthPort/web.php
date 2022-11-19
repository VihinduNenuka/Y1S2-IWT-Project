<?php

    $name=array('Amoxicillin','Penicillin','Doxycycline','Vitamin C','Vitamin D','Vitamin E','rajapura amrutha','sandhi sudha oil','Hair Tone');
    $price=array(250,350,300,250,500,150,450,8000,1500);
    $quantity=array($_GET['q1'],$_GET['q2'],$_GET['q3'],$_GET['q4'],$_GET['q5'],$_GET['q6'],$_GET['q7'],$_GET['q8'],$_GET['q9']);

    $total=0;
    for ($i = 0; $i < 9; $i++) {
        $total=$total+$price[$i]*$quantity[$i];
      }
    $i;
    $itemPrice=0;
      
    //echo "Total is $total";
    echo"
    <html>
      <head>
      <link rel='stylesheet' href='style11.css'>
      </head>
      <body>
      <nav>
      <a href='index.html'><img src='img/iwt1.png' style='opacity: 100%;'></a>
      <!-- Navigation Bar -->
      <div class='nav-links'>
          <ul>
              <li><a href='index.html'>HOME</a></li>
              <li><a href='main.html'>e-CHANNELING</a></li>
              <li><a href='pharmacy.html'>e-PHARMACY</a></li>
              <li><a href='Page1.php'>COVID-19</a></li>
              <li><a href='contact.html'>CONTACT US</a></li>
              <li><a href='login.php'>LOG IN</a></li>
          </ul>              
      </div>             
  </nav> 
      </body>
    </html>";

    echo"
    <html>
      <head>
      <link rel='stylesheet' href='style11.css'>
      </head>
      <body>
      </body>
    </html>";
    echo "<table  class='t1'>
    <tr>
        <th>
            Product Name
        </th>
        <th>
            Quantity
        </th>
        <th>
            Price
        </th>
    </tr>";

        for($i=0;$i<9;$i++){
            if($quantity[$i]>=1){
                echo"<tr>";
                    $itemPrice=0;
                    echo"<td align='center'>";
                        echo"$name[$i]";
                    echo"</td>";
                    echo"<td align='center'>";
                    echo"$quantity[$i]";

                    echo"</td>";
                    echo"<td align='center'>";
                    $itemPrice=$price[$i]*$quantity[$i];
                    echo"$itemPrice";

                    echo"</td>";
                echo"</tr>";
            }
        }
        echo"<tr>
        <td colspan='3'>
					<hr color='blue' width='100%' size='5px'>
		</td>
                </tr>";
        echo"<tr>";
            echo"<td colspan='2' align='center'>
                Total Price
            </td>";
            echo"<td align='center'>";
                echo"$total";
            echo"</td>";
        echo"</tr>";
    
echo"</table>";

echo"
<html>
      <head>
      <link rel='stylesheet' href='style11.css'>
      </head>
      <body>
      <section class='footer'>
      <div class='social>
          <a href='#' class='fa fa-facebook'></a>
          <a href='#' class='fa fa-youtube'></a>
          <a href='#' class='fa fa-instagram'></a>
      </div>
      <ul class='foot-list'>
          <li><a href='index.html'>HOME</a></li>
          <li><a href='main.html'>e-CHANNELING</a></li>
          <li><a href='pharmacy.html'>e-PHARMACY</a></li>
          <li><a href='Page1.php'>COVID-19</a></li>
          <li><a href='contact.html'>CONTACT US</a></li>
      </ul>
      <p class='copy'>
          All Rights Reserved.
      </p>
  
  </section>
      </body>
    </html>
";
    
    
?>