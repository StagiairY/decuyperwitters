<!-- login.php -->

<!-- login.php -->

<?php
session_start();

// Check if the user is already logged in, redirect to dashboard
if (isset($_SESSION['user_id'])) {
    header("Location: ../admin_dashboard.php");
    exit();
}

// Check login credentials
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to the database (assuming db.php is included)
    include "db.php";

    // Retrieve the hashed password from the database based on the provided username
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->execute();

    // Fetch the result into an associative array
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verify the password
    if ($result !== false) {
//        echo "SQL Query: " . $stmt->queryString . "<br>";
//        echo "Provided Username: " . $username . "<br>";
//        echo "Provided Password: " . $password . "<br>";
//        echo "Hashed Provided Password: " . password_hash($password, PASSWORD_DEFAULT) . "<br>";
//        echo "Database Hashed Password: " . $result['password_hash'] . "<br>";

        if (password_verify($password, $result['password'])) {
            // Authentication successful
            $_SESSION['user_id'] = $result['id'];
            header("Location: ../admin_dashboard.php");
            exit();
        } else {
            $error_message = "Invalid password";
        }
    } else {
        $error_message = "Invalid username";
    }

    $conn = null; // Close the database connection
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background: url('/images/admin/grass-with-clouds.jpg') no-repeat center center fixed;
            opacity: 0.9;
            background-size: cover;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }


        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;

        }

        h1 {
            color: #007BFF;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;

        }

        label {
            margin-top: 10px;
            color: #555;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>Login</h1>
    <!-- Display error message if authentication fails -->
    <?php if (isset($error_message)) : ?>
        <p class="error-message"><?php echo $error_message; ?></p>
    <?php endif; ?>
    <!-- Login form -->
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</div>
</body>

</html>
