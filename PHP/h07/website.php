<?php
    session_start();

    if(isset($_SESSION["user"])){
        echo "<h1>Welkom ".$_SESSION["user"]["naam"]. "op de website";
        echo "<p><a href='login.php'>login</a></p>";

        }else{
            header('location: login.php');
    }

    if(isset($_GET["loguit"])) { 
        $_SESSION = array();
        session_destroy();
    }
    
?>

<HTML>
<P><a href="login.php?loguit">uitloggen</a></p>

</HTML>