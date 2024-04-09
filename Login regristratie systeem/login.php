<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Controleer of de gebruikersnaam en wachtwoord overeenkomen
    $users = file("users.txt", FILE_IGNORE_NEW_LINES);
    foreach ($users as $user) {
        list($savedUsername, $savedPassword) = explode(":", $user);
        if ($username === $savedUsername && $password === $savedPassword) {
            // Gebruiker is succesvol ingelogd
            $_SESSION["username"] = $username;
            header("Location: welcome.php");
            exit;
        }
    }

    // Als inloggen niet gelukt is
    echo "<p>Onjuiste gebruikersnaam of wachtwoord. Probeer opnieuw.</p>";
}
?>
