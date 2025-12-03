<?php
$pageTitle = "Espacio-Karabaly";

$messages = [];
$wallMessage = null;

// pour l instant on ne garde pas les messages (pas de base de donnees)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pseudo = trim($_POST['pseudo'] ?? '');
    $msg    = trim($_POST['message'] ?? '');
    if ($pseudo !== '' && $msg !== '') {
        $messages[] = [
            'pseudo' => $pseudo,
            'message' => $msg,
            'time' => date('H:i'),
        ];
        $wallMessage = "Message envoye (demo). Pour garder les messages il faudra une base de donnees.";
    } else {
        $wallMessage = "Merci de remplir pseudo et message.";
    }
}

include __DIR__ . "/includes/header.php";
?>

<section class="py-5 mt-4">
    <div class="container">
        <h1 class="h2 fw-bold mb-4 text-center">Espacio-Karabaly · Mur de la communaute</h1>
        <p class="text-center mb-4">
            Espace pour echanger des idees, vibes, feedbacks et inspirations autour d Espacio-Karabaly.
        </p>

        <?php if ($wallMessage): ?>
            <div class="alert alert-warning text-center">
                <?php echo htmlspecialchars($wallMessage); ?>
            </div>
        <?php endif; ?>

        <div class="row g-4">
            <div class="col-md-5">
                <div class="card bg-dark-soft border-0 h-100">
                    <div class="card-body">
                        <h2 class="h5 fw-bold mb-3">Poster un message</h2>
                        <form method="post">
                            <div class="mb-3">
                                <label class="form-label">Pseudo</label>
                                <input type="text" name="pseudo" class="form-control" placeholder="Ton pseudo">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea name="message" rows="4" class="form-control"
                                        placeholder="Partage une idee, un ressenti, une suggestion..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-accent w-100">
                                Envoyer
                            </button>
                        </form>
                        <p class="small mt-3 mb-0">
                            Note : pour l instant les messages ne sont pas gardes. Plus tard on les sauvera en base.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="card bg-dark-soft border-0 h-100">
                    <div class="card-body">
                        <h2 class="h5 fw-bold mb-3">Messages recents (demo)</h2>

                        <?php if (empty($messages)): ?>
                            <p class="small text-muted">
                                Aucun message enregistre pour cette demo. Ecris le premier message !
                            </p>
                        <?php else: ?>
                            <div class="vstack gap-3">
                                <?php foreach ($messages as $m): ?>
                                    <div class="p-3 bg-dark rounded-3">
                                        <div class="d-flex justify-content-between small mb-1">
                                            <span class="fw-bold">
                                                <?php echo htmlspecialchars($m['pseudo']); ?>
                                            </span>
                                            <span class="text-muted">
                                                <?php echo htmlspecialchars($m['time']); ?>
                                            </span>
                                        </div>
                                        <p class="mb-0">
                                            <?php echo nl2br(htmlspecialchars($m['message'])); ?>
                                        </p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include __DIR__ . "/includes/footer.php";
?>
