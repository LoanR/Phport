<div class="starter-template">
<h1>Réalisations</h1>
<p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
</div>

<?php
    try {
        $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo("Connection failed: " . $e->getMessage());
        die();
    }
    $stmt = $conn->prepare(
        'SELECT `display_content`, `id_content`
        FROM `Content`'
    );
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($results as $result) {
        echo('<ul>');
        echo('<li>' . $result->id_content . ' : ' . $result->display_content . '</li>');
        echo('</ul>');
    }
    ?>