<!-- update_product.php -->

<?php
include "db.php"; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $productId = $_POST["productId"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $weight = $_POST["weight"];

    // Update the product in the database
    $updateProductQuery = "UPDATE products SET name = :name, description = :description, price = :price, weight = :weight WHERE id = :id";
    $updateProductStatement = $conn->prepare($updateProductQuery);
    $updateProductStatement->bindParam(':id', $productId);
    $updateProductStatement->bindParam(':name', $name);
    $updateProductStatement->bindParam(':description', $description);
    $updateProductStatement->bindParam(':price', $price);
    $updateProductStatement->bindParam(':weight', $weight);

    if ($updateProductStatement->execute()) {
        echo "Product updated successfully!";
    } else {
        echo "Error updating product: " . $updateProductStatement->errorInfo()[2];
    }
} else {
    echo "Invalid request method!";
}

// Close the database connection
$conn = null;
?>
