<?php


session_start();
$w=$_SESSION["emaail"];

//echo "<u>logged in as </u>"."<u><b>$w</b></u>";
echo " <a href='logout.php'><button type='button' class='d3' >LOGOUT</button></a>";
echo "<u>logged in as </u>"."<u><b>$w</b></u>";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <link rel="stylesheet" href="login.css">
        <script src="register.js">
             </script>
             <script>function validity()
{
      var x=document.getElementById("c2").value;
    var y=/^[6-9][0-9]{9}$/;
    if(x.match(y))
        {
        return true;
        }
         else
        {
        alert("invalid contact number");
        return false;
          
        }
}</script>
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
        <a href="login.html"><button type="button" class="d3">LOGOUT</button></a>
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
        
        
       
        <form action="editcontact.php" method="POST" onsubmit="return validity()" >
            <table>
        <tr>
        <td>contact no*</td>
        <td><input type="number" id="c2" name="contactno" onchange="fun2(this.id)" required></td>
        <td colspan="2" id="td2"></td>  
        <td></td>
    </tr>
    <tr>
        <td><input type="submit" name="submit" value="submit"></td>
        <td><input type="reset"></td>
    </tr>
            </table>
        </form>
    </body>
</html>

