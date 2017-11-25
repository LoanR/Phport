<?php
$title = 'Portfolio';
$currentPage = (!empty($_GET['page'])) ? $_GET['page'] : 'home';
$pages = [
    'home' => 'Accueil',
    'realisations' => 'Réalisations',
    'blog' => 'Blog',
    'contact' => 'Contact',
];