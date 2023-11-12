<?php
class DB_Connection{
    // Database credentials
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "login";
    public $conn;
    
    public  function __construct()
    {
        // Create connection
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function Create_Table()
    {
        // Table name
        $tableName = "users";
        
        // Check if table exists
        $tableExists = $this->conn->query("SHOW TABLES LIKE '$tableName'")->num_rows > 0;
        
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
        
            if ($this->conn->query($sql) === TRUE) {
                echo "Table $tableName created successfully";
            } else {
                echo "Error creating table: " . $this->conn->error;
            }
        }
    } 
}

// Create an instance of the DB_Connection class
$DbConnection = new DB_Connection();

// Create the table
$DbConnection->Create_Table();