<?php
include "includes/db.php";

$query = "SELECT * FROM categories";
$result = $conn->query($query);

if ($result) {
    $categories = $result->fetchAll(PDO::FETCH_ASSOC);
} else {
    echo "Error fetching categories: " . $conn->error;
}

$conn = null;
?>

<?php include "admin_dashboard.php"; ?>


<h2 class="text-center mb-4">Manage Products</h2>

<div class="row">
    <?php foreach ($categories as $category) : ?>
        <div class="col-md-4 p-2 m-0">
            <div class="card category-card" data-toggle="modal"
                 data-target="#categoryModal<?php echo $category['id']; ?>">
                <div class="card-body">
                    <h5 class="card-title category-title"><?php echo $category['name']; ?></h5>
                </div>
            </div>
        </div>

        <div class="modal fade" id="categoryModal<?php echo $category['id']; ?>" tabindex="-1" role="dialog"
             aria-labelledby="categoryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="categoryModalLabel"><?php echo $category['name']; ?>
                            Products</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table product-table">
                            <thead>
                            <tr>
                                <!--                                    <th>ID</th>-->
                                <th>Name</th>
                                <th>Description</th>
                                <th>weight</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            include "includes/db.php";

                            if ($conn === null) {
                                die("Database connection failed");
                            }

                            $productQuery = "SELECT * FROM products WHERE category_id = :category_id";
                            $productStatement = $conn->prepare($productQuery);
                            $productStatement->bindParam(':category_id', $category['id']);
                            $productStatement->execute();
                            $products = $productStatement->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($products as $product) : ?>
                                <tr data-product-id="<?php echo $product['id']; ?>">
                                    <!--                                        <td>-->
                                    <?php //echo $product['id']; ?><!--</td>-->
                                    <td contenteditable="true"><?php echo $product['name']; ?></td>
                                    <td contenteditable="true"><?php echo $product['description']; ?></td>
                                    <td contenteditable="true"><?php echo $product['weight']; ?></td>
                                    <td contenteditable="true"><?php echo $product['price']; ?></td>
                                    <td>
                                            <span class="delete-product" data-product-id="<?php echo $product['id']; ?>"
                                                  style="cursor: pointer;">🗑</span>
                                    </td>
                                </tr>
                            <?php endforeach;

                            $conn = null;
                            ?>
                            </tbody>
                        </table>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#addProductModal<?php echo $category['id']; ?>">
                            <i class="fas fa-plus"></i>
                        </button>


                        <button type="button" class="btn btn-primary save-changes-btn">
                            <i class="fas fa-save"></i>
                        </button>

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            <i class="fas fa-times"></i>
                        </button>

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade addproductmodal" id="addProductModal<?php echo $category['id']; ?>" tabindex="-1"
             role="dialog"
             aria-labelledby="addProductModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addProductModalLabel">Add Product
                            to <?php echo $category['name']; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="productName<?php echo $category['id']; ?>">Product Name</label>
                                <input type="text" class="form-control"
                                       id="productName<?php echo $category['id']; ?>" name="productName" required>
                            </div>
                            <div class="form-group">
                                <label for="productDescription<?php echo $category['id']; ?>">Product
                                    Description</label>
                                <textarea class="form-control" id="productDescription<?php echo $category['id']; ?>"
                                          name="productDescription" style="height: 200px;"></textarea>

                            </div>
                            <div class="form-group">
                                <label for="productPrice<?php echo $category['id']; ?>">Product Price</label>
                                <input type="number" class="form-control"
                                       id="productPrice<?php echo $category['id']; ?>" name="productPrice"
                                       step="0.01" required>
                            </div>
                            <div class="form-group">
                                <label for="productWeight<?php echo $category['id']; ?>">Product Weight</label>
                                <input type="number" class="form-control"
                                       id="productWeight<?php echo $category['id']; ?>" name="productWeight"
                                       step="0.01" required>
                            </div>

                            <input type="hidden" id="categoryId<?php echo $category['id']; ?>"
                                   value="<?php echo $category['id']; ?>">
                            <button type="button" class="btn btn-primary add-product-btn">Add Product</button>
                        </form>
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

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>


    jQuery(document).ready(function ($) {
        $('.product-table td[contenteditable=true]').on('focus', function () {
            $(this).data('before', $(this).html());
        }).on('blur keyup paste', function () {
            if ($(this).data('before') !== $(this).html()) {
                $('.save-changes-btn').prop('disabled', false);
            } else {
                $('.save-changes-btn').prop('disabled', true);
            }
        });

        $('.save-changes-btn').click(function () {
            $('.product-table tr[data-product-id]').each(function () {
                var productId = $(this).data('product-id');
                var name = $(this).find('td:eq(1)').text();
                var description = $(this).find('td:eq(2)').text();
                var price = $(this).find('td:eq(4)').text();
                var weight = $(this).find('td:eq(3)').text();

                $.ajax({
                    type: 'POST',
                    url: 'includes/update_product.php',
                    data: {
                        productId: productId,
                        name: name,
                        description: description,
                        price: price,
                        weight: weight
                    },
                    success: function (response) {
                        console.log(response);
                    },
                    error: function (error) {
                        console.error('Error updating product: ' + error.statusText);
                    }
                });
            });

            $(this).prop('disabled', true);
        });

        $('.add-product-btn').click(function () {
            var categoryId = $(this).closest('.modal').find('form input[type=hidden]').val();
            var productName = $('#productName' + categoryId).val();
            var productDescription = $('#productDescription' + categoryId).val();
            var productPrice = $('#productPrice' + categoryId).val();
            var productWeight = $('#productWeight' + categoryId).val();


            // if (productName === '') {
            //     alert('Product Name cannot be empty.');
            //     return;
            // }
            //
            // if (productPrice === '') {
            //     alert('Product Price cannot be empty.');
            //     return;
            // }


            // Update this part of your add-product-btn click handler
            $.ajax({
                type: 'POST',
                url: 'includes/add_product.php',
                data: {
                    productName: productName,
                    productDescription: productDescription,
                    productPrice: productPrice,
                    categoryId: categoryId,
                    weight: productWeight
                },
                success: function (response) {
                    console.log(response);

                    // Update the product table dynamically
                    var newRow = '<tr data-product-id="' + response.productId + '">' +
                        '<td contenteditable="true">' + productName + '</td>' +
                        '<td contenteditable="true">' + productDescription + '</td>' +
                        '<td contenteditable="true">' + productWeight + '</td>' +
                        '<td contenteditable="true">' + productPrice + '</td>' +
                        '<td>' +
                        '<span class="delete-product" data-product-id="' + response.productId + '" style="cursor: pointer;">🗑</span>' +
                        '</td>' +
                        '</tr>';

                    $('.product-table tbody').append(newRow);


                },
                error: function (error) {
                    console.error('Error adding product: ' + error.statusText);
                }
            });


        });

    });
</script>

<script>
    jQuery(document).ready(function ($) {
        // ... (Existing code)

        // Add this block for handling the trash icon click event
        $('.delete-product').on('click', function () {
            var productId = $(this).data('product-id');

            // Ask for confirmation before deleting
            if (confirm('Are you sure you want to delete this product?')) {
                // Send AJAX request to delete the product
                $.ajax({
                    type: 'POST',
                    url: 'includes/delete_product.php', // Create this file to handle the deletion logic
                    data: {
                        productId: productId
                    },
                    success: function (response) {
                        console.log(response);
                        // Remove the row from the table on success
                        $('.product-table tr[data-product-id="' + productId + '"]').remove();
                    },
                    error: function (error) {
                        console.error('Error deleting product: ' + error.statusText);
                    }
                });
            }
        });
    });
</script>


</body>


</html>
