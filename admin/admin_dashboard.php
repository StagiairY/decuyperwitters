<?php
include "includes/auth.php";
?>


<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<style>
    /* styles.css */

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .container {
        max-width: 800px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
    }

    a {
        display: block;
        margin-bottom: 10px;
        padding: 10px;
        text-align: center;
        background-color: #007BFF;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    a:hover {
        background-color: #0056b3;
    }

</style>

<!-- admin_dashboard.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<div class="container">
    <h1>Admin Dashboard</h1>
    <!-- Add navigation links/buttons for managing categories and products -->
    <a href="manage_categories.php">Manage Categories</a>
    <a href="manage_products.php">Manage Products</a>
    <a href="includes/logout.php">Logout</a>
</div>
</body>

</html>


</html>
