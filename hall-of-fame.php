<?php
$pageTitle = "Hall of Fame";
include __DIR__ . "/includes/header.php";
?>

<section class="py-5 mt-4">
    <div class="container">
        <h1 class="h2 fw-bold mb-4 text-center">Hall of Fame Karabaly</h1>
        <p class="text-center mb-4">
            Les King & Queen des soirees Espacio-Karabaly. Plus tard tu pourras lier ceci avec de vraies photos.
        </p>

        <div class="row g-4">
            <?php
            $hall = [
                [
                    "event" => "Karabaly Night #1",
                    "king"  => "Malik",
                    "queen" => "Amina",
                    "style" => "Afro chic traditionnel",
                ],
                [
                    "event" => "Karabaly Night #2",
                    "king"  => "Joao",
                    "queen" => "Sara",
                    "style" => "Amapiano futuriste",
                ],
                [
                    "event" => "Afro Pirate Night",
                    "king"  => "Prince Luffy",
                    "queen" => "Nana Nami",
                    "style" => "Afro pirate inspire des mangas",
                ],
            ];
            foreach ($hall as $item): ?>
                <div class="col-md-4">
                    <div class="card bg-dark-soft border-0 text-center p-3 h-100">
                        <h2 class="h5 text-accent mb-2">
                            <?php echo htmlspecialchars($item['event']); ?>
                        </h2>
                        <p class="mb-1">
                            <strong>King :</strong> <?php echo htmlspecialchars($item['king']); ?>
                        </p>
                        <p class="mb-1">
                            <strong>Queen :</strong> <?php echo htmlspecialchars($item['queen']); ?>
                        </p>
                        <p class="small mb-0">
                            Style : <?php echo htmlspecialchars($item['style']); ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
include __DIR__ . "/includes/footer.php";
?>
