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
    <link rel="stylesheet" href="admin/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            /*background: url('/images/admin/pferde-hutte.jpg') no-repeat center center fixed;*/
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Change the background color and opacity as needed */
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




