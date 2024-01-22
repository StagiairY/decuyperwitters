<?php
// Assuming you have a database connection
include "include/db.php";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

// Retrieve category ID from the URL
$category_id = isset($_GET['category_id']) ? $_GET['category_id'] : 1; // Default to 1 if not provided

// Fetch page details for the selected category
$queryDesc = "SELECT title, description FROM page_description WHERE category_id = :category_id";
$statementDesc = $pdo->prepare($queryDesc);
$statementDesc->bindParam(':category_id', $category_id);
$statementDesc->execute();
$pageDescription = $statementDesc->fetch(PDO::FETCH_ASSOC);

// Fetch page content for the selected category
$queryContent = "SELECT title, content, image_path FROM page_content WHERE category_id = :category_id";
$statementContent = $pdo->prepare($queryContent);
$statementContent->bindParam(':category_id', $category_id);
$statementContent->execute();
$pageContent = $statementContent->fetchAll(PDO::FETCH_ASSOC);

// Fetch dummy products data for the selected category
$queryProducts = "SELECT name, weight, price, description, image_path FROM products WHERE category_id = :category_id";
$statementProducts = $pdo->prepare($queryProducts);
$statementProducts->bindParam(':category_id', $category_id);
$statementProducts->execute();
$products = $statementProducts->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include "include/header.php"; ?>

<main class="container mt-5">

    <!-- Jumbotron for Page Description -->
    <?php if ($pageDescription) : ?>
        <div class="jumbotron">
            <h1 class="display-4 text-center"><?php echo $pageDescription['title']; ?></h1>
            <p class="lead text-center"><?php echo $pageDescription['description']; ?></p>
        </div>
    <?php endif; ?>

    <!-- Page Content -->
    <?php if ($pageContent) : ?>
        <section class="row">
            <?php foreach ($pageContent as $content) : ?>
                <div class="col-lg-6 mb-4">
                    <div class="card">
                        <img src="<?php echo $content['image_path']; ?>" class="card-img-top img-fluid rounded"
                             alt="<?php echo $content['title']; ?>" style="width: 100%; height: 300px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $content['title']; ?></h5>
                            <p class="card-text"><?php echo $content['content']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    <?php endif; ?>

    <!-- Products Section -->
    <?php if ($products) : ?>
        <div class="col-lg-12 mt-4">
            <h2 class="text-center">Featured Products</h2>
            <div class="row">
                <?php foreach ($products as $product) : ?>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100">
                            <img src="<?php echo $product['image_path']; ?>" class="card-img-top img-fluid rounded"
                                 alt="<?php echo $product['name']; ?>" style="width: 100%; height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product['name']; ?></h5>
                                <?php if ($product['weight'] !== null && $product['weight'] > 0) : ?>
                                    <p class="card-text">Weight: <?php echo $product['weight']; ?> kg</p>
                                <?php endif; ?>
                                <?php if ($product['price'] !== null && $product['price'] > 0) : ?>
                                    <p class="card-text">Price: $<?php echo $product['price']; ?></p>
                                <?php endif; ?>
                                <p class="card-text"><?php echo $product['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>

</main>

<!-- Bootstrap JS and other scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php include "include/footer.php"; ?>

</body>
</html>
