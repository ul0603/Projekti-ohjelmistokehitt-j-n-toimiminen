<?php 
// Alla olevat testejä varten, lopullisesta pois tietoturvan takia
@ini_set("display_errors", 1);
@ini_set("error_reporting", E_ALL);
// Otetaan yhteys tietokantapalvelimeen
include("yhteys.php");
// versio 1: haetaan tekstilaatikoiden sisällöt muuttujiin $sn, $en, $sp, $ika, $osoite, $pnro ja $ppaikka
$sn = $_POST["enimi"];
$en = $_POST["snimi"];
$sp = $_POST["spost"];
$ika = $_POST["ktalo"];
$osoite = $_POST[""];
$pnro = $_POST["txtpnro"];
$ppaikka = $_POST["txtppaikka"];
echo "$sn .. $en .. $sp .. $ika .. $osoite .. $pnro .. $ppaikka <br>";
?>  