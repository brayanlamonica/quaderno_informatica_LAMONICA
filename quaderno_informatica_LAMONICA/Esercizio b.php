<?php
$nome = "Paolo";

$ora = date("H");
$saluto = "";

// Determina il saluto in base all'orario
if ($ora >= 8 && $ora < 12) {
    $saluto = "Buongiorno";
} elseif ($ora >= 12 && $ora < 20) {
    $saluto = "Buonasera";
} else {
    $saluto = "Buonanotte";
}

$browser = $_SERVER['HTTP_USER_AGENT'];

echo "<!DOCTYPE html>
<html lang='it'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Prima pagina PHP</title>
</head>
<body>
    <h1>{$saluto} {$nome}, benvenuta nella mia prima pagina PHP</h1>
    <p>Stai usando il browser: {$browser}</p>
</body>
</html>";
?>
