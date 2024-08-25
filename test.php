<?php
// Database configuration
$host = 'localhost';
$port = '6034';
$dbname = 'app_db';
$username = 'root';
$password = 'auth_app_pwd';

// Data Source Name (DSN)
$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";

try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $username, $password);

    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connection successful!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "\n";
}
?>