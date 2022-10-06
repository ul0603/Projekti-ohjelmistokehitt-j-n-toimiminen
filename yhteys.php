<?php
$servername = "localhost";
$username = "dbadmin";  // Käyttäjän nimi ja samalla tietokanta-alueen nimi; korvaa omallasi
$password = "dbpassword";     // Käyttäjän salasana; korvaa omallasi
try {
       $yhteys = new PDO("mysql:host=$servername;dbname=$username", $username, $password);
       $yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
    }
catch(PDOException $e)
    {
    echo "Ei yhteyttä tietokantaan!<br> " . $e->getMessage();
    }
?>