<?php

if ($_POST['voornaam'] == "") {
    echo "Je moet nog een naam invullen!";
    echo "<a href=\"opdracht2.html\"> Terug naar het formulier</a>";
};

echo $_POST['adres'];

echo $_POST['email'];

echo $_POST['wachtwoord'];

?>