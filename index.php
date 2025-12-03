<?php
$pageTitle = "Accueil";
include __DIR__ . "/includes/header.php";
?>

<section class="hero-section position-relative d-flex align-items-center">
    <!-- video de fond optionnelle -->
    <!--
    <video class="hero-video" autoplay muted loop playsinline> 
    -->
        <!-- remplace hero.mp4 par ta video (ou laisse comme ca si tu n as pas encore de video) -->
        <!--<source src="assets/video/vdeo.mp4" type="video/mp4">
    </video>
    -->

    <!-- overlay sombre -->
    <div class="hero-overlay"></div>

    <div class="container position-relative hero-content">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <p class="badge bg-accent-soft text-dark mb-3">
                    Afrobeat · Amapiano · Afrohouse · Culture
                </p>
                <h1 class="display-4 fw-bold mb-3">
                    <span class="modu">Espacio</span><span class="text-accent"> Makeda</span>
                </h1>
                <p class="lead mb-4">
                    Espace afro moderne a Vigo : musique, danse, style et culture.
                    Un lieu pour la communaute africaine, les jeunes espagnols, Erasmus
                    et tous les amoureux des vibes afro.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="market-tickets.php" class="btn btn-accent btn-lg">
                        Acheter un billet
                    </a>
                    <a href="gallery.php" class="btn btn-outline-accent btn-lg">
                        Voir les photos
                    </a>
                </div>
            </div>

            <div class="col-lg-6">
                <!-- bloc image hero (utilise une de tes photos) -->
                <div class="hero-image-card">
                    <div class="ratio ratio-4x3 rounded-4 overflow-hidden hero-image-border">
                        <img src="assets/img/aa.jpeg"
                            class="w-100 h-100 object-fit-cover"
                            alt="Soiree Espacio-Karabaly">
                    </div>
                    <p class="small text-muted mt-2 mb-0">
                        Afro vibes a Vigo : afrobeat, amapiano, looks inspires de la nature et de la culture africaine.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-dark-soft">
    <div class="container">
        <h2 class="h4 fw-bold text-center mb-4">Explorer Espacio-Karabaly</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card bg-dark border-0 h-100">
                    <div class="card-body">
                        <h3 class="h5 text-accent mb-2">Evenements</h3>
                        <p class="small mb-3">
                            Soirees afrobeat & amapiano, deco africaine moderne, experience premium.
                        </p>
                        <a href="market-tickets.php" class="btn btn-outline-accent btn-sm">
                            Voir les prochains events
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-dark border-0 h-100">
                    <div class="card-body">
                        <h3 class="h5 text-accent mb-2">Culture & Style</h3>
                        <p class="small mb-3">
                            Gallery photo, looks, Hall of Fame avec les meilleurs outfits de chaque soiree.
                        </p>
                        <a href="gallery.php" class="btn btn-outline-accent btn-sm me-2 mb-2">
                            Gallery
                        </a>
                        <a href="hall-of-fame.php" class="btn btn-outline-accent btn-sm mb-2">
                            Hall of Fame
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-dark border-0 h-100">
                    <div class="card-body">
                        <h3 class="h5 text-accent mb-2">Communauté</h3>
                        <p class="small mb-3">
                            Donne ton avis, vote pour le prochain theme, discute avec la communaute.
                        </p>
                        <a href="avis-theme.php" class="btn btn-outline-accent btn-sm me-2 mb-2">
                            Avis & themes
                        </a>
                        <a href="espacio-karabaly.php" class="btn btn-outline-accent btn-sm mb-2">
                            Espacio-Karabaly
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include __DIR__ . "/includes/footer.php";
?>
