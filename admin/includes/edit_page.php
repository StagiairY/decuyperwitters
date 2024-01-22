<?php
include "auth.php";
include "db.php";

// Fetch category details based on the ID from the URL
$categoryId = isset($_GET['id']) ? $_GET['id'] : null;

if ($categoryId) {
    // Make sure to include the database connection code here
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $db_user, $db_password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }

    $categoryQuery = "SELECT id, name, image_path FROM categories WHERE id = :id";
    $categoryStatement = $pdo->prepare($categoryQuery);
    $categoryStatement->bindParam(':id', $categoryId);

    try {
        $categoryStatement->execute();
        $category = $categoryStatement->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error fetching category details: " . $e->getMessage();
        die();
    }

    // Check if $category is an array before accessing its elements
    if (is_array($category)) {
        // Fetch products, page content, and description for the selected category
        $productsQuery = "SELECT id, name, weight, price, description, image_path FROM products WHERE category_id = :category_id";
        $productsStatement = $pdo->prepare($productsQuery);
        $productsStatement->bindParam(':category_id', $categoryId);

        try {
            $productsStatement->execute();
            $products = $productsStatement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error fetching products: " . $e->getMessage();
            die();
        }

        $pageContentQuery = "SELECT id, title, content, image_path FROM page_content WHERE category_id = :category_id";
        $pageContentStatement = $pdo->prepare($pageContentQuery);
        $pageContentStatement->bindParam(':category_id', $categoryId);

        try {
            $pageContentStatement->execute();
            $pageContent = $pageContentStatement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error fetching page content: " . $e->getMessage();
            die();
        }

        $pageDescriptionQuery = "SELECT id, title, description FROM page_description WHERE category_id = :category_id";
        $pageDescriptionStatement = $pdo->prepare($pageDescriptionQuery);
        $pageDescriptionStatement->bindParam(':category_id', $categoryId);

        try {
            $pageDescriptionStatement->execute();
            $pageDescription = $pageDescriptionStatement->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error fetching page description: " . $e->getMessage();
            die();
        }
    } else {
        echo "Error: Invalid category data.";
        die();
    }
} else {
    // Handle error or redirect to the admin page
    header("Location: admin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <!-- Remix Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <!-- CSS Styles -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Admin Dashboard</title>
</head>

<main class="container mt-5">
    <h2>Edit Category: <?php echo $category['name']; ?></h2>

    <!-- Button to trigger modal for adding new product -->
    <button type="button" class="btn btn-success mt-3" data-toggle="modal" data-target="#addProductModal">
        Add New Product
    </button>

    <!-- Add Product Modal -->
    <!-- Add Product Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Your form for adding a new product -->
                    <!-- Your form for adding a new product -->
                    <form action="add_product.php?category_id=<?php echo $categoryId; ?>" method="POST" enctype="multipart/form-data">
                        <!-- Add your form fields here, for example: -->
                        <div class="form-group">
                            <label for="productName">Product Name</label>
                            <input type="text" class="form-control" id="productName" name="productName" required>
                        </div>
                        <div class="form-group">
                            <label for="productDescription">Product Description</label>
                            <textarea class="form-control" id="productDescription" name="productDescription" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="productWeight">Product Weight (kg)</label>
                            <input type="number" class="form-control" id="productWeight" name="productWeight" required>
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Product Price</label>
                            <input type="number" class="form-control" id="productPrice" name="productPrice" required>
                        </div>

                        <div class="form-group">
                            <label for="productImage">Product Image</label>
                            <input type="file" class="form-control-file" id="productImage" name="productImage" accept="image/*" required>
                        </div>

                        <input type="hidden" name="category_id" value="<?php echo $categoryId; ?>">

                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Display existing products -->
    <h3>Existing Products</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Product Name</th>
                <th>Weight</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['weight']; ?></td>
                    <td><?php echo $product['price']; ?></td>
                    <td><?php echo $product['description']; ?></td>
                    <td><?php echo $product['image_path']; ?></td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProductModal<?php echo $product['id']; ?>">
                            Edit
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#removeProductModal<?php echo $product['id']; ?>">
                            Remove
                        </button>
                    </td>
                </tr>


                <!-- Edit Product Modal -->
                <div class="modal fade" id="editProductModal<?php echo $product['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel<?php echo $product['id']; ?>" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editProductModalLabel<?php echo $product['id']; ?>">Edit Product: <?php echo $product['name']; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Form for editing product details -->
                                <form action="update_product.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                    <div class="form-group">
                                        <label for="editProductName">Product Name</label>
                                        <input type="text" class="form-control" id="editProductName" name="editProductName" value="<?php echo $product['name']; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="editProductWeight">Weight (kg)</label>
                                        <input type="number" class="form-control" id="editProductWeight" name="editProductWeight" value="<?php echo $product['weight']; ?>" min="0" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="editProductPrice">Price ($)</label>
                                        <input type="number" class="form-control" id="editProductPrice" name="editProductPrice" value="<?php echo $product['price']; ?>" min="0" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="editProductDescription">Description</label>
                                        <textarea class="form-control" id="editProductDescription" name="editProductDescription" rows="3" required><?php echo $product['description']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="editProductImage">Product Image</label>
                                        <input type="file" class="form-control-file" id="editProductImage" name="editProductImage">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Remove Product Modal -->
                <div class="modal fade" id="removeProductModal<?php echo $product['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="removeProductModalLabel<?php echo $product['id']; ?>" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="removeProductModalLabel<?php echo $product['id']; ?>">Remove Product: <?php echo $product['name']; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Form for removing product -->
                                <form action="remove_product.php" method="post">
                                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                    <input type="hidden" name="category_id" value="<?php echo $categoryId; ?>">
                                    <p>Are you sure you want to remove this product?</p>
                                    <button type="submit" class="btn btn-danger">Remove Product</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<!-- Bootstrap JS and other scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
