<?php
$pageTitle = "Accueil";
include __DIR__ . "/includes/header.php";
?>

<!-- HERO SECTION -->
<section id="hero-home" class="hero-section position-relative d-flex align-items-center">
    <!-- overlay sombre -->
    <div class="hero-overlay"></div>

    <div class="container position-relative">
        <div class="row align-items-center gy-5">
            <!-- COL GAUCHE : TITRE + TEXTE + BOUTONS -->
            <div class="col-lg-6">
                <span class="badge hero-badge mb-3">
                    Afrobeat · Amapiano · Afrohouse · Culture
                </span>

                <h1 class="display-4 fw-bold mb-3 hero-title">
                    <span class="text-espacio">Espacio</span>
                    <span class="modu">Makeda</span>
                </h1>

                <p class="lead text-hero mb-4 hero-lead">
                    Espace afro moderne à Vigo : musique, danse, style et culture.  
                    Un lieu pour la communauté africaine, les jeunes espagnols, Erasmus
                    et tous les amoureux des vibes afro.
                </p>

                <div class="d-flex flex-wrap gap-3 mb-4 hero-buttons">
                    <a href="market-tikects.php" class="btn btn-accent btn-lg">
                        Acheter un billet
                    </a>
                    <a href="gallery.php" class="btn btn-outline-accent btn-lg">
                        Voir les photos
                    </a>
                </div>

                <p class="small text-hero-muted mb-0 hero-small">
                    Prochaines dates, thèmes et dress code sur nos réseaux sociaux.
                </p>
            </div>

            <!-- COL DROITE : CARTE EVENEMENT QUI DÉFILE -->
            <div class="col-lg-6">
                <div class="hero-image-card">
                    <div class="ratio ratio-4x3 rounded-4 overflow-hidden hero-image-border position-relative">
                        <img id="hero-event-photo"
                            src="assets/img/event1.jpg"
                            class="w-100 h-100 object-fit-cover"
                            alt="Soirée Espacio Makeda">

                        <!-- badge en haut -->
                        <div class="hero-event-badge">
                            Prochaine soirée
                        </div>

                        <!-- texte en bas sur l'image -->
                        <div class="hero-event-info">
                            <p class="hero-event-tag mb-1">Afro · Amapiano · Vibes only</p>
                            <h3 id="hero-event-title" class="h5 mb-1">Afro Sunset Party</h3>
                            <p id="hero-event-subtitle" class="small mb-0">
                                Samedi 21 Décembre · Makeda, Vigo
                            </p>
                        </div>
                    </div>

                    <p class="small text-muted mt-2 mb-0">
                        Ramène ta meilleure énergie, ton meilleur look et on s’occupe du reste.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION CARTES LIENS RAPIDES -->
<section class="home-links-section py-5">
    <div class="container">
        <div class="row g-4">
            <!-- BILLETS & SHOP -->
            <div class="col-md-4">
                <div class="home-card h-100">
                    <h3 class="h5 mb-2">Billets & Shop</h3>
                    <p class="small mb-3">
                        Réserve ta place et découvre notre market afro : vêtements, accessoires,
                        produits afro, etc.
                    </p>
                    <a href="market-tikects.php" class="btn btn-accent btn-sm me-2 mb-2">
                        Billets
                    </a>
                    <a href="market-shop.php" class="btn btn-outline-accent btn-sm mb-2">
                        Shop Afro
                    </a>
                </div>
            </div>

            <!-- GALLERY & HALL OF FAME -->
            <div class="col-md-4">
                <div class="home-card h-100">
                    <h3 class="h5 mb-2">Gallery & Hall of Fame</h3>
                    <p class="small mb-3">
                        Revois les meilleurs moments, les meilleurs looks et les vibes des soirées.
                    </p>
                    <a href="gallery.php" class="btn btn-accent btn-sm me-2 mb-2">
                        Gallery
                    </a>
                    <a href="hall-of-fame.php" class="btn btn-outline-accent btn-sm mb-2">
                        Hall of Fame
                    </a>
                </div>
            </div>

            <!-- AVIS, THEMES & ESPACIO -->
            <div class="col-md-4">
                <div class="home-card h-100">
                    <h3 class="h5 mb-2">Thèmes & Communauté</h3>
                    <p class="small mb-3">
                        Découvre les avis, les thèmes des soirées et l’espace Espacio-Karabaly
                        dédié à la communauté.
                    </p>
                    <a href="avis-theme.php" class="btn btn-accent btn-sm me-2 mb-2">
                        Avis & thèmes
                    </a>
                    <a href="espacio-karabaly.php" class="btn btn-outline-accent btn-sm mb-2">
                        Espacio-Karabaly
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ICÔNES RÉSEAUX FLOTTANTES -->
<div class="social-float">
    <a href="https://wa.me/34XXXXXXXXX" target="_blank" class="social-btn whatsapp">
        <i class="bi bi-whatsapp"></i>
    </a>
    <a href="https://instagram.com/TON_INSTAGRAM" target="_blank" class="social-btn instagram">
        <i class="bi bi-instagram"></i>
    </a>
    <a href="https://tiktok.com/@TON_TIKTOK" target="_blank" class="social-btn tiktok">
        <i class="bi bi-tiktok"></i>
    </a>
</div>

<!-- SCRIPTS POUR ANIMATIONS (fond + évènements) -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    /* --------- HERO : SLIDESHOW DE BACKGROUND --------- */
    const hero = document.getElementById('hero-home');

    const bgImages = [
        'assets/img/bg0.jpg',
        'assets/img/bg1.jpg',
        'assets/img/bg2.jpg',
        'assets/img/bg3.jpg'
    ];

    let bgIndex = 0;
    if (hero) {
        hero.style.backgroundImage = `url('${bgImages[0]}')`;
    }

    function changeBackground() {
        if (!hero) return;
        bgIndex = (bgIndex + 1) % bgImages.length;
        hero.style.backgroundImage = `url('${bgImages[bgIndex]}')`;
    }

    setInterval(changeBackground, 6000); // change toutes les 6s

    /* --------- BLOC DROITE : SLIDER D'ÉVÈNEMENTS --------- */
    const eventImg = document.getElementById('hero-event-photo');
    const eventTitle = document.getElementById('hero-event-title');
    const eventSubtitle = document.getElementById('hero-event-subtitle');

    const events = [
        {
            src: 'assets/img/event1.jpg',
            title: 'Afro Sunset Party',
            subtitle: 'Samedi 21 Décembre · Makeda, Vigo'
        },
        {
            src: 'assets/img/event2.jpg',
            title: 'Amapiano Night',
            subtitle: 'Vendredi 10 Janvier · Espacio Makeda'
        },
        {
            src: 'assets/img/event3.jpg',
            title: 'Afro House Vibes',
            subtitle: 'Samedi 25 Janvier · Special Erasmus'
        }
    ];

    let eventIndex = 0;

    function changeEvent() {
        if (!eventImg || !eventTitle || !eventSubtitle) return;
        eventIndex = (eventIndex + 1) % events.length;
        const ev = events[eventIndex];
        eventImg.src = ev.src;
        eventTitle.textContent = ev.title;
        eventSubtitle.textContent = ev.subtitle;
    }

    setInterval(changeEvent, 7000); // change toutes les 7s
});
</script>

<?php
include __DIR__ . "/includes/footer.php";
?>
