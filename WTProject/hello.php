<?php
session_start();
?>
<?php
$x=$_POST["name"];
$y=$_SESSION["gmail"];
$z=$_POST["passes"];
//$_SESSION["passes"]=$z;
if(isset($_POST["gender"]))
{
    $p=$_POST["gender"];
}
$q=$_POST["age"];
$o=$_POST["weight"];
$r=$_POST["city"];
$a=$_POST["bloodgp"];
$t=$_POST["contactno"];
    define('img','images/');
    $fileloc=$_FILES["image"]["tmp_name"];
    $_SESSION["fileloc"]=$fileloc;
    //echo "<br>";
    $filename=$_FILES["image"]["name"];
    $_SESSION["filename"]=$filename;
    //echo "<br>";
    $target="images/".$filename;
    $_SESSION["target"]=$target;
    //echo "<br>";
    move_uploaded_file($fileloc, $target);
    $dbs=mysqli_connect('localhost','root','Imnagaom9101998','test');
    if($dbs)
    {
        $query="insert into blooddonar values('$x','$y','$z','$p','$q','$o','$r','$a','$t','$target')";
        
        //$result=mysqli_query($dbs,$query);
        if($dbs->query($query)== TRUE)
        {
            echo "<center><b>Thank You,You have registered successfully</b></center>";
            echo "<br>";
            //echo "<a href='login.html'>Go To Home</a>";
        include 'login.html';
            
        }
        else
        {
            echo $dbs->error;
        }
        
    }
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