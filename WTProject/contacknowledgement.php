<?php
session_start();
?>
<?php
$e=$_SESSION["emaail"];
require'PHPMailer-5.2.25/PHPMailerAutoload.php'; 
$mail=new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
	$mail->Host ='smtp.gmail.com';
	$mail->Port = '587';
	$mail->isHTML(true);
	$mail->Username = 'hydblooddonar@gmail.com';
	$mail->Password = 'Imnagaom9101998';
	$mail->SetFrom('hydblooddonar@gmail.com');
	$mail->Subject = 'HYD BLOOD DONAR';
	$mail->Body = "Your details were successfully updated";
        $mail->AddAddress($e);
	
 	if(!$mail->Send()) {
   	 echo "Mailer Error: " . $mail->ErrorInfo;
	}
	else
	{
             echo "<center><b>your contact no is successfully updated</b></center>";
    echo "<br>";
    echo "<center><b>A mail has been sent for acknowledgement</b></center>";
    echo "<br>";
    //echo "<a href='loginsuccess.php'>Go To Home Page</a>";
    include 'loginsuccess.php';
	}
        
        ?>
	
