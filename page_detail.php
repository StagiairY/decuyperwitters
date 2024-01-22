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

// Fetch page_content for the selected category
$query = "SELECT title, content, image_path FROM page_content WHERE category_id = :category_id";
$statement = $pdo->prepare($query);
$statement->bindParam(':category_id', $category_id);
$statement->execute();
$pageContent = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
include "include/header.php";
?>

<div class="container mt-5"  style="padding-top: 50px" >
    <h1 class="text-center">Category Content</h1>

    <div class="row">
        <?php foreach ($pageContent as $content) : ?>
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <img src="<?php echo $content['image_path']; ?>" class="card-img-top" alt="<?php echo $content['title']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $content['title']; ?></h5>
                        <p class="card-text"><?php echo $content['content']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Bootstrap JS and other scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php
include "include/footer.php";
?>

</body>
</html>
