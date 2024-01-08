<?php
// includes/db.php

$host = "localhost";
$port = "5432"; // For PostgreSQL
$dbname = "decuyperwitters";
$user = "postgres";
$password = "yunus";

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
