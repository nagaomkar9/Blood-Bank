
<?php
if(isset($_GET['js_var']))
{
    $var = $_GET['js_var'];
}
$conn=new mysqli("localhost:3306", "root", "Imnagaom9101998", "test");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$s="select * from blooddonar where gmail='$var';";
$r=$conn->query($s);
if($r->num_rows)
{
            echo "SORRY,YOUR ALREADY REGISTERED";   
}
?>

