<?php
include "includes/auth.php";
include "includes/db.php";
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
<body>
<!-- HEADER -->
<header class="header" id="header" style="height: 4rem">
    <nav class="nav container">
        <a href="../index.php" class="nav__logo">
            <img src="../images/part1/decuyperwitters.png" width="60" alt="Logo" class="img-fluid">
        </a>
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list"></ul>
            <div class="nav__close" id="nav-close">
                <i class="ri-close-line"></i>
            </div>
        </div>
        <form id="logout-form" action="includes/logout.php" method="post">
            <button type="submit" class="btn btn-logout">
                <i class="ri-logout-box-line"></i>
                <span>Logout</span>
            </button>
        </form>
        <div class="nav__toggle" id="nav-toggle">
            <i class="ri-menu-line"></i>
        </div>
    </nav>
</header>

<!-- MAIN -->
<main class="main">
    <div class="container">
        <div class="hidden-true" style="height: 100px"></div>

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
                echo '<div class="col-md-3 mb-4">';
                echo '<div class="card position-relative';

                // Check if the category is archived and add a class for styling
                if ($row['archived']) {
                    echo ' archived-category">';
                } else {
                    echo '">';
                }

                // Display the image if image_path is available
                echo '<img src="' . (!empty($row['image_path']) ? '/' . $row['image_path'] : 'default_image.jpg') . '" class="card-img-top" style="max-height: 200px;" alt="' . $row['name'] . ' Image">';

                // Display order_column
                echo '<div class="position-absolute top-0 start-0 px-2 py-1 bg-dark text-white rounded">' . $row['order_column'] . '</div>';

                // Display card body
                echo '<div class="card-body text-center">';
                echo '<h5 class="card-title">' . $row['name'] . '</h5>';
                echo '<div class="btn-group" role="group" aria-label="Category Actions">';
                echo '<a href="includes/edit_category.php?id=' . $row['id'] . '" class="btn btn-outline-dark  w-50"><i class="fas fa-edit"></i> </a>';
                echo '<a href="includes/edit_page.php?id=' . $row['id'] . '" class="btn btn-outline-secondary  w-50"><i class="fas fa-file"></i> </a>';


                if ($row['archived']) {
                    // Unarchive button form
                    echo '<form action="includes/update_category.php" method="post" class="archive-form">';
                    echo '<input type="hidden" name="category_id" value="' . $row['id'] . '">';
                    echo '<input type="hidden" name="category_name" value="' . $row['name'] . '">';
                    echo '<input type="hidden" name="category_img" value="' . $row['image_path'] . '">';
                    echo '<input type="hidden" name="order_column" value="' . $row['order_column'] . '">';
                    echo '<button type="submit" name="unarchive" class="btn btn-outline-success"><i class="fas fa-archive"></i></button>';
                    echo '</form>';
                } else {
                    // Archive button form
                    echo '<form action="includes/update_category.php" method="post" class="archive-form">';
                    echo '<input type="hidden" name="category_id" value="' . $row['id'] . '">';
                    echo '<input type="hidden" name="category_name" value="' . $row['name'] . '">';
                    echo '<input type="hidden" name="category_img" value="' . $row['image_path'] . '">';
                    echo '<input type="hidden" name="order_column" value="' . $row['order_column'] . '">';
                    echo '<button type="submit" name="archive" class="btn btn-outline-danger"><i class="fas fa-archive"></i></button>';
                    echo '</form>';
                }

                echo '</div>'; // Closing btn-group
                echo '</div>'; // Closing card-body
                echo '</div>'; // Closing card
                echo '</div>'; // Closing col-md-3

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
</main>

<!-- MAIN JS -->
<script src="assets/js/main.js"></script>
<!-- Add this script tag to include SortableJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
<script>
    function showEditForm(categoryId) {
        var editForm = document.getElementById('edit-form-' + categoryId);
        editForm.style.display = (editForm.style.display === 'none' || editForm.style.display === '') ? 'block' : 'none';
    }
</script>
</body>
</html>
