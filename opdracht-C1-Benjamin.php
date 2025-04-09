<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Titels</title>
</head>
<body>
    <h2>Game Titels</h2>
    <ul>
        <?php
        
        require "database-connectie-Benjamin.php";

     
        $sql = "SELECT titel, platform FROM producten";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . htmlspecialchars($row["titel"]) . " (" . htmlspecialchars($row["platform"]) . ")</li>";
            }
        } else {
            echo "Geen resultaten gevonden";
        }

    
        $conn->close();
        ?>
    </ul>
</body>
</html>
