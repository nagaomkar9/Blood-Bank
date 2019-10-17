<?php
session_start();
$w=$_SESSION["emaail"];

//echo "<u>logged in as </u>"."<u><b>$w</b></u>";
echo " <a href='logout.php'><button type='button' class='d3' >LOGOUT</button></a>";
echo "<u>logged in as </u>"."<u><b>$w</b></u>";
?>
<html>
    <head>
        <link rel="stylesheet" href="login.css">
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
        </div>
    <center>
    <table>
        <tr>
            <td><a href="viewdata.php"><button type="button">view data</button></a></td>
            <td><a href="editcityform.php"><button type="button">edit city</button></a></td>
            <td><a href="editpassform.php"><button type="button">change password</button></a></td>
            <td><a href="editcontactform.php"><button type="button">edit contact</button></a></td>
            <td><a href="bloodbanks.php"><button type="button">blood banks</button></a></td>
        </tr>
    </table>
    </center>
     
     </body>
</html>

