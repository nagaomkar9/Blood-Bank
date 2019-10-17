<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="login.css">
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
        <form action="otpverify.php" method="POST">
            <b>OTP:</b>
            <input type="text" name="otp">
            <input type="submit" value="submit">
        </form>
        </center>
    </body>
</html>
        