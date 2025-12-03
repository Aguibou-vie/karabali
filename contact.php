<?php
$pageTitle = "Contact";
$feedback = null;

// on verifie si le formulaire est envoye
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name   = trim($_POST['name'] ?? '');
    $email  = trim($_POST['email'] ?? '');
    $role   = trim($_POST['role'] ?? '');
    $social = trim($_POST['social'] ?? '');
    $msg    = trim($_POST['message'] ?? '');

    if ($name !== '' && $email !== '' && $msg !== '') {
        // ici plus tard tu pourras envoyer un mail ou sauvegarder en base
        $feedback = "Merci " . htmlspecialchars($name) . ", ton message est bien recu (demo).";
    } else {
        $feedback = "Merci de remplir au minimum nom, email et message.";
    }
}

include __DIR__ . "/includes/header.php";
?>

<section class="py-5 mt-4">
    <div class="container">
        <h1 class="h2 fw-bold mb-4 text-center">Contact</h1>
        <p class="text-center mb-4">
            Tu veux collaborer, performer, sponsoriser ou juste poser une question ? Ecris nous ici.
        </p>

        <?php if ($feedback): ?>
            <div class="alert alert-warning text-center">
                <?php echo $feedback; ?>
            </div>
        <?php endif; ?>

        <form method="post" class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Nom complet</label>
                <input type="text" name="name" class="form-control" placeholder="Ton nom">
            </div>
            <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="ton@email.com">
            </div>
            <div class="col-md-6">
                <label class="form-label">Instagram / TikTok</label>
                <input type="text" name="social" class="form-control" placeholder="@toncompte">
            </div>
            <div class="col-md-6">
                <label class="form-label">Role / Interet</label>
                <select name="role" class="form-select">
                    <option value="">Choisis une option</option>
                    <option value="dj">DJ Afro</option>
                    <option value="dance">Danseur / Performer</option>
                    <option value="media">Photo / Video</option>
                    <option value="club">Club / Lieu</option>
                    <option value="sponsor">Sponsor</option>
                    <option value="student">Etudiant / Erasmus</option>
                    <option value="other">Autre</option>
                </select>
            </div>
            <div class="col-12">
                <label class="form-label">Message</label>
                <textarea name="message" rows="4" class="form-control"
                        placeholder="Explique ton idee ou ta demande..."></textarea>
            </div>
            <div class="col-12 text-end">
                <button type="submit" class="btn btn-accent">
                    Envoyer
                </button>
            </div>
        </form>
    </div>
</section>

<?php
include __DIR__ . "/includes/footer.php";
?>
