<?php
// Data Source Name (DSN) specifies the database type, host, and dbname
$dsn = "mysql:host=localhost;dbname=crud_pdo";

// Database username and password for authentication
$username = "root";
$password = "";

try {
    // Create a new instance of the PDO class for database connection
    $pdo = new PDO($dsn, $username, $password);

    // Set an attribute to handle errors by throwing exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //configure how PDO should handle errors
} catch (PDOException $e) {
    // If an exception (error) occurs, catch it and display an error message
    echo "Connection failed: " . $e->getMessage();
}
?>
