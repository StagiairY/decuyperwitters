<?php
include "db.php"; // Update the path accordingly

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['productId'];

    // Perform the deletion query (Update this query based on your database structure)
    $deleteQuery = "DELETE FROM products WHERE id = :product_id";
    $deleteStatement = $conn->prepare($deleteQuery);
    $deleteStatement->bindParam(':product_id', $productId);

    if ($deleteStatement->execute()) {
        echo "Product deleted successfully";
    } else {
        echo "Error deleting product: " . $conn->error;
    }
} else {
    echo "Invalid request method";
}

$conn = null;
?>
