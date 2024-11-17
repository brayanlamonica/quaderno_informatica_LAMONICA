<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangoli di Asterischi</title>
    <style>
        body {
            font-family: monospace;
        }
    </style>
</head>
<body>
<p><a href='index.html'>&#8592;</a></p>
    <h1>Triangoli di Asterischi</h1>

    <pre>
        <h1> (a) Triangolo con asterischi crescenti </h1> 
<?php
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo PHP_EOL;
}
?>
    </pre>

    <pre>
    <h1> (b) Triangolo con asterischi decrescenti </h1>
<?php
for ($i = 10; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo PHP_EOL;
}
?>
    </pre>

   
    <pre>
    <h1> (c) Triangolo specchiato con asterischi decrescenti </h1>
<?php
for ($i = 10; $i >= 1; $i--) {
    echo str_repeat('&nbsp;', 10 - $i);
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo PHP_EOL;
}
?>
    </pre>

    <pre>
    <h1> (d) Triangolo specchiato con asterischi crescenti </h1>
<?php
for ($i = 1; $i <= 10; $i++) {
    echo str_repeat('&nbsp;', 10 - $i);
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo PHP_EOL;
}
?>
    </pre>
</body>
</html>