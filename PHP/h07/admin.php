<?php
session_start();

if(isset($_SESSION["user"] && $_SESSION["user"] ["rol"] == "Administrator")){

echo "<h1>Welkom".$_SESSION["user"]["naam"]. "op het admingedeelte van de website</h1>";

echo "<p><a href='login.php'>login</a></p>";

} else {

    header('location: login.php');
    echo "error wrong Login or/and password";

}

if(isset($_GET["loguit"])) { 
    $_SESSION = array();
    session_destroy();
}
?>

<html>
<P><a href="login.php?loguit">uitloggen</a></p>
</html>