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
        <script src="register.js" >
       </script>
       <style>
            button.d3
            {
                position:relative;
                left:1090px;
                top:0px;
            }
        </style>
    <title>hi blood donar!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body background="4.jpg">
    <center>
        <h1 class="b1"><img src="blood1.png" width="200px" height="150px" >
                Blood Donars</h1>
    </center>
    <br><br>
    <marquee><b><font size="5" color="green">The List Of Our Blood Banks in Guntoor</font></b></marquee>
    <br><br>
    <center>
        <font size="5"><b>Aarohi Blood Bank</b></font>
    <hr align="center" width="25%" color="purple">
    <p><b>Address:</b> D.No. 6-3-182/1 To 3, 3rd Floor, Lake View Plaza No. 1, Road No. 1, guntoor<br>
     
        <b>Pincode:</b> 500029<br>
        <b>Contact:</b> 040 27632993, 040 23200212<br>
    </p>
    <font size="5"><b>Adithya Blood Bank</b></font>
    <hr align="center" width="25%" color="purple">
    <p>
        <b>Address:</b> House No 4-1-16, H-01, Boggulakunta, Tilak Road, guntoor<br>
        <b>Pincode:</b> 500029<br>
        <b>Contact:</b> 040 39111333, 040 33063803<br>
    </p>
    <font size="5"><b>Apollo Blood Bank</b></font>
    <hr align="center" width="25%" color="purple">
    <p>
        <b>Address:</b> Apollo Enterprises,DMRL X Roads, guntoor<br>
        <b>Pincode:</b> 500058<br>
        <b>Contact:</b> 040 24342222, 040 24242333, 040 24342211<br>
    </p>
    <font size="5"><b>Asian Institute Of Gastroenterology Blood Bank</b></font>
    <hr align="center" width="25%" color="purple">
    <p>
        <b>Address:</b> 2nd Floor, #6-3-661, guntoor<br>
        <b>Pincode:</b> 500082<br>
        <b>Contact:</b> 040 23378888<br>
    </p>
    <font size="5"><b>Aware Blood Bank</b></font>
    <hr align="center" width="25%" color="purple">
    <p>
        <b>Address:</b> No. 08-16-01, Shantivanam, Sowbhagyanaga,guntoor<br>
        <b>Pincode:</b> 500035<br>
        <b>Contact:</b> 040 24031901, 040 24031902, 040 24031903, 040 2411111<br>
    </p>
    <font size="5"><b>Basavatarakam Indo American Cancer Institute And Research Centre Blood Bank</b></font>
    <hr align="center" width="35%" color="purple">
    <p>
        <b>Address:</b> Ground Floor, Road No. 14, guntoor<br>
        <b>Contact:</b> 040 23551235<br>
    </p>
     <font size="5"><b>Challa Blood Bank</b></font>
    <hr align="center" width="25%" color="purple">
    <p>
        <b>Address:</b> H.No. 7-1-71/A/1, First Floor Part, Dharam Karam Road, guntoor<br>

        <b>Pincode:</b> 500016<br>
        <b>Contact:</b> 040 42417760<br>
    </p>
    </center>
</body>
</html>