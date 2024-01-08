<!-- manage_categories.php -->

<?php
include "includes/db.php";


// Fetch all categories from the database
$query = "SELECT * FROM categories";
$result = $conn->query($query);

// Check for query success
if ($result) {
    // Fetch associative array
    $categories = $result->fetchAll(PDO::FETCH_ASSOC);
} else {
    echo "Error fetching categories: " . $conn->error;
    // Handle the error appropriately
}

// Close the database connection
$conn = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Categories</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>

        <style>
         .category-card * {
             margin-bottom: 20px;
             cursor: pointer;
             transition: transform 0.2s;
         }

        .category-card:hover {
            transform: scale(1.05);
        }

        .category-title {
            text-align: center;
        }
    </style>

</head>

<body>
<?php include "admin_dashboard.php"; ?>

<div class="container">
    <h2 class="text-center mb-4">Manage Categories</h2>

    <div class="row">
        <?php foreach ($categories as $category) : ?>
            <div class="col-md-4">
                <div class="card category-card" data-toggle="modal" data-target="#categoryModal<?php echo $category['id']; ?>">
                    <div class="card-body">
                        <h5 class="card-title category-title"><?php echo $category['name']; ?></h5>
                    </div>
                </div>
            </div>

            <!-- Modal for displaying products -->
            <div class="modal fade" id="categoryModal<?php echo $category['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="categoryModalLabel"><?php echo $category['name']; ?> Products</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table product-table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                // Re-establish the database connection
                                include "includes/db.php";

                                // Fetch products for the current category
                                $productQuery = "SELECT * FROM products WHERE category_id = :category_id";
                                $productStatement = $conn->prepare($productQuery);
                                $productStatement->bindParam(':category_id', $category['id']);
                                $productStatement->execute();
                                $products = $productStatement->fetchAll(PDO::FETCH_ASSOC);

                                // Display products in the table
                                foreach ($products as $product) : ?>
                                    <tr>
                                        <td><?php echo $product['id']; ?></td>
                                        <td><?php echo $product['name']; ?></td>
                                        <td><?php echo $product['description']; ?></td>
                                        <td><?php echo $product['price']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>

                            <!-- Button to trigger add product form -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProductModal<?php echo $category['id']; ?>">
                                Add Product
                            </button>

                            <!-- Modal for adding products -->
                            <div class="modal fade" id="addProductModal<?php echo $category['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addProductModalLabel">Add Product to <?php echo $category['name']; ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Form for adding products -->
                                            <form action="includes/add_product.php" method="post">
                                                <div class="form-group">
                                                    <label for="productName">Product Name</label>
                                                    <input type="text" class="form-control" id="productName" name="productName" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="productDescription">Product Description</label>
                                                    <textarea class="form-control" id="productDescription" name="productDescription"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="productPrice">Product Price</label>
                                                    <input type="number" class="form-control" id="productPrice" name="productPrice" step="0.01" required>
                                                </div>
                                                <input type="hidden" name="categoryId" value="<?php echo $category['id']; ?>">
                                                <button type="submit" class="btn btn-primary">Add Product</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Bootstrap JS and Popper.js (Required for Bootstrap features) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>