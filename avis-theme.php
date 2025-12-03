<?php
$pageTitle = "Avis & Themes";

$avisMessage = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pseudo = trim($_POST['pseudo'] ?? '');
    $note   = intval($_POST['note'] ?? 0);
    $avis   = trim($_POST['avis'] ?? '');
    $theme  = trim($_POST['theme'] ?? '');
    $king   = trim($_POST['king'] ?? '');
    $queen  = trim($_POST['queen'] ?? '');

    if ($pseudo !== '' && $avis !== '') {
        $avisMessage = "Merci " . htmlspecialchars($pseudo) .
            ", ton avis et ton vote sont bien enregistres (demo).";
    } else {
        $avisMessage = "Merci de remplir au moins pseudo et avis.";
    }
}

include __DIR__ . "/includes/header.php";
?>

<section class="py-5 mt-4">
    <div class="container">
        <h1 class="h2 fw-bold mb-4 text-center">Avis & Themes</h1>
        <p class="text-center mb-4">
            Donne ton avis sur la soiree, vote pour le prochain theme et propose le King & Queen.
        </p>

        <?php if ($avisMessage): ?>
            <div class="alert alert-warning text-center">
                <?php echo $avisMessage; ?>
            </div>
        <?php endif; ?>

        <form method="post" class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Pseudo</label>
                <input type="text" name="pseudo" class="form-control" placeholder="Ton pseudo">
            </div>
            <div class="col-md-6">
                <label class="form-label">Note de la soiree /5</label>
                <select name="note" class="form-select">
                    <option value="5">5 - Incroyable</option>
                    <option value="4">4 - Tres bien</option>
                    <option value="3">3 - Bien</option>
                    <option value="2">2 - Moyen</option>
                    <option value="1">1 - A ameliorer</option>
                </select>
            </div>
            <div class="col-12">
                <label class="form-label">Ton avis</label>
                <textarea name="avis" rows="3" class="form-control"
                        placeholder="Dis ce que tu as aime, ce qu on peut ameliorer..."></textarea>
            </div>

            <div class="col-12">
                <label class="form-label">Vote pour le prochain theme</label>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="theme"
                                id="theme1" value="Afro Pirate Night" checked>
                            <label class="form-check-label" for="theme1">
                                Afro Pirate Night
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="theme"
                                id="theme2" value="Kirikou & Karabaly">
                            <label class="form-check-label" for="theme2">
                                Kirikou & Karabaly
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="theme"
                                id="theme3" value="Amapiano Galaxy">
                            <label class="form-check-label" for="theme3">
                                Amapiano Galaxy
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="theme"
                                id="theme4" value="Autre">
                            <label class="form-check-label" for="theme4">
                                Autre (a preciser dans l avis)
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <label class="form-label">King de la soiree</label>
                <input type="text" name="king" class="form-control"
                    placeholder="Pseudo du gars le plus style">
            </div>
            <div class="col-md-6">
                <label class="form-label">Queen de la soiree</label>
                <input type="text" name="queen" class="form-control"
                    placeholder="Pseudo de la fille la plus stylee">
            </div>

            <div class="col-12 text-end">
                <button type="submit" class="btn btn-accent">
                    Envoyer mon avis et mon vote
                </button>
            </div>
        </form>
    </div>
</section>

<?php
include __DIR__ . "/includes/footer.php";
?>
