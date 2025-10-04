<?php

require_once __DIR__ . '/../config/db_connect.php';
require_once __DIR__ . '/../config/functions.php';

// Récupération des 4 derniers articles depuis la base de données
// TODO ... 
$sql = "SELECT * FROM articles ORDER BY id DESC LIMIT 4";
$stmt = $db->prepare($sql);
$stmt->execute();
$latestPosts = $stmt->fetchAll();

// Récupération des catégories depuis la base de données
// TODO ... 
$sql = "SELECT * FROM categories ORDER BY name ASC";
$stmt = $db->prepare($sql);
$stmt->execute();
$categories = $stmt->fetchAll();

// Affichage de la page d'accueil
require_once __DIR__ . '/../templates/index.html.php';
