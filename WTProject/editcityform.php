<?php

session_start();
$w=$_SESSION["emaail"];

//echo "<u>logged in as </u>"."<u><b>$w</b></u>";
echo " <a href='logout.php'><button type='button' class='d3' >LOGOUT</button></a>";
echo "<u>logged in as </u>"."<u><b>$w</b></u>";

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="login.css">
        <script src="register.js">
             </script>
              <style>
            button.d3
            {
                position:relative;
                left:1090px;
                top:0px;
            }
        </style>
        <title>Blood Donars</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body background="4.jpg">
        
        
    <center>
        <h1 class="b1"><img src="blood1.png" width="200px" height="150px" >
                Blood Donars</h1>
    </center>
        <div>
            <p id="p1">
                <b><u>Welcome</u>  </b></p><br>
            <p id="p2">
<b>Every Year Thousands of units of blood is required in and around Hyderabad & Secunderabad. HyderabadBloodDonors is an online platform where donors and recipients or patients could meet together. Our charitable blood donors donate blood for emergency need, the needy and natural calamities.

HyderabadBloodDonors which is under the aegis of  Lions Club Of  Secunderabad  Pearls is a non-profit, non-commercial online boundary of social dedication which is a device to use the power of the Internet to help common people.
</b>            
</p>
        </div>
        <form action="editcity.php" method="POST">
            <table>
             <tr><td><p>city*</p></td>
        <td><select name="city" required>
                <option value="">none</option>
                <option  value="hyderabad">hyderabad</option>
                <option  value="vijayawada">vijayawada</option>
                <option  value="secunderabad">secunderabad</option>
            <option value="warangal">warangal</option>
            <option value="karimnagar">karimnagar</option>
            <option value="tenali">tenali</option>
            <option value="bombay">bombay</option>
            <option value="delhi">delhi</option>
            <option value="chennai">chennai</option>
            <option value="kolkata">kolkata</option>
            <option value="bangaluru">bangaluru</option>
            <option value="guntoor">guntoor</option>
            </select> </td>
    </tr>    
    <tr>
        <td><input type="submit" name="submit" value="submit"></td>
        <td><input type="reset"></td>
    </tr>
        </table>
        </form>
  
    </body>
</html>
