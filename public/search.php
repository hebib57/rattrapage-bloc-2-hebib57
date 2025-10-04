<?php

// On inclut le fichier de connexion à la base de données
require_once __DIR__ . '/../config/db_connect.php';
require_once __DIR__ . '/../config/functions.php';

// On recupère le mot-clé de recherche depuis la requête GET
$keyword = isset($_GET['q']) ? $_GET['q'] : '';
$keyword = htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8'); // Échappe les caractères spéciaux pour éviter les injections XSS
$keyword = trim($keyword); // Supprime les espaces en début et fin de chaîne



// Récupération des catégories depuis la base de données
// TODO ...
$sql = "SELECT * FROM categories ORDER BY name ASC";
$stmt = $db->prepare($sql);
$stmt->execute();
$categories = $stmt->fetchAll();


// On recherche les articles qui contiennent le mot-clé dans le titre ou le contenu
$sql = "SELECT * FROM articles WHERE title LIKE :keyword OR content LIKE :keyword_bis ORDER BY published_at DESC";
$stmt = $db->prepare($sql);
$stmt->execute([
    'keyword' => '%' . $keyword . '%',
    'keyword_bis' => '%' . $keyword . '%'
]);
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

// On inclut le fichier de template pour afficher les résultats de la recherche
require_once __DIR__ . '/../templates/search.html.php';
