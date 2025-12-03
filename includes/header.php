<?php
// on recupere le titre de la page si il existe
$pageTitle = $pageTitle ?? "Afro Experience";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Espacio-Makeda - <?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Styles perso -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="bg-dark text-light">

<!-- navbar principale -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-transparent">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center fw-bold" href="index.php">
            <!-- logo (image a mettre dans assets/img/logo.png) -->
            <img src="assets/img/vv.png" alt="" class="logo-navbar me-2">
            <span class="text-accent">Makeda</span>

        </a>

        <!-- bouton burger boostrap -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="market-tickets.php">Billets</a></li>
                <li class="nav-item"><a class="nav-link" href="market-shop.php">Shop Afro</a></li>
                <li class="nav-item"><a class="nav-link" href="avis-theme.php">Avis & Themes</a></li>
                <li class="nav-item"><a class="nav-link" href="espacio-karabaly.php">Espacio</a></li>
                <li class="nav-item"><a class="nav-link" href="hall-of-fame.php">Hall of Fame</a></li>
                <li class="nav-item ms-lg-3">
                    <a class="btn btn-accent" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- debut contenu -->
<main class="pt-5">
