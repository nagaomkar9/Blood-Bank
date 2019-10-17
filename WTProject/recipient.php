


<html>
    <head>
        <link rel="stylesheet" href="login.css">
        <title>details of donars</title>
        <script>
        function f()
        {
    history.pushState("null","null",document.title);
    }
    f();
    window.addEventListener('popstate',f);
    
    </script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head> 
    <br>
    <body background="4.jpg">
        <font size="5"><a href="login.html">goto home</a></font>
    <center>
        <h1 class="b1"><img src="blood1.png" width="200px" height="150px" >
                Blood Donars</h1>
    </center>
</body>
</html>
<br><br><br>
<center>
<?php
session_start();
$a=$_POST['bloodgp'];
$r=$_POST['city'];
$conn =  mysqli_connect("localhost","root","Imnagaom9101998", "test");
if (!$conn) 
{
    die("Connection failed: ");
} 
else
{
    
   $sql = "SELECT * FROM blooddonar where blood_gp='$a' and city='$r'";
   define('img','images/');
 // $fileloc=$_SESSION["fileloc"];
   // $filename=$_SESSION["filename"];
    //$target=$_SESSION["target"];
   
     //$sql = "SELECT * FROM blooddonar where place='$r'";
$x=mysqli_query($conn,$sql);

echo "<table border='2.0'<tr><th>name</th><th>email</th><th>gender</th><th>age</th><th>weight</th><th>city</th><th>blood_grp</th><th>contact</th><th>donar</th>";
while($result= mysqli_fetch_array($x))
{
    echo "<tr><th>".$result['name']."</th><th>".$result['gmail']."</th><th>".$result['gender']."</th><th>".$result['age']."</th><th>".$result['weight']."</th><th>".$result['city']."</th><th>".$result['blood_gp']."</th><th>".$result['contactno']."</th><td width=100px height=100px><img src='".$result[image]."' style='width:90px;height:90px;'/></td>" ;
    
   
}

echo "</table>";
mysqli_close($conn);
}
?>
    
</center>

