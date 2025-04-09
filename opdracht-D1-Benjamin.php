<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;
        }
        .btn-verwijder {
            background-color: #f44336;
            color: white;
            border: none;
        }
        .btn-move {
            background-color: #4CAF50;
            color: white;
            border: none;
        }
    </style>
</head>
<body>
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

            $sql = "SELECT klant_id, voornaam, achternaam, woonplaats FROM klanten";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
             
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row["voornaam"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["achternaam"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["woonplaats"]) . "</td>";
                    echo "<td>";
                    echo "<a href='verwijder.php?id=" .$row["klant_id"] . "' class='btn btn-verwijder'>Verwijder</a> ";
                    echo "<a href='update.php?id=" .$row["klant_id"] ."' class='btn btn-move'>Move</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Geen resultaten gevonden</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>

