<?php
session_start();
?>
<?php
$e=$_GET["gmail"];
$_SESSION["gmail"]=$e;
$conn=new mysqli("localhost:3306", "root", "Imnagaom9101998", "test");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$s="select * from blooddonar where gmail='$e';";
$r=$conn->query($s);
if($r->num_rows)
{
            echo "<html><script>alert('SORRY,YOUR ALREADY REGISTERED')</script></html>"; 
            include 'gmail.html';
}
else{
require'PHPMailer-5.2.25/PHPMailerAutoload.php'; 
$x=rand(10000,50000);
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
	$mail->Subject = 'BLOOD DONAR';
	$mail->Body = "your otp is "."$x";
        $mail->AddAddress($e);
        $_SESSION["otp"]=$x;
	
 	if(!$mail->Send()) {
   	 echo "Mailer Error: " . $mail->ErrorInfo;
	}
	else
	{
            header("location:otp.php");
	}
	

}

?>