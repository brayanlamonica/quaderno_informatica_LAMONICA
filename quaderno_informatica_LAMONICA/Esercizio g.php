<!DOCTYPE html>
<html>

<head>
    <title>Gestione Anagrafica Utenti</title>
</head>

<body>
    <?php
    // Controllo se il modulo è stato inviato
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = ($_POST['nome']);
        $cognome = ($_POST['cognome']);
        $data_nascita = ($_POST['data_nascita']);
        $codice_fiscale = ($_POST['codice_fiscale']);
        $email = ($_POST['email']);
        $cellulare = ($_POST['cellulare']);
        $indirizzo = ($_POST['indirizzo']);
        $cap = ($_POST['cap']);
        $comune = ($_POST['comune']);
        $provincia = ($_POST['provincia']);
        $nickname = ($_POST['nickname']);
        $password = ($_POST['password']);

        // Visualizzazione dei dati inseriti
        echo '<h2>Dati Inseriti</h2>';
        echo 'Nome: ' . $nome . '<br>';
        echo 'Cognome: ' . $cognome . '<br>';
        echo 'Data di Nascita: ' . $data_nascita . '<br>';
        echo 'Codice Fiscale: ' . $codice_fiscale . '<br>';
        echo 'Email: ' . $email . '<br>';
        echo 'Cellulare: ' . $cellulare . '<br>';
        echo 'Indirizzo: ' . $indirizzo . '<br>';
        echo 'CAP: ' . $cap . '<br>';
        echo 'Comune: ' . $comune . '<br>';
        echo 'Provincia: ' . $provincia . '<br>';
        echo 'Nickname: ' . $nickname . '<br>';
        echo 'Password: ' . $password . '<br>';
    } else {
        // Visualizzazione del modulo
        echo '<h2>Inserisci i tuoi dati</h2>
              <form method="post" action="">
                  <label for="nome">Nome:</label>
                  <input type="text" id="nome" name="nome" pattern="[A-Za-z\s]+" required><br><br>

                  <label for="cognome">Cognome:</label>
                  <input type="text" id="cognome" name="cognome" pattern="[A-Za-z\s\']+" required><br><br>

                  <label for="data_nascita">Data di Nascita:</label>
                  <input type="date" id="data_nascita" name="data_nascita" required><br><br>

                  <label for="codice_fiscale">Codice Fiscale:</label>
                  <input type="text" id="codice_fiscale" name="codice_fiscale"><br><br>

                  <label for="email">Email:</label>
                  <input type="email" id="email" name="email" required><br><br>

                  <label for="cellulare">Cellulare:</label>
                  <input type="tel" id="cellulare" name="cellulare" pattern="\d{10}"><br><br>

                  <label for="indirizzo">Indirizzo:</label>
                  <input type="text" id="indirizzo" name="indirizzo" required>
                  <input type="text" id="cap" name="cap" required>
                  <input type="text" id="comune" name="comune" required>
                  <input type="text" id="provincia" name="provincia" required><br><br>

                  <label for="nickname">Nickname:</label>
                  <input type="text" id="nickname" name="nickname" required><br><br>

                  <label for="password">Password:</label>
                  <input type="password" id="password" name="password" required><br><br>

                  <button type="submit">Invia</button>
              </form>';
    }
    ?>
</body>

</html>