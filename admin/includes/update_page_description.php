<?php
include "auth.php";
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $categoryId = isset($_POST['category_id']) ? $_POST['category_id'] : null;
    $newTitle = isset($_POST['editPageTitle']) ? $_POST['editPageTitle'] : null;
    $newDescription = isset($_POST['editPageDescription']) ? $_POST['editPageDescription'] : null;

    if ($categoryId && $newTitle && $newDescription) {
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $db_user, $db_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }

        $updatePageQuery = "UPDATE page_description SET title = :new_title, description = :new_description WHERE category_id = :category_id";
        $updatePageStatement = $pdo->prepare($updatePageQuery);
        $updatePageStatement->bindParam(':new_title', $newTitle);
        $updatePageStatement->bindParam(':new_description', $newDescription);
        $updatePageStatement->bindParam(':category_id', $categoryId);

        try {
            $updatePageStatement->execute();
            // Redirect back to the page with the updated title and description
            header("Location: edit_page.php?id=" . $categoryId);
            exit();
        } catch (PDOException $e) {
            echo "Error updating page details: " . $e->getMessage();
            die();
        }
    } else {
        echo "Error: Invalid data received.";
        die();
    }
} else {
    // Redirect to an error page or handle the request accordingly
    header("Location: error_page.php");
    exit();
}
?>
