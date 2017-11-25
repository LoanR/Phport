<?php
require_once('users.php');

if (!empty($_GET['disconnect']) && $_GET['disconnect'] === 'yes') {
    session_destroy();
    header('Location: index.php');
    exit();
}

if (isAuthenticated()) {
    echo('Bienvenue '.$_SESSION['username']);
    echo(' - <a href="?disconnect=yes">Déconnexion</a>');
    echo('<br>');
    echo('<a href="realisations.php">Réalisations</a>');
} else {
    echo(getAuthForm());
}
?>