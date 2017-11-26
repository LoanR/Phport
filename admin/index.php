<?php
require_once('users.php');

if (!empty($_GET['disconnect']) && $_GET['disconnect'] === 'yes') {
    session_destroy();
    header('Location: index.php');
    exit();
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">

        <title>coucou</title>

        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/starter-template.css" rel="stylesheet">
    </head>
    <body>
        <main role="main" class="container">
            <?php
                if (isAuthenticated()) {
                    echo('Bienvenue '.$_SESSION['username']);
                    echo(' - <a href="?disconnect=yes">Déconnexion</a>');
                    echo('<br>');
                    echo('<a href="realisations.php">Réalisations</a>');
                } else {
                    echo(getAuthForm());
                }
            ?>
        </main><!-- /.container -->
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
