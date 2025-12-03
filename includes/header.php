<?php
if (!isset($pageTitle)) {
    $pageTitle = "Makeda";
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> | Makeda</title>

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- STYLE PERSONNALISÉ -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

<!-- ===== NAVBAR ===== -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="assets/img/logo.png" 
                 alt="Makeda Logo"
                 class="rounded-circle me-2"
                 style="width:40px; height:40px; object-fit:cover;">
            <span class="fw-bold">Makeda</span>
        </a>

        <!-- BURGER -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#makedaNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="makedaNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link <?= $pageTitle === 'Accueil' ? 'active' : '' ?>" href="index.php">Accueil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $pageTitle === 'Gallery' ? 'active' : '' ?>" href="gallery.php">Gallery</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $pageTitle === 'Billets' ? 'active' : '' ?>" href="market-tikects.php">Billets</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $pageTitle === 'Shop Afro' ? 'active' : '' ?>" href="market-shop.php">Shop Afro</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $pageTitle === 'Avis et Thèmes' ? 'active' : '' ?>" href="avis-theme.php">Avis & Thèmes</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $pageTitle === 'Espacio Karabaly' ? 'active' : '' ?>" href="espacio-karabaly.php">Espacio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $pageTitle === 'Hall of Fame' ? 'active' : '' ?>" href="hall-of-fame.php">Hall of Fame</a>
                </li>

                <li class="nav-item ms-lg-3">
                    <a class="btn btn-accent btn-sm px-3" href="contact.php">Contact</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- ESPACE SOUS LE MENU -->
<div style="padding-top: 85px;"></div>
