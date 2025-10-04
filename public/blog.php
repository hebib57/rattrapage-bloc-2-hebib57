<?php
require_once __DIR__ . '/../config/db_connect.php';
require_once __DIR__ . '/../config/functions.php';

// Récupération des articles depuis la base de données
// TODO ... 
$sql = "SELECT * FROM articles ORDER BY id ASC";
$stmt = $db->prepare($sql);
$stmt->execute();
$articles = $stmt->fetchAll();

// Récupération des catégories depuis la base de données
// TODO ...
$sql = "SELECT * FROM categories ORDER BY name ASC";
$stmt = $db->prepare($sql);
$stmt->execute();
$categories = $stmt->fetchAll();


// Inclusion du template d'affichage des articles
include __DIR__ . '/../templates/blog.html.php';
