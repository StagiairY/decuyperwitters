<?php
include "auth.php";
include "db.php";

// Check if category ID is provided in the URL
if (isset($_GET['id'])) {
    $categoryId = $_GET['id'];

    try {
        // Establish a new PDO connection (replace with your connection details)
        $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $db_user, $db_password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Fetch category details including new fields
        $query = "SELECT id, name, image_path, archived, order_column FROM categories WHERE id = :category_id";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':category_id', $categoryId);
        $statement->execute();
        $category = $statement->fetch(PDO::FETCH_ASSOC);

        if (!$category) {
            die("Category not found");
        }
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
} else {
    die("Category ID not provided");
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category: <?php echo $category['name']; ?></title>
    <!-- Add Bootstrap CSS links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add your custom styles if needed -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            color: #007BFF;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="mt-3">
        <a href="../admin_dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
    </div>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h1 class="mb-0 text-white"><?php echo $category['name']; ?></h1>
        </div>
        <div class="card-body">

            <form method="post" action="update_category.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="category-name">Category Name:</label>
                    <input type="text" class="form-control" id="category-name" name="category_name" value="<?php echo $category['name']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="category-img">Category Image:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="category-img" name="category_img" value="<?php echo $category['image_path']; ?>" readonly>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#imageUploadModal">Upload</button>
                        </div>
                    </div>
                    <img src="/<?php echo $category['image_path']; ?>" alt="<?php echo $category['name']; ?>" class="img-fluid mt-2" style="max-height: 200px;">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="archive" name="archive" <?php echo ($category['archived'] ? 'checked' : ''); ?>>
                    <label class="form-check-label" for="archive">
                        Archive Category
                    </label>
                </div>
                <div class="form-group">
                    <label for="order-column">Order Number:</label>
                    <input type="number" class="form-control" id="order-column" name="order_column" value="<?php echo $category['order_column']; ?>" required>
                </div>
                <input type="hidden" name="category_id" value="<?php echo $category['id']; ?>">
                <button type="submit" class="btn btn-primary">Update Category</button>


            </form>
        </div>
    </div>

    <!-- Image Upload Modal -->
    <div class="modal fade" id="imageUploadModal" tabindex="-1" role="dialog" aria-labelledby="imageUploadModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageUploadModalLabel">Upload Category Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Your image upload form goes here -->
                    <form method="post" action="upload_image.php" enctype="multipart/form-data" >
                        <!-- Your form inputs go here, including the file input -->
                        <input type="file" name="new_category_img">
                        <input type="hidden" name="category_id" value="<?php echo $category['id']; ?>">

                        <button type="submit">Upload Image</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Add Bootstrap JS and other scripts here -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

