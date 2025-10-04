<?php
// database connection using PDO
try {
    $db = new PDO('mysql:host=localhost;dbname=bloc2', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}
