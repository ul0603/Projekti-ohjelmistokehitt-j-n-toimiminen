<?php 
@ini_set("display_errors", 1);
@ini_set("error_reporting", E_ALL);
// Otetaan yhteys tietokantapalvelimeen
include("yhteys.php");  // Sisällyttää aiemmin tehdyn yhteys.php-tiedoston tähän
// Taulun nimi on jasenet, ei esim Jäsenet tai Jasenet
// Listataan kaikki = *
$sql_lause =  "SELECT * FROM uutiset";
try {
  $kysely = $yhteys->prepare($sql_lause);
  $kysely->execute();
} 
 catch (PDOException $e) {
            die("VIRHE: " . $e->getMessage());
       }
$tulos = $kysely->fetchAll();
foreach($tulos as $rivi) {     
 // Taulussa on oltava sarakenimet Sukunimi, Etunimi jne
 echo $rivi['Otsikko'] . "<br>" . $rivi['julkaisu'] . "<br>" . $rivi['leipateksti'] . "<br>"  . "<br>" . "<br>" . "<br>"; 
 echo $rivi['Otsikko2'] . "<br>" . $rivi['julkaisu2'] . "<br>" . $rivi['leipateksti2'] . "<br>" . "<br>" . "<br>" . "<br>";
 echo $rivi['Otsikko3'] . "<br>" . $rivi['julkaisu3'] . "<br>" . $rivi['leipateksti3'] ."<br>" . "<br>";       
} 
?>  
