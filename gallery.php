<?php
$pageTitle = "Gallery";
include __DIR__ . "/includes/header.php";
?>

<section class="py-5 mt-4">
    <div class="container">
        <h1 class="h2 fw-bold mb-4 text-center">Gallery</h1>
        <p class="text-center mb-4">
            Quelques images demo des soirees Espacio-Karabaly. Tu pourras remplacer par tes vraies photos.
        </p>

        <div class="row g-4">
            <?php
            // liste d images demo (a remplacer par tes vraies images)
            $images = [
                ["assets/img/1.jpg", "Karabaly Night #1"],
                ["assets/img/2.jpg", "Karabaly Night #2"],
                ["assets/img/3.jpg", "Afro Pirate Night"],
                ["assets/img/2.jpg", "Amapiano Galaxy"],
                ["assets/img/events/event5.jpg", "Kirikou & Karabaly"],
                ["assets/img/events/event6.jpg", "Afro Culture Experience"],
            ];
            foreach ($images as $index => $img):
                $idModal = "photoModal" . $index;
            ?>
                <div class="col-sm-6 col-md-4">
                    <div class="card bg-dark-soft border-0 gallery-card" data-bs-toggle="modal"
                        data-bs-target="#<?php echo $idModal; ?>">
                        <div class="ratio ratio-4x3">
                            <img src="<?php echo htmlspecialchars($img[0]); ?>"
                                class="card-img-top object-fit-cover"
                                alt="<?php echo htmlspecialchars($img[1]); ?>">
                        </div>
                        <div class="card-body">
                            <h3 class="h6 mb-0"><?php echo htmlspecialchars($img[1]); ?></h3>
                        </div>
                    </div>
                </div>

                <!-- Modal pour agrandir la photo -->
                <div class="modal fade" id="<?php echo $idModal; ?>" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content bg-dark">
                            <div class="modal-header border-0">
                                <h5 class="modal-title">
                                    <?php echo htmlspecialchars($img[1]); ?>
                                </h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <img src="<?php echo htmlspecialchars($img[0]); ?>" class="img-fluid rounded" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
include __DIR__ . "/includes/footer.php";
?>
