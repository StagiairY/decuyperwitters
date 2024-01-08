<?php
include "db.php"; // Include your database connection file

$responseMessage = ""; // Initialize an empty response message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data²
    $productName = $_POST["productName"];
    $productDescription = $_POST["productDescription"];
    $productPrice = $_POST["productPrice"];
    $categoryId = $_POST["categoryId"];

    // Insert the new product into the database
    $insertProductQuery = "INSERT INTO products (name, description, price, category_id) VALUES (:name, :description, :price, :category_id)";
    $insertProductStatement = $conn->prepare($insertProductQuery);
    $insertProductStatement->bindParam(':name', $productName);
    $insertProductStatement->bindParam(':description', $productDescription);
    $insertProductStatement->bindParam(':price', $productPrice);
    $insertProductStatement->bindParam(':category_id', $categoryId);

    if ($insertProductStatement->execute()) {
        $responseMessage = '<div class="alert alert-success" role="alert">Product added successfully!</div>';
    } else {
        $responseMessage = '<div class="alert alert-danger" role="alert">Error adding product: ' . $insertProductStatement->errorInfo()[2] . '</div>';
    }
} else {
    $responseMessage = '<div class="alert alert-warning" role="alert">Invalid request method!</div>';
}

// Close the database connection
$conn = null;

echo $responseMessage; // Return the response message to the AJAX request
?>
