<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: back/dashboard.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
<form action="login.php" method="POST">
    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>
    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required>
    <input type="submit" value="Connexion">
</form>
</body>
</html>
