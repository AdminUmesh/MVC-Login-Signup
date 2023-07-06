<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Table name
$tableName = "users";

// Check if table exists
$tableExists = $conn->query("SHOW TABLES LIKE '$tableName'")->num_rows > 0;

// If table does not exist, create it
if (!$tableExists) {
    $sql = "CREATE TABLE $tableName (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(255),
        last_name VARCHAR(255),
        gender VARCHAR(255),
        email VARCHAR(255),
        username VARCHAR(255),
        password VARCHAR(255),
        type VARCHAR(10)
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table $tableName created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}

// Close the connection
?>