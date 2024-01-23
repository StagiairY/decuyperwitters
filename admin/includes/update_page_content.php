<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pageContentId = isset($_POST['page_content_id']) ? $_POST['page_content_id'] : null;

    $category_id = isset($_GET['category_id']) ? $_GET['category_id'] : 1; // Default to 1 if not provided

    if ($pageContentId) {
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $db_user, $db_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Fetch the existing image path
            $fetchImageQuery = "SELECT image_path FROM page_content WHERE id = :page_content_id";
            $fetchImageStatement = $pdo->prepare($fetchImageQuery);
            $fetchImageStatement->bindParam(':page_content_id', $pageContentId);
            $fetchImageStatement->execute();
            $existingImagePath = $fetchImageStatement->fetchColumn();

            // Update page content
            $updateQuery = "UPDATE page_content SET title = :title, content = :content";
            $updateParams = [
                ':title' => $_POST['editPageTitle'],
                ':content' => $_POST['editPageContent']
            ];

            // Handle image update if a new image is provided
            if ($_FILES['editPageImage']['size'] > 0) {
                $uploadDir = $_SERVER['DOCUMENT_ROOT'] . "/images/uploads/";
                $uploadDirServer = "/images/uploads/";

                // Remove the old image if it exists
                if (!empty($existingImagePath) && file_exists($_SERVER['DOCUMENT_ROOT'] . $existingImagePath)) {
                    unlink($_SERVER['DOCUMENT_ROOT'] . $existingImagePath);
                }

                $imageFileName = basename($_FILES['editPageImage']['name']);
                $imagePath = $uploadDir . $imageFileName;

                move_uploaded_file($_FILES['editPageImage']['tmp_name'], $imagePath);
                $updateQuery .= ", image_path = :image_path";
                $updateParams[':image_path'] = $uploadDirServer . $imageFileName;
            }

            $updateQuery .= " WHERE id = :page_content_id";
            $updateParams[':page_content_id'] = $pageContentId;

            $updateStatement = $pdo->prepare($updateQuery);
            $updateStatement->execute($updateParams);

            // Redirect back to the admin page
            header("Location: edit_page.php?id=" . $category_id);
            exit();
        } catch (PDOException $e) {
            echo "Error updating page content: " . $e->getMessage();
            die();
        }
    } else {
        echo "Invalid parameters for updating page content.";
        die();
    }
} else {
    echo "Invalid request method.";
    die();
}
?>
