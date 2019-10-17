
<?php
session_start();
$w=$_SESSION["emaail"];


echo " <a href='logout.php'><button type='button' class='d3' >LOGOUT</button></a>";
echo "<u>logged in as </u>"."<u><b>$w</b></u>";
$a=$_SESSION["emaail"];
$conn=new mysqli("localhost","root","Imnagaom9101998","test");
if($conn->connect_error)
{
    echo "error is".$conn->connect_error;
}
else
{
    $query= "select * from blooddonar where gmail='$a'";
    $row=$conn->query($query);
    echo "<center><table border='2.0'<tr><th>name</th><th>email</th><th>gender</th><th>age</th><th>weight</th><th>city</th><th>blood_grp</th><th>contact</th><th>capture</th></center>";
if($row->num_rows)
{
    while($result=$row->fetch_assoc())
    {
       echo "<tr><td>".$result['name']."</td><td>".$result['gmail']."</td><td>".$result['gender']."</td><td>".$result['age']."</td><td>".$result['weight']."</td><td>".$result['city']."</td><td>".$result['blood_gp']."</td><td>".$result['contactno']."</td><td width=100px height=100px><img src='".$result[image]."' style='width:90px;height:90px;'/></td>" ; 
    }
}
$conn->close;
}
?>

<html>
    <head>
        <link rel="stylesheet" href="login.css">
        <title>Blood Donars</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
 <style>
            button.d3
            {
                position:relative;
                left:1090px;
                top:0px;
            }
        </style>
    </head>
    <body background="4.jpg">
    <center>
        <h1 class="b1"><img src="blood1.png" width="200px" height="150px" >
                Blood Donars</h1>
    </center>
</body>
</html>
       