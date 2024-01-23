<?php
// includes/db.php
$host = "localhost";
$dbname = "dcw";
$db_user = "root";
$db_password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input to prevent SQL injection
    $pageTitle = filter_var($_POST["pageTitle"], FILTER_SANITIZE_STRING);
    $pageContent = filter_var($_POST["pageContent"], FILTER_SANITIZE_STRING);

    // Retrieve category ID from the URL
    $category_id = isset($_GET['category_id']) ? $_GET['category_id'] : 1; // Default to 1 if not provided

    try {
        // Handle image upload
        $uploadDir = $_SERVER['DOCUMENT_ROOT'] . "/images/uploads/"; // Change this to your desired directory
        $uploadDirServer = "/images/uploads/";

        // Check if the target directory exists, and create it if not
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true); // The third parameter ensures recursive directory creation
        }

        $fileTmpName = $_FILES["pageImage"]["tmp_name"];
        $fileName = basename($_FILES["pageImage"]["name"]);
        $targetFilePath = $uploadDir . $fileName;

        $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
        $allowedExtensions = ["jpg", "jpeg", "png", "gif"];

        if (in_array($imageFileType, $allowedExtensions)) {
            // Rename the new file with a unique name
            $newFileName = uniqid() . "_" . strtolower(str_replace(" ", "_", $pageTitle)) . "." . $imageFileType;
            $targetFilePath = $uploadDir . $newFileName;

            if (move_uploaded_file($fileTmpName, $targetFilePath)) {
                // File uploaded successfully, now store the image path in the database
                $imagePath = $uploadDirServer . $newFileName;

                // Insert new page content into the database
                $query = "INSERT INTO page_content (category_id, title, content, image_path) VALUES (:category_id, :title, :content, :image_path)";
                $statement = $pdo->prepare($query);
                $statement->bindParam(':category_id', $category_id);
                $statement->bindParam(':title', $pageTitle);
                $statement->bindParam(':content', $pageContent);
                $statement->bindParam(':image_path', $imagePath);
                $statement->execute();

                // Redirect back to the admin page
                header("Location: edit_page.php?id=" . $category_id);
                exit();
            } else {
                echo "Error: There was an error uploading your file.";
            }
        } else {
            echo "Error: Only JPG, JPEG, PNG & GIF files are allowed.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
