<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ../front/index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord</title>
</head>
<body>
    <h1>Bienvenue sur votre tableau de bord</h1>
    <p>Dernière connexion: <?= date("Y-m-d H:i:s", $_COOKIE['last_login']) ?></p>
    <a href="logout.php">Déconnexion</a>
</body>
</html>
