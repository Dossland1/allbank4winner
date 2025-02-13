<?php
$host = "localhost";
$dbname = "allbank";
$user = "root";
$pass = "";

// Connect to PostgreSQL
try {
    $conn = new PDO("pgsql:host=$host;dbname=dbname" $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERR_EXCEPTION);
    echo "Connected to database!";
} catch (PDOException $e) {
    echo "Connected failed: " . $e->getMessage();
}
?>
