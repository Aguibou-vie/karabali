<?php
$pageTitle = "Billets";
$ticketMessage = null;

// gestion simple de reservation demo
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['event_name'])) {
    $eventName = trim($_POST['event_name']);
    $email     = trim($_POST['email'] ?? '');
    if ($eventName !== '' && $email !== '') {
        $ticketMessage = "Reservation enregistree pour " . htmlspecialchars($eventName) .
            " avec " . htmlspecialchars($email) . " (demo).";
    } else {
        $ticketMessage = "Merci de mettre un email pour reserver.";
    }
}

include __DIR__ . "/includes/header.php";
?>

<section class="py-5 mt-4">
    <div class="container">
        <h1 class="h2 fw-bold mb-4 text-center">Billets Espacio-Karabaly</h1>
        <p class="text-center mb-4">
            Choisis ton event et reserve ton billet. Systeme de paiement a ajouter plus tard.
        </p>

        <?php if ($ticketMessage): ?>
            <div class="alert alert-warning text-center">
                <?php echo $ticketMessage; ?>
            </div>
        <?php endif; ?>

        <div class="row g-4">
            <?php
            $events = [
                [
                    "Karabaly Night #1",
                    "Vigo · Date a definir",
                    "Afrobeat · Amapiano · Dress code afro chic",
                    "Early: 8€ · Standard: 10€ · VIP: 15€"
                ],
                [
                    "Afro Pirate Night",
                    "Vigo · Date a definir",
                    "Inspire par One Piece, pirates afro, deco speciale.",
                    "Standard: 12€ · VIP: 18€"
                ],
                [
                    "Amapiano Galaxy",
                    "Vigo · Date a definir",
                    "Ambiance neon, futur afro, son amapiano toute la nuit.",
                    "Standard: 10€ · VIP: 16€"
                ],
            ];
            foreach ($events as $event): ?>
                <div class="col-md-4">
                    <div class="card bg-dark-soft border-0 h-100">
                        <div class="card-body d-flex flex-column">
                            <h2 class="h5 text-accent mb-2"><?php echo htmlspecialchars($event[0]); ?></h2>
                            <p class="small mb-1"><?php echo htmlspecialchars($event[1]); ?></p>
                            <p class="small mb-2"><?php echo htmlspecialchars($event[2]); ?></p>
                            <p class="fw-bold mb-3"><?php echo htmlspecialchars($event[3]); ?></p>

                            <form method="post" class="mt-auto">
                                <input type="hidden" name="event_name"
                                    value="<?php echo htmlspecialchars($event[0]); ?>">
                                <div class="mb-2">
                                    <input type="email" name="email" class="form-control form-control-sm"
                                        placeholder="Ton email pour reserver">
                                </div>
                                <button type="submit" class="btn btn-accent btn-sm w-100">
                                    Reserver (demo)
                                </button>
                            </form>
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
