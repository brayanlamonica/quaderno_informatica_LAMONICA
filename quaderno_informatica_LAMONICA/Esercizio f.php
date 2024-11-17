<!DOCTYPE html>
<html>
<head>
    <title>Genera Tabella</title>
</head>
<body>
<p><a href='index.html'>&#8592;</a></p>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $n = intval($_POST['number']);
        echo "<h2>Tabella dei quadrati e cubi fino al numero inserito</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Numero</th>
                    <th>Quadrato</th>
                    <th>Cubo</th>
                </tr>";

        for ($i = 1; $i <= $n; $i++) {
            $square = $i * $i;
            $cube = $i * $i * $i;
            echo "<tr>
                    <td>$i</td>
                    <td>$square</td>
                    <td>$cube</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo '<h2>Inserisci un numero tra 1 e 10</h2>
              <form method="post" action="">
                  <label for="number">Numero:</label>
                  <select id="number" name="number" required>';
        
        for ($i = 1; $i <= 10; $i++) {
            echo "<option value=\"$i\">$i</option>";
        }

        echo '  </select>
                  <button type="invia">Crea tabella</button>
              </form>';
    }
    ?>
</body>
</html>
