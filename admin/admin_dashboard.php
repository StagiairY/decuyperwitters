<!-- admin_dashboard.php -->
<?php
include "includes/auth.php";
include "includes/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <style>
        body {
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        h1 {
            color: #007BFF;
            margin-bottom: 30px;
        }

        .nav-link {
            color: #007BFF;
            cursor: pointer;
        }

        .nav-link:hover {
            text-decoration: underline;
        }

        .logout-link {
            color: #dc3545;
            cursor: pointer;
        }

        .logout-link:hover {
            text-decoration: none;
            color: #a71d2a;
        }

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

        .edit-link {
            color: #28a745;
            cursor: pointer;
        }

        .edit-link:hover {
            text-decoration: none;
            color: #218838;
        }

        .edit-form {
            display: none;
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>


<body>
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <!-- Add your logo image here -->
        <img src="/images/part1/decuyperwitters.png" alt="DCW Logo" height="50" width="50">
        <h1>Admin Dashboard</h1>
        <a href="includes/logout.php" class="logout-link">Logout</a>
    </div>






    <ul class="nav nav-pills">
        <!-- <li class="nav-item">
            <a class="nav-link" href="manage_categories.php">Manage Categories</a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link" href="manage_products.php">Manage Products</a>
        </li>
    </ul>

    <div class="container">
        <!-- Your existing admin dashboard code -->
        <!-- ... -->

        <?php
        // Fetch categories joined with main_category table, ordered by main_category_id and order_column
        $query = "SELECT c.id, c.name, c.image_path, c.order_column, c.archived, c.main_category_id, mc.name as main_category_name
              FROM categories c
              INNER JOIN main_category mc ON c.main_category_id = mc.id
              ORDER BY c.main_category_id, c.order_column";

        $result = $conn->query($query);

        if ($result) {
            // Initialize variables to keep track of the current main category
            $currentMainCategory = null;

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                // Check if the main category has changed
                if ($currentMainCategory !== $row['main_category_id']) {
                    // Display the main category name as a centered title
                    echo '<div class="row">';
                    echo '<div class="col-md-12 text-center"><h2>' . $row['main_category_name'] . '</h2></div>';
                    $currentMainCategory = $row['main_category_id'];
                }

                // Display each category within the main category
                echo '<div class="col-md-3 mb-4">'; // Adjust the column size as per your preference (e.g., col-md-3 for 4 categories in a row)
                echo '<div class="card position-relative';

                // Check if the category is archived and add a class for styling
                if ($row['archived']) {
                    echo ' archived-category">';
                } else {
                    echo '">';
                }

                // Display the image if image_path is available
                if (!empty($row['image_path'])) {
                    echo '<img src="/' . $row['image_path'] . '" class="card-img-top" style="max-height: 200px;" alt="' . $row['name'] . ' Image">';
                } else {
                    echo '<img src="default_image.jpg" class="card-img-top" style="max-height: 200px;" alt="' . $row['name'] . ' Image">';
                }

                // Display order_column
                echo '<div class="position-absolute top-0 start-0 px-2 py-1 bg-dark text-white rounded">' . $row['order_column'] . '</div>';

                // Display card body
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row['name'] . '</h5>';
                echo '<a href="includes/edit_category.php?id=' . $row['id'] . '" class="btn btn-outline-warning mr-3"><i class="fas fa-edit"></i> Edit</a>';
                echo '<a href="includes/edit_category.php?id=' . $row['id'] . '" class="btn btn-outline-secondary "><i class="fas fa-file "></i> Open </a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';

                // Close the row after every four categories
                if ($currentMainCategory !== null && $result->rowCount() % 4 == 0) {
                    echo '</div>';
                    $currentMainCategory = null;
                }
            }

            // Close the last row if there are any categories
            if ($currentMainCategory !== null) {
                echo '</div>';
            }
        }
        ?>
    </div>


<script>
    function showEditForm(categoryId) {
        var editForm = document.getElementById('edit-form-' + categoryId);
        editForm.style.display = (editForm.style.display === 'none' || editForm.style.display === '') ? 'block' : 'none';
    }
</script>
</body>
</html>
