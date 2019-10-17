<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$w=$_SESSION["emaail"];


echo " <a href='logout.php'><button type='button' class='d3' >LOGOUT</button></a>";
echo "<u>logged in as </u>"."<u><b>$w</b></u>";
?>

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
    
        
            
      
    <marquee direction="left" behaviour="alternate" scrollamount="6"><b><font size="5">click on any city to know the information about the location of blood banks to donate</font></b></marquee> 
    <br><br><br>
      
    <center> 
    <a href="hydsec.php">HYDERABAD AND SECUNDERABAD</a><br>
    <a href="vjd.php">VIJAYAWADA</a><br>
    <a href="war.php">WARANGAL</a><br>
    <a href="karim.php">KARIMNAGAR</a><br>
    <a href="tenali.php">TENALI</a><br>
    <a href="mumbai.php">MUMBAI</a><br>
    <a href="delhi.php">DELHI</a><br>
    <a href="chennai.php">CHENNAI</a><br>
    <a href="kolkata.php">KOLKATA</a><br>
    <a href="bangaluru.php">BANGALURU</a><br>
    <a href="guntoor.php">GUNTOOR</a><br>
    </center>
   
    
        </body>
        </html>
