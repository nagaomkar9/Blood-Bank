<?php
session_start();
?>
<?php
$a=$_POST["emaail"];
$_SESSION["emaail"]=$a;
$r=$_POST["passyo"];
$conn=new mysqli("localhost","root","Imnagaom9101998","test");
if($conn->connect_error)
{
    echo "error is".$conn->connect_error;
}
else
{
    $query= "select * from blooddonar where gmail like '$a'";
    $result=$conn->query($query);
if($result->num_rows)
{
    while($row=$result->fetch_assoc())
    {
       
            if($r==$row["password"] && $a==$row["gmail"])
               {
                 header ("Location:loginsuccess.php");
                }
 else {
       echo "<center><b>invalid email or password</b></center>";
    echo "<br>";
    include 'login.html';
    //echo "<a href='login.html'>BACK</a>";
 }
    }
}
 else 
    
 {
     echo "<center><b>sorry,you are not registered....to register,please click on REGISTER AS BLOOD DONAR WITH EMAIL</b></center>";
     echo "<br>";
     include 'login.html';
 }

  




}
    
$conn->close;
?>

<html>
    <head>
        <script>
        function f()
        {
    history.pushState("null","null",document.title);
    }
    f();
    window.addEventListener('popstate',f);
    
    </script>
    </head>
</html>