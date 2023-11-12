<?php
require('Model/DbConnection.php');
class Delete_Data{
    public $conn;
    
    public function __construct(){
        $DB_Connection_Instance=new DB_Connection();
        $this->conn=$DB_Connection_Instance->conn;
    }

    public function Delete_User(){
        $id = $_REQUEST['del'];
        $sql = "DELETE from users where id='" . $id . "'";

        if (mysqli_query($this->conn, $sql)) {
            include_once('View/LoginView.php');
        } else {
            echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($this->conn);
    }
}

// Create an instance of the Delete_Data class
$DbConnection = new Delete_Data();

// Call Delete_User method
$DbConnection->Delete_User();