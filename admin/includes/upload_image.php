<?php
include "auth.php";
include "db.php";

// Initialize session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["new_category_img"]) && isset($_POST["category_id"]))  {

    $category_id = $_POST["category_id"];
    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . "/images/Diensten/";
    $uploadDirServer = "images/Diensten/";

    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $fileTmpName = $_FILES["new_category_img"]["tmp_name"];
    $fileName = basename($_FILES["new_category_img"]["name"]);
    $targetFilePath = $uploadDir . $fileName;

    $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    $allowedExtensions = ["jpg", "jpeg", "png", "gif"];

    if (in_array($imageFileType, $allowedExtensions)) {
        // Remove the previous file
        try {
            $getPreviousImagePathQuery = "SELECT image_path FROM categories WHERE id = :id";
            $stmtPrevious = $conn->prepare($getPreviousImagePathQuery);
            $stmtPrevious->bindParam(':id', $category_id);
            $stmtPrevious->execute();
            $previousImagePath = $stmtPrevious->fetchColumn();

            if ($previousImagePath && file_exists($_SERVER['DOCUMENT_ROOT'] . $previousImagePath)) {
                unlink($_SERVER['DOCUMENT_ROOT'] . $previousImagePath);
            }
        } catch (PDOException $e) {
            die("Error removing previous file: " . $e->getMessage());
        }

        // Rename the new file with the category name
        $newFileName = $category_id . "_" . strtolower(str_replace(" ", "_", $category['name'])) . "." . $imageFileType;
        $targetFilePath = $uploadDir . $newFileName;

        if (move_uploaded_file($fileTmpName, $targetFilePath)) {
            try {
                // Use relative path for image_path
                $relativeImagePath = $uploadDirServer . $newFileName;

                $updateImageQuery = "UPDATE categories SET image_path = :image_path WHERE id = :id";
                $stmt = $conn->prepare($updateImageQuery);
                $stmt->bindParam(':image_path', $relativeImagePath);
                $stmt->bindParam(':id', $category_id);

                $stmt->execute();

                header("Location: edit_category.php?id=" . $category_id);
                exit();
            } catch (PDOException $e) {
                die("Update failed: " . $e->getMessage());
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
    }
} else {
    $category_id = $category['id'];
    header("Location: edit_category.php?id=" . $category_id);
    exit();
}
?>
