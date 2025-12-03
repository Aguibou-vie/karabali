<?php
$pageTitle = "Shop Afro";
$shopMessage = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_name'])) {
    $productName = trim($_POST['product_name']);
    if ($productName !== '') {
        $shopMessage = "Produit ajoute au panier (demo) : " . htmlspecialchars($productName);
    }
}

include __DIR__ . "/includes/header.php";
?>

<section class="py-5 mt-4">
    <div class="container">
        <h1 class="h2 fw-bold mb-4 text-center">Shop Afro</h1>
        <p class="text-center mb-4">
            Habits et objets afro modernes inspires de la culture africaine, Kirikou et les mangas.
        </p>

        <?php if ($shopMessage): ?>
            <div class="alert alert-warning text-center">
                <?php echo $shopMessage; ?>
            </div>
        <?php endif; ?>

        <div class="row g-4">
            <?php
            $products = [
                ["Boubou Royal Karabaly", "assets/img/products/boubou1.jpg", "Tenue afro chic pour soirees premium.", "45€"],
                ["Collier Masque Ancien", "assets/img/products/collier1.jpg", "Bijou inspire des masques africains.", "20€"],
                ["Eventail Afro Pirate", "assets/img/products/eventail1.jpg", "Accessoire pour les soirees Afro Pirate.", "15€"],
                ["Tshirt Amapiano Galaxy", "assets/img/products/tshirt1.jpg", "Style streetwear avec vibes neon.", "25€"],
            ];
            foreach ($products as $product): ?>
                <div class="col-md-3 col-sm-6">
                    <div class="card bg-dark-soft border-0 h-100">
                        <div class="ratio ratio-4x3">
                            <img src="<?php echo htmlspecialchars($product[1]); ?>"
                                class="card-img-top object-fit-cover"
                                alt="<?php echo htmlspecialchars($product[0]); ?>">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h2 class="h6 text-accent mb-1"><?php echo htmlspecialchars($product[0]); ?></h2>
                            <p class="small mb-2"><?php echo htmlspecialchars($product[2]); ?></p>
                            <p class="fw-bold mb-3"><?php echo htmlspecialchars($product[3]); ?></p>

                            <form method="post" class="mt-auto">
                                <input type="hidden" name="product_name"
                                    value="<?php echo htmlspecialchars($product[0]); ?>">
                                <button type="submit" class="btn btn-outline-accent btn-sm w-100">
                                    Ajouter au panier (demo)
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
