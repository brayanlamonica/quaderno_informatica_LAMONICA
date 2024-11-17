<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella Pitagorica</title>
</head>
<body>
    <h1>Tabella Pitagorica</h1>
    <table>
        <?php
        echo '<table border="1">';
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
            
        }
        echo "</table>";
        ?>
    </table>
</body>
</html>
