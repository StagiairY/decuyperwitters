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
        // Fetch categories grouped by main_category_id and ordered by order_column
        $query = "SELECT main_category_id, id, name, image_path, order_column, archived FROM categories ORDER BY main_category_id, order_column";
        $result = $conn->query($query);

        if ($result) {
            // Initialize an array to store categories grouped by main_category_id
            $groupedCategories = [];

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                // Check if the main_category_id is already a key in the groupedCategories array
                if (!array_key_exists($row['main_category_id'], $groupedCategories)) {
                    // If not, create a new array for that main_category_id
                    $groupedCategories[$row['main_category_id']] = [];
                }

                // Add the category details to the array corresponding to its main_category_id
                $groupedCategories[$row['main_category_id']][] = $row;
            }

            // Iterate through each main_category_id and its associated categories
            foreach ($groupedCategories as $mainCategoryId => $categories) {
                echo '<div class="row">';
                foreach ($categories as $category) {
                    echo '<div class="col-md-4 mb-4">';
                    echo '<div class="card position-relative';

                    // Check if the category is archived and add a class for styling
                    if ($category['archived']) {
                        echo ' archived-category">';
                    } else {
                        echo '">';
                    }

                    // Display the image if image_path is available
                    if (!empty($category['image_path'])) {
                        echo '<img src="/' . $category['image_path'] . '" class="card-img-top" alt="' . $category['name'] . ' Image">';

                        // Add "gearchiveerd" text in the top-right corner if the category is archived
                        if ($category['archived']) {
                            echo '<div class="position-absolute top-0 end-0 p-2  text-white rounded" style="right: 0; ">gearchiveerd</div>';
                        }


                    } else {
                        // Provide a default image or handle the case where image_path is empty
                        echo '<img src="default_image.jpg" class="card-img-top" alt="' . $category['name'] . ' Image">';
                    }

                    // Add transparent text with order_column number
                    echo '<div class="position-absolute top-0 start-0 px-2 py-1 bg-dark text-white rounded">' . $category['order_column'] . '</div>';

                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $category['name'] . '</h5>';
                    echo '<a href="includes/edit_category.php?id=' . $category['id'] . '" class="btn btn-outline-warning mr-3"><i class="fas fa-edit"></i> Edit</a>';
                    echo '<a href="includes/edit_category.php?id=' . $category['id'] . '" class="btn btn-outline-secondary "><i class="fas fa-file "></i> Open </a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
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
