<?php
session_start();

// Controleer of de gebruiker is ingelogd
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit;
}

$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welkom</title>
</head>
<body>

<h2>Welkom, <?php echo $username; ?>!</h2>
<p>Je bent succesvol ingelogd.</p>
<p><a href="logout.php">Uitloggen</a></p>

</body>
</html>
