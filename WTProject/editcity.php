
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
         $x=$_POST["name"];
         $r=$_POST["city"];
         $e=$_SESSION["emaail"];
        
         $update="update blooddonar
                 set city='$r'
                     where gmail='$e' ";
         if ($db->query($update) == TRUE) {
   
    header("Location:acknowledgement.php");
    
} 
else {

   //echo "Error: " . $update . "<br>" . $db->error;
    echo "They are no such names in our records....please try again by going BACK";
    echo "<a href='editcity.html'>BACK</a>";

}
?>