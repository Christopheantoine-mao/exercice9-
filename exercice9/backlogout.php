<?php
session_start();
session_destroy();
setcookie('last_login', '', time() - 3600, '/'); // Suppression du cookie
header('Location: ../front/index.php');
exit;
