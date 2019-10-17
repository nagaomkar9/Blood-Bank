<?php

session_start();
session_unset();
session_destroy();
$_SESSION=array();
echo "<center><b>logged out successfully</b></center>";
include 'login.html';
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