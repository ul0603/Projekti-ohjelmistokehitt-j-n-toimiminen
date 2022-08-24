<?php
$servername = "localhost";
$username = "aaro";  // Käyttäjän nimi ja samalla tietokanta-alueen nimi; korvaa omallasi
$password = "aaro";     // Käyttäjän salasana; korvaa omallasi
try {
       $yhteys = new PDO("mysql:host=$servername;dbname=$username", $username, $password);
       $yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Yhteys muodostettu<br>";
    }
catch(PDOException $e)
    {
    echo "Ei yhteyttä tietokantaan!<br> " . $e->getMessage();
    }