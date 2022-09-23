<?php 
// Alla olevat testejä varten, lopullisesta pois tietoturvan takia
@ini_set("display_errors", 1);
@ini_set("error_reporting", E_ALL);
// Otetaan yhteys tietokantapalvelimeen
include("yhteys.php");

$etunimi = $_POST["txtsn"];
$sukunimi = $_POST["txten"];
$sahkoposti = $_POST["txtfn"];
$koulutalo = $_POST["txttn"];
$k = $_POST["dropdown"];

if ($k==1) $kurssi = "Peruskurssi";
if ($k==2) $kurssi = "Harrastejaosto";
if ($k==3) $kurssi = "Kilpajaosto";

$alue = $_POST["alue"];



// Versio 2: muodostetaan SQL-lause ja echotetaan se, jotta voidaan tarkistaa onko ok
$sql = "INSERT INTO tiedot (etunimi, sukunimi, sahkoposti, koulutalo, kurssi, tekstikentta) VALUES ('$etunimi', '$sukunimi', '$sahkoposti', '$koulutalo', '$k', '$alue')";
try { 
		$kysely = $yhteys->prepare($sql); 
		$kysely->execute(); 
	} catch (PDOException $e) { 
	die("VIRHE NRO 2: " . $e->getMessage()); 
} 

?>  
