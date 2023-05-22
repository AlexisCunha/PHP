<?php

$users = array(
    "janjaap" => array("pwd" => "1234", "rol" => "Administrator"),
    "bert" => array("pwd" => "1235", "rol" => "Gebruiker"),
    "jans" => array("pwd" => "123", "rol" => "Administrator"),
);
include 'login.php';


if(isset($_POST['knop'])

 && isset($users[$_POST["login"]]) 
 && $users[$_POST["login"]] ["pwd"] == $_POST['pwd']) {

    $_SESSION["user"] = array("naam" => $_POST["login"],

     "pwd" => $users[$_POST["login"]]['pwd'],

      "rol" => $users [$_POST["login"]]['rol']);

    $message = "Welkom".$_SESSION["user"] ["naam"]."met de rol". $_SESSION["user"]["rol"]; 

 }



 