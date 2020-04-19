<?php

session_start();

if (!isset($_SESSION["logged_in"]) or $_SESSION["logged_in"]!== true){

    header("location:login.php");
    exit;
}


?>



<p> Du har loggat in  i din sidan! </p>
<a href="logout.php">Logga ut</a>










