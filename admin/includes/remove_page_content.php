<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pageContentId = isset($_POST['page_content_id']) ? $_POST['page_content_id'] : null;

    if ($pageContentId) {
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $db_user, $db_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Fetch the image path and category ID before deleting the page content
            $contentDetailsQuery = "SELECT image_path, category_id FROM page_content WHERE id = :page_content_id";
            $contentDetailsStatement = $pdo->prepare($contentDetailsQuery);
            $contentDetailsStatement->bindParam(':page_content_id', $pageContentId);
            $contentDetailsStatement->execute();
            $contentDetails = $contentDetailsStatement->fetch(PDO::FETCH_ASSOC);

            if ($contentDetails) {
                $imagePath = $contentDetails['image_path'];
                $categoryId = $contentDetails['category_id'];

                // Delete the image file
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . $imagePath)) {
                    unlink($_SERVER['DOCUMENT_ROOT'] . $imagePath);
                }

                // Delete the page content
                $deleteQuery = "DELETE FROM page_content WHERE id = :page_content_id";
                $deleteStatement = $pdo->prepare($deleteQuery);
                $deleteStatement->bindParam(':page_content_id', $pageContentId);
                $deleteStatement->execute();

                // Redirect back to the edit_page.php with the category ID
                header("Location: edit_page.php?id=" . $categoryId);
                exit();
            } else {
                echo "Error: Content details not found for the specified page content.";
                die();
            }
        } catch (PDOException $e) {
            echo "Error deleting page content: " . $e->getMessage();
            die();
        }
    } else {
        echo "Invalid parameters for removing page content.";
        die();
    }
} else {
    echo "Invalid request method.";
    die();
}
?>
