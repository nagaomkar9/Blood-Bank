$conn=new mysqli("localhost","root","Imnagaom9101998","test");
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






if($conn->connect_error)
{
    die ("connnection failed".$conn->connect_error);
}

$sql = "INSERT INTO blooddonar
VALUES ('$x','$y','$z','$p','$q','$o','$r','$a','$t','$imgContent','$imgname');";

if ($conn->query($sql) == TRUE) {
    header("Location:inserted.html");
    
    
} 
else {

    echo "Error: " . $sql . "<br>" . $conn->error;
}