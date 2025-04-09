<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "winkel";


    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   
    $sql = "INSERT INTO producten (Titel, Uitgever, Platform, Voorraad, Prijs)
            VALUES ('F1 2022', 'EA Sports', 'Playstation 5', 28, 69)";

    $conn->exec($sql);
   
