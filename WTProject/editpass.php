

<?php
session_start();

 $dbHost = 'localhost:3306';
        $dbUsername = 'root';
        $dbPassword = 'Imnagaom9101998';
        $dbName = 'test';

        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        
        $e=$_SESSION["emaail"];
         $op=$_POST["passes"];
         $np=$_POST["passbabs"];
         $cp=$_POST["po"];
         $chan="select password from blooddonar where gmail='$e'";
         $result= mysqli_query($db, $chan);
         $row= mysqli_fetch_assoc($result);
         if($row[password]==$op)
         {
         $update="update blooddonar
                 set password='$np'
                     where password='$op' and gmail='$e'";
         if ($db->query($update) == TRUE) {
   
    header("Location:passacknowledment.php");
    
} 
else {

    echo "Error: " . $update . "<br>" . $db->error;
}
         }else
         {
             echo "there are no such  records...please try again by going BACK";
             echo "<br>";
             echo "<a href='editpassform.php'>BACK</a>";
         }

?>