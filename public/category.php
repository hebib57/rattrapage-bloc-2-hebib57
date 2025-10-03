<?php

require_once __DIR__ . '/../config/functions.php';

// Récupération de la catégorie depuis l'URL
$categoryId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($categoryId <= 0) {
    // Redirection vers la page d'accueil si l'ID de catégorie est invalide
    header('Location: /index.php');
    exit;
}

// Récupération des catégories depuis la base de données
// TODO ... 

// Récupération de la catégorie depuis la base de données
$sql = "SELECT * FROM categories WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->bindValue(':id', $categoryId, PDO::PARAM_INT);
$stmt->execute();

$category = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$category) {
    // Redirection vers la page d'accueil si la catégorie n'existe pas
    header('Location: /index.php');
    exit;
}

// Récupération des articles de la catégorie depuis la base de données
// TODO ... 

// Inclusion du template de la page de catégorie
require_once __DIR__ . '/../templates/category.html.php';