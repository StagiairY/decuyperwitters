<!-- admin_dashboard.php -->
<?php
include "includes/auth.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #fff;
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
    </style>
</head>

<body>
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Admin Dashboard</h1>
        <a href="includes/logout.php" class="logout-link">Logout</a>
    </div>
    <ul class="nav nav-pills">
<!--        <li class="nav-item">-->
<!--            <a class="nav-link" href="manage_categories.php">Manage Categories</a>-->
<!--        </li>-->
        <li class="nav-item">
            <a class="nav-link" href="manage_products.php">Manage Products</a>
        </li>
    </ul>
</div>

<!-- Bootstrap JS and Popper.js (Required for Bootstrap features) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
