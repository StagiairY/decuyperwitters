<?php
// includes/db.php

$host = "localhost";
$dbname = "dcw";
$db_user = "root"; // Change this to your MySQL username
$db_password = ""; // Change this to your MySQL password

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $db_user, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
