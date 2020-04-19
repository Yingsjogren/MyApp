


<?php
    if (empty($_POST["username"]) or empty($_POST["password"])){
        echo "Du har glömt fylla i något värde";
        exit;
    }

    if ($_POST["username"] == "johannes" and $_POST["password"] == "dahlen"){
        //echo "Rätt inloggning";
        session_start();
        $_SESSION["logged_in"] = true;
        header("location: loggedIn.php");
        exit;
    } else {
        echo "Fel inloggning";
    }
?>