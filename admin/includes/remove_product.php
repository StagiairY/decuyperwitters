<?php
include "auth.php";
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input to prevent SQL injection
    $productId = filter_var($_POST["product_id"], FILTER_SANITIZE_NUMBER_INT);
    $categoryId = filter_var($_POST["category_id"], FILTER_SANITIZE_NUMBER_INT);

    try {
        // Fetch the product details before removing
        $productQuery = "SELECT image_path FROM products WHERE id = :id";
        $productStatement = $pdo->prepare($productQuery);
        $productStatement->bindParam(':id', $productId);
        $productStatement->execute();
        $product = $productStatement->fetch(PDO::FETCH_ASSOC);

        if ($product) {
            // Remove the product image file
            if ($product['image_path'] && file_exists($_SERVER['DOCUMENT_ROOT'] . $product['image_path'])) {
                unlink($_SERVER['DOCUMENT_ROOT'] . $product['image_path']);
            }

            // Remove the product from the database
            $deleteQuery = "DELETE FROM products WHERE id = :id";
            $deleteStatement = $pdo->prepare($deleteQuery);
            $deleteStatement->bindParam(':id', $productId);
            $deleteStatement->execute();

            // Redirect back to the edit page with the category ID
            header("Location: edit_page.php?id=" . $categoryId);
            exit();
        } else {
            // Handle the case where the product is not found
            echo "Error: Product not found.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
