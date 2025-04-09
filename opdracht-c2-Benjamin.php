<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klantgegevens</title>
    <style>
        table {
            width: 90%;
            border-collapse: collapse;
            background-color: greenyellow;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: blue;
        }
    </style>
</head>
<body>
    <h2>Klantgegevens</h2>
    <table>
        <thead>
            <tr>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Woonplaats</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require 'database-connectie2-Benjamin.php';

          
            $sql = "SELECT voornaam, achternaam, woonplaats FROM klanten";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row["voornaam"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["achternaam"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["woonplaats"]) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Geen resultaten gevonden</td></tr>";
            }

       
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>