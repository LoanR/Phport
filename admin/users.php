<?php
session_start();
$users = [
    [
        'username' => 'bla',
        'password' => 'blabla'
    ],
    [
        'username' => 'jeanne',
        'password' => 'azerty'
    ],
];

if (!empty($_POST['username']) || !empty($_POST['password'])) {
    authenticate($_POST['username'], $_POST['password']);
}

function isAuthenticated() {
    return !empty($_SESSION['username']);
}

function getAuthForm() {
    $form[] = '<form method=post>';
    $form[] = '<div class="form-group">';
    $form[] = '<input class="form-control" type="text" name="username" placeholder="username">';
    $form[] = '<input class="form-control" type="password" name="password" placeholder="password">';
    $form[] = '<button class="btn btn-primary"type="submit">Connexion</button>';
    $form[] = '</div>';
    $form[] = '</form>';
    return implode('', $form);
}

function authenticate($username, $password) {
    global $users;
    if (empty($_POST['username']) || empty($_POST['password'])) {
        return;
    }
    foreach ($users as $user) {
        if ($user['username'] === $_POST['username'] && $user['password'] === $_POST['password']) {
            $_SESSION['username'] = $user['username'];
            break;
        }
    }
}
