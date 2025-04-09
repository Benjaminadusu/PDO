<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Winkel";
 
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}
 
$titel = $_POST['titel'];
$uitgever = $_POST['uitgever'];
$platform = $_POST['platform'];
$voorraad = $_POST['voorraad'];
$prijs = $_POST['prijs'];
 
 
$stmt = $conn->prepare("INSERT INTO producten (titel, uitgever, platform, voorraad, prijs) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssii", $titel, $uitgever, $platform, $voorraad, $prijs);
 
 
if ($stmt->execute()) {
    echo "Nieuw spel succesvol toegevoegd!";
} else {
    echo "Fout bij het toevoegen van het spel: " . $stmt->error;
}
 
 
$stmt->close();
$conn->close();
?>