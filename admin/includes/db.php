<?php
// includes/db.php

$host = "localhost";
$port = "5432"; // For PostgreSQL
$dbname = "decuyperwitters";
$db_user = "postgres";
$db_password = "yunus";

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$db_user;password=$db_password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
