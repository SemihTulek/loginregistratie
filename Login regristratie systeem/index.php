
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="post" action="login.php">
    <label for="username">Gebruikersnaam:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Wachtwoord:</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Inloggen">
</form>

<p>Nog geen account? <a href="register.php">Registreer hier</a>.</p>

</body>
</html>