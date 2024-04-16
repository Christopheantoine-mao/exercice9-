<?php
session_start();
include 'db.php'; // Assurez-vous d'avoir une connexion à la base de données ici.

$email = $_POST['email'];
$password = $_POST['password'];

$query = $pdo->prepare("SELECT id, password FROM users WHERE email = ?");
$query->execute([$email]);
$user = $query->fetch();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    setcookie('last_login', time(), time() + 3600 * 24 * 30, '/');
    header('Location: back/dashboard.php');
    exit;
} else {
    echo "Identifiants incorrects";
    // Redirigez vers le formulaire de connexion avec un message d'erreur
}
