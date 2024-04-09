<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratie</title>
</head>
<body>

<h2>Registratie</h2>

<form method="post" action="register.php">
    <label for="username">Gebruikersnaam:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Wachtwoord:</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Registreren">
</form>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    //hier zou je normaal een link leggen naar een database maar voor nu doen ik het even met een file
    $file = fopen("users.txt", "a");
    fwrite($file, "$username:$password\n");
    fclose($file);

    echo "<p>Registratie succesvol. Je kunt nu <a href='index.php'>inloggen</a>.</p>";
}
?>

