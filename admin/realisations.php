<?php
require_once('users.php');
if (!isAuthenticated()) {
    header('Location: index.php');
    exit();
}
?>
<h1>
    Administration des réalisations
</h1>