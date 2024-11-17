<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<p><a href='index.html'>&#8592;</a></p>
    <h1>Login</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $valid_username = 'brayan';
        $valid_password = 'brayan';

        if ($username === $valid_username && $password === $valid_password) {
            echo 'Login riuscito! Benvenuto'; 
        } else {
            echo 'Login fallito. Riprova.';
        }
    }
    ?>

    <form action="" method="post">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>