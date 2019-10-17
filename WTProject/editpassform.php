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
    <center>
        <form action="editpass.php" method="POST">
        <table>
             
    
    <tr>
        <td >old password*</td>
        <td><input type="text" name="passes" onfocus="focusfunc(this.id)" onblur="fun99()" id="passes" required></td>
        <td colspan="4" id="td99"></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td >new password*</td>
        <td><input type="text" name="passbabs" onfocus="focusfunc(this.id)" onblur="fun98()" onchange="newconf()" id="passbabs" required></td>
        <td colspan="4" id="td98"></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td >confirm password*</td>
        <td><input type="text" name="pa" onfocus="focusfunc(this.id)" onblur="fun97()" id="pa" onchange="newconf()"  required></td>
        <td colspan="4" id="td97"></td>
        <td></td>
        <td></td>
        <td></td>
        <td id="td5"></td>
    </tr>
    <tr>
        <td><input type="submit" name="submit" value="submit"></td>
        <td><input type="reset"></td>
    </tr>
        </table>
        </form>
    </center>
    </body>
</html>

