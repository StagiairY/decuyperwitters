<?php
include "db.php";  // Include the database connection script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form was submitted with the POST method

    $category_id = $_POST["category_id"];
    $category_name = $_POST["category_name"];
    $category_img = $_POST["category_img"];
    $archive = isset($_POST["archive"]) ? 1 : 0;
    $order_column = $_POST["order_column"];

    try {
        // Update the category information in the database
        $update_query = "UPDATE categories 
                         SET name = :name, 
                             image_path = :image_path, 
                             archived = :archived, 
                             order_column = :order_column 
                         WHERE id = :id";

        $stmt = $conn->prepare($update_query);
        $stmt->bindParam(':name', $category_name);
        $stmt->bindParam(':image_path', $category_img);
        $stmt->bindParam(':archived', $archive);
        $stmt->bindParam(':order_column', $order_column);
        $stmt->bindParam(':id', $category_id);
        $stmt->execute();

        // Redirect back to the admin dashboard after updating
        header("Location: ../admin_dashboard.php");
        exit();
    } catch (PDOException $e) {
        die("Update failed: " . $e->getMessage());
    }
}

// If the form wasn't submitted, redirect back to the admin dashboard
header("Location: ../admin_dashboard.php");
exit();
?>
