<?php
// update_product.php

include "auth.php";
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input to prevent SQL injection
    $productId = filter_var($_POST["product_id"], FILTER_SANITIZE_NUMBER_INT);
    $productName = filter_var($_POST["editProductName"], FILTER_SANITIZE_STRING);
    $productWeight = filter_var($_POST["editProductWeight"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $productPrice = filter_var($_POST["editProductPrice"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $productDescription = filter_var($_POST["editProductDescription"], FILTER_SANITIZE_STRING);

    // Retrieve category ID from the URL
    $category_id = isset($_GET['category_id']) ? $_GET['category_id'] : 1; // Default to 1 if not provided

    try {
        // Fetch the old image path
        $getOldImagePathQuery = "SELECT image_path FROM products WHERE id = :id";
        $stmtOld = $pdo->prepare($getOldImagePathQuery);
        $stmtOld->bindParam(':id', $productId);
        $stmtOld->execute();
        $oldImagePath = $stmtOld->fetchColumn();

        // Delete the old image file
        if ($oldImagePath && file_exists($_SERVER['DOCUMENT_ROOT'] . $oldImagePath)) {
            unlink($_SERVER['DOCUMENT_ROOT'] . $oldImagePath);
        }

        // Handle image update
        $uploadDir = $_SERVER['DOCUMENT_ROOT'] . "/images/uploads/"; // Change this to your desired directory
        $uploadDirServer = "/images/uploads/";
        $targetFile = $uploadDir . basename($_FILES["editProductImage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["editProductImage"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "Error: File is not an image.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["editProductImage"]["size"] > 500000) {
            echo "Error: File is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Error: Only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Error: File was not uploaded.";
        } else {
            // Try to upload the file
            if (move_uploaded_file($_FILES["editProductImage"]["tmp_name"], $targetFile)) {
                // File uploaded successfully, now store the image path in the database
                $imagePath = $uploadDirServer . basename($_FILES["editProductImage"]["name"]);

                // Update product details in the database
                $updateQuery = "UPDATE products SET name = :name, weight = :weight, price = :price, description = :description, image_path = :image_path WHERE id = :id";
                $updateStatement = $pdo->prepare($updateQuery);
                $updateStatement->bindParam(':id', $productId);
                $updateStatement->bindParam(':name', $productName);
                $updateStatement->bindParam(':weight', $productWeight);
                $updateStatement->bindParam(':price', $productPrice);
                $updateStatement->bindParam(':description', $productDescription);
                $updateStatement->bindParam(':image_path', $imagePath);
                $updateStatement->execute();

                // Redirect back to the edit page with the category ID
                header("Location: edit_page.php?id=" . $category_id);
                exit();
            } else {
                echo "Error: There was an error uploading your file.";
            }
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
