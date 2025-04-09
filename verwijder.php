<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verwijder Klant</title>
</head>
<body>
    <h2>Klant Verwijderen</h2>
    <?php
    if (isset($_GET['id'])) {
        $id = htmlspecialchars($_GET['id']);
        echo "<p>Je staat op het punt klant met ID $id te verwijderen.</p>";
    } else {
        echo "<p>Geen ID gespecificeerd.</p>";
    }
    ?>
</body>
</html>
