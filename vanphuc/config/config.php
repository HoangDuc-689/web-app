<?php
// Database configuration
define('DB_HOST', getenv('DB_HOST') ?: 'your_server_name.database.windows.net');
define('DB_NAME', getenv('DB_NAME') ?: 'your_database_name');
define('DB_USER', getenv('DB_USER') ?: 'your_username');
define('DB_PASS', getenv('DB_PASS') ?: 'your_password');

// PDO connection
try {
    $dsn = "sqlsrv:server=" . DB_HOST . ";Database=" . DB_NAME;
    $conn = new PDO($dsn, DB_USER, DB_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
