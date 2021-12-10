<?php

$host = "localhost";
$baza = "izdavanje_zahteva";
$user = "root";
$sifra = "";

$kon = mysqli_connect($host,$user,$sifra,$baza);

if (!$kon) {
    echo "Konekcija nije uspela!";
}


?>