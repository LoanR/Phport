<div class="starter-template">
<h1>Réalisations</h1>
<p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
</div>

<?php
    try {
        $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare(
            'SELECT `display_content`
            FROM `Content`'
        );
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        print $result->display_content;
    }
    catch(PDOException $e) {
        echo("Connection failed: " . $e->getMessage());
    }
?>