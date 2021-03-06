<?php
    require_once('includes/config.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">

        <title><?=$title?></title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/starter-template.css" rel="stylesheet">
    </head>
    <body>
        <?php
            require_once('includes/nav.php');
        ?>
        <main role="main" class="container">
            <?php
                // $page = (!empty($_GET['page'])) ? $_GET['page'] : 'home' ;
                $pagePath = 'pages/'.$currentPage.'.php';
                $verifiedPath = (file_exists($pagePath)) ? $pagePath : 'errors/404.html' ;
                require_once($verifiedPath);
            ?>
        </main><!-- /.container -->
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
